<?
require('../../config.php');

require($engine_path."cls/auth/session_lite.php");


$form_width=170;


$type="main/news";



require($site_path."up.php");



$leftcontent="<center><a href=http://www.rovercomputers.ru target=_blank><img src=/images/misc/rover.gif  border=0></a> 
<br><br><a href=http://www.manowar.ru target=_blank><img src=/images/misc/manowarru.gif  border=0></a>
<br><br><a href=http://www.nekki.ru target=_blank><img src=/images/misc/nekki.gif border=0></a>";

require($site_path."left.php");



?><center>
<a href=http://www.roverpc.ru/pc/a-manovar/1.htm target=_blank><img src=/images/manowar.gif border=0></a></center>



<img src='/images/misc/phone.gif' align=right>
<br>
�� ������ ������ �������� 7 ������ 2007 ���� ��������� ����������� ������� ������ Manowar. ������� ������� � ������ ������������ ����� � ��������� ������ ������� �Gods of War�. ��� ������ �������������� ������ Manowar, ����������� ����� � �������� ���� ������������� ���������. 
<br><br>
������ ���� ������� � 1980 ���� ��������� Joey De Maio � ���������� Ross the Boss. ������� ������ ������� ���� �������� Eric Adams, ��� ������ � ������ ����� ����������� � ���� �� �������� �������� ������. ������ ��� ��������������� ������������ Scott Columbus, ����� ���� � �������� ������� ������� ������. 

<br><br>
� 1994 ���� Manowar ������� ����� � ����� �������� ������� ��������� ������ ���������� �������� �� ����� �� ���������. ��� ��������� 129,5 ������� (������ ����������� ������) ������ �������� �� ������ ������ �������, �� � ���������� ������� �����. 

<br><br>
������� Manowar � ���������� 7 ������ 2007 ���� ������� ���� �������, ���������� � ������������. ������ ������� ��� ����� �� ������ ������ �������, ��� � ���� ������������ ������������ ����. ��� ����� ����� ��������� ����� � ������!

<br><br>

<font size=4>������� ��������</font>

<br>
<br>

�������� � ����������� ���� "����������" - <a href=http://www.nekki.ru taret=_blank>�������� Nekki</a> ��������� � <a href=http://www.roverpc.ru target=_blank>RoverPC</a> � <a href=http://www.manowar.ru target=_blank>������ Manowar.Ru</a> �������� �������! 
� �������� ������ ����� ��������� <b>5 ��� ������� �� �������</b>!
<br>
��� ������� � ��������, ��� ���������� ������������������ � ����� ������� � ��������� �������� �� ������� ���������, ����������� Manowar � Rover. ������� ���������� �� 31 �����, � ����� ����� ��������� 2 ������. ������� ����� ����� ����� � ����� Rover PC.

<br><br>

<font size=4>���������</font>

<br>
<br>




<?

/*
if($step==1&&$auth->user)
{

	if(count($_POST['question'])!=9) print icon("error","�������� �� ��� �������!")."<br>";
	else 
	{

	foreach($_POST['question'] as $k=>$v)
	{
		runsql("insert into ut_votes(PollID,AnswerID,UserID) values('$k','$v','$auth->user')
on duplicate key update AnswerID='$v'");
	}

		
	}
}


$q=select("select * from ut_votes where UserID='$auth->user'");
if($q[0]) print icon("ok","���� ������ �������! �� ������ �������� �� �� ��������� ��������.")."<br>";

if($auth->user)
{
?>
<form method='post' action='<?=$PHP_SELF?>'>
<input type='hidden' name='step' value='1'>
<table border=0 bordercolor=78746C bgcolor=78746C cellpadding=4 cellspacing=1 width=100%>
<?


$q=runsql("select p.PollID,p.Name_rus,v.AnswerID from ut_polls p left outer join ut_votes v on v.PollID=p.PollID and v.UserID='$auth->user'");

$n=1;


while($r=mysql_fetch_array($q))
{

	print "<tr><td bgcolor=3B484C>$n. <b>$r[1]</b></td></tr><tr><td bgcolor=#515E64>";

	$q1=runsql("select AnswerID,Name_$lang Name from 
ut_answers where PollId='$r[0]' and Name_$lang<>'' order by AnswerID");

while($r1=mysql_fetch_array($q1))
{
	print "<input type=radio style='background-color:#515E64' name=\"question[".$r[0]."]\" value=$r1[0] ";
	if($r1[0]==$r[2]) print "checked";
	print "> $r1[1]<br>";

}
	
	$n++;
}



?>
<tr class=header><td><input type=submit value=��������� class=button></td>
</table>
<?
print "</form>";
}
else print icon("error","��� ������� � ���������, ��� ���������� <a href=/xml/main/register.php target=_blank>������������������</a> � ��������������");

*/
print icon("green","������� ��������, ���������� �����.");
require($site_path."bottom.php");
?>
