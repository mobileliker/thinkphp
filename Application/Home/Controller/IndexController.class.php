<?php
namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller
{

    public function index()
    {
        $Articles = M('article');
        $Categories = M('category');
        //显示分页
        $count = $Articles -> count();
        $pagecount =5 ;
        $Page = new \Think\Page($count,$pagecount);
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <span>第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页</span>');
        $show = $Page->show();
        //显示文章
        $list = $Articles ->alias('a')->join('tpb_user as b ON a.user_id=b.id')->field('a.*,b.username')->order('create_datetime desc') -> limit($Page->firstRow.','.$Page->listRows)->select();
        //显示博客和分类的个数
        $num['blog'] = count($Articles->select());
        $num['category'] = count($Categories->select());
        if(I('p')<=$Page->totalPages||I('p')===1){
            $this->assign('page',$show);
            $this->assign('list',$list);
            $this->assign('num',$num);
            $this->display();
        }else{
            $this->error('页码不存在');
        }
        
    }

    public function category($id = -1)
    {
        $Articles = M('article');
        //显示分类
        $Categories = M('category')->select();
        if($id!=-1){
            $temp['category_id'] = $id;
        }
        //显示分页
        $count = $Articles -> where($temp) -> count();
        $pagecount =5 ;
        $Page = new \Think\Page($count,$pagecount);
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <span>第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页</span>');
        $show = $Page->show();
        //显示文章
        $list = $Articles -> where($temp) -> alias('a')->join('tpb_user as b ON a.user_id=b.id')->field('a.*,b.username')->order('create_datetime desc') -> limit($Page->firstRow.','.$Page->listRows)->select();
        if(I('p')<=$Page->totalPages||I('p')===1){
            $this->assign('category',$Categories);
            $this->assign('page',$show);
            $this->assign('list',$list);
            $this->display();
            
        }else{
            $this->error('页码不存在');
        }
    }

    public function article($id)
    {
    	$article = M('article')->find($id);
        if($article === null) $this->error('非法操作');
        $category = M('category')->field('category_name')->find($article['category_id']);
        $user = M('user')->field('username')->find($article['user_id']);
        $article['category_name'] =  $category['category_name'];
        $article['username'] = $user['username'];
        $pre  =  M('article')->where(array('id'=>array("LT",$id)))->order('id desc')->limit('0,1')->find();
        $next =  M('article')->where(array('id'=>array("GT",$id)))->order('id asc')->limit('0,1')->find();
        //读取评论消息
        // $messages = D('message') ->getData($id);
        // $this ->assign('message',$messages);

        //新增分页功能
        $count = M('message')-> count();
        $pagecount =6 ;
        $Page = new \Think\Page($count,$pagecount);
        $Page->setConfig('first','首页');
        $Page->setConfig('prev','上一页');
        $Page->setConfig('next','下一页');
        $Page->setConfig('last','尾页');
        $Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% <span>第 '.I('p',1).' 页/共 %TOTAL_PAGE% 页</span>');
        $show = $Page->show();
        
        $temp['article_id'] = $id;
        $messages = M('message');
        $list = $messages -> order('create_datetime desc') -> where($temp) -> limit($Page->firstRow.','.$Page->listRows)->select();
        foreach ($list as &$value) {
            if($value['pre_id']!==null){
                $value['reply'] = $messages->find($value['pre_id']);
            }
        }

        if(I('p')<=$Page->totalPages||I('p')===1){
            $this->assign('page',$show);
            $this ->assign('message',$list);
            $this->assign('pre',$pre);
            $this->assign('next',$next);
            $this->assign('article',$article);
            $this->display();
        }else{
            $this->error('页码不存在');
        }
    }

    public function create()
    {
        $data['author'] = I('post.author');
        $data['content'] = I('post.content');
        $data['email'] = I('post.email');
        $data['article_id'] = I('post.article_id');
        $data['sort'] = 50;
        if(I('post.pre_id')!==''){
            $data['pre_id'] = I('post.pre_id');
        }
        $message = D('message');
        if($message->create($data)){
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