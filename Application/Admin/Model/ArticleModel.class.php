<?php
	namespace Admin\Model;

	use Think\Model;

	Class ArticleModel extends Model{
		protected $_validate= array(
			

		);

		protected $_auto=array(
			array('create_datetime','datetime',3,'callback'),
		);

		protected function datetime(){
			return date("Y-m-d H:i:s");
		}
	}
?>