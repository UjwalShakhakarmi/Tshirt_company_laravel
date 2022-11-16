<?php

namespace App\Http\Controllers;
use App\Models\project;

use Illuminate\Http\Request;

class projectController extends Controller
{
    public function index(){
        return view('welcome',['List'=>project::all()]);
    }
    public function saveList(Request $req){
        $obj = new project();
        $obj->BatchNo = $req->batch_no;
        $obj->Quantity = $req->quantity;
        $obj->DateOfManufactrue = $req->created_at;
        $obj->Status = $req->status;
        $obj->Remarks = $req->remark;
        $obj-> save();
        return redirect('/');
    }
    public function delete($BatchNo){

        $data = project::find($BatchNo);
        $data->delete();
        return redirect('/');
    }
    public function edit($id){
        
        $data = project::find($id);
        return view('edit',['value'=> $data]);

    }
    public function update(Request $req){
        $obj = project::find($req->id);
        $obj->BatchNo = $req->editbatch;
        $obj->Quantity = $req->editquantity;
        $obj->DateOfManufactrue = $req->edit_date;
        $obj->Status = $req->edit_status;
        $obj->Remarks = $req->edit_remark;
        $obj->save();
        return redirect('/');

    }
}
