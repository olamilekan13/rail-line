<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;

class TicketController extends Controller
{
    public function home()
    {
        return view('index');

    }

    public function contact(){
        return view('contact');
    }

    public function buyTicket(){
        return view('buy-ticket');
    }

    public function about(){
        return view('about');
    }

    public function vigilance(){
        return view('vigilance');
    }

    public function service(){
        return view('services');
    }

    public function destination(){
        return view('destination');
    }


    public function ticketType(){
        return view('ticket-type');
    }

    public function fare(){
        return view('fare');
    }

    public function ticketPurchase(){
        return view('ticket-purchase');
    }

    public function afterSales(){
        return view('after-sales');
    }

    public function alteration(){
        return view('alteration');
    }

    public function ticketChannel(){
        return view('ticket-channel');
    }

    public function orderDetail(){
        return view('order-details');
    }


    public function getStation(){

        $station = Tickets::all();
        return view('index',["station"=>$station]);


     }
}
