<?php
namespace Admin\Model;

use Think\Model;

Class CategoryModel extends Model{
	protected $_validate= array(
		array('category_name','require','分类名必须！'),
		array('category_name,user_id','isUnique','分类名已存在',1,'callback',1),
		array('category_name','','分类名已存在',1,'unique',2),
	);

	protected $_auto=array(
		//array(),
	);
	
	protected function isUnique($data){
		if($this->where($data)->select()){
			return false;
		}else{
			return true;
		}
	}
}