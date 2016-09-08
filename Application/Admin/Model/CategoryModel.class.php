<?php
namespace Admin\Model;

use Think\Model;

Class CategoryModel extends Model{
	protected $_validate= array(
		array('category_name','','分类名已存在',0,'unique',3),

	);

	protected $_auto=array(
		//array(),
	);
}