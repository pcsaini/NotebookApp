<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notebook;
use Illuminate\Support\Facades\Auth;

class NotbookController extends Controller
{
    //
    public function index(){
        $user = Auth::user();
        $notebook =$user->notebook;

        return view('notebook.index',compact('notebook'));
    }

    public function create(){
        return view('notebook.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required|min:10|unique:notebooks,name',
            'description'=>'min:10|max:450'
        ]);
        $user = Auth::user();
        $user->notebook()->create($request->all());
        return redirect('/notebook');
    }

    public function edit($id){
        $user = Auth::user();
        $notebook =$user->notebook->find($id);
        //$notebook = Notebook::where('id',$id)->first();
        return view('notebook/edit')->with('notebook',$notebook);
    }

    public function show($id){
        $notebook = Notebook::findOrFail($id);
        $notes = $notebook->notes;
        return view('notes.index',compact('notes','notebook'));
    }
    public function update(Request $request, $id){
        $user = Auth::user();
        $notebook =$user->notebook->find($id);
        $notebook->update($request->all());
        return redirect('/notebook');
    }

    public function destroy($id){
        $user = Auth::user();
        $notebook =$user->notebook->find($id);
        $notebook->delete();
        return redirect('/notebook');
    }
}
