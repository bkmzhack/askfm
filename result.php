<html>
<head>
<title>Результат</title>
</head>
<style>
html, body {
  margin: 0;
  padding: 0;
  background:url(bg.jpg)center fixed;
  background-attachment: fixed;
  background-repeat: no-repeat;
  background-size: cover;
  }
   
 .link2 {
 position:fixed;
 top:0px;
  list-style: none;
  padding: 0;
  width: 250px; 
  height: 40px; 
 opacity: 0.6;
 background:black;
  z-index: 100;
  box-shadow: 0 0 35px 6px red;
  display:inline-block;
}
.link2:hover {
  list-style: none;
  padding: 0;
  width: 250px; 
  height: 40px; 
 opacity: 0.6;
 background:black;
  z-index: 100;
  box-shadow: 0 0 35px 6px green;
  }
  .link2 a.main {
  display: block; 
  height: 40px;
  font: bold 15px/40px arial, sans-serif; 
  text-align: center; 
  text-decoration: none; 
  color: #FFF;  
  -webkit-transition: 0.2s ease-in-out;
  -o-transition: 0.2s ease-in-out;
  transition: 0.2s ease-in-out;
  position: relative;
  z-index: 100;
}
  .link2:hover a.main {
  color: rgba(255,255,255,0.6);
  background: rgba(0,0,0,0.04);
} 
 .link {
 position:fixed;
margin-top:200px;
  list-style: none;
  padding: 0;
  width: 250px; 
  height: 40px; 
 opacity: 0.6;
 background:black;
  z-index: 100;
  box-shadow: 0 0 35px 6px red;
  display:inline-block;
}
.link:hover {
  list-style: none;
  padding: 0;
  width: 250px; 
  height: 40px; 
 opacity: 0.6;
 background:black;
  z-index: 100;
  box-shadow: 0 0 35px 6px green;
  }
  .link a.main {
  display: block; 
  height: 40px;
  font: bold 15px/40px arial, sans-serif; 
  text-align: center; 
  text-decoration: none; 
  color: #FFF;  
  -webkit-transition: 0.2s ease-in-out;
  -o-transition: 0.2s ease-in-out;
  transition: 0.2s ease-in-out;
  position: relative;
  z-index: 100;
}
  .link:hover a.main {
  color: rgba(255,255,255,0.6);
  background: rgba(0,0,0,0.04);
}
    #post1{
	margin-top:60px;
 box-shadow: 0 0 35px 6px red;
 opacity: 0.6;
 background:black;
 padding: 5px;
 color:white;
  width:600;
}
    #post2{
 box-shadow: 0 0 35px 6px red;
 margin-top:100px;
 width:600;
 opacity: 0.6;
 background:black;
 padding: 5px;
 color:white;
}
#kek {
  color:white;
  padding: 0;
 opacity: 0.6;
 background:black;
  z-index: 100;
  box-shadow: 0 0 35px 6px pink;
}
 A {
    color: white; /* Цвет ссылок */
   }
   A:visited {
    color: white; /* Цвет посещенных ссылок */
   }
   A:active {
    color: white; /* Цвет активных ссылок */
   }
</style>
<body>
<a class="link2" href="kek.html">вернуться к авторизации</a>
<script type="text/javascript">
function checkForm(form){
	if (document.getElementById('nice').value=="") {
		document.getElementById('tokenf').innerHTML='Поле обязательно для заполнния';
		return false;
	};
	return true;
};
</script>
<center>
<div id="post1">
Список id:
<?php
$token =$_POST['token']; 	
	
echo curl('https://api.vk.com/method/friends.getAppUsers.xml?app_id=4906785&access_token='.$token); 
function curl($url){
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,true);
    curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,true);
    $response = curl_exec($ch);
    curl_close($ch);
	return $response;
}
;
?>
</div>
<div id="post2">
<font size="5px">
И че мне с ними делать?
</font>
<br>
Все очень просто!<br>вставляйте их по очереди в форму ниже и узнавайте кто же заходит на ваш аск:)
</div><br><br>
<form method="post" onsubmit="return checkForm(this)" name="myForm2"  id="post1" action="vkprofile.php"> 
<input id="nice" type="text" name="id" size="50" maxlength="1000"><br>
<span style="color:red" id="tokenf"></span>
<br><br>
<input  type="submit" id="kek" style="width:200; name="gogogo" target="a_blank" value=" go ">
</form>
</center>
</body>
</html>