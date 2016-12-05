<?php
namespace Admin\Controller;
use Think\Controller;
class ForumController extends Controller {
     public function index(){
       $article = M("article")->select();
	   $this->assign("article",$article);
	   $this->display();
     }
     public function articledetails($articleid){
	   $article=M("article")->find($articleid);
	   $this->assign("articlecontent",$article);
	   $this->display();
	 }
     public function edit($articleid){
	   $this->display();
	 }
     public function addarticle(){
         $this->display();
     }
	public function add(){
    	if(!IS_POST){
            exit("bad request");
        }
         $data=array(   	    
    			'articletitle' =>I('post.articletitle'),
    			'articleauthor' =>I('post.articleauthor'),
    			'articletime'  =>I('post.articletime'),
    			'articleintroduction' =>I('post.articleintroduction'),	
    			'articlecontent'  =>I('post.articlecontent')
    			);

        $Model=D("article");
        $Model->create();
        $num=$Model->add($data);
        if($num>0){
        	$this->success("添加成功！",U("bid"));
        }else{
        	$this->error("添加失败！",U("bid"));
        }

        $this->display();
    }
     public function editarticle($articleid){
	  $article=M("article")->find($articleid);
	   $this->assign("articlecontent",$article);
	   $this->display();
	 }
 }
