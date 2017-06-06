<?
//--------------------------------------------------------//
//		PHP + Flash記數器			  //
//	作者:旅行   http://phpiscool.yeah.net		  //
//		歡迎訪問PHPisCool.yeah.net		  //
//	Copyright 2001 PHPisCOOL - All Rights Reserved    //
//	      拜托，請尊重勞動成果，請保留上述信息		  //
//	         程序參考 韓國 Flash記數器                  //
//--------------------------------------------------------//

$file             = "./count.txt"; // 記數文件名稱
$startno          = "1000";        // 起始數值
$tempfile         = "temp.txt";    // 信標文件名稱

$t_now   = time();
$t_array = getdate($t_now);
$day     = $t_array['mday'];
$mon     = $t_array['mon'];
$year    = $t_array['year'];

if (file_exists("$file")) { 
	$count_info=file("$file");
	$c_info = explode(",", $count_info[0]);
	$total_c=$c_info[0];
	$yesterday_c=$c_info[1];
	$today_c=$c_info[2];
	$lastday=$c_info[3];
} else {
	$total_c="$startno";
	$yesterday_c="0";
	$today_c="0";
	$lastday="0";
}

if ( isset($HTTP_COOKIE_VARS["yourcount"]) ) $your_c = $HTTP_COOKIE_VARS["yourcount"]; 

if ( !isset($HTTP_COOKIE_VARS["countcookie"]) || $HTTP_COOKIE_VARS["countcookie"] != $day) {

	$your_c=1;
	$lockfile=fopen("temp.txt","a");
	flock($lockfile,3);

	putenv('TZ=JST-9');
  
	$t_array2 = getdate($t_now-24*3600);
	$day2=$t_array2['mday'];
	$mon2=$t_array2['mon'];
	$year2=$t_array2['year'];

	$today = "$year-$mon-$day";
	$yesterday = "$year2-$mon2-$day2";

	if ($today != $lastday) {
     
     		if ($yesterday != $lastday) $yesterday_c = "0";
      			else $yesterday_c = $today_c;
     
		$today_c = 0;
		$lastday = $today;
	}
	$total_c++;
	$today_c++;

	$total_c     = sprintf("%06d", $total_c);
	$today_c     = sprintf("%06d", $today_c);
	$yesterday_c = sprintf("%06d", $yesterday_c);

	setcookie("countcookie","$day",$t_now+43200);

	$fp=fopen("$file","w");
	fputs($fp, "$total_c,$yesterday_c,$today_c,$lastday");
	fclose($fp);

	fclose($lockfile);

}
if ( empty( $your_c ) ) $your_c = 1;

setcookie("yourcount",$your_c+1,$t_now+43200);

$your_c = sprintf("%06d", $your_c);
print ("Content-type: text/plain\n");
print ("\n");
print ("cgi=count.php&total=$total_c&yes=$yesterday_c&today=$today_c&you=$your_c&load=end&");

exit;
?>
