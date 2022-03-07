<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\privacyPolicy;
use Auth;
use Illuminate\Support\Str;

class privacyPolicyController extends Controller
{  public function showPage()
    {
        $privacyDetails = privacyPolicy::all();
        return view ('pages.privacy_Policies.privacy_policy',compact('privacyDetails'));
    }

    public function list()
    {
        //
        $privacyDetails = privacyPolicy::all();
        return view ('pages.privacy_Policies.list',compact('privacyDetails'));
    }

    public function create()
    {
        //
        $privacyDetails = privacyPolicy::first();
        return view('pages.privacy_Policies.create',compact('privacyDetails'));
    }

    public function store(Request $request)
    {
        //
        $privacyDetails = new privacyPolicy;
        
        $privacyDetails->privacyPolicies = $request->privacyPolicies;

        $privacyDetails->save();
        
        return redirect()->route('privacyPolicy.list')->with('success','New Details created Successfully');
    }

    public function edit($id)
    {
        //
        $privacyDetails = privacyPolicy::find($id);
        return view('pages.privacy_Policies.edit',compact('privacyDetails'));
    }

    public function update(Request $request, $id)
    {
        //
        $privacyDetails                = privacyPolicy::find($id);
        $privacyDetails->privacyPolicies = $request->privacyPolicies;
        $privacyDetails->save();
        
        return redirect()->route('privacyPolicy.list')->with('success','TermsConditions details updated Successfully');

    }

    public function destroy($id)
    {
        //
        $privacyDetails = privacyPolicy::find($id);
        $privacyDetails->delete();
        return redirect()->route('privacyPolicy.list')->with('success',"Terms And Conditions Deleted Successfully");
    }
}
