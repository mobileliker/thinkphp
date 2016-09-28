<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{

    public function index($id=1)
    {
    	$Users = M('user');
    	$user = $Users->find($id);
    	$Articles = M('article');
    	$temp['user_id'] = $user['id'];
    	$this->assign('user',$user);

    	$count = $Articles -> where($temp) -> count();
		$pagecount =5 ;
		$Page = new \Think\Page($count,$pagecount);
		//$Page->rollPage=4;
		$Page->setConfig('first','首页');
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('last','尾页');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <span>第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页</span>');
		$show = $Page->show();
		$this->assign('page',$show);

		$list = $Articles -> where($temp) ->order('sort') -> limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);
        $this->display();
    }

    public function category($id=-1)
    {
    	$Users = M('user');
    	$user = $Users-> find(1); //默认设置为1
    	$temp['user_id'] = $user['id'];
    	$Categories = M('category')->where($temp)->select();
        $this->assign('category',$Categories);

        if($id!=-1){
            $temp['category_id'] = $id;
        }
    	$Articles = M('article');
    	$count = $Articles -> where($temp) -> count();
		$pagecount =5 ;
		$Page = new \Think\Page($count,$pagecount);
		//$Page->rollPage=4;
		$Page->setConfig('first','首页');
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('last','尾页');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <span>第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页</span>');
		$show = $Page->show();
        $this->assign('page',$show);

		$list = $Articles -> where($temp) ->order('create_datetime') -> limit($Page->firstRow.','.$Page->listRows)->select();
    	$this->assign('list',$list);

    	$this->display();
    }

    public function article($id)
    {
    	$article = M('article')->find($id);
        if($article === null) $this->error('非法操作');
        $category = M('category')->find($artcile['category_id']);
        $this->assign('article',$article);
        $this->assign('category',$category);
        $this->display();
    }

    public function create()
    {
        $message = D('message');
        if($message->create()){
            $result = $message->add();
            if($result) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }
        }else{
            $this->error($message->getError());
        }
    }
}