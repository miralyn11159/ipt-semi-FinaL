<?php

namespace App\Http\Controllers;

use App\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{

    public function index(){

        return view('pages.index');
    }
    public function investorList(){

        return view('pages.visitor_list');
    }


    public function create()
    {
        //
        return view('pages.create_visitor');
    }


    public function store(Request $request)
    {
        $visitors = new Visitor();

        $visitors->name = $request->name;
        $visitors->phone = $request->phone;
        $visitors->purpose = $request->purpose;
        $visitors->time = $request->time;

        $visitors->save();

        return redirect('create-visitor')->with(['success' => 'New Visitor created successfully']);
    }


    public function show()
    {
        $visitors = Visitor::all();

        return view('pages.visitor_list',['visitors'=>$visitors]);

    }
}
