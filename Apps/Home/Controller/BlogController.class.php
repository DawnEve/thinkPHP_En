<?php
namespace Home\Controller;
use Think\Controller;

class BlogController extends Controller {
    public function index(){
		echo 'BlogController->index';
		
		//D('User'); //实例化UserModel
		//D('User','Logic'); //实例化UserLogic
	}
	public function test(){
	   //echo 'user->test method.';
	   echo U("Blog/index") . '<hr>';
	   
       // redirect(U("Blog/index"),3,'3s后跳转到首页' );
	   $this->redirect("index",array('id'=>2),3,'3s后跳转到首页' );
	   
	   //$this->display();
	}
	
	//url生成
	function login(){
		//C('URL_MODEL', 0);
		echo C('URL_MODEL') . ' - ';
	    echo U('User/login');
	    //0 - /index.php?m=&c=user&a=login
	    //1 - /index.php/user/login.html
	    //2 - /user/login.html
	    //3 - /index.php?s=/user/login.html
	}
	
	//页面模板
	function page(){
	   $this->display();
	}
}