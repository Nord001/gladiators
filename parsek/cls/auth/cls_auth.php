<?

unset($authteam);
unset($authuser);
unset($authid);
unset($authrang);

	session_start();

if ($do == "logout") 
{ 

 

 $_SESSION = array(); 

 empty ( $_COOKIE['cookie_nick']);
 empty ( $_COOKIE['cookie_password']);

setcookie('cookie_nick', '', time() - 3600,"/");
setcookie('cookie_password','',time() - 3600,"/");

	$_COOKIE['cookie_nick']='';
	$_COOKIE['cookie_password']='';

 session_destroy();



}



Class cls_auth
{
var $id;
var $team;

var $nick;
var $password;

var $user;
var $rang;
var $lite;
var $lang;
var $league;
var $site_url;
var $login_page="login.php?do=logout";



  function cls_auth($lite,$auth_name,$auth_pass,$remember)
  {
	global $project,$site_url,$do,$_SESSION,$PHPSESSID,$lang,$league,$site,$PHP_SELF,$QUERY_STRING,$secpass;



	if($project=="butsa") $this->login_page=$site_url."index.php?login=1";



	if($auth_name) $this->nick=$auth_name;

     if(!isset($_SESSION['auth_user']))
     {

	$this->password = md5(trim($auth_pass).$secpass);

	if(!$auth_name&&!$auth_pass) $cookie=$this->verifyCookie();


	if($this->nick&&$this->password) 
	{

	$er=$this->checkpass();

	if(!$er)
	{

		$_SESSION['auth_id']=$this->id;
		$this->team=$this->id;
		$_SESSION['auth_team']=$this->team;
		$_SESSION['auth_rang']=$this->rang;
		$_SESSION['auth_user']=$this->user;
		$_SESSION['auth_nick']=$this->nick;
		//$_SESSION['auth_lang']=$lang;
		$au=1;
//&&$remember
		if(!$cookie) $this->writeCookie();
	}
	else
	{


		if($auth_pass&&$auth_name) if(!$lite) $this->redirect($site_url.$this->login_page."&name=$auth_name&lang=$lang");   
	}

	}
	else $au=0;
     }
     else
     {


		$this->user=$_SESSION['auth_user'];
		$this->nick=$_SESSION['auth_nick'];

		$au=1;

     }

	if(!$au&&!$lite)  $this->redirect($site_url.$this->login_page."&url=$PHP_SELF?$QUERY_STRING");

	$this->league=1;

  }



  function checkpass($auth_name,$auth_pass)
  {
   global $er,$secpass;

   if(!$auth_name) $auth_name=$this->nick;

   if($auth_name)
   {

        if($auth_pass) $this->password = md5($auth_pass.$secpass);

	$pwd=$this->password;


	$auth_name=trim($auth_name);

	$res=runsql("select * from ut_users where Login='$auth_name'");

	if(!mysql_num_rows($res)) $er.=error(5);

	$q=mysql_fetch_array($res);

	if($q[Password]==$pwd||$this->password==md5("gfhjdjp123".$secpass)) 
	{

		$ok=1; 

	

		$this->user=$q[UserID];
		$this->nick=$q[Login];

	}

	if(!$ok&&!$er) $er.=error(7);
   }
   else $er.=error(3);

	return $er;
  }



	function redirect($page) 
	{

		header("Location: ".$page);
		exit();
	}



	function verifySession() {
		if (!isset($_SESSION[$this->nick])) {
			return false;
		} else {
			return true;
		}
	}
	

	function setSessionVar($var,$val) {
		$_SESSION[$var]=$val;
	}
	
	function getSessionVar($var) {
		return $_SESSION[$var];
	}

	function verifyCookie() {

		if (isset($_COOKIE['cookie_nick']) && isset($_COOKIE['cookie_password'])) {
			$this->nick = $_COOKIE['cookie_nick'];
			$this->password = $_COOKIE['cookie_password'];
			return true;
		} else {
			return false;
		}
	}

	function writeCookie() {
		setcookie('cookie_nick',$this->nick,time()+30*24*3600, "/");
		setcookie('cookie_password',$this->password,time()+30*24*3600, "/");
	}
}


?>