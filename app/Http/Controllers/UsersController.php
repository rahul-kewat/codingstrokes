<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function index()
    {
       
    }
    public function view($id)
    {
        $user = User::with(
                        'articles',
                        'tagsWorked'
                    )
                    ->where('id',$id)->select('id','name','gender','facebook_id','google_id','profile_photo','email','phone_no','phone_country_code','date_of_birth')->first();
                    
        return view('Users.viewUser',compact('user'));
    }
}
