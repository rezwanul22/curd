<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Crud;
use Session;

class CrudController extends Controller
{
    public function showdata(){
        // $showData =Crud::all();
        //$showData =Crud::paginate(5);
        $showData =Crud::simplepaginate(4);
        return view('show_data',compact('showData'));

    }

    public function addData(){
        return view('add_data');

    }
    public function storeData(Request $request){
        $rules = [
            'name'=>'required|max:10',
            'email'=>'required|email',
        ];
        $cm =[
            'name.required'=>'Enter your name',
            'name.max'=>'your name can not contain more than 10 ch',
            'email.required'=>'Enter your email',
            'email.email'=>'Email must be a valid email',
        ];
        $this->validate($request, $rules,$cm);

        $cruds = new Crud();
        $cruds->name = $request->name;
        $cruds->email = $request->email;
        $cruds->save();
        Session::flash('msg','Data successfully Added');

        return redirect('/');
    }

    public function editData($id=null){

        $editData = Crud::find($id);
        return view('edit_data',compact('editData'));
    }


    public function updateData(Request $request,$id){
        $rules = [
            'name'=>'required|max:10',
            'email'=>'required|email',
        ];
        $cm =[
            'name.required'=>'Enter your name',
            'name.max'=>'your name can not contain more than 10 ch',
            'email.required'=>'Enter your email',
            'email.email'=>'Email must be a valid email',
        ];
        $this->validate($request, $rules,$cm);

        $cruds = Crud::find($id);
        $cruds->name = $request->name;
        $cruds->email = $request->email;
        $cruds->save();
        Session::flash('msg','Data successfully update');

        return redirect('/');
    }
    public function deleteData($id=null){
     $deletedata = crud::find($id);
     $deletedata->delete();

     Session::flash('msg','Data successfully deleted');

        return redirect('/');

    }
}
