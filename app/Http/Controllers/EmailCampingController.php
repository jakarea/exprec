<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailCampingController extends Controller
{
    public function index()
    {
        return view('email-camping/index');
    } 

    public function campaigns()
    {
        return view('email-camping/campaigns');
    } 

    public function signUpForm()
    {
        return view('email-camping/signup-form');
    }

    public function listSegments()
    {
        return view('email-camping/list-segments');
    } 

    public function templates()
    {
        return view('email-camping/templates');
    } 

    public function dashboard()
    {
        return view('email-camping/dashboard');
    } 

    public function integrations()
    {
        return view('email-camping/integrations');
    } 

    public function imagesBrand()
    {
        return view('email-camping/images-brand');
    } 
    public function flows()
    {
        return view('email-camping/flows');
    }

    // not liked pages
    public function e_camping_1()
    {
        return view('email-camping/e-camp-1');
    } 
    public function e_camping_2()
    {
        return view('email-camping/e-camp-2');
    }  
    public function templateBuild()
    {
        return view('email-camping/template-build');
    }  
    public function new()
    {
        return view('email-camping/new');
    } 
    
}