<?php
require_once 'BaseController.php';
require_once APPLICATION_PATH.'/models/Message.php';
require_once APPLICATION_PATH.'/models/Item.php';
class IndexController extends BaseController
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        $itemModel = new Item();
    }


}
