<link rel="stylesheet" type="text/css" href="css/style.css">
<?
error_reporting  (E_ERROR | E_PARSE);

// ������ ���������� �������
$gbl_var = array();
while ( list($key, $val) = each($HTTP_POST_VARS) )
	{ $gbl_var[$key] = $val; }
while ( list($key, $val) = each($HTTP_GET_VARS) )
	{ $gbl_var[$key] = $val; }
while ( list($key, $val) = each($HTTP_POST_VARS) )
	{ $gbl_var[$key] = $val; }

// ����� ���������
switch($gbl_var['step'])
{
	default: case '1':	form_1();	break;
	case '2':	form_2();	break;
	case '3':	form_3();	break;
}

/*===============================================================================
 ������ ���
===============================================================================*/
function form_1() {

	global $gbl_var;

	$sql_base = array("mysql");
	foreach($sql_base as $val)	{ $select_sql .= "<option value=".$val.">".$val; }

	echo "
 	<h3>&#149;&nbsp;��������� ���� ������ (��� 1 �� 2)</h3>
	<form action='dumper.php' method='POST'>
	<input type='hidden' name='step' value='2'>
	
	<p>����� ���������� ������ ��������� ���� ������ ��� ������ �������.<br>��������: ���������� ��� ����. ����� ���� ����� �� ��������!</p>
	
	<table border=0 cellpadding=3 cellspacing=3>
		<tr>
		<td>������ ���� ������</td>
		<td><input type='text' name='sql_serverip' value='localhost'></td>
	    </tr>
	<tr>
		<td>��� ���� ������</td>
		<td><select name='sql_type'><in>$select_sql</select></td>
	</tr>
	<tr>
		<td>�������� ���� ������<br><small><b>* ���� ������ ������ ���� ������� � ����� �������</small></b></td>
		<td><input type='text' name='sql_db' value=''></td>
	</tr>
	<tr>
		<td>������������ ���� ������</td>
		<td><input type='text' name='sql_username' value=''></td>
	</tr>	
	<tr>
		<td>������ ���� ������</td>
		<td><input type='text' name='sql_password' value=''></td>
	</tr>
	</table>
		<p><input type='submit' value='����� &#187;'></p>
	</form>";
}
/*===============================================================================
 ������ ���
===============================================================================*/
function form_2() {

	global $gbl_var;

	echo "<h3>�������� ���� ������</h3>";

	$connection = mysql_pconnect( $gbl_var[sql_serverip], $gbl_var[sql_username], $gbl_var[sql_password] );
	if ( !mysql_select_db( $gbl_var[sql_db] ) ) {
		echo  "<p>������: ���������� ����������� � ����� ������.<p>"; flush();
	} else {
		echo "<b>�������� ������...</b><br>\n"; flush();
		$warnings = query_upload("base/sql.sql"); flush();
		
		$sql = "INSERT INTO ".$gbl_var[sql_db].".users VALUES('1', '".$gbl_var[adm_login]."', '".$gbl_var[adm_pass]."', '".$gbl_var[adm_fio]."', '".$gbl_var[adm_mail]."', '1', '1', '0', '".time()."');";
		$result = mysql_query($sql);
			//or $warnings=0;
	}

	if ( ! $warnings > 0 ) {

		echo "
		<p>&#149;&nbsp;��������!</p>
		<p>
		<b>����� ���������� �� ������ ��������� ��������� ������!</b>
		<br><br>
		��������� ������ ��� �������� ���� ������.
		</p>";
		exit;
	}
	else
	{
		echo "<b>���� ".$gbl_var[sql_db]." �������...</b><br>\n"; flush();
	}

	mysql_close( $connection );

	$setup_file = "
	\$gbl_config[sql_type] = \"$gbl_var[sql_type]\";
	\$gbl_config[sql_db] = \"$gbl_var[sql_db]\";
	\$gbl_config[sql_username] = \"$gbl_var[sql_username]\";
	\$gbl_config[sql_password] = \"$gbl_var[sql_password]\";
	\$gbl_config[sql_serverip] = \"$gbl_var[sql_serverip]\";
	";

	$setup_file = ereg_replace("\t",'',$setup_file);
	$fw=fopen("./includes/config.php", "a");
	fputs($fw, "<?\n".$setup_file."\n?>");
	fclose($fw);

	echo "
 	

	
       <br><br>
      <br><b><form action='end.php' method='POST'><input type='hidden' name='step' value='1'><input type='submit' value='����� &#187;'></form></b>         
	";
}

/*============================================================*/
function query_upload($filename) {

	$fp = fopen($filename, "rb");

	$command = "";
	$counter = 0;

	echo "<br>����� ...<br>\n";

	while (!feof($fp)) {
		$c = chop(fgets($fp, 1500000));
		$c = ereg_replace("^[ \t]*#.*", "", $c);
		$command .= $c;

		if (ereg(";$", $command)) {
			$command = ereg_replace(";$", "", $command);

			if (ereg("CREATE TABLE ", $command)) {
				$table_name = ereg_replace(" .*$", "", eregi_replace("^.*CREATE TABLE ", "", $command));
				echo "�������� �������: [$table_name] ... "; flush();

				mysql_query($command);

				$myerr = mysql_error();
				if (!empty($myerr))
					break;
				else
					echo status(true)."<br>\n";
			} else {
				mysql_query($command);

				$myerr = mysql_error();
				if (!empty($myerr))
					break;
				else {
					$counter++;
					if (!($counter % 20)) { echo ""; flush(); }
				}
			}

			$command = "";
			flush();
		}
	}

	fclose($fp);

	if (!empty($myerr))
		echo status(false)." ".$myerr."<br>\n";
	else {
		if ($counter > 19) echo "<br>\n";
		echo status(empty($myerr))."<br>\n";
	}

return empty($myerr);
}

/*============================================================*/
function status($var) {

	if ($var) { return "<font color=green>[Ok]</font>"; }
	else { return "<font color=red>[������]</font>"; }
}

/*============================================================*/
	
?>