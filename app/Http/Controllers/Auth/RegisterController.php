<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'fullName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
            'userName' => ['required', 'string', 'min:6', 'max:15', 'unique:users,userName'],
            'password' => ['required', 'string', 'min:8', ],
            'phone' => ['required', 'string', 'min:8', 'max:15', 'alpha_num' ],
            'numberID' => ['required', 'string', 'min:8','max:15' , 'alpha_num'],
            'password_confirmation' => ['required',  'same:password' ],
        ],
            [
                'fullName.required' => 'Họ Tên Không được để trống',

                'userName.required' => 'Username Không được để trống',
                'userName.unique' => 'Username đã được  sử dụng',
                'userName.min' => 'Username phải từ 6-15 ký tự',
                'userName.max' => 'Username phải từ 6-15 ký tự',

                'phone.required' => 'Số Điện Thoại không được để trống',
                'phone.alpha_num' => 'Chỉ được nhập số',
                'phone.min' => 'Tối Thiểu 8 chữ số',
                'phone.max' => 'Tối Đa 15 chữ số',

                'email.required' => 'Email không được để trống',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email đã được sử dụng',

                'numberID.required' => 'Số CMND không được để trống',
                'numberID.alpha_num' => 'Số CMND chỉ bao gồm số',
                'numberID.min' => 'Số CMND Tối Thiểu 8 chữ số',
                'numberID.max' => 'Số CMND Tối Đa 15 chữ số',

                'password.min' => 'Mật khẩu tối thiểu 8 kí tự',
                'password.required' => 'Mật khẩu không được để trống',

                'password_confirmation.same' => 'Mật khẩu phải trùng nhau',
            ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'fullName' => $data['fullName'],
            'userName' => $data['userName'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone' => $data['phone'],
            'numberID' => $data['numberID'],
            'address' => $data['address'],
        ]);
    }
}
