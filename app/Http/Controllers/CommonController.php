<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CommonController extends Controller
{
    public $requestData;
    public function __construct(Request $request) {
        $this->requestData = $request;
    } public function verifylogin($postData) {
        
        $count =  DB::table('users')->where('email', $postData['login'])->where('password', md5($postData['password']))->count();
        if ($count == 1) {
		    $result =  DB::table('users')->where('email', $postData['login'])->where('password', md5($postData['password']))->get();
			$sessionArr=array("userType"=>$result[0]->roleId,"name"=>$result[0]->name,"email"=>$result[0]->email,'id'=>$result[0]->id);
			session(['userDetail' => $sessionArr]);
			
		    return true;
		}
        
       return false;
    } public function getMenu() {
		if(!empty(Session::get('userDetail')['userType']))
		{
			 $result =  DB::table('menu')->where('role',  'like', '%' .Session::get('userDetail')['userType'] . '%')->where('status','Active')->get();
			
			 return $result;
		}
	} public function getData($table,$where=array()) {
		if(!empty($where)) {
			$result =  DB::table($table)
			->where($where)
			->get();
		} else {
			$result =  DB::table($table)->get();
		}
			
		return $result;
	} public function insertData($table,$param) {
		    $result =  DB::table($table)
			->insert($param);
	} public function updateData($table,$where,$param) {
			DB::table($table)
            ->where($where)
            ->update($param);
	} public function deleteData($table,$where) {
			DB::table($table)
            ->where($where)
            ->delete();
	} public function checklogins()
	{
		if(!empty(Session::get('userDetail')['userType'])){
			return true;
		}
		else{
			return false;
		}
	}
}
