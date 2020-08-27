<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\UploadImage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.companies')->with('companies', Company::paginate(10));
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
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'logo' => 'required',
            'website' => 'required',
        ]);

        $company = new Company;
        $company->name = $request->name;
        $company->email = $request->email;
        $company->logo = UploadImage::upload($request, 'logo');
        $company->website = $request->website;
        $company->save();

        return back()->with('success', 'Company has been created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
      
        if($request->ajax()) {
            return response (Company::find($request->company_id));
        }
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
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'logo' => 'required',
            'website' => 'required',
        ]);

        Company::where('id', $request->edit_company_id)
        ->update([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'logo' => UploadImage::upload($request, 'logo')
        ]);

        return back()->with('success', 'Company has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company = Company::find($id);
        $company->delete();

        return back()->with('success', 'Company has been deleted!');
    }
}
