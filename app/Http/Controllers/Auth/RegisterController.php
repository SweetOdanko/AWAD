<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
use App\Models\Support;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
        //$this->middleware('guest:admin');
        //$this->middleware('guest:support');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    // /**
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    //  */
    // public function showAdminRegisterForm()
    // {
    //     return view('auth.register', ['url' => 'admin']);
    // }

    // /**
    //  * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
    //  */
    // public function showSupportRegisterForm()
    // {
    //     return view('auth.register', ['url' => 'support']);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return mixed
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createUser(Request $request)
    {
        $this->validator($request->all())->validate();
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login');
    }

        public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function createAdmin(Request $request){
        $this->validator($request->all())->validate();
        // User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        //     'role'=>'admin',
        // ]);
        $user=new User;
        $user->name=$request->name;
        $user->email= $request->email;
        $user->password=Hash::make($request->password);
        $user->role='admin';
        $user->save();
        return redirect()->intended('login');
    }
    // /**
    //  * @param Request $request
    //  *
    //  * @return \Illuminate\Http\RedirectResponse
    //  */
    // protected function createSupport(Request $request)
    // {
    //     $this->validator($request->all())->validate();
    //     Support::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);
    //     return redirect()->intended('login/support');
    // }
}