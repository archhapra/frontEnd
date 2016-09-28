<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

class PageController extends Controller
{

public function form()
    {
        $pagetype="form";
        return view('pages.form')->with(['pagetype'=>$pagetype]);
    }

public function store(Request $input)

    {

       User::create($input->all());
       var_dump("success");
    }

    public function withdraw(){
        $pagetype="withdraw";
        return view('bank.withdraw')->with(['pagetype'=>$pagetype]);
    }

 public function deposit(){
        $pagetype="deposit";
        return view('bank.deposit')->with(['pagetype'=>$pagetype]);
    }

     public function transfer(){
        $pagetype="transfer";
        return view('bank.transfer')->with(['pagetype'=>$pagetype]);
    }

     public function history(){
        $pagetype="history";
        return view('bank.history')->with(['pagetype'=>$pagetype]);
    }










    public function index()
    {
        $pagetype="index";
    	return view('pages.index')->with(['pagetype'=>$pagetype]);
    }

    public function index1()
    {
        $pagetype="index1";
        return view('pages.index1')->with(['pagetype'=>$pagetype]);
    }

     public function services()
    {
        $pagetype="services";
    	return view('pages.services')->with(['pagetype'=>$pagetype]);
    }

     public function portfolio()
    {
        $pagetype="portfolio";
    	return view('pages.portfolio')->with(['pagetype'=>$pagetype]);
    }

     

     public function mail()
    {
        $pagetype="mail";
    	return view('pages.mail')->with(['pagetype'=>$pagetype]);
    }

     public function shortcodes()
    {
        $pagetype="shortcodes";
    	return view('pages.short-codes')->with(['pagetype'=>$pagetype]);
    }

     public function single()
    {
        $pagetype="single";
    	return view('pages.single')->with(['pagetype'=>$pagetype]);
    }
}
