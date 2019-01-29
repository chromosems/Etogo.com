<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Flyer;
use App\Photo;


class FlyerController extends Controller
{
    /*
     * Authentication for user.that means before selling your house  A user must register by creating an account
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('flyer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\FlyerRequest $request)
    {
        Flyer::create($request->all());
        return redirect('flyer/create')->with('success', 'A new images has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($zip, $street)
    {
        $flyer = Flyer::locatedAt($zip, $street);
        return view('flyer.show', compact('flyer'));
    }


    public function addPhoto($zip, $street, Request $request)
    {
        $this->validate($request, [
            'photo' => 'required|mine: jpg,jpeg,png,bmp'
        ]);
        $flyer = Flyer::locatedAt($zip, $street);

        $photo = Photo::saveAs($request->file('photo'));

        $flyer->addPhoto($photo);
    }
//

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
