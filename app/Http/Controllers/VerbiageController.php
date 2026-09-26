<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Verbiage;

class VerbiageController extends Controller
{

    const verbiageRules = [
        'title' => 'required|string|max:50',
        'icon' => 'required|regex:/^fa[a-z]? fa(-[a-z0-9]+)+$/',
        'body' => 'required|string|max:1000',
    ];

    const MAX_PER_USER = 50;

    public function store( Request $request ) {
        abort_if(
            Auth::user()->verbiages()->count() >= self::MAX_PER_USER,
            422,
            __('You can save up to :count messages.', ['count' => self::MAX_PER_USER]),
        );

        $data = $request->validate($this::verbiageRules);
        $verbiage = Auth::user()->verbiages()->create($data);

        return response()->json( [ 'success' => true, 'id' => $verbiage->id ] );
    }

    public function update( Request $request, Verbiage $verbiage ) {

        abort_unless( (int) $verbiage->user_id === (int) Auth::id(), 403 );

        $rules = $this::verbiageRules;
        // Titles saved before the 50-character limit can stay as they are
        if ($request->input('title') === $verbiage->title) {
            $rules['title'] = 'required|string|max:255';
        }

        $data = $request->validate($rules);
        $verbiage->update( $data );

        return response()->json( [ 'success' => true ] );
    }

    public function destroy( Verbiage $verbiage ) {

        abort_unless( (int) $verbiage->user_id === (int) Auth::id(), 403 );

        $verbiage->delete();

        return response()->json( [ 'success' => true ] );

    }

}
