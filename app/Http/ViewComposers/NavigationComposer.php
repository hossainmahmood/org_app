<?php

namespace App\Http\ViewComposers;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class NavigationComposer
{
    
    public function compose(View $view)
    {
       // Is a user logged in?
        if(Auth::check())
        {
           

            // Grab the role name from the current session variable
            // NOTE: you probably have a different way of doing this via a relation or similar
            //$currentRole   = Session::get('user.current_role');
             $currentRole =Auth::user()->type;
            // try to get a navigation menu matching this user type
            $user          = Auth::user()->name;
            $viewName      = 'navigation.' . strtolower($currentRole);
           

//            if(! $view( $viewName )){
//                 $viewName = ''; 
//            }

            $view->with(['user' => $user,'userType'=> $currentRole,'userMenu'=> $viewName]);

        }
        else{
          $view->with(['user' => 'Guest','userType'=> 'student','userMenu'=> 'navigation.guest']);  
        }
    }
}