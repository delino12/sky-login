<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Storage;


class pagesController extends Controller
{
    // all pages route request goes here
    public function __construct(){
        //$this->middleware('auth');
    }


    // get welcome 
    public function welcome(){
    	return view('welcome');
    }

    // get signup
    public function signup(){
    	return view("signup-form");
    }

    // get login
    public function login(){
    	return view("login-form");
    }

    // get add
    public function add(Request $request, User $new){
    	// assigning variables..
    	$name = $request->name;
    	$email = $request->email;
    	$password = $request->password;

    	// return dd($request->all());

    	// creating new uses
    	$new = new User();
    	$new->name = $name;
    	$new->email = $email;
    	$new->password = $password;

    	// save database model
    	$new->save();

    	// return a message
    	$msg = ' Thanks, your account has been created ! ';

    	// flash a message redirecting back
    	Session::flash("msg", $msg);
        Session::flash("client", $request->name);
    	return back();
    }
}
