<?

include "top.php";

?>
<html>

<head>
<meta http-equiv="content-type" content="text/html; charset=euc-kr">
	<title>김우진 개인정보 사이트</title>
	<script>
	function move() {
	window.location="logout.php"
	}

	function tstart(){ //초기 설정함수
	tcounter=<?=$time_lit1?>; //3분설정 
	t1=setInterval(Timer,1000) 
	}

	function Timer(){ //시간표및 조건검사
	tcounter=tcounter-1; //1초식 감소
	temp=Math.floor(tcounter); // 분부분 두자리 계산 mm
	temp = temp + "초 후 로그아웃"
	dtimer.value=temp; // 시간 출력
	if(tcounter<0) tstop() // 3분후 완료
	}

	function tstop(){ //완료함수
	clearInterval(t1)
	dtimer.value="0초 후 로그아웃"
	}
	</script>

</head>

<body vlink="blue" alink="blue" link="blue" <? if (!$_SESSION[admin]=="admin") {?>onload="tstart();setTimeout('move()','<?=$time_lit2?>');"<?}?>>
<table width="800" align="center" border="1" cellspacing="0" bordercolordark="white" bordercolorlight="black" height="393">
	<tr>
        <td height="84" colspan="2" width="794">
            <p style="margin-left:5pt;"><b><font face="맑은 고딕"><span style="font-size:16pt;">김우진 개인정보 사이트</span></font></b></p>
        </td>
	</tr>
    <tr>
        <td height="45" width="673">
            <p style="margin-left:5pt;" align="left"><font face="맑은 고딕"><span style="font-size:9pt;">&nbsp;</span></font><span style="font-size:10pt;"><font face="맑은 고딕" color="red"><b><? if (!$_SESSION[admin]=="admin") {?></b></font></span><font face="맑은 고딕"><span style="font-size:9pt;"><input type=text name="dtimer" readonly style="font-family:'맑은 고딕'; font-size:9pt; color:red; text-align:left; margin-right:0pt; margin-left:0pt; border-width:1pt; border-color:white; border-style:solid;" value="남은
시간

 계산 중입니다." size="30"></span></font><span style="font-size:10pt;"><font face="맑은 고딕" color="red"><b><?}?></b></font></span><span style="font-size:10pt;"><font face="맑은 고딕" color="red"><b><? if ($_SESSION[admin]) {?></b></font></span><font face="맑은 고딕"><span style="font-size:9pt;"><input type=text name="dtimer" readonly style="font-family:'맑은 고딕'; font-size:9pt; text-align:left; margin-right:0pt; margin-left:0pt; border-width:1pt; border-color:white; border-style:solid;" value="관리자 모드로
 접속하셨습니다. " size="30"></span></font><span style="font-size:10pt;"><font face="맑은 고딕" color="red"><b><?}?></b></font></span></p>
        </td>
        <td width="117" height="45">            
            <p align="center"><font face="맑은 고딕"><span style="font-size:10pt;"><input type="button" name="submit" value=" 로그아웃 " style="font-family:'맑은 고딕'; font-size:9pt;" onclick="javascript:location.href='logout.php';"></span></font></p>
        </td>
    </tr>
    <tr>
        <td height="195" colspan="2" width="794">
            <p style="margin-left:5pt;"><span style="font-size:10pt;"><font face="맑은 고딕">&nbsp;</font></span></p>
            <p style="margin-left:5pt;"><b><a href="#" onclick="window.showModelessDialog('ems.php', 'popup', 'help:no; resizeable:no; status:no; statusbar:0; dialogWidth:850px; dialogHeight:650px');"><span style="font-size:10pt;"><font face="맑은 고딕" color="blue">국제택배 배송조회</font></span></a></b><span style="font-size:10pt;"><font face="맑은 고딕"></font></span></p>
            <p style="margin-left:5pt;"><b><a href="#" onclick="window.showModelessDialog('gift1.php', 'popup', 'help:no; resizeable:no; status:no; statusbar:0; dialogWidth:600px; dialogHeight:400px');"><span style="font-size:10pt;"><font face="맑은 고딕" color="blue">국제택배 내용물</font></span></a></b><span style="font-size:10pt;"><font face="맑은 고딕"></font></span></p>
            <p style="margin-left:5pt;"><b><span style="font-size:10pt;"><font face="맑은 고딕" color="blue"><a href="#" onclick="window.showModelessDialog('gift2.php', 'popup', 'help:no; resizeable:no; status:no; statusbar:0; dialogWidth:600px; dialogHeight:400px');">문화상품권 2만원</a></font></span></b><span style="font-size:10pt;"><font face="맑은 고딕"></font></span></p>
            <p style="margin-left:5pt;"><b><a href="#" onclick="window.showModelessDialog('gift3.php', 'popup', 'help:no; resizeable:no; status:no; statusbar:0; dialogWidth:600px; dialogHeight:400px');"><span style="font-size:10pt;"><font face="맑은 고딕" color="blue">Windows 7 Ultimate</font></span></a></b><span style="font-size:10pt;"><font face="맑은 고딕"></font></span></p>
            <p style="margin-left:5pt;"><span style="font-size:10pt;"><font face="맑은 고딕" color="red"><b><? if ($_SESSION[admin]) {?>관리자모드!<?}?><? if (!$_SESSION[admin]=="admin") {?>보안을 위해 2분(120초) 뒤 강제 로그아웃<?}?></b></font><font face="맑은 고딕"></font></span></p>
            <p style="margin-left:5pt;">&nbsp;</p>
        </td>
    </tr>
</table>
</body>

</html>