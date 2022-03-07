<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\termsConditions;
use Auth;
use Illuminate\Support\Str;

class termsConditionsController extends Controller
{

    public function list()
    {
        //
        $TermsConditions = termsConditions::all();
        return view ('pages.terms_Conditions.list',compact('TermsConditions'));
    }

    public function create()
    {
        //
        $TermsConditions = termsConditions::first();
        return view('pages.terms_Conditions.create',compact('TermsConditions'));
    }

    public function store(Request $request)
    {
        //
        $TermsConditions = new TermsConditions;
        
        $TermsConditions->termsConditionsDetails = $request->termsConditionsDetails;

        $TermsConditions->save();
        
        return redirect()->route('termsConditions.list')->with('success','New Details created Successfully');
    }

    public function edit($id)
    {
        //
        $TermsConditions = termsConditions::find($id);
        return view('pages.terms_Conditions.edit',compact('TermsConditions'));
    }


    public function update(Request $request, $id)
    {
        //
        $TermsConditions                = termsConditions::find($id);
        $TermsConditions->termsConditionsDetails       = $request->termsConditionsDetails;
        $TermsConditions->save();
        
        return redirect()->route('termsConditions.list')->with('success','TermsConditions details updated Successfully');

    }

    public function destroy($id)
    {
        //
        $TermsConditions = termsConditions::find($id);
        $TermsConditions->delete();
        return redirect()->route('termsConditions.list')->with('success',"Terms And Conditions Deleted Successfully");
    }
}
