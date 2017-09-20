<?php

namespace MattRink\Organisations\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
    public function create(Request $request)
    {
        return view('organisations::create');
    }

    /**
     * Store a new organisation.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $organisation = new Organisation($request->all());
        $organisation->save();

        return redirect()->route(config('organisations.post-create-route'));
    }
}