<?php

namespace App\Http\Controllers;

use Session;
use App\Category;
use App\Amenity;
use App\Setting;
use App\Property;
use App\AmenityImage;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){
        
        $allProperties = Property::HomeProperty()->get();
        $setting = Setting::first();

        return view('website.home', compact([ 'allProperties','setting']));
    }

    public function about(){
        $user = User::first();

        return view('website.about', compact('user'));
    }
   
    
   
   
    
    
}
