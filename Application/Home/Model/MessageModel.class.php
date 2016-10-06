<?php
	namespace Home\Model;

	use Think\Model;

	Class MessageModel extends Model{
		protected $_validate= array(
			array('author','require','名字必须！'),
			array('email','require','email必须！'),
			array('content','require','评论必须！'),
			//array('email','email','邮箱不正确'),
		);

		protected $_auto=array(
			array('create_datetime','datetime',3,'callback'),
		);

		protected function datetime(){
			return date("Y-m-d H:i:s");
		}

		public function getData($aid){
			// $temp = array(
			// 	'article_id' => $aid,
			// 	'pre_id'	 => array('EXP','IS NULL'),
			// 	);
			$data = M('message') ->where($temp)->select();
			
			return $data;
		}
	}
?>