<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Model;
use Admin\Model\PracticeModel;
class PracticeController extends Controller {

    public function index(){
        echo "usercontroller";
    }
    public function model(){
    	// $user=new Model('Admin_users');
    	// //$user=M('Admin_users');
    	// var_dump($user->select());
    	// $user=D('Home/user'); 
     //   var_dump($user->select());
    	// $user=M();
    	// var_dump($user->query("SELECT * FROM user WHERE id='1'"));
    	// 	$user=M('User');
    	// // var_dump($user->where('id=1')->select());
    	// 	// $condition['id']=2;
    	// 	// $condition['username']=18678627329;
    	// 	// $condition['_logic']='or';

    	// 	$condition=new \stdclass();
    	// 	$condition->id=1;
    	// 	$condition->username='root';
    	// 	$condition->_logic='or'; 
    	// 	var_dump($user->where($condition)->select());

    	// $user=M('User');
    	// $map['id']=array('eq',1);
    	// var_dump($user->where($map)->select());

    	// $user=M('user');
    	// $map['username|id']='2';
    	// $map['username&id']=array('root',1,'_multi'=>true);
    	// $map['username&id']=array('root',array('gt',0),'_multi'=>true);
    	// var_dump($user->where($map)->select());
        //$map['id']=array('eq',1);
        // $map['_string']='username="root" and password="123"';
        // $map['_query']='username=root&password=123';
       // $where['id']=2;
        // $map['_complex']=$where;
        // $map['_logic']='or';

        // var_dump($user->where($map)->select());
        // var_dump($user->sum('id'));

   
      // var_dump($user->getFieldByusername('root','id'));

    	// var_dump($user->query("select * from user"));
       
        //修改数据
    	// var_dump($user->execute("update user set username='3' where id=3 "));

    	//var_dump($user->where('id>1')->order('date DESC')->limit(2)->select());

    	// var_dump($user->select(array('where'=>array('id'=>array('neq',1)),'order'=>'date DESC')));

    	 // var_dump($user->where('id in (1,2,3)')->find());

    	// var_dump($user->where('id=3>1')->delete());

        // $map['id']=array('eq',1);
        // var_dump($user->order('id desc')->select());

        // var_dump($user->order(array('id'=>'desc'))->select());

        // var_dump($user->field('id,username')->select());

        // var_dump($user->field('sum(id) as count')->select());

        //var_dump($user->field(array('id','left(username,3) as left_user'))->select());

        // var_dump($user->field(array('id','left(username,3) '=> 'left_user'))->select());

        // var_dump($user->limit(2,1)->select());

        // var_dump($user->page(2,2)->select());

        // var_dump($user->table(news)->select());

        // var_dump($user->field('a.id,a.username,b.id,b.title')->table(array('user'=>'a','news'=>'b'))->select());

        // var_dump($user->alias(a)->select());

        //var_dump($user->field('username,sum(id)')->group('id')->select());

        // var_dump($user->field('username,sum(id)')->group('id')->having('id>1')->select());
        

        // var_dump($user->union('select * from  news')->select());

        // var_dump($user->field('username')->distinct(true)->select());

        // var_dump($user->cacahe(true)->select());


      //  $user=M('user');
        //var_dump($user->scope('sql2')->select()); 
        // var_dump($user->scope('sql2')->select()); 
        
        // var_dump($user->order('id desc')->limit(2)->select());

  	
    }

    public function create(){
    	$user=M('user');
    	// $data['username']='123';
    	// $data['realname']='456';
    	// $data['username']=$_POST['username'];
    	// $data['realname']=$_POST['realname'];
    	// $data['addtime']=date('Y-m-d H:i:s');

    	// $data=new \stdclass();
    	// $data->username=$_POST['username'];
    	// $data->realname=$_POST['realname'];
    	// $data->addtime=date('Y-m-d H:i:s');
    	var_dump($user->field('username')->create());

    }

    public function add(){
    	// $user=M('user');
    	// $data['username']= 'li';
    	// $data['realname']='liwenlong';
    	// $data['addtime']=date('Y-m-d H:i:s');

    	// $user->add($data);
        

     //    $user=M('user');
     //    $data=$user->create();
     //     $data['addtime']=date('Y-m-d H:i:s');
    	// $user->add($data);

    	$user=M('user');
    	$data='username=zhangfei&realname=zhangfei1&addtime='.date('Y-m-d H:i:s');
    	$user->data($data)->add();

    }
    public function select(){
    	$user=M('user');
    	// var_dump($user->select());
    	// var_dump($user->find());
    	// var_dump($user->getfield('username'));
    	//var_dump($user->getfield('username,addtime',true));
    	//var_dump($user->getfield('id,username,addtime',':'));
    	var_dump($user->getfield('id,username,addtime','2'));    
    }

    public function save(){
    	$user=M('user');
    	// $data['username']='guanyu';
    	// $data['realname']='guanyu1';
    	// $map['id']=14;
    	// var_dump($user->where($map)->save($data));

    	// $data['username']='guanyu';
    	// $data['realname']='guanyu1';
    	// $map['id']=14;
    	// var_dump($user->where($map)->save($data));

    	//$user->create();
    	//$user->save();

    	//$map['id']=1;
    	//$user->where($map)->setField('username','rootroot'); 

    	$map['id']=1;
    	//$user->where($map)->setInc('count',1)

    	// $user->where($map)->setDnc('count',1)


    }

    public function delete(){
    	$user=M('user');
    	// $user->delete(15);
    	// $user->delete('13,14');
    	
    	
    }
    public function ar(){
    	$user=M('user');
    	// $user->username='zhaoyun';
    	// $user->realname='zhaoyunyun';
    	// $user->addtime=date('Y-m-d H:i:s');
    	// $user->add();
    	// var_dump($user->find(2));

    	// $user->getByusername('rootroot');
    	// echo $user->realname;

    	// $user->find(1);
    	// $user->username='root';
    	// $user->save();

    	


    }

}