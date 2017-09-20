<?php

namespace MattRink\Organisations\Controllers;

use App\Http\Controllers\Controller;

class OrganisationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Create a new organisation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisations::create');
    }

    /**
     * Store a new organisation.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
    }
}