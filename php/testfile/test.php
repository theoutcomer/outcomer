<?php 
/* 测试一
*  变量的作用域
*/
class A 
{
	public $n = 90;
	function __construct()
	{
		$n = 45;
	}
}
$a = new A();
//echo $a->n;

/* 测试二
*  静态变量的用法
*/
class B{
	public $name;
	public $age;
	public static $country = 'Chinese';
	/*public function __construct($country){
		$this->country = $country;
	}*/
}
	//print B::$country."  ";

	//$one = new B();
	//$two = new B("Chinese");
	//$one->country = 'China';
	//print $two->country."<br />";
	//print $one->country;
	//print B::$country."  ";



//$str = '2';
//$int = (int)$str;
//var_dump($int);
//
//echo md5(md5("qzq7710520"));
//echo urlencode("http://m.21jingji.com/article/20140730/herald/64491f4574649d92bc5b999084fa7ae3.html");
//
/*echo $_SERVER['HTTP_HOST'];//获取当前域名 
$arr = array();
$str = '';
for($i=0;$i<count($arr);$i++){
	if($i<count($arr)-1){
		$str .= $arr[$i]."|";
	}
}*/
//$str = strtotime("2015-12-11 16:30:11");
//echo $str;
/*$moblie = '18665621750';
$newMobile = substr_replace($moblie,'*****',3,5);   
//echo $newMobile; 
$date = "2016-02-01";
$time = strtotime($date);

$t1['1'] = 1;
$t1['2'] = 2;
$arr = Array(756,760,764,759,768,758,765,776,797,798,799,800);

echo date("Y-m-d",1453620531);*/




/*
$password = '123456abc';
$needChange = (!ctype_alpha($password) && !ctype_digit($password) && !(strlen($password) < 9) && !(strlen($password) > 16)) ? true : false;
//var_dump(ctype_digit($password));

                //var_dump($needChange);

$Memcache= new Memcache();
$Memcache->addServer('localhost', 12111);
$json = json_encode(array('you'=>'kiss me'));
$Memcache->set('var_key', 'some really big variable', MEMCACHE_COMPRESSED, 50);

echo $Memcache->get('var_key');*/

/*function udate($format = 'u', $utimestamp = null) {
        if (is_null($utimestamp))
           $utimestamp = microtime(true);
 
        $timestamp = floor($utimestamp);
        $milliseconds = round(($utimestamp - $timestamp) * 1000);
 		return date("Y-m-d")."T".date('H:i:s').".".$milliseconds;
   }
 
echo udate();
echo "<br />2015-08-29T12:31:24.556";*/

 /*$TimeStamp = strtotime(str_replace('T', ' ', '2016-11-23T11:37:46'));
 echo date("Y-m-d H:i:s");
var_dump($TimeStamp);exit;*/
/*$data['thumb'] = 'http://img.21sq.org/uploadfile/cover/20170511/201705110654302151.jpeg';
$int = strrpos($data['thumb'],'.');
$newsimg = '';
for($i=0;$i<strlen($data['thumb']);$i++){
	if($i==($int)){
		$newsimg .= '_small'.$data['thumb'][$i];
	}else{
		$newsimg .= $data['thumb'][$i];
	}
}
var_dump($newsimg);*/


/*function chinese($string){
    $res = false;
    if($string){
        preg_match_all('/[\x{4e00}-\x{9fff}]+/u', $string, $matches);  
        $string = join('', $matches[0]); 
        if(!empty($string)){
            $res = true;
        }
    }
    return $res;
}

//提取字符串中的汉字其余信息剔除  
header("Content-type: text/html; charset=utf-8");  
$str='■ 戴春晨 实习生 王鹏钧 广州报道';   
$res = chinese($str);
var_dump($res);*/

/*$str = strtotime("-1 hours");
echo date("Y-m-d : H:i:s",$str);
*/
/**//*$_POSTs = array(
    'username'=>11713,
    'sign'=>'E3A1454990BD08EF27467368F4121223',
    '0'=>'931148',
    '1'=>'931149',
    '2'=>'931150',
    '3'=>'931151',
    '4'=>'931152',
    '5'=>'931153',
    '6'=>'931154',
);
ksort($_POSTs);
var_dump($_POSTs);*/



//echo date("Y-m-d%20H:i:s.").microtime(true)*1000;
$str = "/Date(1504231852006+0800)/";


/*$date = date("Y-m-t H:i:s",intval(substr($str, 6,10)));

echo $date;exit;*/
//echo  date("Y-m-d : H:i:s",strtotime("-1 hours"));
 $GLOBALS['z'] = 0;
function getlist(){
	
	if($GLOBALS['z']==0){
		$GLOBALS['z']++;
		getlist();
	}else{
		$GLOBALS['z']++;
	}
	return $GLOBALS['z'];
}
$r =  getlist();
echo $r;
?>


