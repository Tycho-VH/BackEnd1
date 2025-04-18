<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{

    public function index()
    {
        $MenuItems = Menu::all();
        return view("menu.index", compact("MenuItems"));
    }


    public function create()
    {
        return view("menu.create");
    }


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


    public function show(Menu $menu)
    {

        return view('menu.show', compact("menu"));
    }


    public function edit(Menu $menu)
    {
        return view("menu.edit", compact("menu"));
    }


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


    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menu.index');
    }
}
