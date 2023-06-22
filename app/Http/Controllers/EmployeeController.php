<?php

namespace App\Http\Controllers;
use App\Models\Employee;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('index');

    }
    public function view()
    {
        $view=Employee::all();
        return view('view',compact('view'));
    }
 
public function delete($id)
{
    Employee::find($id)->delete();
    return redirect()->route('view');
}

public function edit($id)
{
    $data=Employee::find($id);
    return view('edit',compact('data'));
}
public function update(Request $request,$id)
{
    $data=Employee::find($id);
    $request->validate([
        'email'=>'email',
    ]);
    $data->employee_name=$request->input('employee_name');
    $data->place=$request->input('place');
    $data->email=$request->input('email');
    $data->update();
    return redirect()->route('view');
}
}
