<?php
/**
 * 这个控制器
 */
require_once 'Zend/Mail.php';
require_once 'Zend/Mail/Transport/Smtp.php';

require_once 'BaseController.php';
require_once APPLICATION_PATH.'/models/Item.php';
class VoteController extends BaseController{
    public function indexAction()
    {

    }


    public function voteAction(){
        
    }


    public function sendemailAction(){

        // $this->_hepler->layout()->disableLayout();
        // $this->_hepler->viewRenderer->setNotRender(true);

        $config = array('ssl' => 'tls', 'port' => 2525, 'auth' => 'login', 
                 'username' => 'shaiazran', 'password' => 'Azran1200');
        $transport = new Zend_Mail_Transport_Smtp('smtp.sendgrid.net', $config);
        $email = trim($this->getRequest()->getPost('email'));
        

        $mail = new Zend_Mail();
        $mail->setDefaultTransport($transport);

        // $mail->setFrom('ops@abconcepts.com.hk', 'shaiazran');
        /*$mail->addHeader('MIME-Version', '1.0');
        $mail->addHeader('Content-Transfer-Encoding', '8bit');
        $mail->addHeader('X-Mailer:', 'PHP/'.phpversion());*/

        $mail->setFrom('app@expressproj.com', 'Express APP');
        $mail->addTo($email,'');
        $mail->setSubject('WaiTeacher validate code');
        $mail->setBodyText('This is the text of the mail using fdsfdfdfsfdfdfasdfasfdasdfasdZend.');

        $mail->send($transport);
        exit();
        
        // exit();

    }

}

?>