<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=euc-kr">
	<title>����� �������� ����Ʈ</title>
</head>
</html>

<?

session_start();

if(getenv("REQUEST_METHOD") == 'GET' ) {
sleep(4);
echo "<script>alert('���� ������ �õ��Ͽ����ϴ�. ');location.href='index.php';</script>"; exit;
}

$y=date('Y');
$m=date('m');
$d=date('d');
$h=date('H');
$i=date('i');
$s=date('s');
$time1=date("U",mktime($h,$i,$s,$m,$d,$y));
$time2=$time1 + 120;
//$time3=date("Y-m-d-H-i-s",$timecode);

if($_POST['mode']!==admin) {
if($_POST['jumin']==9211031182422 && $_POST['pass']==sdxh) {
sleep(1);
$ip = $_SERVER[REMOTE_ADDR];
$_SESSION["time"] = "$time";
$_SESSION["ip"] = "$ip";
$_SESSION["time"] = "$time2";
session_register(ip);
session_register(time);
echo "<script>location.href='main.php';</script>";

} else {
sleep(4);
echo "<script>alert('�Է��Ͻ� ������ �ùٸ��� �ʽ��ϴ�. ');history.back();</script>"; exit;
}
}
if($_POST['mode']==admin) {
if($_POST['jumin']==zaq1) {
$ip = $_SERVER[REMOTE_ADDR];
$admin = 1;
$_SESSION["ip"] = "$ip";
$_SESSION["admin"] = "$admin";
$_SESSION["time"] = "$time2";
session_register(ip);
session_register(admin);
session_register(time);
echo "<script>location.href='main.php';</script>";

} else {
echo "<script>alert('������ ���� ������ �� �����ϴ�.');history.back();</script>"; exit;
}
}


?>