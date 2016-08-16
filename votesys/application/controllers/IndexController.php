<?php
require_once 'BaseController.php';
require_once APPLICATION_PATH.'/models/Message.php';
require_once APPLICATION_PATH.'/models/Item.php';
class IndexController extends BaseController
{

    public function indexAction()
    {
       //创建一个表模型
        $itemModel = new Item();

        $items  = $itemModel->fetchAll()->toArray();

        //把查询出的数据分配
        $this->view->items = $items;

    }


}
