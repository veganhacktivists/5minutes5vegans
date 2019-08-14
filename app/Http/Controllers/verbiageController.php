<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Traits\KnowsVerbiages;
use App\Verbiage;

class VerbiageController extends Controller
{

    const verbiageRules = [
        'title' => 'required',
        'icon' => 'required|regex:/^fa[a-z]? fa(-[a-z]+)+$/',
        'message' => 'required',
    ];

    public function store( Request $request ) {

        $data = $request->validate($this::verbiageRules);
        $verbiage = Auth::user()->verbiages()->create($data);

        return response()->json( [ 'success' => true, 'id' => $verbiage->id ] );
    }

    public function update( Request $request, Verbiage $verbiage ) {

        $data = $request->validate($this::verbiageRules);
        $verbiage->update( $data );

        return response()->json( [ 'success' => true ] );
    }

    public function destroy( Verbiage $verbiage ) {

        $verbiage->delete();

        return response()->json( [ 'success' => true ] );

    }

}
