<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=euc-kr">
	<title>����� �������� ����Ʈ</title>
</head>
</html>

<?

session_start();

session_unregister(ip);
session_unregister(admin);
session_unregister(time);


echo "<script>alert('�Ϻ��ϰ� �α׾ƿ� �Ǿ����ϴ�. ');location.href='index.php';</script>";
exit;

?>