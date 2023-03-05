<?php

namespace App\Http\Controllers;

use App\Models\Village;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class VillageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $village = Village::latest()->get();
        return view('admin/geography/village/index', compact('village'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/geography/village/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'khmer'       => 'required',
            'english'       => 'required',
        ]);
        Village::create([
            'commune_code'     => $request->commune_code,
            'code'             => $request->code,
            'khmer'            => $request->khmer,
            'english'          => $request->english,
            'reference'        => $request->reference,
            'official_note'    => $request->official_note,
            'note_by_checker'  => $request->note_by_checker,
        ]);
        Alert::success('Create Village Successful');
        return redirect('/village');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function show(Village $village,$id)
    {
        $village = Village::whereId($id)->firstOrFail();
        return view('admin/geography/village/view', compact('village'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function edit(Village $village,$id)
    {
        $village = Village::whereId($id)->firstOrFail();
        return view('admin/geography/village/edit', compact('village'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Village  $village
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Village $village,$id)
    {
        $village = Village::whereId($id)->first();
        $request->validate([
            'khmer' => 'required',
            'english' => 'required',
        ]);
        $data = [
            'commune_code'     => $request->commune_code,
            'code'             => $request->code,
            'khmer'            => $request->khmer,
            'english'          => $request->english,
            'reference'        => $request->reference,
            'official_note'    => $request->official_note,
            'note_by_checker'  => $request->note_by_checker,
        ];
        $village->update($data);
        Alert::success('Successful', 'Village is Edited');
        return redirect('/village');
    }
    public function question($id){
        alert()->question('Delete Village !', 'Are you sure?')
        ->showConfirmButton('<a href="/village/' . $id . '/destroy" class="text-white" style="text-decoration: none">Yes I&apos;m sure</a>', '#3085d6')->toHtml()
        ->showCancelButton('Back', '#aaa')->reverseButtons();
        return redirect('/village');
    }
    public function destroy(Village $village,$id)
    {
        $Village = Village::select('id')->whereId($id)->firstOrFail();
        $Village->delete();
        Alert::success('Successful', 'Village is Deleted');
        return redirect('/village');
    }
}
