<?php

namespace App\Http\Controllers\Admin;

use App\Events\ChangeInDb;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsfeedRequest;
use App\Models\Newsfeed;
use Illuminate\Http\Request;

class NewsfeedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = Newsfeed::all();
        return view('admin.newsfeed.list', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.newsfeed.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\NewsfeedRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsfeedRequest $request)
    {
        $news = Newsfeed::create($request->validated());

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('newsfeed/' . $news->id . '/');
            $news->photo = $photo;
            $news->save();
        }
        event(new ChangeInDb('newsfeed', $news->id, auth()->user()->id, 'add'));

        return redirect()->route('admin.newsfeed.index')->with('message', 'News został dodany');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function show(Newsfeed $newsfeed)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function edit(Newsfeed $newsfeed)
    {
        return view('admin.newsfeed.edit', compact('newsfeed'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function update(NewsfeedRequest $request, Newsfeed $newsfeed)
    {
        $newsfeed->update($request->validated());

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->store('newsfeed/' . $newsfeed->id . '/');

            $newsfeed->photo = $photo;
            $newsfeed->save();
        }

        event(new ChangeInDb('newsfeed', $newsfeed->id, auth()->user()->id, 'edit'));

        return redirect()->route('admin.newsfeed.index')->with('message', 'News poprawnie edytowany');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Newsfeed  $newsfeed
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newsfeed $newsfeed)
    {
        event(new ChangeInDb('newsfeed', $newsfeed->id, auth()->user()->id, 'delete'));
        $newsfeed->delete();
        return redirect()->route('admin.newsfeed.index')->with('message', 'News został usunięty');
    }
}
