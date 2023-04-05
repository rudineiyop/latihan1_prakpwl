<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class admincontroller extends Controller
{
    
    public function index()
    {
        return view('admin.dashboard');
    }

    public function show_postingan()
    {
        return view('admin.postingan');
    }

    public function show_arsip()
    {
        return view('admin.arsip');
    }

    public function show_aboutus()
    {
        return view('admin.aboutus');
    }

    public function show_loyalty()
    {
        return view('admin.loyalty');
    }

    public function show_produk()
    {
        return view('admin.produk');
    }

    public function show_tables()
    {
        return view('admin.tables');
    }

    public function show_contact()
    {
        return view('admin.contact');
    }

    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }

    
    public function show(string $id)
    {
        
    }

    
    public function edit(string $id)
    {
        
    }

   
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
