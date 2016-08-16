<?php
/**
 * 这个控制器
 */
require_once 'Zend/Mail.php';
require_once 'Zend/Mail/Transport/Smtp.php';

require_once 'BaseController.php';
require_once APPLICATION_PATH.'/models/Item.php';
require_once APPLICATION_PATH.'/models/VoteLog.php';
class VoteController extends BaseController{
    public function indexAction()
    {

    }


    public function voteAction(){

        //获取用户投票的id
        $item_id = $this->getRequest()->getParam('itemid','no');

        $ip = $this->getRequest()->getServer('REMOTE_ADDR');

        $today = date('Ymd');

        // echo $item_id. '--'.$ip;
        //先看看vote_log这个表中是否有投过一次了
        $voteLogModel = new VoteLog();
        //sql注入不考虑
        $where = "ip = $ip AND vote_date=$today";

        $res = $voteLogModel->fetchAll($where)->toArray();
        echo $today.'--';
        echo '<br>'.$where;
        echo count($res);
        if(count($res) > 0){
            //提示
        } else {

            $date = array(
                'ip'=>$ip,
                'vote_date'=>$today,
                'item_id'=>$item_id
            );
            if($voteLogModel->insert($date) > 0){
                //更新
                $itemModel = new Item();
                //通过逐渐直接获取对应的item
                $item = $itemModel->find($item_id);


                
            }



            
        }
        
      
        exit();

        
    }


    public function sendemailAction(){

        // $this->_hepler->layout()->disableLayout();
        // $this->_hepler->viewRenderer->setNotRender(true);

       /* $config = array('ssl' => 'tls', 'port' => 2525, 'auth' => 'login', 
                 'username' => 'shaiazran', 'password' => 'Azran1200');
        $transport = new Zend_Mail_Transport_Smtp('smtp.sendgrid.net', $config);
        $email = trim($this->getRequest()->getPost('email'));
        

        $mail = new Zend_Mail();
        $mail->setDefaultTransport($transport);

        // $mail->setFrom('ops@abconcepts.com.hk', 'shaiazran');
        $mail->addHeader('MIME-Version', '1.0');
        $mail->addHeader('Content-Transfer-Encoding', '8bit');
        $mail->addHeader('X-Mailer:', 'PHP/'.phpversion());

        $mail->setFrom('app@expressproj.com', 'Express APP');
        $mail->addTo($email,'');
        $mail->setSubject('WaiTeacher validate code');
        $mail->setBodyText('This is the text of the mail using fdsfdfdfsfdfdfasdfasfdasdfasdZend.');

        $mail->send($transport);
        exit();*/
        
        // exit();

    }

}

?>