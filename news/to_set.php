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
# �}��set.dat�ɮסA�H��Ū���覡�}��
$sf=fopen("set.dat","r");
# �Q��fread()��ƨӭp��set.dat������
$sr=fread($sf,filesize("set.dat"));
# �Q��explode()��ƨӾɥX���
list($background,$bgcolor,$style_pic,$form_size,$form_type,$form_line,$form_color,$title_bgcolor,$title_font,$menu_bgcolor,$menu_font,$explor_bgcolor,$explor_font,$all_bgcolor,$all_font,$login_bgcolor,$login_font,$cooltey_bgcolor,$cooltey_font,$font_link)=explode("��",$sr);
?>