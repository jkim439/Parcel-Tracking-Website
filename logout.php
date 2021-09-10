<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=euc-kr">
	<title>김우진 개인정보 사이트</title>
</head>
</html>

<?

session_start();

session_unregister(ip);
session_unregister(admin);
session_unregister(time);


echo "<script>alert('완벽하게 로그아웃 되었습니다. ');location.href='index.php';</script>";
exit;

?>