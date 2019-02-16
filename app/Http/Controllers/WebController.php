<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\CommonController;
use Session;

class WebController extends Controller
{
    public $data;
    public $common;
	
    public function __construct(Request $request) {
        $this->data=array();
        $this->common = new CommonController($request);
    } public function index() {
		$result = $this->common->getData('blog');
		$this->data['blogList']= $result;
        return view('index')->with($this->data);
    } public function veiwBlog($name,$id) {
		$where=array('id'=>$id);
		$result = $this->common->getData('blog',$where);
		$this->data['blogDetail']= $result;
        return view('view')->with($this->data);
    }
}
