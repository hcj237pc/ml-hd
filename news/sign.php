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

$sign_name="mlhd" ;//����J�b��
$sign_passwd="com" ;//����J�K�X

$mem_passwd=array($sign_name=>$sign_passwd);

# �P�_��J���b���W�٬O�_���T
$mem=array_keys($mem_passwd);

if(!in_array($HTTP_POST_VARS['user_name'],$mem)){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>�n�����ѡA�b�����s�b�I</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2><center>�^�W�@��</font></a></fieldset></td></tr></table></center>";
        exit;
}
# �P�_�K�X�O�_�P�b�����K�X�ۦP
if($HTTP_POST_VARS['user_passwd']!=$mem_passwd[$HTTP_POST_VARS['user_name']]){
        echo "<center><table border=0 width=300><tr><td><fieldset><br><font color=Red size=2><legend>�n�����ѡA�K�X�P�b�����šI</legend></font><a href=javascript:history.back(1)><font color=$font_link size=2><center>�^�W�@��</font></a></fieldset></td></tr></table></center>";
        exit;
}
?>
</body>
</html>