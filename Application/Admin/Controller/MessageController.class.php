<?php
	namespace Admin\Controller;

	use Common\Controller\AdminController;

	class MessageController extends AdminController
	{
		public function show()
		{
			$temp['user_id'] = session('user_id');
			$messages = M('message')->alias('a')->join('tpb_article as b ON a.article_id = b.id')->field('a.*')->where($temp)->select();
			$this->assign('message',$messages);
			$this->display();
		}

		public function delete($id)
		{
			$result = M('message')->delete($id);
	    	if($result) {
				$this->success('数据删除成功！');
			}else{
				$this->error('数据删除错误！');
			}
		}
	}