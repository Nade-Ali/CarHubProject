<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\frontend\ServicesModel;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("frontend.services");
    }

    public function submitMessage(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'email|required',
                'subject' => 'required',
                'phone' => 'required',
                'message' => 'required'
            ]
        );

        $services = new ServicesModel();
        $services->name = $request->name;
        $services->email = $request->email;
        $services->subject = $request->subject;
        $services->phone = $request->phone;
        $services->message = $request->message;
        $services->save();
        return back()->withSuccess('Thanks for Contacting. We\'ll Contact you ASAP!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
