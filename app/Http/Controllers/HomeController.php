<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Kategori;
use App\Models\Products;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HomeController extends Controller
{
    //
    public function index(){
        $events = Event::latest()->paginate(2)->transform(function ($event) {
            $event->formatted_date = Carbon::parse($event->tanggal)->format('M d, Y');
            return $event;
        });

        return view('home',[
            "products" => Products::latest()->paginate(3),
            "events" => $events
        ]);
    }

    public function detailEvent($id){
        $event = Event::findOrFail($id);

        return view('user.detailevent', compact('event'));
    }
    public function detailProduct($id){
        $product = Products::with('kategori')->findOrFail($id);


        return view('user.detailproduct', compact('product'));
    }

    public function showProduct(){
        $products = Products::paginate(9);

        return view('user.productpage', compact('products'));
    }
    public function showEvent(){
        $events = Event::all();

        return view('user.eventpage', compact('events'));
    }

}
