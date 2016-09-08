<?php
namespace Admin\Controller;

use Think\Controller;

class CategoryController extends Controller
{
	private $Categories;

	//初始化
	public function __construct(){
        parent::__construct();
        $this->Categories=D('category');
    }

    //显示
	public function show()
	{
		$result = $this->Categories->select();
		$this->assign('result',$result);
		$this->display();
	}

	//增加
    public function add()
    {
        $this->display();
    }

    public function create()
    {
		if($this->Categories->create()) {
		$result = $this->Categories->add();
		if($result) {
			$this->success('数据添加成功！');
		}else{
			$this->error('数据添加错误！');
		}
		}else{
			$this->error($this->Categories->getError());
		}
    }

    //修改
    public function edit($id)
    {
    	$result = $this->Categories->find($id);
    	$this->assign('result',$result);
		$this->display();
    }

    public function update()
    {
		if($this->Categories->create()) {
		$result = $this->Categories->save();
		if($result!==false) {
			$this->success('数据更新成功！');
		}else{
			$this->error('数据更新错误！');
		}
		}else{
			$this->error($this->Categories->getError());
		}
    }

    //删除
    public function delete($id)
    {
    	$result = $this->Categories->delete($id);
    	if($result) {
			$this->success('数据删除成功！');
		}else{
			$this->error('数据删除错误！');
		}
    }	
}