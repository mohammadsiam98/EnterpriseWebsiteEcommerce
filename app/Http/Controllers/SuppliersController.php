<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
class SuppliersController extends Controller
{

    public function list()
    {
        //
        $suppliers = Supplier::all();
        return view ('pages.suppliers.list',compact('suppliers'));
    }

    public function create()
    {
        //
        return view('pages.suppliers.create');
    }

    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'SupplierName' => 'required|min:2|max:30|string',
            'SupplierMobile' => 'required|min:3|max:100|string',
            'SupplierEmail' => 'required|min:3|max:100|string',
            'SupplierAddress' => 'required|min:3|max:100|string',
            'SupplierDetails' => 'required|min:3|max:100|string',
            'SupplierNationalIDCard' => 'required|min:3|max:100|string',

        ],[
            'SupplierName.required' => 'Please write supplier name',
            // 'SupplierName.unique' => 'This Supplier already exists in our database. Please write another name',
            'SupplierMobile.required' => 'Please write supplier mobile number',
            'SupplierEmail.required' => 'Please write supplier email address',
            'SupplierAddress.required' => 'Please write supplier address',
            'SupplierDetails.required' => 'Please write supplier details',
            'SupplierNationalIDCard.required' => 'Please write supplier national ID Card',
        ]);

        $suppliers = new Supplier;
        $suppliers->SupplierName = $request->SupplierName;
        $suppliers->SupplierMobile = $request->SupplierMobile;
        $suppliers->SupplierEmail = $request->SupplierEmail;
        $suppliers->SupplierAddress = $request->SupplierAddress;
        $suppliers->SupplierDetails = $request->SupplierDetails;
        $suppliers->SupplierNationalIDCard = $request->SupplierNationalIDCard;
        $suppliers->save();
        return redirect()->route('Suppliers.create')->with('success','New Details created Successfully');
    }

    public function edit($id)
    {
        //
        $suppliers = Supplier::find($id);
        return view('pages.suppliers.edit',compact('suppliers'));
    }

    public function update(Request $request, $id)
    {
        //
        $suppliers = Supplier::find($id);
        $suppliers->SupplierName = $request->SupplierName;
        $suppliers->SupplierMobile = $request->SupplierMobile;
        $suppliers->SupplierEmail = $request->SupplierEmail;
        $suppliers->SupplierAddress = $request->SupplierAddress;
        $suppliers->SupplierDetails = $request->SupplierDetails;
        $suppliers->SupplierNationalIDCard = $request->SupplierNationalIDCard;
        $suppliers->save();
        return redirect()->route('Suppliers.list')->with('success','Suppliers details updated successfully');

    }

    public function destroy($id)
    {
        //
        $suppliers = Supplier::find($id);
        $suppliers->delete();
        return redirect()->route('Suppliers.list')->with('success',"Terms And Conditions Deleted Successfully");
    }
}
