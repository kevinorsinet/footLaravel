<?php

namespace App\Http\Controllers;

use App\Models\Club;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   
        // SELECT cl.name as clubName, sp.name as sponsorName, cs.price FROM `clubs` as cl 
        // JOIN clubs_sponsors as cs ON cl.id = cs.club_id 
        // JOIN sponsors as sp ON cs.sponsor_id = sp.id
        $clubsList = DB::table("clubs")
                         ->join("clubs_sponsors", "clubs.id","=", "clubs_sponsors.club_id")
                         ->join("sponsors", "clubs_sponsors.sponsor_id","=", "sponsors.id")
                         ->select("clubs.name as clubName", "sponsors.name as sponsorName", "clubs_sponsors.price")
                         ->get();
        // $clubsList = DB::table("clubs")
        //             ->join("clubs_sponsors", "clubs.id","=", "clubs_sponsors.club_id")
        //             // ->join("sponsors", "clubs_sponsors.sponsor_id","=", "sponsors.id")
        //             ->select("clubs.name", "clubs_sponsors.price")
        //             ->get();
        
        
        // print_r($clubsList);
        // die();
        return view('clubs.index', compact('clubsList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clubs.create');
    }

    
    public function store(Request $request)
    {

    $input = $request->all();
    // $input = {
        // title: "Ukraine",
        // image: "53h4dh4fgh657hsdhiod"
    // }
    /*
    //create the post
    $input =  Post::create([
        'title' => $request->title,
        'image' => $request->image,
        'category_id' => $request->category_id,
    ]);
    */

    Club::create($input);

    return redirect()->route('clubs.index')->with('success','Club created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Club $club)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Club $club)
    {
        //
    }
}
