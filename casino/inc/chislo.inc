<script language="JavaScript" src="http://www.ultrex.ru/js/ajax_ru/chislo.php"></script>
<table>
<table width="100%" align="center" border="0" cellspacing="0" cellpadding="4" style="BORDER: #6677aa 1px solid" bgcolor='#ffffff'>
<tr><td bgcolor="#88aadd" class=whitesmall align='center' height="25" style="BORDER-BOTTOM: #6677aa 1px solid"><H1>������ �����</H1></td></tr><tr>
    <td align='center'>
<table width=95% align=center cellspacing="0" cellpadding="0">
          <td align=center>
            <FIELDSET style='PADDING-RIGHT: 6px; PADDING-LEFT: 6px; FONT-SIZE: 11px; PADDING-BOTTOM: 6px; BORDER: #e2e2e2 1px solid; WIDTH: 100%;'><STRONG><LEGEND align=center><b><a id=block_title>������� ����</a></b></STRONG></LEGEND><br><a id=res>������� ������ ���� ����� ������. ��������� ������� ����� � ���������� �� 1 �� 100 (������������). ��� ���������� ������� ��������� ����� ����� <u>������</u> ��� <u>������</u> ����, ������� ������� ��������� � ������� ������. ���� �� ��������� ��������, �� �������� ��������� �� ���� ���� ����� ����� ������, ����������� � <font color='green' size='2'><strong>2</strong></font> ����.</tr></td></a></FIELDSET></td><tr valign="top"><td align="right" valign="top"><a href="#" onmouseover=view_rules(); class="section"><small>������� ����</a></td></table>
<tr><td align='center' valign='center' colspan=2><br><br><br><font size='3'><u>���������� �����</u>:</font> <font color='#ff0000' size='3'><strong><a id=num></a></strong></font><br><br></tr></td></tr></td>
<script language="JavaScript">document.getElementById('num').innerHTML = gchislo;</script>
  <tr>
    <td align='center'><table cellspacing=0 cellpadding=1 border=0 align='center'>
<form name="form1" method="POST">
<INPUT type=hidden value="<? echo $id; ?>" name=p>
<INPUT type=hidden value=<? echo $url; ?> name=url>
<br/>
<table width="30%" align="center" border="0" cellspacing="0" cellpadding="4">
<tr align="center"> 
    <td height="22" class=blackvsmall>
<p align='center'><input type=radio name="n1" value="1" checked/><b>������</b></p></td>
    <td height="22" nowrap>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
<td height="22" nowrap class=blackvsmall><p align='center'><input type=radio name=n1 value="-1"/><b>������</b></p></tr></td> </table><br><br>
<table width="30%" align="center" border="0" cellspacing="0" cellpadding="4" style="BORDER: #7aa46e 1px solid">
<tr bgcolor="#7aa46e" class=whitesmall align="center"> 
    <td height="22" style="border-bottom: 1px solid #7aa46e; border-right: 1px solid #ffffff" nowrap> 
      <div align="center">&nbsp;&nbsp;&nbsp;&nbsp;������ ������&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
    <td style="border-bottom: 1px solid #7aa46e" nowrap> 
      <div align="center">&nbsp;&nbsp;&nbsp;&nbsp;��� ������&nbsp;&nbsp;&nbsp;&nbsp;</div></td></tr>
 <tr align="center"> 
    <td height="22" style="border-right: 1px solid #7aa46e">

<!-- ������ -->
<select name="moneys" class="input_text_casino">
<option value="100" style="color:blue">100&nbsp;&nbsp;&nbsp;&nbsp;</option>
<option value="70">70</option>
<option value="50">50</option>
<option value="30">30</option>
<option value="20">20</option>				
<option value="10" style="color:maroon">10</option>
<option value="7">7</option>
<option value="5">5</option>
<option value="3">3</option>
<option value="2">2</option>				
<option value="1" style="color:red">1</option>
<option value="0.7">0.7</option>
<option value="0.5">0.5</option>
<option value="0.3">0.3</option>
<option value="0.2">0.2</option>
<option value="0.1" selected>0.1</option>
</select>
<!-- /������ -->
</td>
    <td height="22" nowrap> 
<select name="type" class="input_text_casino">
<option selected value="Z" style="color:green">WMZ
<option value="E" style="color:blue">WME&nbsp;&nbsp;&nbsp;
<option value="R" style="color:red">WMR
<option value="U" style="color:olive">WMU
</select></tr></td></tr></table>
<br><br><p align='center'><img id=button src="img/button.gif" width="130" height="37" style="cursor:hand" border="0" arrow="hand" onclick="GameRequest();" alt="������!"></p></form><br></table>