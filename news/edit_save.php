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
<? require("sign.php");?>
<? # 導入sign.php，以確認身分 ?>
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
<title>使用者編輯區</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>
<body background="<?=$background;?>" bgcolor="<?=$bgcolor;?>">
<?
if($HTTP_POST_VARS['send']!=""){
# 判斷$send的值是否為空值
$main=trim($HTTP_POST_VARS['main']);
# 去除$main中不必要的空值
$f=fopen("sub.dat","w+");
# 以覆蓋檔案的模式開啟檔案
fwrite($f,$main);
# 寫入檔案
fclose($f);
# 關閉sub.dat
echo "<table border=0 width=150><tr><td><fieldset><center><br><font color=Red size=2><legend>編輯完成</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2>回上一頁</font></a><hr color=$menu_bgcolor width=150 size=1><a href=sub.php><font color=$font_link size=2>回公告首頁</font></a></fieldset></td></tr></table>";
}
?>
</body>
</htm>