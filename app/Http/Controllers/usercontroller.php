<?php
namespace App\Http\Controllers;
use App\Models\Tblregister;
use App\Models\Tbltools;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function register(Request $req)
    {
            if (isset($req->submit)) {
                $name = $req->name;
                $email = $req->email;
                $password = $req->password;
                $data = Tblregister::where('email', $email)->first();
                if (!$data) {
                    $arr = array('name' => $name, 'email' => $email, 'password' => $password);
                    Tblregister::insert($arr);
                    return redirect('/login');
                } else {
                    echo "Email alredy exist";
                }
            }
            Tblregister::get();
            return view('register');
    
    }
    public function login(Request $req)
    {
          if($req->submit)
          {
            $email = $req->email;
            $password = $req->password;
            $data = Tblregister::where('email', $email)->first();
              if($data->password!=$password)
              {
                  echo "wrong password/email";
              }
              else{
                  session(['id' => $data->id]);
                  session(['name' => $data->name]);
                  return redirect('/index');
              }
          }
          return view('login');
    }
    public function index(Request $req)
    {
        return view('user/index');
    }
  function  u_tools(Request $res){
              $data = Tbltools::get();
              return view('user/Tools')->with('data',$data);
    }      
}
