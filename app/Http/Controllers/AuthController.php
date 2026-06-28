<?php



namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

public function register(Request $request)
{
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);
        User::create([
         'name' => $request->name ,
         'email' =>$request->email,
         'password'=>Hash::make($request->password),
]);
      return back()->with(
'success',
'Registration successful 🎉'
);

}

public function login(Request $request)
{
$request->validate([
'email'=>'required|email',
'password'=>'required'
]);
$user = User::where(
'email',
$request->email
)->first();
if(
$user
&&
Hash::check(...)
)
return back()->with(
'success',
'Login successful 🚀'
);
else{return back()->with(
'error',
'You entered an incorrect email or password.'
);}
dd($user);
}

}

  