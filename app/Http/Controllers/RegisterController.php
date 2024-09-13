<?php

Namespace App\Http\Controllers;

Use Illuminate\Http\Request;
Use App\Models\User;
Use Illuminate\Support\Facades\Hash;
Use Illuminate\Support\Facades\Validator;

Class RegisterController extends Controller
{
    Public function showRegistrationForm()
    {
        return view('auth.register');
    }

    Public function register(Request $request)
    {
        // Validate the request
        $this->validator($request->all())->validate();

        // Create the user
        $user = $this->create($request->all());

        Auth::login($user);

        // Redirect to the home page
        return redirect()->intended('/');
    }

    Protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'=> 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
    }

    Protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email'=> $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

