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
<?$gname=stripslashes($gname);?>
<?$gup=stripslashes($gup);?>
<?$guesr=stripslashes($guesr);?>
<head>
<meta http-equiv="Content-Language" content="en-us">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title><?echo $gname ;?> </title>
<?=$crs ;?>
</head>
<body>
<?

$sign_name="mlhd" ;//←輸入帳號
$sign_passwd="com" ;//←輸入密碼

$mem_passwd=array($sign_name=>$sign_passwd);

# 判斷輸入的帳號名稱是否正確
$mem=array_keys($mem_passwd);

if(!in_array($HTTP_POST_VARS['user_name'],$mem)){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>登陸失敗，帳號不存在！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2><center>回上一頁</font></a></fieldset></td></tr></table></center>";
        exit;
}
# 判斷密碼是否與帳號的密碼相同
if($HTTP_POST_VARS['user_passwd']!=$mem_passwd[$HTTP_POST_VARS['user_name']]){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>登陸失敗，密碼與帳號不符！</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2><center>回上一頁</font></a></fieldset></td></tr></table></center>";
        exit;
}
?>
</body>
</html>