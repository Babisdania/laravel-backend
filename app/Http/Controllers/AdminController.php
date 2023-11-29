<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

use App\Http\Requests;
use App\Http\Controllers\AdminController;
use Session;
use Carbon;
use Illuminate\Support\Facades\Validator;


use Illuminate\Support\Facades\Http;
class AdminController extends Controller
{

   
     public function adminList() {
      $admin=Admin::get();
        return view('admin/adminList')->with('admin',$admin);
    }

    public function addadmin() {
        $admin=Admin::get();
          return view('admin/addadmin')->with('admin',$admin);
      }

    public function submitadmin(Request $request)
    {

          $input=$request->all();
  
           $validator = Validator::make($request->all(), [
              
                        // 'AdminName' => 'required',
                                    ]);
  
            if ($validator->fails()) {
              return redirect()->back()->withErrors($validator)->withInput();
  
                }
               else{
                
                $AdminName=$input['Name'];
                   $Adminemail=$input['Email'];
                   $Admincontact=$input['Contact'];
                   $AdminAddress=$input['Address'];
              // model name
                   Admin::insertGetId([
                    
                     'Name'=>$AdminName,
                      'Email'=>$Adminemail,
                        'Contact'=>$Admincontact,
                        'Address'=>$AdminAddress,
  
                   ]);
                       }
                return redirect('/adminList')->with('message','Success! Admin Added Successfully'); 
  
                    }
                    public function editadmin($ID) {
                      $admin=Admin::where([['id',$ID]])->select('*')->first();
                        return view('admin/editadmin')->with('admin',$admin);
                    }
              
                    public function updateAdmin(Request $request)
               {

                      $input=$request->all();
  
                     $validator = Validator::make($request->all(), [
              
                        // 'AdminName' => 'required',
                                    ]);
  
            if ($validator->fails()) {
              return redirect()->back()->withErrors($validator)->withInput();
  
                }
               else{
                $Adminid=$input['id'];
                 $AdminName=$input['Name'];
              
                  $Adminemail=$input['Email'];
                   $Admincontact=$input['Contact'];
                   $AdminAddress=$input['Address'];
              // model name
             Admin::where('id',$Adminid)->update([
                  
                    
                     'Name'=>$AdminName,
                     
                        'Contact'=>$Admincontact,
                        'Email'=>$Adminemail,
                        'Address'=>$AdminAddress,
                        'updated_at'=>date("Y-m-d H:i:s"),
  
                   ]);
                       }
                return redirect('/adminList')->with('message','Success! Admin Added Successfully'); 
  
                    }

                    public function viewAdmin($ID) {
                      $admin=Admin::where([['id',$ID]])->select('*')->first();
                        return view('admin/viewAdmin')->with('admin',$admin);
                    }
                    public function goback() {
                      $admin=Admin::get();
                    return redirect('/adminList')->with('message','Success! Admin viewed Successfully'); 
                       
                    }
               

                }