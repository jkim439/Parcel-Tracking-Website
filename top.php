<?
session_start();

if(!$_SESSION[ip]) {
sleep(1);
echo "<script>alert('로그인을 먼저 해주세요. ');location.href='logout.php';</script>"; exit;
}

if(!$_SESSION[ip]==$_SERVER[REMOTE_ADDR]) {
sleep(4);
echo "<script>alert('무단 접속을 시도하였습니다. ');location.href='logout.php';</script>"; exit;
}

$y=date('Y');
$m=date('m');
$d=date('d');
$h=date('H');
$i=date('i');
$s=date('s');
$time_now=date("U",mktime($h,$i,$s,$m,$d,$y));
$time_lit1= $_SESSION[time] - $time_now;
$time_lit2= $time_lit1*1000;

?>