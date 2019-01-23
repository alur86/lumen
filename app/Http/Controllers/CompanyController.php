<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
    
  public function index()
    {
        return response()->json(Company::all());
    }

    public function show($id)
    {
        return response()->json(Company::find($id));
    }

    public function create(Request $request)
    {
        $company = Company::create($request->all());

        return response()->json($company, 201);
    }

    public function update($id, Request $request)
    {
        $company = Company::findOrFail($id);
        $company->update($request->all());

        return response()->json($company, 200);
    }

    public function delete($id)
    {
        Company::findOrFail($id)->delete();
        return response('Deleted company successfully', 200);
    }




}
