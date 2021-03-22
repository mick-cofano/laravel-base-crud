<?php

namespace App\Http\Controllers;


use App\Beer;
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();

        return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validateForm($request);

      $data = $request->all();

      // versione lunga
        // $beer = new Beer();
        // $beer->title = $data['title'];
        // $beer->description = $data['description'];
        // $beer->price = $data['price'];
        // $beer->cover = $data['cover'];
        // $beer->save();

      // versione super corta
        $beer =new Beer();
        $beer->fill($data);
        $beer->save();

        $beerStored = Beer::orderBy('id', 'desc')->first();
        return redirect()->route('beers.show', $beerStored);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beers.edit', compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
      $this->validateForm($request);

      $data = $request->all();

      $beer->update($data);

      return redirect()->route('beers.show', compact('beer'));
    }

    protected function validateForm(Request $request) {
      $validateData = $request->validate([
        'title' => 'required|max:255',
      ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  Beer  $beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {

        $beer->delete();

        return redirect()->route('beers.index');
    }
}
