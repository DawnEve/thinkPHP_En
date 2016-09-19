<?php
namespace Admin\Controller;
use Admin\Common\AdminController;

class OligoController extends AdminController {
    public function showlist($cate_id=0,$tag_id=0){
        $user=session('user');
        $uid=$user['mg_id'];
        $this->assign('uid',$uid);
        
        $md=D('Oligo');
        $data_all=$md->getData($uid,$cate_id,$tag_id);
        $info=$data_all[0];
//        $info=$md->where('`condition`=1 and oligo_uid=1')->select(); 
        $this->assign('info',$info);
        $this->assign('info_num',count($info));
        
        //类别提示语
        $this->assign('hint_text',$data_all[1]);
        
        $this->display();
    }
    
    
    //显示具体要求
    public function detail($id=''){
    	$oligo_id=$id;
    	//1.如果没有指定id，则返回showlist页面
    	if(empty($oligo_id)){
    	   $this->error('Error:请指定条目id',U('showlist'));
    	   die();
    	}
        
    	
    	//2.获取oligo数据
    	$user=session('user');
    	$uid=$user['mg_id'];
    	$info=D('Oligo')->getDetail($uid,$oligo_id);
        $this->assign('info',$info);
        /*
array(22) {
  ["oligo_id"] => string(1) "6"
  ["oligo_name"] => string(10) "5个文件"
  ["oligo_order_no"] => string(4) "xx02"
  ["oligo_sequence"] => string(6) "aaattt"
  ["oligo_en_site"] => string(5) "BamHI"
  ["oligo_note"] => string(10) "5个文件"
  ["file_ids"] => string(9) "1,2,3,4,5"
  ["oligo_time"] => string(10) "1474273061"
  ["oligo_mod_time"] => string(10) "1474273061"
  ["cate_id"] => string(1) "2"
  ["tag_ids"] => string(2) "15"
  ["box_id"] => string(1) "1"
  ["place"] => string(6) " (1,8)"
  ["condition"] => string(1) "1"
  ["oligo_uid"] => string(1) "5"
  ["cate_name"] => string(5) "phage"
  ["tag_name_links"] => string(59) "<a class=tag href='/admin/Oligo/showlist/tag_id/15'>cd8</a>"
  ["file_links"] => string(423) "附件1: <a href="/Public/Uploads/20160919/57df9f258845a.jpeg">20130717130913_WSUWJ.thumb.700_0.jpeg</a><br>附件2: <a href="/Public/Uploads/20160919/57df9f2588842.jpg">island.jpg</a><br>附件3: <a href="/Public/Uploads/20160919/57df9f2589207.jpg">jeff1.jpg</a><br>附件4: <a href="/Public/Uploads/20160919/57df9f2589bcb.jpg">jeff2.jpg</a><br>附件5: <a href="/Public/Uploads/20160919/57df9f258a58f.jpg">vr2.jpg</a><br>"
  ["box_name"] => string(17) "phage保存菌种"
  ["box_place"] => string(58) "第2层左起第1个抽屉第3层从外向内第1个位置"
  ["fr_id"] => string(1) "1"
  ["fr_name"] => string(8) "4冰箱1"
}
         * */
        $this->display();
    }
    
    public function add(){
        //1.如果有post数据
        if(!empty($_POST)){
           //获取数据
           $user=session('user');
           $oligo_name=I('oligo_name');
           
           //保存数据
           $md=M('Oligo');
           
           //如果同名条目已经存在，则添加失败
           $uid=$user['mg_id'];
           $rs_exist = $md->where("oligo_uid = $uid AND oligo_name= '".$oligo_name."'")->select();
           if(!empty($rs_exist)){
               $this->error('添加失败！该样品名已经存在.(可能在回收站)', U());
               exit();
           }
           
           //文件上传
            //上传文件、保存文件名和地址到数据库、返回文件id
           $file_ids='';
           //判断是否有文件，且文件大小超过0
           //dump($_FILES['file_ids']['size'][0]);die();
           if (!empty($_FILES) && isset($_FILES["file_ids"]) && $_FILES["file_ids"]["size"][0]>0){
	           $file_ids_arr=A('File')->upload();
	           $file_ids=implode(',',$file_ids_arr);//"1,2,3"; 
           }
           
           //从tag_name字符串到tag_ids
           $str=I('tag_ids');//"protein100,cd47,Good";
           $tag_ids=A('Tag','Logic')->get_tag_ids($str);
           
           //拼接数据
           $data=array(
                //核心信息
                'oligo_name'=>$oligo_name,
                'oligo_order_no'=>I('oligo_order_no'),
                'oligo_sequence'=>I('oligo_sequence'),
                'oligo_en_site'=>I('oligo_en_site'),
                'oligo_note'=>I('oligo_note'),
                'file_ids'=>$file_ids,
           
                //类别信息
                'cate_id'=>I('cate_id'),
                'tag_ids'=>$tag_ids,
                
                //位置信息
                'fridge_id'=>I('fridge_id'),
                'box_id'=>I('box_id'),
                'place'=>I('place'),
           
                //其他信息
                'oligo_uid'=>$user['mg_id'],
                'condition'=>1,
                'oligo_time'=>time(),
                'oligo_mod_time'=>time(),
           );
                      
           $w=$md->create($data);
           
           $rs=$md->add();
           //判断结果
           if($rs){
               $this->success('成功！',U('showlist'));
           }else{
               $this->error('失败！'.$md->getError(), U('showlist'));
           }
           die();
        }
        
        //2.如果没有post数据，则显示表单
        //2.1获取分类数据
        $this->assign('cate_list',getlist('cate'));
        //2.2获取标签数据
        $this->assign('tag_list',getlist('tag'));
        //2.3获取冰箱数据
        $this->assign('fridge_list',getlist('fridge','fr',1));
        //2.4获取盒子数据
        $this->assign('box_list',getlist('box'));
        
        $this->display();
    }
    
    public function upd($id){
    	$oligo_id=$id;
        //1.如果是post提交，则保存数据
        $user=session('user');
        $uid=$user['mg_id'];
        if(!empty($_POST)){
           $md=M('Oligo');
           $data=array(
                'oligo_id'=>$id,
                'fr_name'=>I('fr_name'),
                'fr_place'=>I('fr_place'),
                'fr_note'=>I('fr_note'),
           
                'fr_mod_time'=>time(),
           );
           //dump($data);die();
           
           if($md->save($data)){
               $this->success('成功',U('showlist'));
           }else{
               $this->error('失败！'.$md->getError(), U('showlist'));
           }
           die();
        }
        
        //2.如果没有post数据，则显示表单      
        $info=D('Oligo')->getDetail($uid,$oligo_id,true);
        $this->assign('info',$info);
        
        //debug($info);
        $this->assign('cate_id',$info['cate_id']);//fr_id
        $this->assign('fr_id',$info['fr_id']);//fr_id
        $this->assign('box_id',$info['box_id']);//box_id
        //debug($info);
        
        //2.1获取分类数据
        $this->assign('cate_list',getlist('cate'));
        //2.2获取标签数据
        $this->assign('tag_list',getlist('tag'));
        //2.3获取冰箱数据
        $this->assign('fridge_list',getlist('fridge','fr',1));
        //2.4获取盒子数据
        $this->assign('box_list',getlist('box'));
        
        $this->display();
    }
    
    
    
    public function del($id){
       //放到回收站
       $md=M('Oligo');
       //$rs=$mg->delete($mg_id);//彻底删除
       $rs=$md->save(array(
            'oligo_id'=>$id,
            'oligo_mod_time'=>time(),
            'condition'=>0,//0 进入回收站
       ));
       if($rs>0){
            $this->success('成功放到回收站',U('showlist'));
       }else{
            $this->error('失败'.$md->getError(), U('showlist'));
       }
    }
    
    
    
    public function search(){
        getName();
    }
}