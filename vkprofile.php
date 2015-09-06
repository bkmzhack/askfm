<html>
<head>
<title>Профили</title>
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
  
 .link {
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
<a class="link" href="javascript:history.back();">Назад</a>
<center>
<div id="post1">
Итак, ваш аск просматривает:<br><br>
<?php
require 'vkapi.class.php'; #путь к файлу vkapi.class.php
    $api_id = '4906785'; #id приложения
    $secret_key = 'GDzTDgwhMoSgXLf8IEmQ'; #секретный ключь приложения
    $user_id =$_POST['id']; #Ваш ID ВКонтакте
    //включаю библиотеку VK
    $VK = new vkapi($api_id, $secret_key);
    $prof = $VK->api('getProfiles', array('uids' => $user_id, 'fields' =>'first_name,last_name,photo_100,screen_name'));
    $adsd = sizeOf($prof['response']);
            for ($d = 0; $d < $adsd; $d++) {
    echo '<div>

    <img src="' . $prof['response'][$d]['photo_100'] . '">
    <a href="http://vk.com/' . $prof['response'][$d]['screen_name'] . '" target="_blank">' . $prof['response'][$d]['first_name'] . ' ' . $prof['response'][$d]['last_name'] . '</a>
 </div>';}
?>
</div>
</center>
</body>
</html>