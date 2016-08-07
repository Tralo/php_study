<?php
//这个类和数据库中的某张表对应，通过Message对象实例可以完成
//对该表的crud操作
class Message extends Zend_Db_Table{
	protected $_name = 'message';
	protected $_primary = 'message_id';


}