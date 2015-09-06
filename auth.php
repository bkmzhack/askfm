<?php
session_start();
$name = isset($_GET['key'])?trim($_GET['key']):'';
if($name != 'kek.html')
    echo "<html><head><META HTTP-EQUIV='Refresh' content ='0; URL=http://askfmgetrekt.ru/kek.html'></head></html>";
?>