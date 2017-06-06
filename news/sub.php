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
<? require("to_set.php");?>
<html>
<head>
<meta http-equiv="Content-Language" content="zh-tw">
<meta http-equiv="Content-Type" content="text/html; charset=big5">
<title>公告區</title>
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
# 假設最多的公告筆數為1000筆
$page="1000";
}else{
# $page中代表的是每頁顯示的數目
$page="10";
}
if($num==""){
$num=$page;
} 
# 讀取儲存檔案、計算檔案長度
$lines=file("sub.dat");  
$count=count($lines);
for($a=($count-1);$a>=0;$a--){           
$line[]=$lines[$a];           
}
?> 
<center> 
<table border="0" width="720" style="border-collapse: collapse" bordercolor="#111111" cellpadding="0" cellspacing="0" height="84"> 
  <tr> 
    <td width="35" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="21"><font color="<?=$menu_font;?>" size="2">編號</font></td> 
    <td width="389" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="21">
    <font size="2">最新公告消息</font></td> 
    <td width="68" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="21"><font color="<?=$menu_font;?>" size="2">日期</font></td> 
    <td width="284" align="center" bgcolor="<?=$menu_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="21"><font color="<?=$menu_font;?>" size="2">發布人</font></td> 
  </tr> 
<?
# 用for迴圈來讀取公告筆數
for($i=0;$i<$count;$i++){
# 用if判斷句來擷取公告筆數的顯示範圍
if($i>=($num-$page)&&$i<$num){
# 先用list將sub.dat中的檔案分配好，在將檔案用explode()函數來分割
list($kind,$date,$title,$url,$name,$mail,$updname,$hidden,$note)=explode("∥",$line[$i]);
$id=$count-$i;
# 去除php中的斜線衝碼 
$url=stripslashes($url);
$name=stripslashes($name);
$mail=stripslashes($mail);
$title=stripslashes($title);
$kind=stripslashes($kind); 
$note=stripslashes($note);
# 判斷$mail的值
if($mail!=""){
	  $person="<a href='mailto:$mail'><font color='$explor_font' size='2' face='Verdana'>$name</font></a>";
	}else{
	  $person="<font color='$explor_font' size='2' face='Verdana'>$name</font>";
	}
# 判斷$style_pic的值
if($style_pic=="open"){
$kind_pic="<img src='$kind'></img>";
}else{
$kind_pic="";
}
# 顯示列串
if($note): 
?> 
  <tr> 
    <td width="35" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="1"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $id ;?></font></td> 
    <td width="389" align="Left" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="1"><?= $kind_pic;?><a href="explor.php?id=<?= $id ;?>"><font color="<?=$explor_font;?>" size="2" face="Verdana"><?= $title;?></font></a></td> 
    <td width="68" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="1"><font color="<?=$explor_font;?>" size="1" face="Verdana"><?= $date ;?></font></td> 
    <td width="284" align="center" bgcolor="<?=$explor_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" height="1"><?= $person ;?></td> 
  </tr> 
<? 
# 結束列串
endif;
}
}
?>
<?
# 開始判斷$more的值
if($more=="all"){
echo "<tr>";
echo "<td width='100%' align='right' bgcolor='$all_bgcolor' style='border: $form_line $form_type $form_color' colspan='4'><a href='sub.php'><font size='1' color='$all_font' face='Verdana'><img src='img/all.gif' border='0'>顯示最近公告</font></a></td>";
echo "</tr>";
}else{
echo "<tr>";
echo "<td width='100%' align='right' bgcolor='$all_bgcolor' style='border: $form_line $form_type $form_color' colspan='4'><a href='sub.php?more=all'><font size='1' color='$all_font' face='Verdana'><img src='img/all.gif' border='0'>顯示全部公告</font></a></td>";
echo "</tr>";
}
?>
  <tr> 
    <td width="788" align="center" bgcolor="<?=$login_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4" height="13">
    <b><a href="login.php"><font color="#FF0000" face="Verdana" size="2">
    <img src="img/admin.gif" border="0">公告管理</font></a></b></td> 
  </tr> 
  <tr> 
    <td width="788" align="center" bgcolor="<?=$cooltey_bgcolor;?>" style="border: <?=$form_line;?> <?=$form_type;?> <?=$form_color;?>" colspan="4" height="16"><font size="1" face="Verdana">C.P.Sub 公告系統 
      </font><font size="1" face="Verdana" font="<?=$cooltey_font;?>"> v3.0 Powered By 
      </font><font size="2" face="Verdana" font="<?=$cooltey_font;?>"> 
    <a href="http://www.ml-hd.com/">美侖診所</a> 
      </font></td> 
  </tr> 
</table> 
</center> 
</body> 
 
</html>