<?php

namespace App\Http\Controllers;

use App\Models\CV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\File;

class CvController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        // $cv = CV::where('user_id',Auth::user()->id)->get();
        $cv = Auth::user()->cvs;
        return view('cv.index')->with([
            'cvs'=>$cv
        ]);
    }
    public function create(){
        return view('cv.create');
    }
    public function store(Request $request){
        $cv = new CV();
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->user_id = Auth::user()->id;
        // if($request->hasFile('image'))  {
           
            // $cv->image=$request->file('image')->store('image');
            // $cv->image=$request->file('image')->store('image');
            $cv->image = $request->file('image')->store('images');
        // }
        $cv->save();
        session()->flash('flash_msg','Le CV est ajoutée avec succées');
        return redirect('cvs');
    }
    public function edit($id){
        $cv = CV::find($id);
        return view('cv.edit')->with([
            'cvs'=>$cv
        ]);
    }
    public function update(Request $request,$id){
        $cv = CV::find($id);
        $cv->titre = $request->input('titre');
        $cv->presentation = $request->input('presentation');
        $cv->image = $request->file('image')->store('images');
        $cv->save();
        return redirect('cvs');
    }
    public function destroy($id){
        $cv = CV::find($id);

        $cv->delete();
        return redirect('cvs');
    }
    public function details($id){
        $cv = CV::find($id);
        return view('cv.details')->with([
            'cvs'=>$cv
        ]);
    }
}
