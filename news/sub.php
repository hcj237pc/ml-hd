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
<? require("to_set.php");?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>���i��</title>
<STYLE type=text/css>


A {
	TEXT-DECORATION: none
}
A:hover {
	TEXT-DECORATION: underline
}
</STYLE>
</head>

<body background="<?=$background ;?>" bgcolor="<?=$bgcolor ;?>">
<?
if($HTTP_GET_VARS['more']=="all"){
# ���]�̦h�����i���Ƭ�1000��
$page="1000";
}else{
# $page���N���O�C����ܪ��ƥ�
$page="10";
}
if($num==""){
$num=$page;
} 
# Ū���x�s�ɮסB�p���ɮת���
$lines=file("sub.dat");  
$count=count($lines);
for($a=($count-1);$a>=0;$a--){           
$line[]=$lines[$a];           
}
?> 
<center> 
<table border="0" width="720" style="border-collapse: collapse" bordercolor="#111111" cellpadding="0" cellspacing="0" height="84"> 
  <tr> 
    <td width="35" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="21"><font color="<?=$menu_font;?>" size="2">�s��</font></td> 
    <td width="389" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="21">
    <font size="2">�̷s���i����</font></td> 
    <td width="68" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="21"><font color="<?=$menu_font;?>" size="2">���</font></td> 
    <td width="284" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="21"><font color="<?=$menu_font;?>" size="2">�o���H</font></td> 
  </tr> 
<?
# ��for�j���Ū�����i����
for($i=0;$i<$count;$i++){
# ��if�P�_�y���^�����i���ƪ���ܽd��
if($i>=($num-$page)&&$i<$num){
# ����list�Nsub.dat�����ɮפ��t�n�A�b�N�ɮץ�explode()��ƨӤ���
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("��",$line[$i]);
$id=$count-$i;
# �h��php�����׽u�ĽX 
$url=stripslashes($url);
$name=stripslashes($name);
$mail=stripslashes($mail);
$title=stripslashes($title);
$kind=stripslashes($kind); 
$note=stripslashes($note);
# �P�_$mail����
if($mail!=""){
	  $person="<a href='mailto:$mail'><font color='$explor_font' size='2' face='Verdana'>$name</font></a>";
	}else{
	  $person="<font color='$explor_font' size='2' face='Verdana'>$name</font>";
	}
# �P�_$style_pic����
if($style_pic=="open"){
$kind_pic="<img src='$kind'></img>";
}else{
$kind_pic="";
}
# ��ܦC��
if($note): 
?> 
  <tr> 
    <td width="35" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="1"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $id ;?></font></td> 
    <td width="389" align="Left" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="1"><?= $kind_pic;?><a href="explor.php?id=<?= $id ;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $title;?></font></a></td> 
    <td width="68" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="1"><font color="<?=$explor_font;?>" size="1" face="Verdana"><?= $date ;?></font></td> 
    <td width="284" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="1"><?= $person ;?></td> 
  </tr> 
<? 
# �����C��
endif;
}
}
?>
<?
# �}�l�P�_$more����
if($more=="all"){
echo "<tr>";
echo "<td width='100%' align='right' bgcolor='$all_bgcolor' style='border: $form_line $form_type $form_color' colspan='4'><a href='sub.php'><font size='1' color='$all_font' face='Verdana'><img src='img/all.gif' border='0'>��̪ܳ񤽧i</font></a></td>";
echo "</tr>";
}else{
echo "<tr>";
echo "<td width='100%' align='right' bgcolor='$all_bgcolor' style='border: $form_line $form_type $form_color' colspan='4'><a href='sub.php?more=all'><font size='1' color='$all_font' face='Verdana'><img src='img/all.gif' border='0'>��ܥ������i</font></a></td>";
echo "</tr>";
}
?>
  <tr> 
    <td width="788" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4" height="13">
    <b><a href="login.php"><font color="#FF0000" face="Verdana" size="2">
    <img src="img/admin.gif" border="0">���i�޲z</font></a></b></td> 
  </tr> 
  <tr> 
    <td width="788" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4" height="16"><font size="1" face="Verdana">C.P.Sub ���i�t�� 
      </font><font size="1" face="Verdana" font="<?=$cooltey_font;?>"> v3.0 Powered By 
      </font><font size="2" face="Verdana" font="<?=$cooltey_font;?>"> 
    <a href="http://www.ml-hd.com/">���ڶE��</a> 
      </font></td> 
  </tr> 
</table> 
</center> 
</body> 
 
</html>