<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    // Google's documented test secret. It accepts every token, so on the live
    // site it means the real secret was never set.
    private const GOOGLE_TEST_SECRET = '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe';

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('throttle:register')->only('register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $rules = [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ];

        // Without a secret every check would fail and nobody could register.
        if (config('captcha.secret')) {
            $rules['g-recaptcha-response'] = ['required', 'captcha'];
            $this->warnIfUsingTheTestSecret();
        }

        return Validator::make($data, $rules, [
            'g-recaptcha-response.required' => __('loginregister.robot-failed'),
            'g-recaptcha-response.captcha' => __('loginregister.robot-failed'),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    private function warnIfUsingTheTestSecret(): void
    {
        if (app()->environment('production')
            && config('captcha.secret') === self::GOOGLE_TEST_SECRET
            && Cache::add('captcha-test-secret-reported', true, now()->addDay())) {
            report(new \RuntimeException("NOCAPTCHA_SECRET is Google's public test secret, which accepts every token. Set the real secret for the live site key."));
        }
    }
}
