<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Requests;

use App\Http\Controllers\Controller;

use App\Restaurant as Restaurant;


class RestaurantController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        // get all the restaurants
        $restaurants = Restaurant::all();

        // load the view and pass the restaurants
        return view('restaurants.index')
            ->with('restaurants', $restaurants);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        // load the create form (app/views/restaurants/create.blade.php)
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $restaurant = Request::all();
        Restaurant::create($restaurant);
        return redirect('restaurants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // get the restaurant
        $restaurant = Restaurant::find($id);

        // show the view and pass the restaurant to it
        return view('restaurants.show')
            ->with('restaurant', $restaurant);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        // get the restaurant
        $restaurant = Restaurant::find($id);

        // show the edit form and pass the restaurant
        return view('restaurants.edit')
            ->with('restaurant', $restaurant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $restaurantUpdate=Request::all();
        $restaurant=Restaurant::find($id);
        $restaurant->update($restaurantUpdate);
        return redirect('restaurants');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {

        // delete
        $restaurant = Restaurant::find($id);
        $restaurant->delete();
        return redirect('restaurants');
    }

}
