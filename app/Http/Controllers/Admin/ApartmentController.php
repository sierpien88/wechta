<?php

namespace App\Http\Controllers\Admin;

use App\Events\ChangeInDb;
use App\Http\Controllers\Controller;
use App\Http\Requests\AppartmentRequest;
use App\Models\Apartment;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $apartments = Apartment::all();
        return view('admin.apartment.list', compact('apartments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.apartment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AppartmentRequest $request)
    {
        $apartment = Apartment::create($request->validated());


        event(new ChangeInDb('apartment', $apartment->id, auth()->user()->id, 'add'));

        return redirect()->route('admin.apartment.index')->with('message', 'Mieszkanie zostało dodane');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function show(Apartment $apartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function edit(Apartment $apartment)
    {
        return view('admin.apartment.edit', compact('apartment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function update(AppartmentRequest $request, Apartment $apartment)
    {
        $apartment->update($request->validated());

        event(new ChangeInDb('apartment', $apartment->id, auth()->user()->id, 'edit'));

        return redirect()->route('admin.apartment.index')->with('message', 'Mieszkanie poprawnie edytowane');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apartment  $apartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apartment $apartment)
    {
        event(new ChangeInDb('apartment', $apartment->id, auth()->user()->id, 'delete'));
        $apartment->delete();
        return redirect()->route('admin.apartment.index')->with('message', 'Mieszkanie zostało usunięte');
    }
}
