<?php
namespace Admin\Controller;

use Think\Controller;

class CategoryController extends Controller
{
	public function show()
	{
		$Categories = M('category');
		// print_r($Categories->find(1));
		$result = $Categories->select();
		$this->assign('result',$result);
		$this->display();
	}

    public function add()
    {
        
    }
}