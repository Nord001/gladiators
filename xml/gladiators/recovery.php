<?
require('../../config.php');

require($engine_path."cls/auth/session.php");

$type="gladiators/recovery";
$act="select";

if($step)
{

lock_rst($auth->user);

	get_gladiators($auth->user);

	$gladiators=$auth->rst[Gladiators];

	$sumhealth=0;
	$summorale=0;
	$suminjury=0;

	foreach($serialized as $k=>$v)
	{


//���������� ������������� ����
		$gladiators[$k][Stamina]=$v[Stamina];

//���� ��� ������, ����� ������� ����
if($v[Stamina]>0)
{
		$newstamina=$_POST[$k."H"];
		$addstamina=($newstamina-$v[Stamina]);
		if($addstamina>0) 
		{
			$sumhealth+=($addstamina)/2;
			$gladiators[$k][Stamina]+=$addstamina;
		}
}


		if($gladiators[$k][Stamina]>100) $gladiators[$k][Stamina]=100;

		//if($gladiators[$k][Stamina]<0) $gladiators[$k][Stamina]=0;

		$gladiators[$k][Morale]=$v[Morale];

		$newmorale=$_POST[$k."M"];
		$addmorale=($newmorale-$v[Morale]);

		if($addmorale>0) 
		{
			$summorale+=($addmorale)*10;
			$gladiators[$k][Morale]+=$addmorale;
		}

		if($gladiators[$k][Morale]>10) $gladiators[$k][Morale]=10;
		if($gladiators[$k][Morale]<-10) $gladiators[$k][Morale]=-10;


		//$gladiators[$k][Injury]=$v[Injury];

		$newinjury=$_POST[$k."I"];
		$addinjury=($v[Injury]-$newinjury);

		if($addinjury>0) 
		{
			$suminjury+=($addinjury)*10;

			//$gladiators[$k][Injury]-=$addinjury;

			$gladiators[$k][Stamina]+=40*$addinjury;

			if($gladiators[$k][Stamina]>0) $gladiators[$k][Stamina]=0;
			if($gladiators[$k][Stamina]>=-2&& $gladiators[$k][Stamina]<0) $gladiators[$k][Stamina]=0;
		}

		//if($gladiators[$k][Injury]<0) $gladiators[$k][Injury]=0;

//print "$k $addstamina stamina = ".$gladiators[$k][Stamina]."<br>";
//print "$k morale = ".$gladiators[$k][Morale]."<br>";
//print "$k injury = $addinjury ".$gladiators[$k][Injury]."<hr>";

	}



get_health($auth->rst);

if($sumhealth>$health||$summorale>$morale||$suminjury>$injury||$sumhealth<0||$summorale<0||$suminjury<0) $er=1;

//print "<br><b>$er</b> $sumhealth>$health||$summorale>$morale||$suminjury>$injury||$sumhealth<0||$summorale<0||$suminjury<0";

//exit;

	if(!$er)
	{
		$auth->rst[Status][4]=strval(round($health-$sumhealth,2));
		$auth->rst[Status][8]=strval(round($morale-$summorale,2));
		$auth->rst[Status][2]=strval(round($injury-$suminjury,2));


		$auth->rst[Gladiators]=$gladiators;
		$auth->rst[StaffDate]=mktime();

		$auth->rst[Date]=mktime();

		$rst=$auth->rst;
		write_rst($auth->user,$rst);

	}
	else $er="";

	//else {print "error <br><b>$er</b> $sumhealth>$health||$summorale>$morale||$suminjury>$injury||$sumhealth<0||$summorale<0||$suminjury<0";exit;}




unlock_rst($auth->user);

header("recovery.php");

}


require($site_path."up.php");


$res=runsql("select f.Name_$lang,s.Level,s.Date,s.StaffID from 
fn_staff_info f left outer join tm_staff s 
on s.StaffID=f.StaffID  and s.UserID='$auth->user' 
 where  (f.StaffID=2 or f.StaffID=4 or f.StaffID=8) and f.Level=1 order by f.StaffID");

$level=0;

while($q=mysql_fetch_array($res))
{
	if($q[1]) 
	{
		if($level) $leftcontent.="<img src=/images/hr2.gif width=180 height=10><br>";

		$leftcontent.="<img src=\"/images/marker3.gif\" width=11 height=11/> <a href=/xml/residence/staff.php?id=$q[3]>$q[0]-$q[1]</a><br>";


		$level=1;
	}
	
}

	//if(!$level) $leftcontent.=icon('green','��� ������ ����������, ���������� ������ �������');
	if($level)
	{
		$leftcontent="<b>������� �����������</b><br><br>".$leftcontent;
	}

require($site_path."left.php");


$form->Header();
$form->DrawHeader();

$color="545E61";

?>
<script>


function changeHealth(id,change)
{
	var fullhealth=eval(document.getElementById(id+'FullHealth').value);

	change=change*10;

	var oldwork=eval(document.getElementById('Health').value);
	var newwork=Math.round((oldwork-change/2));

	if(newwork<0)  {newwork=0;change=oldwork;}
	if(newwork>100) {newwork=100;change=oldwork-100;}

	if(oldwork<=0&&change>0) {return 0;}
	if(oldwork>=100&&change<0) {return 0;}


	var newstamina=eval(document.getElementById(id+'H').value)+change;
	var oldstamina=eval(document.getElementById(id+'OldStamina').value);

	if(100<newstamina) 
	{
		newhealth=fullhealth;
		newwork=Math.round(newwork+Math.round((newstamina-100)/2));
		newstamina=100;
	}
	else if(oldstamina>newstamina) 
	{
		newwork=Math.round(newwork+Math.round((newstamina-oldstamina)/2));
		newstamina=oldstamina;
	}

	var newhealth=Math.round(fullhealth*newstamina/100);

	document.getElementById(id+'H').value=newstamina;
	document.getElementById(id+'Health').value=newhealth;


	if(newstamina==100) 
	{

		document.getElementById(id+'HPlus').disabled=true;
		document.getElementById(id+'HPlus').className='disabledbutton';
	}
	else 
	{
		document.getElementById(id+'HPlus').disabled=false;
		document.getElementById(id+'HPlus').className='bluebutton';
	}

	if(newstamina<=oldstamina) 
	{
		document.getElementById(id+'HMinus').disabled=true;
		document.getElementById(id+'HMinus').className='disabledbutton';
	}
	else 
	{
		document.getElementById(id+'HMinus').disabled=false;
		document.getElementById(id+'HMinus').className='bluebutton';
	}


	document.getElementById('Health').value=newwork;

	if(newwork==0)
	{
<?
		foreach($serialized as $k=>$v)
		{
			print "document.getElementById('".$k."HPlus').disabled=true;document.getElementById('".$k."HPlus').className='disabledbutton';";
		}
?>
	}
	else
	{
<?
		foreach($serialized as $k=>$v)
		{
			print "if(eval(document.getElementById('".$k."H').value)<100) {document.getElementById('".$k."HPlus').disabled=false;document.getElementById('".$k."HPlus').className='bluebutton';}";
		}
?>
	}


}

function changeMorale(id,change)
{

	var newmorale=eval(document.getElementById(id+'M').value)+change;
	var oldmorale=eval(document.getElementById(id+'OldMorale').value);
	
	if(newmorale>10)  newmorale=10;
	else if(newmorale<=oldmorale) newmorale=oldmorale;

	var oldwork=eval(document.getElementById('Morale').value);
	var newwork=oldwork-change*10;


	if(newwork<0)  {return 0;}
	if(newwork>100){return 0;}


	document.getElementById(id+'M').value=newmorale;

	if(newmorale>=10) 
	{

		document.getElementById(id+'MPlus').disabled=true;
		document.getElementById(id+'MPlus').className='disabledbutton';

	}
	else 
	{
		document.getElementById(id+'MPlus').disabled=false;
		document.getElementById(id+'MPlus').className='bluebutton';
	}


	if(newmorale<=oldmorale) 
	{

		document.getElementById(id+'MMinus').disabled=true;
		document.getElementById(id+'MMinus').className='disabledbutton';

	}
	else 
	{
		document.getElementById(id+'MMinus').disabled=false;
		document.getElementById(id+'MMinus').className='bluebutton';
	}

	document.getElementById('Morale').value=newwork;

	if(newwork<10)
	{
<?
		foreach($serialized as $k=>$v)
		{
			print "document.getElementById('".$k."MPlus').disabled=true;document.getElementById('".$k."MPlus').className='disabledbutton';";
		}
?>
	}
	else
	{
<?
		foreach($serialized as $k=>$v)
		{
			print "if(eval(document.getElementById('".$k."M').value)<10) {document.getElementById('".$k."MPlus').disabled=false;document.getElementById('".$k."MPlus').className='bluebutton';}";
		}
?>
	}


}



function changeInjury(id,change)
{
	var newinjury=eval(document.getElementById(id+'I').value)+change;
	var oldinjury=eval(document.getElementById(id+'OldInjury').value);
	

	var oldwork=eval(document.getElementById('Injury').value);
	var newwork=oldwork+change*10;


	if(newinjury<0) 
	{
		newwork=Math.round(newwork-newinjury*10);
		newinjury=0;
	}
	else if(oldinjury<newinjury) 
	{
		newwork=Math.round(newwork-10*(newinjury-oldinjury));
		newinjury=oldinjury;
	}


	if(newwork<0)  {return 0;}
	if(newwork>100){return 0;}

	document.getElementById(id+'I').value=Math.round(newinjury*10)/10;


	if(newinjury<oldinjury) 
	{

		document.getElementById(id+'IMinus').disabled=true;
		document.getElementById(id+'IMinus').className='disabledbutton';

		document.getElementById(id+'IPlus').disabled=false;
		document.getElementById(id+'IPlus').className='bluebutton';
	}
	else 
	{
		document.getElementById(id+'IMinus').disabled=false;
		document.getElementById(id+'IMinus').className='bluebutton';

		document.getElementById(id+'IPlus').disabled=true;
		document.getElementById(id+'IPlus').className='disabledbutton';

	}


	document.getElementById('Injury').value=newwork;

	if(newwork<10)
	{
<?
		foreach($serialized as $k=>$v)
		{
			print "document.getElementById('".$k."IMinus').disabled=true;document.getElementById('".$k."IMinus').className='disabledbutton';";
		}
?>
	}
	else
	{
<?
		foreach($serialized as $k=>$v)
		{
			print "if(eval(document.getElementById('".$k."I').value)>0) {document.getElementById('".$k."IMinus').disabled=false;document.getElementById('".$k."IMinus').className='bluebutton';}";
		}
?>
	}

}
</script>

<?

get_health($auth->rst);




foreach($serialized as $k=>$v)
{
	print "<tr bgcolor=#$color><td><center><a href=/xml/gladiators/types.php?id=$v[TypeID]>
<img src=/images/types/$v[TypeID].gif title=$v[TypeName] border=0></a></td>
<td>$v[Gladiator]</td><td width=1px background='/images/health/$v[bar].gif'  style='background-repeat:no-repeat;background-position:center center'></td>";

$v[Hits]=round($v[Stamina]*$v[FullHits]/100);

if($v[Hits]==$v[FullHits]||($health<5)) {$dis1="class=disabledbutton disabled"; $dis2="class=disabledbutton disabled";}
else {$dis2="class=bluebutton "; $dis1="class=disabledbutton disabled";}


if($v[Injury]>0) print "<td colspan=3 align=center>�����������</td>";
else
{
print "<td align=right>";
print "<input type=\"button\" onclick=\"changeHealth('$v[GladiatorID]',-1)\" id=\"$v[GladiatorID]HMinus\" $dis1 style=\"width:20;\" value=\"-\"> ";
print "</td><td><center>";

$size=strlen($v[FullHits])*10;

print "<input type=hidden id=\"$v[GladiatorID]OldStamina\"  value=\"$v[Stamina]\"><input type=hidden id=\"$v[GladiatorID]FullHealth\" value=\"$v[FullHits]\"><input type=hidden id=\"$v[GladiatorID]H\" name=\"$v[GladiatorID]H\" value=\"$v[Stamina]\"> <input type=text id=\"$v[GladiatorID]Health\" class=clear style=\"text-align:right;width:$size"."px;background-color:$color\" value=\"$v[Hits]\"> ($v[FullHits])";
print "</td><td>";

print " <input type=\"button\" onclick=\"changeHealth('$v[GladiatorID]',1)\" id=\"$v[GladiatorID]HPlus\" $dis2 style=\"width:20\" value=\"+\"></td>";
}


if($v[Morale]>=10||$morale<10) {$dis1="class=disabledbutton disabled"; $dis2="class=disabledbutton disabled";}
else {$dis1="class=disabledbutton disabled"; $dis2="class=bluebutton ";}


print "</td><td align=right>";
print "<input type=\"button\" onclick=\"changeMorale('$v[GladiatorID]',-1)\" id=\"$v[GladiatorID]MMinus\" $dis1 style=\"width:20;\" value=\"-\"> ";
print "</td><td><center>";
print " <input type=hidden id=\"$v[GladiatorID]OldMorale\"  value=\"$v[Morale]\"><input type=text id=\"$v[GladiatorID]M\" name=\"$v[GladiatorID]M\" class=clear style=\"text-align:center;width:20px;background-color:$color\" value=$v[Morale]> ";
print "</td><td align=left>";
print " <input type=\"button\" onclick=\"changeMorale('$v[GladiatorID]',1)\" id=\"$v[GladiatorID]MPlus\" $dis2 style=\"width:20\" value=\"+\"></td>";



print "</td><td align=right>";

//if($v[Stamina]<0) $v[Injury]=round(abs($v[Stamina])/40,1);
//else $v[Injury]=0;

if($v[Injury]==0||($injury<$v[Injury]*10&&$injury<10)) {$dis1="class=disabledbutton disabled"; $dis2="class=disabledbutton disabled";}
else {$dis1="class=disabledbutton disabled"; $dis2="class=bluebutton ";}

print "<input type=\"button\" onclick=\"changeInjury('$v[GladiatorID]',1)\" id=\"$v[GladiatorID]IPlus\" $dis1  style=\"width:25;\" value=\"+\"> ";
print "</td><td><center>";
print " <input type=hidden id=\"$v[GladiatorID]OldInjury\"  value=\"$v[Injury]\"><input type=text id=\"$v[GladiatorID]I\" name=\"$v[GladiatorID]I\" class=clear style=\"text-align:center;width:20px;background-color:$color\" value=$v[Injury]>  ";
print "</td><td align=left>";
print " <input type=\"button\" onclick=\"changeInjury('$v[GladiatorID]',-1)\" id=\"$v[GladiatorID]IMinus\" $dis2 style=\"width:20\" value=\"-\"></td>";


print "</td></tr>";

	if($color=="545E61") $color="3B484C";
	else $color="545E61";
}

print "<tr bgcolor=$color align=center><td colspan=2>�����������������</td><td colspan=4>";


if($auth->rst[Staff][4]) print "��������� <input type=text id=\"Health\" name=\"Health\" class=clear style=\"text-align:center;width:20px;background-color:$color\" value=$health>%";
else print "<a href=/xml/residence/staff.php?id=4>������ ����������</a>";

print "</td><td colspan=3>";

if($auth->rst[Staff][8]) print "���� <input type=text id=\"Morale\" name=\"Morale\" class=clear style=\"text-align:center;width:20px;background-color:$color\" value=$morale>%";
else print "<a href=/xml/residence/staff.php?id=8>������ �����</a>";

print "</td><td colspan=3>";

if($auth->rst[Staff][2]) print "������ <input type=text id=\"Injury\" name=\"Injury\" class=clear style=\"text-align:center;width:20px;background-color:$color\" value=$injury>%";
else print "<a href=/xml/residence/staff.php?id=2>������ ������</a>";

print "</td></tr>";

$form->DrawButton(12);
$form->Footer();

if($auth->rst[Staff][2]||$auth->rst[Staff][4]||$auth->rst[Staff][8]) print "<br>".icon('mobile',"����� ��������� ������������ ����������������� ������������, ��������� SMS � ������� <b>\"glad $auth->user\"</b> (��� �������) �� ����� <b>7099</b>. ������ �������� � ������, ������� � ����������. <a href=sms.php>��������� �� ������</a>");

require($site_path."bottom.php");
?>