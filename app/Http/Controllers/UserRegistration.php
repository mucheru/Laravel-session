<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Department;
use Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use App;
use PDF;




class UserRegistration extends Controller
{
    //
    public function index(Request $request)
    {
        $users=new User;
        $users->firstname=$request->input('firstname');
        $users->middlename=$request->input('middlename');
        $users->lastname=$request->input('lastname');
        $users->email=$request->input('email');
        $users->password=Hash::make($request->input('password'));
        $users->department_id=$request->input('department_id');
        $users->save();
        return redirect('/users');

    }

    function department(Request $request)
    {
        $department=new Department;
        $department->department_name=$request->input('department');
        $request->session()->put('department',$department);
        $request->session()->flash('department', 'Department was created successful!');
        $department->save();        
        return redirect ('viewdepartment');     
        
        //return $request;

    }

    public function getdepartments()
    {
        $data=Department::all();
        return view('createUser',['departments'=>$data]);

    }

    public function getuser()
    {
        $data=User::all();
        return view('userlist',['data'=>$data]);
    }
    public function exportdata()
    {
        //return ('hello');
        return Excel::download(new UsersExport,'users.xlsx' );
    }  

    Public function displayDepartment()
    {
        $data=Department::all();
        return view('viewDepartment',['departments'=>$data]);

    }
    public function gen()
    {
        //$pdf = App::make('dompdf.wrapper');
        //$pdf->loadHTML('<h1>Hello small pdf</h1>');
        //return $pdf->stream();
        $data=Department::all();
        $pdf = PDF::loadView('viewDepartment', ['departments'=>$data]);
        return $pdf->download('department.pdf');
    }

        
}

class UsersExport implements FromCollection,WithHeadings
    {
        public function collection()
        {
            //return ('hello');
            return $data=User::all();
        }
        public function headings():array
    {
        return [
        'id',
        'firstname',
        'second name',
        'Last Name',
        'Email Address',  
 
    
    ];
    }
}
