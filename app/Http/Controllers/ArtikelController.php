<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Artikel;
class ArtikelController extends Controller
{
    public function index()
    {
    	return Artikel::all();
    }

    public function store(Request $request)
    {
    	return Artikel::create($request->all());
    }

    public function show($id)
    {
    	return Artikel::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
    	Artikel::findOrFail($id)->update($request->all());

    	return response()->json($request->all());

    }

    public function destroy($id)
    {
    	return Artikel::destroy($id);
    }

}
