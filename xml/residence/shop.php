<?
require('../../config.php');


require($engine_path."cls/auth/session.php");

$type="residence/shop";
if(!$act) $act="take";

if($auth->rst[Staff][7])
{
	$money=moneygained($auth->rst,0);

	$_GET['Profit']=$money;
	if(!$money) $_GET['Profit']="0 ";

	$_GET['ShopDate']=$auth->rst[ShopDate];
}

require($site_path."up.php");

require($site_path."left.php");


if(!$auth->rst[Staff][7]) print icon('error','����� �������� ������� �� �����, �� ������ <a href=/xml/residence/staff.php?id=7>������ ��������</a>');
else $form->draw();

require($site_path."bottom.php");
?>
