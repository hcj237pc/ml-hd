<?
#  -----------------------------------------  #  
#  �{���W�١GC.P.Sub���i�t��                  #
#  �]�p�̡GCooltey                            # 
#  E-Mail�Gcooltey@yahoo.com.tw               #
#  HomePage�Ghttp://cooltey.idv.st            #
#  �{�������GV3.0                            #
#  �̫��s�G2004/7/3                         #
#  �`�N�A�����v�ŧi���o�R���A�{���i���N�ק�I # 
#  �̤U���@�檺 Powered By Cooltey �Ф��n�R�� #
#  -----------------------------------------  #
?>
<? # �ɤJsign.php�A�H�T�{���� ?>
<? require("sign.php");?> 
<center>
<?
if($HTTP_POST_VARS['button']!="yes"){
?>
<form action="check.php" method="post"><input type="hidden" name="button" value="yes"><input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>"><input type="Submit" value="�R�����i" name="s_1"><input type="Submit" value="�R���ɮ�" name="s_2"><input type="Submit" value="�]�w����" name="s_3"><input type="Submit" value="�o�����i" name="s_4"><input type="Submit" value="�s�褽�i" name="s_5"><input type="Submit" value="������T" name="s_6"><input type="Submit" value="�^���i����" name="s_7"></form>
<?
}
?>
<? 
# �P�_�O�_�����Usend���s
if($HTTP_POST_VARS['send']==""){  
echo"<font color=Red size=2><center>�ЧR���z�Q�n�R�����ɮ�</font>"; 
}else{
unlink("data/".$HTTP_GET_VARS['deldname'].""); 
echo"<font color=Red size=2><center>�ɮקR�����\�I</font><br>"; 
} 
?> 
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�ϥΪ̧R���ɮװ�</title>
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
      <p align="center"><font size="2" color="<?=$title_font;?>">�R���ɮװ�</font></td> 
  </tr> 
  <tr> 
    <td width="57%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�ɮצW��</font></td> 
    <td width="11%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�R���C</font></td>  
  </tr> 
<center> 
<?
# �}��data��Ƨ�
$data_file=opendir('./data');
# �B��whileŪ��data�����ɮ�
while($all_file=readdir($data_file)):
# �h��.�M..���s���X�{
if($all_file=="."){
continue;
}
if($all_file==".."){
continue;
}
?>    
  <tr> 
    <td width="57%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><a href="./data/<?= $all_file ;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $all_file;?></font></a></td> 
    <form action="deldata.php?deldname=<?= $all_file;?>" method="post"><td width="11%" align="center" bgcolor="#FFFFFF" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="Submit" name="send" value="�R��" style="background-color: <?=$bgcolor;?>; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>"></td></form>  
  </tr> 
<?
# ����while�P�_�y
endwhile;
# ������Ƨ�
closedir($data_file); 
?>
</table>     
<br>  
<a href="sub.php"><font color="<?=$font_link;?>" size="2">�^���i����</font></a>     
</center>      
�@    
</body>    
    
</html>