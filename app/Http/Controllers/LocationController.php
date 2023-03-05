<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use DB;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = DB::table('users')->get();
        $initialMarkers = [
            [
                'position' => [
                    "lat" => 11.560049831124925, 
                    'lng' => 104.9143550654705,
                    'province' => 'ខេត្តកណ្ដាល',
                    'district' => 'តាខ្មៅ',
                    'commune'  => 'ស្វាយលួង',
                    'village'  => 'លេខ៤លិច',
                    'owner'    => 'Big-Nav-Mr N/',
                    'image'    => 'http://c.cocklocation.com/uploads/5/2023-02/18.jpg',
                ],
                'label' => [ 'color' => 'white', 'text' => 'P1' ],
                'draggable' => true
            ],
            [
                'position' => [
                    'lat' =>  11.556102628115937,
                    'lng' => 104.90676340376275,
                    'province' => 'រាជធានីភ្នំពេញ',
                    'district' => 'កំបូល',
                    'commune'  => 'ភ្លើងឆេះរទេះ',
                    'village'  => 'ទួលកី',
                    'owner'    => 'Bigbro/8888',
                    'image'    => 'http://c.cocklocation.com/uploads/5/2023-02/18.jpg',
                ],
                'label' => [ 'color' => 'white', 'text' => 'P2' ],
                'draggable' => false
            ],
            [
                'position' => [
                    'lat' => 11.554680262918353,
                    'lng' => 104.91394282649375,
                    'province' => 'ខេត្តតាកែវ',
                    'district' => 'សំរោង',
                    'commune'  => 'សឹង្ហ',
                    'village'  => 'លេខ6លិច',
                    'owner'    => 'Big-Sadam/Bigbro',
                    'image'    => 'http://c.cocklocation.com/uploads/5/2023-02/18.jpg',
                ],
                'label' => [ 'color' => 'white', 'text' => 'P3' ],
                'draggable' => true
            ]
        ];
        return view('admin/location/index', compact('user','initialMarkers'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Location $location)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Location $location)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }
}
