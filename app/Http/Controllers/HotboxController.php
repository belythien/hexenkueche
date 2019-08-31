<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HotboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
		$menus = \App\Menu::all();
        $hotboxes = \App\Hotbox::all();
		return view('hotbox.index', compact('hotboxes', 'menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = \App\Menu::all();
		return view('hotbox.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menus = \App\Menu::all();
		$hotbox = \App\Hotbox::find($id);
		if(isset($hotbox)) {
			return view('hotbox.edit', compact('hotbox','menus'));
		} else {
			return redirect('hotbox.index')->with( 'danger', 'Hotbox nicht gefunden' );
		}	
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate( $request, [
            'text' => 'required'
        ] );
		
		$hotbox = \App\Hotbox::find($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
