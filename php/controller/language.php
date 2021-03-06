<?php
$langs=["ru","ro","en"];
$l2 = ["ru"=>"Русский","en"=>"English","ro"=>"Română"];

//See language from client
if(isset($_SERVER['HTTP_ACCEPT_LANGUAGE']))
    $lang = explode(",", explode(";", $_SERVER['HTTP_ACCEPT_LANGUAGE'])[0])[0];
else
    $lang = false;

//Parse available languages
if (strstr($lang,'ru'))
    $lang = "ru";
elseif(strstr($lang,'ro') or strstr($lang,'md'))
    $lang = "ro";
else
    $lang = "en";

//Sync with cookies
if (isset($_COOKIE['langu']))
    $lang = $_COOKIE['langu'];
else
    setcookie("langu",$lang);

//Force translation
if(isset($_GET['lang']))
{
    $lang = $_GET['lang'];
    if(in_array($lang,$langs))
        setcookie("langu",$lang);
    header("Location: ".str_replace("lang=".$lang,"",$_SERVER['REQUEST_URI']));
}
?>