<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function message(){
        $messages = Lead::paginate(10);
        return view('backend.messages.index', compact('messages'));
    }

    public function messageStore(Request $request){
        $data = $request->validate([
            'name' => 'required|max:30',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        Lead::create($data);

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
