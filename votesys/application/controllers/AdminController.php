<?php
require_once 'BaseController.php';
require_once APPLICATION_PATH.'/models/Message.php';
require_once APPLICATION_PATH.'/models/Item.php';
class AdminController extends BaseController
{

    public function init()
    {
        /* Initialize action controller here */
    }

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
            'description'=>$vote_count,
        );

        /*//创建一个表模型对象
        echo "bb";
        $itemModel = new Item();
        echo "aa";
        
        exit();*/
        echo "bb";
        
        $msg = new Message();
       
    	
    	
    }


}

