<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

use App\Http\Requests;
use App\Http\Controllers\EmployeeController;
use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Http;

class EmployeeController extends Controller
{

   
     public function employeeList() {
      $employee=Employee::get();
        return view('employee/employeeList')->with('employee',$employee);
    }

     
    public function viewEmployee($ID) {
      $employee=Employee::where([['id',$ID]])->select('*')->first();
        return view('employee/viewEmployee')->with('employee',$employee);
    }   

   
    public function addemployee() {
      $employee=Employee::get();
        return view('employee/addemployee')->with('employee',$employee);
    }
             
     public function submitemployee(Request $request )
    {

          $input=$request->all();
  
           $validator = Validator::make($request->all(), [
              
                        // 'EmployeeName' => 'required',
                                    ]);
  
            if ($validator->fails()) {
              return redirect()->back()->withErrors($validator)->withInput();
  
                }
               else{
               
                  $EmployeeName=$input['name'];
                 $Emailid=$input['email'];
                  $password=$input['password'];
                   $contact=$input['contact'];
                   $Address=$input['address'];
              // model name
                    Employee::insertGetId([
                  
                
                      'name'=>$EmployeeName,
                       'email'=>$Emailid,
                       'password'=>$password,
                         'contact'=>$contact,
                        'address'=>$Address,
                       
  
                   ]);
                       }
                return redirect('/employeeList')->with('message','Success! Employee Added Successfully'); 
  
                    }
                   
                   
                    public function editemployee($ID) {
                      $employee=Employee::where([['id',$ID]])->select('*')->first();
                        return view('employee/editemployee')->with('employee',$employee);
                    }                      
                    
                    public function updateEmployee(Request $request )
                   {

                      $input=$request->all();
  
                     $validator = Validator::make($request->all(), [
              
                        // 'EmployeeName' => 'required',
                                    ]);
  
            if ($validator->fails()) {
              return redirect()->back()->withErrors($validator)->withInput();
  
                }
               else{
                 $Employeeid=$input['id'];
                  $EmployeeName=$input['name'];
                 $Emailid=$input['email'];
                  $password=$input['password'];
                   $contact=$input['contact'];
                   $Address=$input['address'];
              // model name
                    Employee::where('id',$Employeeid)->update([
                  
                
                      'name'=>$EmployeeName,
                       'email'=>$Emailid,
                       'password'=>$password,
                         'contact'=>$contact,
                        'address'=>$Address,
                        'updated_at'=>date("Y-m-d H:i:s"),
                       
  
                   ]);
                       }
                return redirect('/employeeList')->with('message','Success! Employee Added Successfully'); 
  
                    }

                    public function deleteEmployee($ID)
                    {
                   $employee=Employee::find($ID);
                   if($employee){
                    $employee->delete([
                      'isDelete'=>"-1",
                    ]);

                   }
                        return redirect('/employeeList')->with('flash_message', 'employee list deleted!');  
                    }

                   
                
 public function goback() {
      $employee=Employee::get();
      return redirect('/employeeList')->with('flash_message', 'employee list viewed!');  
    }
            
                }
                
                       
                  



                      

                    