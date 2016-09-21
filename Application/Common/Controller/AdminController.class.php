<?php
	namespace Common\Controller;
	use Think\Controller;

	class AdminController extends Controller
	{
		public function _initialize(){
        	//parent::_initialize();
        	if(session('admin')!='is_login'){
        		redirect(U('Admin/Login/login'));
        	}
   		}

   		public function logout(){
   			session('admin',null);
   			session('user_id',null);
   			redirect(U('Admin/Login/login'));
   		}
	}