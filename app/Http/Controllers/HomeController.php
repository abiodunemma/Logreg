<?php

namespace App\Http\Controllers;
use App\Models\Bank;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');

    }
    public function support() {
        return view('/support');
    }

    public function Top() {
        return view('top');
    }

    public function follow() {
        return view('kyc1');
    }

    public function add(Request $request) {
      //  $data = Bank::all();

        $banks = new Bank();

        $banks->userid = $request->userid;
        $banks->username = $request->username;
        $banks->bvn = $request->bvn;
        $banks->nin = $request->nin;

        $banks->save;
        if($request){
            return view('home')->with('mssg', 'Done');
        }else{
        return "not added";
    }
}
}

