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
<? require("sign.php");?>
<? # �ɤJsign.php�A�H�T�{���� ?>
<center>
<?
if($HTTP_POST_VARS['button']!="yes"){
?>
<form action="check.php" method="post"><input type="hidden" name="button" value="yes"><input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>"><input type="Submit" value="�R�����i" name="s_1"><input type="Submit" value="�R���ɮ�" name="s_2"><input type="Submit" value="�]�w����" name="s_3"><input type="Submit" value="�o�����i" name="s_4"><input type="Submit" value="�s�褽�i" name="s_5"><input type="Submit" value="������T" name="s_6"><input type="Submit" value="�^���i����" name="s_7"></form>
<?
}
?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�ϥΪ̽s���</title>
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
<form action="edit_save.php" method="post">   
<input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>">
<table border="0" width="<?=$form_size;?>">   
  <tr>   
    <td width="102%" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>">   
      <p align="center"><font size="2" color="<?=$title_font;?>">�ϥΪ̽s�褽�i��</font></td>   
  </tr>   
  <tr>
    <td width="102%" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$menu_bgcolor;?>">   
<p align="center"><font color="<?=$menu_font;?>" size="2">�C�j�@�ӡ����Ȭ��G�Y������������D���s�����m�W���H�c���W���ɮ׳s�����ŭȡ����i���e</font>  
    </td>
</tr>
<?
$f=fopen("sub.dat","r");
# �H�sŪ���Ҧ��}��sub.dat�ɮ�
$r=fread($f,filesize("sub.dat"));
# �p���ɮת���
$r=stripslashes($r);
# �h���ĽX
?>     
<center>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$explor_font;?>"><textarea rows="12" cols="65" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" name="main"><?=$r;?></textarea></font></td>      
  </tr>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="Submit" name="send" value="�ǰe" style="background-color: <?=$bgcolor;?>; color: <?=$login_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></td>      
  </tr>      
</table>      
</form>   
<br>  
<a href="sub.php"><font color="<?=$font_link;?>" size="2">�^���i����</font></a>     
</center>      
�@    
</body>    
    
</html>