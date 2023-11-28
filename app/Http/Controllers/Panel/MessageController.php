<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function message(){
        $messages = Lead::query()->latest()->paginate(10);
        return view('backend.messages.index', compact('messages'));
    }

    public function messageStore(Request $request){

//        $data = $request->validate([
//            'name' => 'required|max:30',
//            'email' => 'required|email',
//            'message' => 'sometimes'
//        ]);
//
//        $name = $request->input('name');
//        $email = $request->input('email');
//
//        return $name."....".$email;


        $data = Validator::make($request->all(), [
            'name' => 'required|max:30',
            'email' => 'required',
            'message' => 'sometimes'
        ]);


        if ($data->fails()){
            toast('Have Some Problem, Try Again...', 'error');
            return back();
        }

        Lead::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message') ?? NULL
        ]);
        toast('Send For Process Your Request', 'success');
        return back()->with('message', 'Send For Process Your Request');
    }

    public function messageDelete($id){
        $lead = Lead::findOrFail($id);
        $lead->delete();
        toast('Lead Deleted Successful...', 'success');
        return back();

    }

}
