<?php
namespace Admin\Controller;

use Common\Controller\AdminController;

class IndexController extends AdminController
{
    public function index()
    {
    	$User = M('user')->find(session('user_id'));
    	$this->assign('result',$User);
        $this->display();
    }
}