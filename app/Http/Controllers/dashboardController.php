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
        return view('partials.calendar.calendar');
    }
    public function mailbox(){
        return view('partials.mailbox.mailbox');
    }
    public function compose(){
        return view('partials.mailbox.compose');
    }
    public function read(){
        return view('partials.mailbox.read');
    }
    public function invoice(){
        return view('partials.examples.example_invoice');
    }
    public function login(){
        return view('partials.examples.example_login');
    }
    public function profile(){
        return view('partials.examples.example_profile');
    }
    public function register(){
        return view('partials.examples.example_register');
    }
    public function lock(){
        return view('partials.examples.example_lock');
    }
    public function error(){
        return view('partials.examples.example_404');
    }
    public function errora(){
        return view('partials.examples.example_500');
    }
    public function blank(){
        return view('partials.examples.example_blank');
    }
    public function pace(){
        return view('partials.examples.example_pace');
    }
    public function chartjs(){
        return view('partials.charts.chartjs');
    }
    public function flot(){
        return view('partials.charts.flot');
    }
    public function morris(){
        return view('partials.charts.morris');
    }
    public function inline(){
        return view('partials.charts.inline');
    }
    public function general(){
        return view('partials.general');
    }

}




