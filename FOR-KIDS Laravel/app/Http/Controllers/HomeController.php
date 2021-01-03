<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Merchandise;
use App\Models\Event;
use App\Models\Competition;
use App\Models\Child;
use App\Models\ActivityChild;
class HomeController extends Controller
{
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // fetch data 
        $data['classes'] = Product::all();
        $data['merchandise'] = Merchandise::all();
        $data['event'] = Event::all();
        $data['competition'] = Competition::all();
        $data['activity'] = ActivityChild::all();

        // count
        $data['count_student'] = Child::count();
        $data['count_event'] = Event::count();
        $data['count_activity'] = ActivityChild::count();
        $data['count_product'] = Product::count();

        return view('welcome',$data);
    }

    public function panel() {
        $data['product_count'] = Product::count();
        $data['event_count'] = Event::count();
        return view('admin',$data);
    }

    public function child() {
        return view('child.index');
    }
    
}
