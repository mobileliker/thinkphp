<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
	public function login()
	{
		if(IS_POST){
			$data = I('post.');
			if($this->check_verify($data['verify'])){
				$Users = M('user');
				$temp['username'] = $data['username'];
				$result = $Users->where($temp)->select();
				if($result){
					for($i=0;$i<count($result);$i++){
						if($result[$i]['username']===$data['username']) break;
					}
					if($i<count($result)){
						if($result[$i]['password']===$data['password']){
							session('admin','is_login');
							session('user_id',$result[$i]['id']);
							$this->success('登录成功！',U('Admin/Index/index'));
						}else{
						//$this->error(print_r($data));
						$this->error('密码输入错误');
						}
					}else{
						$this->error('用户名不存在');
					}
				}else{
					$this->error('用户不存在');
				}
			}else{
			 	$this->error('验证码错误');
			}
		}else{
			$this->display();
		}
	}

	public function showVerify()
	{
		$Verify = new \Think\Verify();
		$Verify->fontSize =30;
		$Verify->length = 4;
		$Verify->entry();
	}

	function check_verify($code, $id = ''){
		$verify = new \Think\Verify();
		return $verify->check($code, $id);
	}
}
