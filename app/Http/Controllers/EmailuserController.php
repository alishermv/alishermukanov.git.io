<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emailuser;

class EmailuserController extends Controller
{
    public function index() {
        return view('emailuser');
    }
    public function store(Request $request) {
        $emailuser = new Emailuser();

        $emailuser->name = $request->input('name');
        $emailuser->surname = $request->input('surname');
        $emailuser->email = $request->input('email');
        


        if($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/emailuser/', $filename);
            $emailuser->image = $filename;
        } else {
            return $request;
            $emailuser->image = '';
        }
        $emailuser->save();
        return view('emailuser')->with('emailuser', $emailuser);
    }
}
