<?

include "top.php";

?>
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
	<title>����� �������� ����Ʈ</title>
	<script>
	function move() {
	window.location="logout.php"
	}

	function tstart(){ //�ʱ� �����Լ�
	tcounter=<?=$time_lit1?>; //3�м��� 
	t1=setInterval(Timer,1000) 
	}

	function Timer(){ //�ð�ǥ�� ���ǰ˻�
	tcounter=tcounter-1; //1�ʽ� ����
	temp=Math.floor(tcounter); // �кκ� ���ڸ� ��� mm
	temp = temp + "�� �� �α׾ƿ�"
	dtimer.value=temp; // �ð� ���
	if(tcounter<0) tstop() // 3���� �Ϸ�
	}

	function tstop(){ //�Ϸ��Լ�
	clearInterval(t1)
	dtimer.value="0�� �� �α׾ƿ�"
	}
	</script>

</head>

<body vlink="blue" alink="blue" link="blue" <? if (!$_SESSION[admin]=="admin") {?>onload="tstart();setTimeout('move()','<?=$time_lit2?>');"<?}?>>
<table width="800" align="center" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black" height="393">
	<tr>
        <td height="84" colspan="2" width="794">
            <p style="margin-left:5pt;"><b><font face="���� ���"><span style="font-size:16pt;">����� �������� ����Ʈ</span></font></b></p>
        </td>
	</tr>
    <tr>
        <td height="45" width="673">
            <p style="margin-left:5pt;" align="left"><font face="���� ���"><span style="font-size:9pt;">&nbsp;</span></font><span style="font-size:10pt;"><font face="���� ���" color="red"><b><? if (!$_SESSION[admin]=="admin") {?></b></font></span><font face="���� ���"><span style="font-size:9pt;"><input type=text name="dtimer" readonly style="font-family:'���� ���'; font-size:9pt; color:red; text-align:left; margin-right:0pt; margin-left:0pt; border-width:1pt; border-color:white; border-style:solid;" value="����
�ð�

 ��� ���Դϴ�." size="30"></span></font><span style="font-size:10pt;"><font face="���� ���" color="red"><b><?}?></b></font></span><span style="font-size:10pt;"><font face="���� ���" color="red"><b><? if ($_SESSION[admin]) {?></b></font></span><font face="���� ���"><span style="font-size:9pt;"><input type=text name="dtimer" readonly style="font-family:'���� ���'; font-size:9pt; text-align:left; margin-right:0pt; margin-left:0pt; border-width:1pt; border-color:white; border-style:solid;" value="������ ����
 �����ϼ̽��ϴ�. " size="30"></span></font><span style="font-size:10pt;"><font face="���� ���" color="red"><b><?}?></b></font></span></p>
        </td>
        <td width="117" height="45">            
            <p align="center"><font face="���� ���"><span style="font-size:10pt;"><input type="button" name="submit" value=" �α׾ƿ� " style="font-family:'���� ���'; font-size:9pt;" onclick="javascript:location.href='logout.php';"></span></font></p>
        </td>
    </tr>
    <tr>
        <td height="195" colspan="2" width="794">
            <p style="margin-left:5pt;"><span style="font-size:10pt;"><font face="���� ���">&nbsp;</font></span></p>
            <p style="margin-left:5pt;"><b><a href="#" onclick="window.showModelessDialog('ems.php', 'popup', 'help:no; resizeable:no; status:no; statusbar:0; dialogWidth:850px; dialogHeight:650px');"><span style="font-size:10pt;"><font face="���� ���" color="blue">�����ù� �����ȸ</font></span></a></b><span style="font-size:10pt;"><font face="���� ���"></font></span></p>
            <p style="margin-left:5pt;"><b><a href="#" onclick="window.showModelessDialog('gift1.php', 'popup', 'help:no; resizeable:no; status:no; statusbar:0; dialogWidth:600px; dialogHeight:400px');"><span style="font-size:10pt;"><font face="���� ���" color="blue">�����ù� ���빰</font></span></a></b><span style="font-size:10pt;"><font face="���� ���"></font></span></p>
            <p style="margin-left:5pt;"><b><span style="font-size:10pt;"><font face="���� ���" color="blue"><a href="#" onclick="window.showModelessDialog('gift2.php', 'popup', 'help:no; resizeable:no; status:no; statusbar:0; dialogWidth:600px; dialogHeight:400px');">��ȭ��ǰ�� 2����</a></font></span></b><span style="font-size:10pt;"><font face="���� ���"></font></span></p>
            <p style="margin-left:5pt;"><b><a href="#" onclick="window.showModelessDialog('gift3.php', 'popup', 'help:no; resizeable:no; status:no; statusbar:0; dialogWidth:600px; dialogHeight:400px');"><span style="font-size:10pt;"><font face="���� ���" color="blue">Windows 7 Ultimate</font></span></a></b><span style="font-size:10pt;"><font face="���� ���"></font></span></p>
            <p style="margin-left:5pt;"><span style="font-size:10pt;"><font face="���� ���" color="red"><b><? if ($_SESSION[admin]) {?>�����ڸ��!<?}?><? if (!$_SESSION[admin]=="admin") {?>������ ���� 2��(120��) �� ���� �α׾ƿ�<?}?></b></font><font face="���� ���"></font></span></p>
            <p style="margin-left:5pt;">&nbsp;</p>
        </td>
    </tr>
</table>
</body>

</html>