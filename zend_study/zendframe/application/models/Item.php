<?php
//必须继承Zend_Db_Table,否则就不是表模型
class Item extends Zend_Db_Table{
	protected $_name = 'item';
	protected $_primary = 'id';


}