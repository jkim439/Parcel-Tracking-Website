<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=euc-kr">
	<title>����� �������� ����Ʈ</title>
	<script>
	function activation() {
	
	if(document.login.jumin.value.length==13 && document.login.pass.value.length==4){
	document.login.submit.disabled=false;
	}

	if(document.login.jumin.value.length<13 || document.login.pass.value.length<4){
	document.login.submit.disabled=true;
	}

	}
	</script>
</head>

<body onload="javascript:document.login.jumin.focus();">
<form name="login" target="_top" method="post" action="login.php">
<table width="800" align="center" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black" height="223">
        <tr>
            <td colspan="2" height="84" width="794">
                <p style="margin-left:5pt;"><b><font face="���� ���"><span style="font-size:16pt;">����� �������� ����Ʈ</span></font></b></p>
            </td>
        </tr>
        <tr>
        <td height="45" width="120">
                <p style="margin-left:5pt;"><font face="���� ���"><span style="font-size:10pt;"><b>�ֹι�ȣ</b></span></font></p>
        </td>
            <td width="670" height="45">
                <p style="margin-left:5pt;"><font face="���� ���"><span style="font-size:10pt;"><input type="password" name="jumin" maxlength="13" size="28" style="font-family:'���� ���'; font-size:9pt;" onkeyup="activation()"></span></font></p>
            </td>
        </tr>
        <tr>
        <td height="45" width="120">
                <p style="margin-left:5pt;"><font face="���� ���"><span style="font-size:10pt;"><b>��й�ȣ</b></span></font></p>
        </td>
            <td height="45" width="670">
                <p style="margin-left:5pt;"><font face="���� ���"><span style="font-size:10pt;"><input type="password" name="pass" maxlength="4" size="19" style="font-family:'���� ���'; font-size:9pt;" onkeyup="activation()"></span></font></p>
            </td>
        </tr>
        <tr>
            <td colspan="2" height="44" width="794">
                <p align="center"><font face="���� ���"><span style="font-size:10pt;"><input type="submit" name="submit" value=" �α��� " style="font-family:'���� ���'; font-size:9pt;" disabled></span></font></p>
            </td>
        </tr>
</table>
</form>
</body>

</html>