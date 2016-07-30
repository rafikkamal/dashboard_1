<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Vendor as Vendor;
use Illuminate\Support\Facades\Session;

class VendorController extends Controller {

    public function index() {
        $vendors = Vendor::all();
        return view('vendors.index', ['vendors' => $vendors]);
    }
    public function createVendor(){
        return view('vendors.create');
    }
    public function storeVendor(Request $request){
        $vendor = new Vendor;
        $vendor->title = $request['title'];
        $vendor->email = $request['email'];
        $vendor->phone = $request['phone'];
        $vendor->mobile = $request['mobile'];
        $vendor->address = $request['address'];
        $vendor->status = $request['status'];
        
        $vendor->save();
        Session::flash('success', 'The vendor has been successfully added');
        return redirect()->route('vendors.index');
    }
    public function editVendor($id){
        $vendor = Vendor::find($id);
        return view('vendors.edit', ['vendor' => $vendor]);
    }
    public function updateVendor(Request $request,$id){
        $vendor = Vendor::find($id);
        $vendor->title = $request['title'];
        $vendor->email = $request['email'];
        $vendor->phone = $request['phone'];
        $vendor->mobile = $request['mobile'];
        $vendor->address = $request['address'];
        $vendor->status = $request['status'];
        $vendor->save();
        return redirect()->route('vendors.show');
    }
    public function showVendor(){
        $vendors = Vendor::orderBy('id', 'ASC')->paginate(20);
        return view('vendors.show', ['vendors' => $vendors]);
    }
    public function deleteVendor($id){
        $vendor = Vendor::find($id);
        $vendor->delete();
        Session::flash('success', 'The vendor was successfully deleted.');
        return redirect()->route('vendors.index');
    }

}
