<?php

namespace App\Http\Controllers\frontend\users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\products2;
use App\Models\slider;
use App\Models\users;
use App\Models\live_tv;
use App\Models\management;
use App\Models\download_links;

class users_frontend_deshbord_controller extends Controller
{
    //users_home_controller
    public function users_home_controller(Request $request)
    {
        $userData = users::where('username', $request -> session() -> get('username')) -> first();
        $management = management::where('id', 1) -> first();

        if($request -> session() -> has('content18')){
            if($userData['user_adult'] == "yes"){
                $products = products::orderBy('id', 'DESC') -> get();
            }else{
                $products = products::orderBy('id', 'DESC') -> where("content18", "no") -> get();
            }
        }else{
            if($userData['user_adult'] == "yes"){
                $products = products::orderBy('id', 'DESC') -> where('content18', 'no') -> get();
            }else{
                $products = products::orderBy('id', 'DESC') -> where("content18", "no") -> where('content18', 'no') -> get();
            }
        }
        $slider = slider::orderBy('id', 'DESC') -> get();

        // where
        $where = "server1";

        if(($userData['access'] != "all") && ($userData['access'] != "server1") && ($userData['access'] != "server12")){
            return redirect(route('users_livetv_web'));
        }

        return view('users.pages.home.home') -> with(compact('products', 'slider', 'userData', 'where', 'management'));
    }

    // users_livetv_controller
    public function users_livetv_controller(Request $request)
    {
        $management = management::where('id', 1) -> first();
        $userData = users::where('username', $request -> session() -> get('username')) -> first();
        if($request -> session() -> has('content18')){
            if($userData['user_adult'] == "yes"){
                $products = live_tv::orderBy('id', 'DESC') -> get();
            }else{
                $products = live_tv::orderBy('id', 'DESC') -> where("content18", "no") -> get();
            }
        }else{
            if($userData['user_adult'] == "yes"){
                $products = live_tv::orderBy('id', 'DESC') -> where('content18', 'no') -> get();
            }else{
                $products = live_tv::orderBy('id', 'DESC') -> where("content18", 'no') -> where('content18', 'no') -> get();
            }
        }
        $slider = slider::orderBy('id', 'DESC') -> get();
        // where
        $where = "live";

        return view('users.pages.home.home') -> with(compact('products', 'slider', 'userData', 'where', 'management'));
    }

    // users_server2tv_controller
    public function users_server2tv_controller(Request $request)
    {
        $management = management::where('id', 1) -> first();
        $userData = users::where('username', $request -> session() -> get('username')) -> first();
        if($request -> session() -> has('content18')){
            if($userData['user_adult'] == "yes"){
                $products = products2::orderBy('id', 'DESC') -> get();
            }else{
                $products = products2::orderBy('id', 'DESC') -> where("content18", "no") -> get();
            }
        }else{
            if($userData['user_adult'] == "yes"){
                $products = products2::orderBy('id', 'DESC') -> where('content18', 'no') -> get();
            }else{
                $products = products2::orderBy('id', 'DESC') -> where("content18", 'no') -> where('content18', 'no') -> get();
            }
        }
        $slider = slider::orderBy('id', 'DESC') -> get();
        // where
        $where = "server2";

        return view('users.pages.home.home') -> with(compact('products', 'slider', 'userData', 'where', 'management'));
    }

    // users_update_controller
    public function users_update_controller() {
        $management = download_links::where('id', 1) -> first();
        return view('users.pages.home.update') -> with(compact('management'));
    }

    // users_profile_controller
    public function users_profile_controller(Request $request)
    {
        $userData = users::where('username', $request -> session() -> get('username')) -> first();
        return view('users.pages.home.profile')->with(compact('userData'));
    }

    // users_404_controller
    public function users_404_controller(Request $request)
    {
        return view('users.pages.home.404');
    }

}
