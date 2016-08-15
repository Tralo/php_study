<?php
require_once APPLICATION_PATH.'/models/Message.php';
require_once APPLICATION_PATH.'/models/Item.php';
require_once 'BaseController.php';
class IndexController extends BaseController
{

    //这是控制器中的一个函数
    public function indexAction()
    {
        // action body
        file_put_contents('d:/note.txt', __FILE__.date('Y-m-d H:i:s')."indexAction   \r\n",FILE_APPEND);

        //到数据库中查询
        $messageModel = new Message();

        $res = $messageModel->fetchAll()->toArray();

        //echo "<pre>";
        //print_r($res);
        //echo "</pre>";

         $data = array(
            'name'=>'aa',
            'description'=>'bb',
            'description'=>0
        );

        $itemModel = new Item();
        $itemModel->insert($data);
        
        
    
        //怎样把控制器中的数据(array,object,int...)
        $this->view->res=$res;
        //如果这里什么都没有写,相当于
        //$this->render('index');
    }
}

