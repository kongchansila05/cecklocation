<?php

namespace App\Http\Controllers;

use App\Models\Communes;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CommunesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Communes = Communes::latest()->get();
        return view('admin/geography/communes/index', compact('Communes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/geography/communes/create');

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
        Communes::create([
            'district_code'    => $request->district_code,
            'code'             => $request->code,
            'type'             => $request->type,
            'khmer'            => $request->khmer,
            'english'          => $request->english,
            'village'          => $request->village,
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
     * @param  \App\Models\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function show(Communes $communes,$id)
    {
        $Communes = Communes::whereId($id)->firstOrFail();
        return view('admin/geography/communes/view', compact('Communes'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function edit(Communes $communes,$id)
    {
        $Communes = Communes::whereId($id)->firstOrFail();
        return view('admin/geography/communes/edit', compact('Communes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Communes $communes,$id)
    {
        $Communes = Communes::whereId($id)->first();
        $request->validate([
            'khmer' => 'required',
            'english' => 'required',
        ]);
        $data = [
            'district_code'    => $request->district_code,
            'code'             => $request->code,
            'type'             => $request->type,
            'khmer'            => $request->khmer,
            'english'          => $request->english,
            'village'          => $request->village,
            'reference'        => $request->reference,
            'official_note'    => $request->official_note,
            'note_by_checker'  => $request->note_by_checker,
        ];
        $Communes->update($data);
        Alert::success('Successful', 'Communes is Edited');
        return redirect('/communes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Communes  $communes
     * @return \Illuminate\Http\Response
     */
    public function question($id){
        alert()->question('Delete Communes !', 'Are you sure?')
        ->showConfirmButton('<a href="/communes/' . $id . '/destroy" class="text-white" style="text-decoration: none">Yes I&apos;m sure</a>', '#3085d6')->toHtml()
        ->showCancelButton('Back', '#aaa')->reverseButtons();
        return redirect('/communes');
    }
    public function destroy(Communes $communes,$id)
    {
        $Communes = Communes::select('id')->whereId($id)->firstOrFail();
        $Communes->delete();
        Alert::success('Successful', 'Communes is Deleted');
        return redirect('/communes');
    }
}
