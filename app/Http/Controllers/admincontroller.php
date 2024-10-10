<?php
namespace App\Http\Controllers;
use App\Models\Tbltools;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class admincontroller extends Controller
{
    public function a_tools(Request $res)
    {
        //  dd($res->all());
            if (isset($res->submit)) {
                $image = $res->file('image');
                $name = $image->getClientOriginalName();
                $path = "images/";
                $originalFile = $image->move($path, $name);
                $arr = array(
                    "name" => $res->name,
                    "Rate_Per_Day" => $res->r_p_d,
                    "Rate_Per_Month" => $res->r_p_m,
                    "Rate_Per_Year" => $res->r_p_y,
                    "Rate_Per_Hour_With_Operator" => $res->r_p_h_w_o,
                    "Location" => $res->Location,
                    "Discription" => $res->Discription,
                    "cat_id" => $res->cat_id,
                    "img" => $originalFile
                );
                $data=Tbltools::insert($arr);
                return redirect('/u_tools');
                // die();
            }
            $data = Tbltools::get();
            return view("admin/Tools")->with("data",$data);
        }     
        public function at_delete(Request $req ,$id)
        {
                 Tbltools::where('id',$id)->delete();
                 return redirect('/a_tools');     
        }  
        // public function at_update(Request $req ,$id)
        // {
        //      if(isset($req->submit))
        //      {
        //         $image = $req->file('image');
        //         $name = $image->getClientOriginalName();
        //         $path = "images/";
        //         $originalFile = $image->move($path, $name);
        //         $arr = array(
        //             "name" => $req->name,
        //             "Rate_Per_Day" => $req->r_p_d,
        //             "Rate_Per_Month" => $req->r_p_m,
        //             "Rate_Per_Year" => $req->r_p_y,
        //             "Rate_Per_Hour_With_Operator" => $req->r_p_h_w_o,
        //             "Location" => $req->Location,
        //             "Discription" => $req->Discription,
        //             "cat_id" => $req->cat_id,
        //             "img" => $originalFile
        //         );
        //         Tbltools::where('id',$id)->update($arr);
        //         return redirect('/a_tools');
        //      }
        //      $data = Tbltools::where('id',$id)->get();
        //      return view("user/Tooldetails")->with("data",$data);
        // }    
        
        
    
   
 }