<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class DemoController extends Controller
{
    
    public function __construct() {
        
    }

    public function view($id,$name) {
        $data = $this->test();
        return view('user-views.new-file',[ 'data' => $data ]);
    }


    public function test() {
        $data   = [ 'namesdfds' => 'Nanum Coder' , 'id' => 1 ];
        return $data;
    }

    public function postData(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $todo   = new Todo;
        $todo->name = $request->name;
        $todo->save();
        
        return redirect()->back()->with('message','Data Inserted Succesfully!');
    }
}
