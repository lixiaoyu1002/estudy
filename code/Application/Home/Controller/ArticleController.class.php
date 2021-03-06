<?php
/**
*开发者：胡琪
*开发功能：前台界面励志人生模块功能实现
*修改时间：2016/12/15
*/

namespace Home\Controller;
use Think\Controller;
use \Library\Page;
class ArticleController extends Controller {
    protected $_db;
    protected function _initialize(){
    	$this->_db = M('article');
    }
    public function index(){
    	$this->display();
    }
     
    public function article(){
        //获取文章列表
    	$article = M('article');
    	/*分页码*/
        // 1. 获取记录总条数
        $count =$article->count();
    	// 2. 设置（获取）每一页显示的个数
        $pageSize =4;
        // 3. 创建分页类对象
        $page = new Page($count, $pageSize);
        // 4. 分页查询
        $article= $article->order('articletime desc')
            ->limit($page->firstRow.','.$page->listRows)
            ->select();
        //6定义分页样式
        $page->setConfig('prev','上一页');
        $page->setConfig('next','下一页');
        // 7. 输出查询结果
        $pages=$page->show();
        $this->assign('pages',$pages);
        //文章首页
    	$this->assign('article',$article);
        //热门资讯部分
        $news=M("news")->order("newstime")->limit(7)->select();
        $this->assign("news",$news);
    	$this->display();
    }
    //励志人生内容页
    public function articledetails($articleid){
        //获取文章内容
        $articledetails = M('article')->find($articleid);
        $this->assign('articlecontent',$articledetails);
        //热门资讯部分
        $news=M("news")->order("newsid asc")->limit(7)->select();
        $this->assign("news",$news);
        //经典文章部分
        $article=M("article")->order("articletime")->limit(5)->select();
        $this->assign("article",$article);
        $this->display();
    }

    //搜索功能
    public function search(){
        if(isset($_GET['text'])){
            $data=$_GET['text'];
             /*选取数据*/
            $articlepage=M("article")->order("articletime")->where("articletitle like '%$data%'");
            /*分页码*/
            // 1. 获取记录总条数
            $count =$articlepage->count();
            // 2. 设置（获取）每一页显示的个数
            $pageSize =3;
            // 3. 创建分页类对象
            $page = new Page($count, $pageSize);
            // 4. 分页查询
              $articlepage = $articlepage->where("articletitle like '%$data%'")->order('articletime')
                             ->limit($page->firstRow.','.$page->listRows)
                             ->select();
              // dump($articlepage);
              // 5. 定义分页样式
              $page->setConfig('prev','上一页');
              $page->setConfig('next','下一页');
              // 6. 输出查询结果
              $this->assign('articles', $articlepage);//遍历数据
              if ($articlepage == NULL) {
                $this->error("搜索无结果",U("article"));
              }
              $pages=$page->show();
              $this->assign('pages',$pages);
              //热点资讯
              $news=M("news")->order("newsid asc")->limit(7)->select();
              $this->assign("news",$news);
              $article=M("article")->order("articletime")->limit(5)->select();
              $this->assign("article",$article);
              $this->display();
              }else{
                $this->error("您肿么到这里了/(ㄒoㄒ)/~~，快回去",U("article"));
              }
    }

    //举报功能
    public function report($username,$articleid){
        if ($_SESSION['name'] == NULL) {
            $this->redirect('home/login/login','请登录');
        }else{
            $data=array(
                    'username'  =>$username,
                    'articleid' =>$articleid
                    );
               $Model=D("report");
               $Model->create();
               $num=$Model->add($data);
               if($num>0){
                $this->success("举报成功！管理员处理后将及时给您反馈",U("home/article/articledetails/articleid/$articleid"),5);
               }else{
                $this->error("举报失败 /(ㄒoㄒ)/~~，请重试",U("home/article/articledetails/articleid/$articleid"),5);
               }
            }
    }
}
