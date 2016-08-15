<?php
require_once APPLICATION_PATH.'/models/Message.php';
require_once APPLICATION_PATH.'/models/Item.php';
require_once 'BaseController.php';
class AdminController extends BaseController
{


    public function indexAction()
    {
        // action body
    }

    //进入到增加选项的页面(不要大写)
    public function additemuiAction(){
    	//$this->render('additemui');
    }

    //完成添加任务
    public function additemAction(){
    	
    	
        //获取用户输入的内容
        $name = $this->getRequest()->getParam('name');
        $description = $this->getRequest()->getParam('description');
        $vote_count = $this->getRequest()->getParam('vote_count');

        $data = array(
            'name'=>$name,
            'description'=>$description,
            'vote_count'=>$vote_count,
        );

        $itemModel = new Item();
        // $itemModel->insert($data);
        // $itemModel = new Item();

        /*//创建一个表模型对象
        echo "bb";
        
        echo "aa";
        
        exit();*/
        // echo "bb";
        $this->render('ok');
        
        //$msg = new Message();
       
    	
    	
    }


}

