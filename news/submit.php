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
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>�ϥΪ̵n����</title>
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
<form action="result.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>">   
<table border="0" width="<?=$form_size;?>">   
  <tr>   
    <td width="102%" colspan="4" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>">   
      <p align="center"><font size="2" color="<?=$title_font;?>">�ϥΪ̵o���i��</font></td>   
  </tr>   
  <tr>   
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">���i���D</font><font size="2">�G</font></td>   
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font size="2" color="<?=$explor_font;?>"><input type="text" name="title" size="52" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
  </tr>
    <tr>   
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">���i�H�m�W�G</font></td>   
    <td width="30%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$explor_font;?>"><input type="text" name="name" size="15" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
    <td width="20%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">���i�H�H�c�G</font></td>  
    <td width="30%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$explor_font;?>"><input type="text" name="mail" size="15" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>  
  </tr>   
  <tr>  
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�߱��Ϲ��G</font></td>  
</center>   
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3">  
    <p align="left">  
    <input type="radio" name="kind" value="img/01.gif" checked><img src="img/01.gif"> 
    <input type="radio" name="kind" value="img/02.gif"><img src="img/02.gif">      
    <input type="radio" name="kind" value="img/03.gif"><img src="img/03.gif">      
    <input type="radio" name="kind" value="img/04.gif"><img src="img/04.gif">      
    <input type="radio" name="kind" value="img/05.gif"><img src="img/05.gif">      
    <input type="radio" name="kind" value="img/06.gif"><img src="img/06.gif">      
    <input type="radio" name="kind" value="img/07.gif"><img src="img/07.gif">     
    <input type="radio" name="kind" value="img/08.gif"><img src="img/08.gif">       
      
    <input type="radio" name="kind" value="img/09.gif"><img src="img/09.gif">      
    <input type="radio" name="kind" value="img/10.gif"><img src="img/10.gif">      
    <input type="radio" name="kind" value="img/11.gif"><img src="img/11.gif">      
    <input type="radio" name="kind" value="img/12.gif"><img src="img/12.gif">      
    <input type="radio" name="kind" value="img/13.gif"><img src="img/13.gif">      
    <input type="radio" name="kind" value="img/14.gif"><img src="img/14.gif">      
    <input type="radio" name="kind" value="img/15.gif"><img src="img/15.gif">      
    <input type="radio" name="kind" value="img/16.gif"><img src="img/16.gif">       
    </p>      
    </td>       
  </tr>       
<center>      
  <tr>       
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�����s���G</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"><input type="text" name="url" size="52" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>      
  </tr>      
  <tr>       
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font size="2" color="<?=$menu_font;?>">�W���ɮסG</font></td>       
    <td width="77%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="3"><font face="v" size="2" color="<?=$explor_font;?>"><input type="file" name="updata" size="44" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></font></td>      
  </tr>   
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><font size="2" color="<?=$menu_font;?>">���i���e</font></td>      
  </tr>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><font size="2" color="<?=$explor_font;?>"><textarea rows="7" cols="65" style="background-color: <?=$bgcolor;?>; font-family: Verdana; color: <?=$explor_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" name="note"></textarea></font></td>      
  </tr>      
  <tr>      
    <td width="102%" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4"><input type="Submit" name="send" value="�ǰe" style="background-color: <?=$bgcolor;?>; color: <?=$login_font;?>; border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"></td>      
  </tr>      
</table>      
</form>   
<br>  
<a href="sub.php"><font color="<?=$font_link;?>" size="2">�^���i����</font></a>     
</center>      
�@    
</body>    
    
</html>