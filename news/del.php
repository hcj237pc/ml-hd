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
<? # �Nto_set.php�ɮ׾ɤJ ?>
<? require("to_set.php");?>
<center>
<?
if($HTTP_POST_VARS['button']!="yes"){
?>
<form action="check.php" method="post"><input type="hidden" name="button" value="yes"><input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>"><input type="Submit" value="�R�����i" name="s_1"><input type="Submit" value="�R���ɮ�" name="s_2"><input type="Submit" value="�]�w����" name="s_3"><input type="Submit" value="�o�����i" name="s_4"><input type="Submit" value="�s�褽�i" name="s_5"><input type="Submit" value="������T" name="s_6"><input type="Submit" value="�^���i����" name="s_7"></form>
<?
}
?>
<?
# �P�_$delid����
if($HTTP_POST_VARS['delid']==""){  
echo"<font color=Red size=2><center>�ЧR�����i</font>"; 
}else{ 
# �N$del_id���ȱa�Jdelete()�ۭq��Ʒ�
$del_id=delete($HTTP_POST_VARS['delid']); 
echo"<font color=Red size=2><center>���i�R�����\�I</font><br>"; 
} 
?> 
<?
# �ۭq���delete()�H�K�R���A�H�U�{���X���A����
function delete($del_id){ 
        $del_file = "sub.dat"; 
        $del_files = file($del_file); 
        $del_count = count($del_files); 
        for($i = 0; $i < $del_count; $i++){ 
                if($i != $del_id){ 
                        $del_filez[] = $del_files[$i]; 
                } 
        } 
        if($del_open = fopen($del_file, "w+")){ 
                $fop_count = count($del_filez); 
                for($i = 0; $i < $fop_count; $i++){ 
                        $new_file = $del_filez[$i]; 
                        fputs($del_open, $new_file); 
 
                } 
 
        } else { 
                echo "<center><font color=Red size=2>�L�k�R�����i�I</font>"; 
                exit; 
        } 
} 
?>
<? # �ɤJsign.php�A�T�{���� ?>
<? require("sign.php");?>
<center>

<HTML>
<HEAD>
<TITLE>�R�����i��</TITLE>
<META http-equiv=Content-Type content="text/html; charset=big5">
<style type="text/css">
A{ text-decoration: none; }
A:hover { text-decoration: underline; }
</style>
</HEAD>
<body background="<?=$background;?>" bgcolor="<?=$bgcolor;?>">
</center>
<? 
# �}��sub.dat���ɮרåB�P�_����
$lines=file("sub.dat");  
$count=count($lines);
$delcount=$count-1; 
for($a=($count-1);$a>=0;$a--){ 
$line[]=$lines[$a]; 
} 
?> 
<center>  
<table border="0" width="<?=$form_size;?>"> 
  <tr> 
    <td width="100%" colspan="5" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" bgcolor="<?=$title_bgcolor;?>"> 
      <p align="center"><font size="2" color="<?=$title_font;?>">���i��</font></td> 
  </tr> 
  <tr> 
    <td width="6%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">�s��</font></td> 
    <td width="60%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">���i���D</font></td> 
    <td width="11%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">���</font></td> 
    <td width="23%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">�o���H</font></td> 
    <td width="25%" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$menu_font;?>" size="2">�R��</font></td> 
  </tr> 
<? 
# �N�ɮץ�explode()��ƨӤ���
for($i=0;$i<$count;$i++){ 
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("��",$line[$i]); 
$id=$count-$i; 
$delid=$delcount-$i;
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
#  ��ܦC��
if($note): 
?> 
  <tr> 
    <td width="6%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $id ;?></font></td> 
    <td width="60%" align="Left" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $kind_pic;?><a href="explor.php?id=<?= $id ;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $title;?></font></a></td> 
    <td width="11%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><font color="<?=$explor_font;?>" size="1" face="Verdana"><?= $date ;?></font></td> 
    <td width="23%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><?= $person ;?></td> 
<form action="del.php" method="post"><td width="10%" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="Hidden" name="delid" value="<?= $delid ;?>"><input type="Submit" name="send" value="�R��" style="background-color: <?=$bgcolor;?>; color: <?=$explor_font;?>; border: border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>"><input type="hidden" name="user_name" value="<?=$HTTP_POST_VARS['user_name'];?>"><input type="hidden" name="user_passwd" value="<?=$HTTP_POST_VARS['user_passwd'];?>"></td></form> 
  </tr> 
<?
# �����C��
endif;
}
?>
  <tr> 
    <td width="100%" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="5"><font size="1" face="Verdana">C.P.Sub ���i�t�� 
      </font><font size="1" face="Verdana" font="<?=$cooltey_font;?>"> v3.0 Powered By <a href="http://cooltey.idv.st">Cooltey</a> 
      </font></td> 
  </tr> 
</table> 
<br>
<font color="<?=$font_link;?>" size="2"><a href="sub.php">�^���i����</a></font>
</center> 
</body> 
 
</html>