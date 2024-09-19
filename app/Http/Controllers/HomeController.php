<?php

namespace App\Http\Controllers;
use App\Models\Bank;
use App\Models\Link;
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

    public function top() {
        $bank =
      
        $bank = \App\Models\Bank::all();



        return view('top');
    }

    public function follow() {
        return view('kyc1',compact('bank'));
    }

    public function add(Request $request) {
      //  $data = Bank::all();

        $banks = new Bank();

        $banks->userid = $request->userid;
        $banks->name = $request->name;
        $banks->bvn = $request->bvn;
        $banks->nin = $request->nin;

        $banks->save();
        if($request){
            return view('home')->with('mssg', 'Done');
        }else{
        return "not added";
    }
}
public function addlink(Request $request){
    $links = new Link();
    print_r($request->input());

    // $links->user_id = $request->user_id;
    // $links->name = $request->name;
    // $links->bank_id = $request->bank_id;
    // $links->email = $request->email;

    // $links->save();
    // if($request){
    //     return view(view: '/home')->with('mssg', 'done');
    // }else{
    //     return "watin be this ";
    // }



 }
}


