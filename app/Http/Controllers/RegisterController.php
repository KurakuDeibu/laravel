<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'userEmail' => 'required|email|unique:users,userEmail',
            'userPassword' => 'required|min:8|confirmed',
            'userFName' => 'required|string|max:255',
            'userLName' => 'required|string|max:255',
            'userMName' => 'nullable',
            'userAddress' => 'required|string|max:255',
            'userBDay' => 'required|date',
            'userPhoneNum' => 'required|numeric',
            'userType' => 'required|string|in:seller,buyer,finder',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            $failedStep = $this->getFailedStep($errors);
            return redirect()->route('register')->withErrors($errors)->withInput()->with('failedStep', $failedStep);
        }

        $user = new User([
            'userEmail' => $request->userEmail,
            'userPassword' => bcrypt($request->userPassword),
            'userFName' => $request->userFName,
            'userLName' => $request->userLName,
            'userMName' => $request->userMName,
            'userAddress' => $request->userAddress,
            'userBDay' => $request->userBDay,
            'userPhoneNum' => $request->userPhoneNum,
            'userType' => $request->userType,
        ]);

        $user->save();

        return redirect()->route('landing-page')->with('success', 'Registration successful!');
    }

    private function getFailedStep($errors)
    {
        if ($errors->has('userEmail') || $errors->has('userPassword') || $errors->has('userFName') || $errors->has('userLName')) {
            return 1;
        } elseif ($errors->has('userAddress') || $errors->has('userBDay') || $errors->has('userPhoneNum')) {
            return 2;
        } elseif ($errors->has('userType') || $errors->has('termsAgree')) {
            return 3;
        }
        return 1;
    }
}
