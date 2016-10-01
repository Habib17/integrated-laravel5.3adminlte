<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Routing\Controller as BaseController;



class dashboardController extends BaseController
{
    public function index(){
        return view('partials.dashboard');
    }
    public function ui(){
        return view('partials.ui');
    }
    public function widget(){
        return view('partials.widget');
    }

    public function icon(){
        return view('partials.icon');
    }

    public function button(){
        return view('partials.buttons');
    }

    public function slider(){
        return view('partials.sliders');
    }

    public function timeline(){
        return view('partials.timeline');
    }

    public function modal(){
        return view('partials.modal');
    }
    public function gform(){
        return view('partials.gform');
    }
    public function aform(){
        return view('partials.aform');
    }
    public function editor(){
        return view('partials.editor');
    }
    public function simplet(){
        return view('partials.table_simple');
    }
    public function datat(){
        return view('partials.data_table');
    }
    public function calendar(){
        return view('partials.calendar');
    }
    public function mailbox(){
        return view('partials.mailbox');
    }
    public function compose(){
        return view('partials.compose');
    }
    public function read(){
        return view('partials.read');
    }
    public function invoice(){
        return view('partials.example_invoice');
    }
    public function login(){
        return view('partials.example_login');
    }
    public function profile(){
        return view('partials.example_profile');
    }
}




