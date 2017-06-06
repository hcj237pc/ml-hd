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
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>Info</title>
</head>

<body>
<font face="Verdana" size="2">
<center>
<table border="0" width="67%" style="border: 1 dotted #CCCCCC" height="136">
  <tr>
    <td width="27%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="16" bgcolor="#FDF4F2"><font size="2" color="#006699">程式名稱：</font></td>
    <td width="73%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="16" bgcolor="#FDF4F2"><font color="#993300" size="2">C.P.Sub公告系統</font></td>
  </tr>
  <tr>
    <td width="27%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="16" bgcolor="#FDF4F2"><font size="2" color="#006699">程式製作者：</font></td>
    <td width="73%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="16" bgcolor="#FDF4F2"><font color="#993300"><font size="2">Cooltey 
      (馮必豪</font><font face="Verdana">)@</font><font size="2">國立大里高中</font></font></td>
  </tr>
  <tr>
    <td width="27%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="16" bgcolor="#FDF4F2"><font size="2" color="#006699">程式版本：</font></td>
    <font face="Verdana">
    <td width="73%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="16" bgcolor="#FDF4F2"><font size="2" color="#993300">V3.0</font></td>
    </tr>
    <tr>
      <td width="27%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="39" bgcolor="#FDF4F2"></font><font size="2" color="#006699">程式更新日期：</font></td>
    <font face="Verdana"><font face="Verdana">
    <td width="73%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="39" bgcolor="#FDF4F2"><font size="2" color="#993300">2004/7/3</font></td>
    </tr>
    <tr>
      <td width="27%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="7" bgcolor="#FDF4F2"><font size="2" color="#006699">Cooltey</font></font></font><font size="2" color="#006699">的話：</font></td>
    <td width="73%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="7" bgcolor="#FDF4F2"><font size="2" color="#993300">這次的</font><font face="Verdana" color="#993300"><font face="Verdana">3.0</font></font><font size="2" color="#993300">版是</font><font face="Verdana" color="#993300"><font face="Verdana">Cooltey</font></font><font size="2" color="#993300">再高中階段的最後一次更新</font><font face="Verdana" color="#993300"><font face="Verdana">.....</font></font><font size="2" color="#993300">吧，這次採用表單的模式來傳送密碼，可以讓密碼傳送比較安全喔！還有加了一個小小的檔案名稱判斷，如果是空白的就不可以上傳喔！</font><font face="Verdana" color="#993300"><font face="Verdana">Cooltey</font></font><font size="2" color="#993300">希望您使用愉快喔！</font></td>
  </tr>
  <font face="Verdana"><font face="Verdana">
  <tr>
    <td width="27%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="4" bgcolor="#FDF4F2"><font size="2" color="#006699">Cooltey</font></font></font><font size="2" color="#006699">的個人網站：</font></td>
  <font face="Verdana"><font face="Verdana">
  <td width="73%" style="border-right: 1 dotted #008080; border-bottom: 1 dotted #008080" height="4" bgcolor="#FDF4F2"><font size="2" color="#993300">http://cooltey.idv.st</font></td>
  </tr>
  </table>
  </font></font></center>

</body>

</html>
