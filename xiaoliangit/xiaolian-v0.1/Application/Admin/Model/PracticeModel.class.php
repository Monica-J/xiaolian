<?php
namespace Admin\Model;
use Think\Model;

class UserModel extends Model{
	 // protected $tablePrefix = 'xiaolian_'; 
    // public function __construct(){
    // 	parent::__construct();  
    // 	echo "model";
    // }
    protected $_scope=array(
    	'sql1'=>array(
              'where'=>array('id'=>1),
    		),
    	'sql2'=>array(
               'order'=>array('addtime'=>'desc'),
               'limit'=>2,
    		),
    );
}