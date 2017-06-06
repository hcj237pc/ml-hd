<?
#  -----------------------------------------  #  
#  程式名稱：C.P.Sub公告系統                  #
#  設計者：Cooltey                            # 
#  E-Mail：cooltey@yahoo.com.tw               #
#  HomePage：http://cooltey.idv.st            #
#  程式版本：V3.0                            #
#  最後更新：2004/7/3                         #
#  注意，本版權宣告不得刪除，程式可任意修改！ # 
#  最下面一行的 Powered By Cooltey 請不要刪除 #
#  -----------------------------------------  #
?>
<? # 導入sign.php，以確認身分 ?>
<? require("sign.php") ;?>
<center>
<?
if($HTTP_POST_VARS['button']!="yes"){
?>
<form action="check.php" method="post"><input type="hidden" name="button" value="yes"><input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>"><input type="Submit" value="刪除公告" name="s_1"><input type="Submit" value="刪除檔案" name="s_2"><input type="Submit" value="設定版面" name="s_3"><input type="Submit" value="發布公告" name="s_4"><input type="Submit" value="編輯公告" name="s_5"><input type="Submit" value="版本資訊" name="s_6"><input type="Submit" value="回公告首頁" name="s_7"></form>
<?
}
?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>公告傳送</title>
<style type="text/css">
A{ text-decoration: none; }
A:hover { text-decoration: underline; }
</style>
</head>
<body background="snow.gif">
<?
# 判斷是否有按下send按鈕
if($HTTP_POST_VARS['send']=="傳送"){
if($HTTP_POST_FILES['updata']['name']==""){
    $updname="";
}else{
# 開啟data的資料夾
$updata_dir="./data";  
$dest="$updata_dir/".$HTTP_POST_FILES['updata']['name'].""; 
if(eregi(" ","".$HTTP_POST_FILES['updata']['name'].""))
{
echo "<table border=0 width=200><tr><td><fieldset><center><br><font color=Red size=2><legend>檔案名稱不能含有空白喔！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
# 複製檔案以上傳
if ( @copy($updata,$dest)){
    $updname="".$HTTP_POST_FILES['updata']['name']."";	 
echo "<br><br><font size=2 color=Green>你所上傳的檔案訊息：</font><br><font size=2 color=Green>檔案名稱：</font><font color=red size=2 face=Fixedsys>".$HTTP_POST_FILES['updata']['name']."　　</font><font color=green size=2>檔案大小：</font><font color=red size=2 face=Fixedsys>".$HTTP_POST_FILES['updata']['size']." Byte　</font><font color=green size=2>檔案類型：</font><font color=red size=2 face=Fixedsys>".$HTTP_POST_FILES['updata']['type']."</font>";
}else{
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>上傳失敗！<br>可能原因為：<br>1.data權限沒有改成777<br>2.伺服器不支援網頁上傳</legend></font><br><hr color=#FFBBCC width=150><br><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
}
}
# 下面都是判斷傳送的值中是否是空值
if($HTTP_POST_VARS['title']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>您忘了打上標題囉！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
if($HTTP_POST_VARS['name']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>您忘了打上姓名囉！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}
if($HTTP_POST_VARS['note']==""){
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>您忘了打上公告囉！</legend></font><br><hr color=#FFBBCC width=150><br><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a></fieldset></td></tr></table>";
exit;
}else{
echo "<p></p>";
# 排序好要存取的檔案，用∥來分別
$t=date("Y/m/d");
$kind=str_replace("∥","", $HTTP_POST_VARS['kind']);
$title=str_replace("∥","", $HTTP_POST_VARS['title']);
$url=str_replace("∥","", $HTTP_POST_VARS['url']);
$name=str_replace("∥","", $HTTP_POST_VARS['name']);
$mail=str_replace("∥","", $HTTP_POST_VARS['mail']);
$updname=str_replace("∥","", $updname);
$hidden=str_replace("∥","", $hidden);
$note=str_replace("\r\n","<br>", $HTTP_POST_VARS['note']);
$main=$kind."∥".$t."∥".$title."∥".$url."∥".$name."∥".$mail."∥".$updname."∥".$hidden."∥".$note."\n";
# 開啟sub.dat
$f=fopen("sub.dat","a+");
# 寫入sub.dat，寫入長度是上面的值
fwrite($f,$main);
# 關閉sub.dat
fclose($f);
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>公告發佈完成</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a><hr color=$menu_bgcolor width=150 size=1><a href=sub.php><font color=$font_link size=2>回公告首頁</font></a></fieldset></td></tr></table>";
}

?>
</body>
</html>