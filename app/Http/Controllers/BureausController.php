<?php

namespace App\Http\Controllers;

use App\Bureaus;
use Illuminate\Http\Request;

class BureausController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bureaus = bureaus::all();
        return view('admin/bureaus/index', compact('bureaus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
               [
                   'name' => 'required|min:3',
                   'description' => 'required|min:3',
                   'username' => 'required',
               ]);
        /* <!-- /resources/views/post/create.blade.php -->
                 <h1>Create Post</h1>
                @if (errors->any())
                    <div class='alert alert-danger'>
                        <ul>
                            @foreach (errors->all() as error)
                                <li>{{ error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
        <!-- Create Post Form --> */

        //

        bureaus::create(request(['name', 'description', 'username' ]));
        return redirect('/bureaus')->with('success', 'Entry added successfully!');

        //$user = (auth()->guard('admin')->user()->username);
        // return $user;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bureaus  $bureaus
     * @return \Illuminate\Http\Response
     */
    public function show(Bureaus $bureaus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bureaus  $bureaus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bureaus $blijst)
    {
        //
        // $id = bureaus::findOrfail($id);

        return $blijst;

        return view('admin.bureaus.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bureaus  $bureaus
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
        // $this->validate($request,
        // [
        //     'name' => 'required|min:3',
        //     'description' => 'required|min:3',
        //     'username' => 'required',
        // ]);

        bureaus::where('id', $id)
                    ->update(['name' => request('name'),
                    'description' => request('description'),
                    'username' => request('username')] );

        return redirect('/bureaus')->with('succes', 'Entry updated!');

        //dd(request()->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bureaus  $bureaus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bureaus $id)
    {
        //
        // dd('Delete ' . $id);
        $id->delete();

        return redirect('/bureaus')->with('success', 'Entry deleted!');
    }
}
