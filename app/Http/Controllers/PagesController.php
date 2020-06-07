<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title=" Welcome To Paradox's Lab !!! ";
        //return view ('pages.index',compact('title'));    ///Method 1
        return view ('pages.index')-> with('title',$title);
    }

    public function about(){
        $title='About Us';
        return view ('pages.about')->with('title',$title); ///Method 2
    }

    public function services(){
        $data=array(                    ///Method 3
            'title'=> 'Services',
            'services'=> ['Web Design','Programming','SEO']
        );
        return view ('pages.services')->with($data);
    }
}
