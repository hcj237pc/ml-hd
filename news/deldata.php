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
<? require("sign.php");?> 
<center>
<?
if($HTTP_POST_VARS['button']!="yes"){
?>
<form action="check.php" method="post"><input type="hidden" name="button" value="yes"><input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>"><input type="Submit" value="刪除公告" name="s_1"><input type="Submit" value="刪除檔案" name="s_2"><input type="Submit" value="設定版面" name="s_3"><input type="Submit" value="發布公告" name="s_4"><input type="Submit" value="編輯公告" name="s_5"><input type="Submit" value="版本資訊" name="s_6"><input type="Submit" value="回公告首頁" name="s_7"></form>
<?
}
?>
<? 
# 判斷是否有按下send按鈕
if($HTTP_POST_VARS['send']==""){  
echo"<font color=Red size=2><center>請刪除您想要刪除的檔案</font>"; 
}else{
unlink("data/".$HTTP_GET_VARS['deldname'].""); 
echo"<font color=Red size=2><center>檔案刪除成功！</font><br>"; 
} 
?> 
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>使用者刪除檔案區</title>
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
<table border="0" width="<?=$form_size;?>"> 
  <tr> 
    <td width="100%" colspan="3" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>"> 
      <p align="center"><font size="2" color="<?=$title_font;?>">刪除檔案區</font></td> 
  </tr> 
  <tr> 
    <td width="57%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">檔案名稱</font></td> 
    <td width="11%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">刪除列</font></td>  
  </tr> 
<center> 
<?
# 開啟data資料夾
$data_file=opendir('./data');
# 運用while讀取data中的檔案
while($all_file=readdir($data_file)):
# 去除.和..的連結出現
if($all_file=="."){
continue;
}
if($all_file==".."){
continue;
}
?>    
  <tr> 
    <td width="57%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><a href="./data/<?= $all_file ;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $all_file;?></font></a></td> 
    <form action="deldata.php?deldname=<?= $all_file;?>" method="post"><td width="11%" align="center" bgcolor="#FFFFFF" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="Submit" name="send" value="刪除" style="background-color: <?=$bgcolor;?>; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>"></td></form>  
  </tr> 
<?
# 結束while判斷句
endwhile;
# 關閉資料夾
closedir($data_file); 
?>
</table>     
<br>  
<a href="sub.php"><font color="<?=$font_link;?>" size="2">回公告首頁</font></a>     
</center>      
　    
</body>    
    
</html>