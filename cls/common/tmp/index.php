<?
//exit;

require('config.php');
require($engine_path."cls/auth/session_lite.php");

$page="first";
$first_page=1;

require("up.php");


require("left.php");


if($er)  print "<div style=\"margin-left:15px;margin-bottom:10px\"><table border=0 cellspacing=4 cellpadding=0 width=100%><td>".icon('error',$er)."</td></table></div>";

?>


		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="main-sheet">
                    <tr> 

                      <th>����� ����������</th>
                    </tr>
                    <tr> 
                      <td valign="top"><div class="main-sheet-text"> 

                          <p><i>����� ������ ������ ����� � ������. ������ ���������� ������ ����� ����, �� ��������� ��� ��������, ��� ������� ������...</i> </p>
                          <p><b>����������</b> - ���������� �������� ��������������������� <b>������ ����</b>. � ��� �� ������������ � ������� ��������, �������� ������� �������� ����������� � �������� � ��������� ��������.
</p><p> ��� ���� <b>�� ���������</b> ��������� �������� ������������ �����������, �� ������ ������ � ������ ���������� � � ����� �����.
				</p>

<p><i>...� ��� ����� ����� ������. �����, ��� ������� �� �����, ������ ��� ������...</i></p>




			  <p>��� ����� �������� 10 ����������� ����������� ����� �����������, ������� ������, �������� � ����������. ������ ��� �������� ������ �������������� � ������������, ������ �������, �� ��������� ���������.</p>

<p><i>...���� �� ������ ������� �����, ���� ���� �� �� ��� �� ���������, 
������� ����� ��������� �� �������� ����. � ����� ���������� � ���� ������ ������ �����.</i></p>

			<p>����� ���, �� ������� ����������� ���� ������, �������� ������������ � ����� �����������, ��������� � ������������ ������� � ������� ����������� ����, �������� � ������� � ����� ������������ ������������ � ������.</p>
<?
/*
			<p>���������� ����������� <b>�����������</b> �������� ��������� <b>3d-�����</b>, ����������� ����������� 
� ������������ ��������� ������������� ���!</p>
*/
?>


		

                        </div></td>
                    </tr>
                  </table>

		<table width="100%" height="32" border="0" cellspacing="0" cellpadding="0">					
                    <tr>
                      <td width="24">&nbsp;</td>
                      <td width="164"><a href=<?=$site_url."xml/main/register.php";?>><img src="<?=$site_url?>images/text-register.gif" alt="" width="136" height="17" border="0"></a></td>
                      <td width="200"><a href="#"><img src="<?=$site_url?>images/text-guest.gif" alt="" width="172" height="17" border="0"></a></td>
                      <td><a href="screenshots.php"><img src="<?=$site_url?>images/text-screenshots.gif" alt="" width="121" height="17" border="0"></a></td>
                    </tr>
                  </table>
				  
		<table width="500" border="0" cellspacing="8" cellpadding="0" style="margin: 0px 0px 0px 16px;">
                    <tr>
<?
$res=runsql("select ScreenshotID,Name_$lang as Name from ut_screenshots order by rand() limit 0,3");
while($r=mysql_fetch_array($res))
{
?>
                            <td width="33%" align="center" valign="top">

	<?
		print "<a href=\"screen.php?record=14&amp;id=$r[0]\" target=_blank>";
		print "<img src=\"/images/ut_screenshots/small/$r[0].jpg\" border=0 ";
		if($r[Name]) print " alt=\"$r[Name]\" title=\"$r[Name]\"";
		print "/> \n";
	?>
	</a></td>
<?
}
?>
                    </tr>
                  </table>
				

<?


require("bottom.php");
?>
