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
<?
# �P�_$set_start���ȬO�_��start
if($HTTP_POST_VARS['set_start']=="start"){
# �h��PHP�����ĽX
$background=stripslashes($HTTP_POST_VARS['background']);
$background=str_replace("��","", $HTTP_POST_VARS['background']);
$bgcolor=str_replace("��","", $HTTP_POST_VARS['bgcolor']);
$style_pic=str_replace("��","", $HTTP_POST_VARS['style_pic']);
$form_size=str_replace("��","", $HTTP_POST_VARS['form_size']);
$form_type=str_replace("��","", $HTTP_POST_VARS['form_type']);
$form_line=str_replace("��","", $HTTP_POST_VARS['form_line']);
$form_color=str_replace("��","", $HTTP_POST_VARS['form_color']);
$title_bgcolor=str_replace("��","", $HTTP_POST_VARS['title_bgcolor']);
$title_font=str_replace("��","", $HTTP_POST_VARS['title_font']);
$menu_bgcolor=str_replace("��","", $HTTP_POST_VARS['menu_bgcolor']);
$menu_font=str_replace("��","", $HTTP_POST_VARS['menu_font']);
$explor_bgcolor=str_replace("��","", $HTTP_POST_VARS['explor_bgcolor']);
$explor_font=str_replace("��","", $HTTP_POST_VARS['explor_font']);
$all_bgcolor=str_replace("��","", $HTTP_POST_VARS['all_bgcolor']);
$all_font=str_replace("��","", $HTTP_POST_VARS['all_font']);
$login_bgcolor=str_replace("��","", $HTTP_POST_VARS['login_bgcolor']);
$login_font=str_replace("��","", $HTTP_POST_VARS['login_font']);
$cooltey_bgcolor=str_replace("��","", $HTTP_POST_VARS['cooltey_bgcolor']);
$cooltey_font=str_replace("��","", $HTTP_POST_VARS['cooltey_font']);
$font_link=str_replace("��","", $HTTP_POST_VARS['font_link']);
# �ƦC�U�����
$set=$background."��".$bgcolor."��".$style_pic."��".$form_size."��".$form_type."��".$form_line."��".$form_color."��".$title_bgcolor."��".$title_font."��".$menu_bgcolor."��".$menu_font."��".$explor_bgcolor."��".$explor_font."��".$all_bgcolor."��".$all_font."��".$login_bgcolor."��".$login_font."��".$cooltey_bgcolor."��".$cooltey_font."��".$font_link;
# �}��set.dat�ɮסA�H�л\�Φ��}��
$f=fopen("set.dat","w+");
# �g�J���
fputs($f,$set);
# ����set.dat�ɮ�
fclose($f);
 echo "<center><font size=2 color=red>�x�s�����I</font></center>";
}
?>
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
<title>�����]�w</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>

<body bgcolor="#FFFFFF">
<center>
<font color="#CC6600" size="2">�������S���M�γ]�w��I</font>
<form action="set.php" method="post">
<input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>">
<table border="1" style="border-collapse: collapse; border-style: dotted; border-width: 1" bordercolor="#111111" width="61%" id="AutoNumber1" height="477">
  <tr>
    <td width="100%" style="border-style: solid; border-width: 1" colspan="2" height="8" bgcolor="#3399FF">
    <p align="center"><font size="2" face="Verdana" color="#FFFFFF">�����]�w</font></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">�I���Ϥ�</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="background" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$background ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">�I����m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$bgcolor ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="16" align="center">
    <font size="2" face="Verdana" color="#0033CC">�өʹϤ�</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="16" align="center">
    <select size="1" name="style_pic" style="font-size: 10 pt; color: #996633; border-style: dashed; border-width: 1; background-color: #FFFFCC"><option value="open">�ϥέөʹϤ�</option><option value="close">�����өʹϤ�</option></select></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">�����j�p</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="form_size" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$form_size ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="16" align="center">
    <font size="2" face="Verdana" color="#0033CC">�ؽu+���Φ�</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="16" align="center">
    <select size="1" name="form_type" style="font-size: 10 pt; color: #996633; border-style: dashed; border-width: 1; background-color: #FFFFCC">
    <option selected  value="solid">��u</option>
    <option value="dotted">�I</option>
    <option value="dashed">�u�q</option>
    <option value="groove">���餺�W</option>
    <option value="ridge">����~�Y</option>
    <option value="inset">���W</option>
    <option value="outset">�~�Y</option>
    </select></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="16" align="center">
    <font size="2" face="Verdana" color="#0033CC">�ؽu+���ʲ�</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="16" align="center">
    <select size="1" name="form_line" style="font-size: 10 pt; color: #996633; border-style: dashed; border-width: 1; background-color: #FFFFCC">
    <option value="0">�L</option>
    <option selected value="1">�ʫפ@</option>
    <option value="2">�ʫפG</option>
    <option value="3">�ʫפT</option>
    </select></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">�ؽu+����m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="form_color" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$form_color ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">���D�C�I����m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="title_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$title_bgcolor ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">���D�C��r��m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="title_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$title_font ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">���ئC�I����m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="menu_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$menu_bgcolor ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">���ئC��r��m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="menu_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$menu_font ; ?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">��ܦC�I����m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="explor_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$explor_bgcolor ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">��ܦC��r��m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="explor_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$explor_font ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">�u��ܥ������i�v�C�I����m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="all_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$all_bgcolor ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">�u��ܥ������i�v�C��r��m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="all_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$all_font ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">�u�i�J�ϥΪ̨t�Ρv�C�I����m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20" align="center">
    <input type="text" name="login_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$login_bgcolor ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">�u�i�J�ϥΪ̨t�Ρv�C��r��m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20">
    <input type="text" name="login_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$login_font ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">���{�����v�ŧi�C�I����m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20">
    <input type="text" name="cooltey_bgcolor" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$cooltey_bgcolor ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">���{�����v�ŧi�C��r��m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20">
    <input type="text" name="cooltey_font" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$cooltey_font ;?>"></td>
  </tr>
  <tr>
    <td width="42%" style="border-style: solid; border-width: 1" height="20" align="center">
    <font size="2" face="Verdana" color="#0033CC">�D�s����r��m</font></td>
    <td width="72%" style="border-style: solid; border-width: 1" height="20">
    <input type="text" name="font_link" size="37" style="font-family: Verdana; font-size: 10 pt; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7" value="<?=$font_link ;?>"></td>
  </tr>
  <tr>
    <td width="114%" style="border-style: solid; border-width: 1" height="16" colspan="2">
    <p align="center">
    <input type="hidden" name="set_start" value="start">
    <input type="submit" name="send" value="�]�w����" style="font-family: Verdana; color: #996633; border: 1px dotted #0099FF; background-color: #FFFFF7"></td>
  </tr>
  <tr>
    <td width="114%" style="border-style: solid; border-width: 1" height="16" colspan="2" bgcolor="#FFFFCC">
    <p align="center"><font size="2" face="Verdana">C.P.Sub ���i�t�� 
      </font><font size="1" face="Verdana"> v3.0 Powered By <a href="http://cooltey.idv.st">Cooltey</a> 
      </font></td>
  </tr>
</table>
</form>
</center>
<center>
<table border="0" style="border-collapse: collapse" bordercolor="#111111" width="9%" id="AutoNumber2">
  <tr>
    <td width="100%"><font size="2"><a href="sub.php"><font color="<?=$font_link;?>">�^���i����</font></a></font></td>
  </tr>
</table>
</center>
</body>

</html>