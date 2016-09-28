<?php
	namespace Home\Model;

	use Think\Model;

	Class MessageModel extends Model{
		// protected $_validate= array(
		// 	array('title','require','题目必须！'),
		// );

		protected $_auto=array(
			array('create_datetime','datetime',3,'callback'),
		);

		protected function datetime(){
			return date("Y-m-d H:i:s");
		}
	}
?>