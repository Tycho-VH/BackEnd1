<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $MenuItems = Menu::all();
        return view("menu.index", compact("MenuItems"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("menu.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'prijs' => 'required|numeric',
            'beschrijving' => 'required',
        ]);

        Menu::create($request->all());
        return redirect()->route("menu.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Menu $menu)
    {
        return view("menu.show", compact("menu"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
        return view("menu.edit", compact("menu"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Menu $menu)
    {
        $request->validate([
            'naam' => 'required',
            'prijs' => 'required|numeric',
            'beschrijving' => 'required',
        ]);

        $menu->update($request->all());
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
