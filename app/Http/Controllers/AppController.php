<?php

namespace App\Http\Controllers;

use App\User;
use App\Category;
use App\MailTemplate;
use App\UserAddress;
use App\UserCategory;
use Input;
use Validator;
use Hash;
use Auth;
use Mail;

class AppController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Welcome Controller
      |--------------------------------------------------------------------------
      |
      | This controller renders the "marketing page" for the application and
      | is configured to only allow guests. Like most of the other sample
      | controllers, you are free to modify or remove it as you desire.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index() {
        return view('index');
    }

    public function register() {
        return view('register');
    }

    public function registerUser() {
        $userData = Input::all();
        $validation = Validator::make($userData, User::$registerUser);
        if ($validation->passes()) {
            $User = User::create($userData);
            $Response = array('success' => '1', 'userid' => $User->id);
        } else {
            $Response = array('success' => '0', 'error' => $validation->messages());
        }
        return $Response;
    }

    public function loginUser() {
        $userData = Input::all();
        $validation = Validator::make($userData, User::$loginUser);
        if ($validation->passes()) {
    
            $userEmail = Input::get('email');
            $userPassword = Input::get('password');
            if (Auth::attempt(['email' => $userEmail, 'password' => $userPassword])) {
                $userData = User::where('email', $userEmail)->first();
                $Response = array('success' => '1', 'userData' => $userData);
            } else {
                $Response = array('success' => '0', 'error' => 'User not found');
            }
        }
            else
            {
                $Response = array('success' => '0', 'error' => $validation->messages());       
            }
            return $Response;

    }

    public function getUserProfile() {
        $userId = Input::get('id');
        $userData = User::where('id', $userId)->first();
        if ($userData) {
            $Response = array('success' => '1', 'userData' => $userData);
        } else {
            $Response = array('success' => '0', 'error' => 'User Not Found');
        }
        return $Response;
    }

    public function resetPassword() {
        $Email = Input::get('email');
        $userData = User::where('email', $Email)->first(['username']);
        if ($userData) {
            $Token = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 50);
            $UserName = $userData->username;
            $updateData['token'] =  $Token;
            User::where('email', '=', $Email)->update($updateData);
            /*
            Mail::send([], array('UserName' => $UserName, 'Email' => $Email, 'Token' => $Token), function($message) use ($UserName, $Email, $Token) {
                $MailContent = MailTemplate::find(1);
                $MailBody = $MailContent->content;
                $MailBody = str_replace("{{username}}", $UserName, $MailBody);
                $MailBody = str_replace("{{link}}", $Token, $MailBody);
                $message->setBody($MailBody, 'text/html');
                $message->to($Email);
                $message->subject($MailContent->subject);
            });
            */
            $Response = array('success' => '1');
        } else {
            $Response = array('success' => '0', 'error' => 'Email not found');
        }
        return $Response;
    }

    public function changePassword()
    {
        $inputData = Input::all();
        $userData = User::where('token', $inputData['token'])->first(['email']);
        if ($userData) 
        {
            $validation = Validator::make($inputData, User::$updatePassword);
        if ($validation->passes()) {
            $inputData['password'] = Hash::make($inputData['password']);
            User::where('email', '=', $userData['email'])->update($inputData);
            $Response = array('success' => '1');
        }
        else
        {
            $Response = array('success' => '0', 'error' => $validation->messages());       
        }
        }
        else
        {
            $Response = array('success' => '1', 'error' => 'Invalid Token');
        }
        return $Response;
    }

    public function getUserAddress()
    {
        if (User::where('id', '=', Input::get('id'))->exists()) {
            $userDefaultAddress =  User::where('id', '=', Input::get('id'))->first(['default_address']);
            $userAddresses = UserAddress::where('user_id', '=', Input::get('id'))->get(['address']);
            $Response = array('success' => '1', 'default_address' => $userDefaultAddress, 'address' => $userAddresses);
        }
        else
        {
            $Response = array('success' => '1', 'error' => 'User Not Found');
        }
            return $Response;
    }

    public function setUserAddress()
    {
        if (User::where('id', '=', Input::get('id'))->exists()) {
            if(UserAddress::where('id', '=', Input::get('default_address'))->where('user_id', '=', Input::get('id'))->exists())
                {
                    $updateData['default_address'] =  Input::get('default_address');
                    User::where('id', '=', Input::get('id'))->update($updateData);
                    $Response = array('success' => '1', );
                }
                else
                {
                    $Response = array('success' => '2', 'error' => 'User Address Not Matched');
                }
        }
        else
        {
            $Response = array('success' => '0', 'error' => 'User Not Found');
        }
            return $Response;   
    }

    public function getCategory()
    {
        $categoryData = Category::get();
        if($categoryData)
        {
            $Response = array('success' => '1', 'category' => $categoryData);
        }
        else
        {
            $Response = array('success' => '0', 'error' => 'No Category Found');
        }
        
        return $Response;       
    }

    public function setUserCategory()
    {
        if (User::where('id', '=', Input::get('id'))->exists()) {
            if(UserCategory::where('id', '=', Input::get('category'))->where('user_id', '=', Input::get('id'))->exists())
                {
                    $updateData['category'] =  Input::get('category');
                    User::where('id', '=', Input::get('id'))->update($updateData);
                    $Response = array('success' => '1', );
                }
                else
                {
                    $Response = array('success' => '2', 'error' => 'User Category Not Matched');
                }
        }
        else
        {
            $Response = array('success' => '0', 'error' => 'User Not Found');
        }
            return $Response;   
    }

}