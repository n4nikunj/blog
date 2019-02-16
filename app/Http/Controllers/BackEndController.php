<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CommonController;
use Session;

class BackEndController extends Controller
{
    public $data;
    public $common;
    
    public function __construct(Request $request) {
        $this->data=array();
        $this->common = new CommonController($request);
    } public function login() {
        return view('backend.login')->with($this->data);
    } public function checkLogin(Request $request) {
		try{
			$postData = $request->all();
			$loginstatus = $this->common->verifylogin($postData);
			if ($loginstatus == true) {
				 return redirect('panel/dashboard');
			}
			return view('backend.login')->with($this->data);
		}catch (\Exception $e) {
			 return $e->getMessage();
		}	
    } public function dashBoard() {
        try{
            if($this->common->checklogins() == false){ return redirect('panel'); }
            $menu = $this->common->getMenu();
            $this->data['menu']= $menu;
            return view('backend.dashboard')->with($this->data);
        }catch (\Exception $e) {
			return $e->getMessage();
		}
    } public function userList() {
        try {
            if($this->common->checklogins() == false){ return redirect('panel'); }
            $menu = $this->common->getMenu();
            $this->data['menu']= $menu;
            $where=array("roleId"=>"2");
            $result = $this->common->getData('users',$where);
            $this->data['userList']= $result;
            return view('backend.userList')->with($this->data);
        }catch (\Exception $e) {
			return $e->getMessage();
		}
    } public function blogList() {
        try {
            if($this->common->checklogins() == false){ return redirect('panel'); }
            $menu = $this->common->getMenu();
            $this->data['menu']= $menu;
            $role = (string)Session::get('userDetail')['userType'];
            $where = array();
            if ($role != "1") {
                $where=array("blogPostBy"=>$role);
            }
            $result = $this->common->getData('blog',$where);
            //print_r($result);exit;
            $this->data['blogList']= $result;
            return view('backend.blogList')->with($this->data);
        }catch (\Exception $e) {
			return $e->getMessage();
		}
    } public function blogAdd() {
        try {
            if($this->common->checklogins() == false){ return redirect('panel'); }
            $menu = $this->common->getMenu();
            $this->data['menu']= $menu;
            return view('backend.blogAdd')->with($this->data);
        }catch (\Exception $e) {
			return $e->getMessage();
		}
    }  public function userAdd() {
        try {
            if($this->common->checklogins() == false){ return redirect('panel'); }
            $menu = $this->common->getMenu();
            $this->data['menu']= $menu;
            return view('backend.userAdd')->with($this->data);
        }catch (\Exception $e) {
			return $e->getMessage();
		}
    } public function blogEdit($id) {
        try {
            if($this->common->checklogins() == false){ return redirect('panel'); }
            $menu = $this->common->getMenu();
            $this->data['menu']= $menu;
            $where=array("id"=>$id);
            $result = $this->common->getData('blog',$where);
            $this->data['blogdata']=$result;
            return view('backend.blogEdit')->with($this->data);
        }catch (\Exception $e) {
			return $e->getMessage();
		}
    }
	  public function userSubmit(Request $request) {
         try {
            if($this->common->checklogins() == false){ return redirect('panel'); }
            $postData = $request->all();
          
            $param = array("name"=>$postData['name'],"email"=>$postData['email'],"password"=>md5($postData['pass']),'roleId'=>2);
            $this->common->insertData('users',$param);
            return redirect('panel/users/list');
        }catch (\Exception $e) {
			return $e->getMessage();
		}  
    }
     public function blogSubmit(Request $request) {
         try {
            if($this->common->checklogins() == false){ return redirect('panel'); }
            $postData = $request->all();
            $imgname="";
            if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imgname = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images/user');
            $image->move($destinationPath, $imgname);
            }
            $postBy = (string)Session::get('userDetail')['id'];
            $param = array("blogName"=>$postData['blogname'],"blogTitle"=>$postData['title'],"blogPostDate"=>$postData['date'],"blogDecription"=>$postData['desc'],"blogImgName"=>$imgname,"blogPostBy"=>$postBy);
            $this->common->insertData('blog',$param);
            return redirect('panel/blog/list');
        }catch (\Exception $e) {
			return $e->getMessage();
		}  
    } public function blogUpdate(Request $request) {
        try {
            if($this->common->checklogins() == false){ return redirect('panel'); }
            $postData = $request->all();
            $where=array("id"=>$postData['id']);
            $param = array("blogName"=>$postData['blogname'],"blogTitle"=>$postData['title'],"blogPostDate"=>$postData['date'],"blogDecription"=>$postData['desc']);
            $this->common->updateData('blog',$where,$param);
            return redirect('panel/blog/list');
        }catch (\Exception $e) {
			return $e->getMessage();
		}
    }
    public function blogDelete($id) {
        $where=array("id"=>$id);
        $this->common->deleteData('blog',$where);
        return redirect('panel/blog/list');
    }
	public function signout(){
		Session::flush();
		return redirect('panel');
	}
	public function error()
	{	 $menu = $this->common->getMenu();
            $this->data['menu']= $menu;
		return view('backend.error')->with($this->data);
	}
}