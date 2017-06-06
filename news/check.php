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
<? # 將to_set.php檔案導入 ?>
<? require("to_set.php");?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>使用者檢查區</title>
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
<center>
<form action="check.php" method="post"><input type="hidden" name="button" value="yes"><input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>"><input type="Submit" value="刪除公告" name="s_1"><input type="Submit" value="刪除檔案" name="s_2"><input type="Submit" value="設定版面" name="s_3"><input type="Submit" value="發布公告" name="s_4"><input type="Submit" value="編輯公告" name="s_5"><input type="Submit" value="版本資訊" name="s_6"><input type="Submit" value="回公告首頁" name="s_7"></form>
<?
if($HTTP_POST_VARS['s_1']=="刪除公告"){
include("del.php");
}elseif($HTTP_POST_VARS['s_2']=="刪除檔案"){
include("deldata.php");
}elseif($HTTP_POST_VARS['s_3']=="設定版面"){
include("set.php");
}elseif($HTTP_POST_VARS['s_4']=="發布公告"){
include("submit.php");
}elseif($HTTP_POST_VARS['s_5']=="編輯公告"){
include("edit.php");
}elseif($HTTP_POST_VARS['s_6']=="版本資訊"){
include("info.php");
}elseif($HTTP_POST_VARS['s_7']=="回公告首頁"){
echo"<meta http-equiv=REFRESH CONTENT=0;url=sub.php>";
}
?>
</body>

</html>
