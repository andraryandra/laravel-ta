<?php

namespace App\Http\Controllers\EodReport;

use App\Http\Controllers\Controller;
use App\Models\EodCategory;
use Illuminate\Http\Request;

class EodCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eod_categories = EodCategory::get();
        return view('projects.page-projects.eod-category.index',
        compact('eod_categories')
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eod_categories = EodCategory::get();
        return view('projects.page-projects.eod-category.create',
        compact('eod_categories')
    );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $eod_categories = EodCategory::create([
            'name_categories' => $request->name_categories,
        ]);

        if($eod_categories)
        {
            return redirect()->route('eod-categories.index')->withSuccess('Data Berhasil Disimpan!');
        } else {
            return redirect()->route('eod-categories.create')->withError('Data Gagal Disimpan!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $eod_categories = EodCategory::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $eod_categories = EodCategory::findOrFail($id);
        return view('projects.page-projects.eod-category.edit',
        compact('eod_categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $eod_categories = EodCategory::where('id', $id)->update([
            'name_categories' => $request->name_categories,
        ]);

        if($eod_categories)
        {
            return redirect()->route('eod-categories.index')->withSuccess('Data Berhasil Diupdate!');
        } else {
            return redirect()->route('eod-categories.edit')->withSuccess('Data Gagal Diupdate!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $eod_categories = EodCategory::findOrFail($id);
        $eod_categories->delete();

        if($eod_categories)
        {
            return redirect()->route('eod-categories.index')->withSuccess('Data Berhasil Dihapus!');
        } else {
            return redirect()->route('eod-categories.index')->withSuccess('Data Gagal Dihapus!');
        }
    }
}
