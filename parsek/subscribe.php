<?
$type="main";
require("config.php");

$first_page=1;
$form_title="��������";

require("up.php");

if($unsubscribe==1)
{
	if(!$email) 
	{
	print icon("error","�� �� ��������� ���� \"E-mail\"! ����������, ��������� ���� \"E-mail\" � ��������� �������.");
	}
	elseif(!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,4})$/", $email ))
	{
	print icon("error","�������� ����� e-mail. ����������, ������� ���������� ����� e-mail � ��������� �������.");
	}
	else
	{
	$res=select("select * from ut_subscribe where Email='$email'");
	if(!$res[SubscribeID])
		{
		print icon("error","�� ������ ����� e-mail �������� �������� �� ������.");
		}
	else
		{
		runsql("delete from ut_subscribe where Email='$email'");
		print icon("green","�� ������� ���������� �� �������� �������� \"������\"");
		}
	}
}
else
{
	if(!$email) 
	{
	print icon("error","�� �� ��������� ���� \"E-mail\"! ����������, ��������� ���� \"E-mail\" � ��������� �������.");
	}
	elseif(!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,4})$/", $email ))
	{
	print icon("error","�������� ����� e-mail. ����������, ������� ���������� ����� e-mail � ��������� �������.");
	}
	else
	{
	$res=select("select * from ut_subscribe where Email='$email'");
	if($res[SubscribeID])
		{
		print icon("green","�� ��� ������ �������� �� ������� �������� \"������\"");
		}
	else
		{
		runsql("insert into ut_subscribe (Name,Email) values ('$name','$email')");
		print icon("green","�� ������� ����������� �� ������� �������� \"������\"");
		}
	}
}

require("bottom.php");

?>