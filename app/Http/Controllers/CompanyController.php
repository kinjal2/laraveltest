<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		 $company = Company::orderBy('id', 'DESC')->get();
        return view('company.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('company.create');
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
	    $image_data='';
		if ($request->hasFile('logo')) { 
            //  Let's do everything here
            if ($request->file('logo')->isValid()) {
                //
                $validated = $request->validate([
                    'name' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|Dimensionmin(100,100)',
                ]);
               $imageName = time().'.'.$request->logo->extension();  
			   $image_data=$imageName;
				$request->logo->move(public_path('images'), $imageName);
  
			} 
		}
		$this->validate($request, [
             'name' => 'required'
        ],
            [
                 'name.required' => 'Enter name',
             ]);
			
        $Company = new Company();
        $Company->name = $request->name;
        $Company->logo = $image_data;
        $Company->email = $request->email;
        $Company->website = $request->website;
		
       
        return redirect()->route('company.index')
                        ->with('success','company created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        //
		return view('company.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        //
		 $request->validate([
            'name' => 'required',
            
        ]);
  
        $company->update($request->all());
  
        return redirect()->route('company.index')
                        ->with('success','company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
		$company->delete();
  
        return redirect()->route('company.index')
                        ->with('success','company deleted successfully');
    }
}
