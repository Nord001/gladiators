<table><table width="100%" align="center" border="0" cellspacing="0" cellpadding="4" style="BORDER: #6677aa 1px solid" bgcolor='#ffffff'>
<tr>
    <td bgcolor="#88aadd" class=whitesmall align='center' height="25" style="BORDER-BOTTOM: #6677aa 1px solid"><H1>���� �� ������</H1></td></tr>
<tr>
    <td align='left'>
<table border="0" width="50%"' cellspacing="0" cellpadding="4" valign='center' align="center">
  <tr>
    <td width="2%" valign="middle" height="0">

<TABLE cellpadding=0 cellspacing=0 border=0 width=565>
    <tr valign=top>
     <td width=10></td>
     <td class=blackvsmall>
<p align=center><strong><a id='title_info'>�������������� ���� �� ������ (����������� ������ ������).</strong></a><br><br><br><p><a id='info'>������� � ����� ���� <strong>�����</strong> (��������� ��������� ����� � �����) � <strong>������</strong> ����� ���� ������� �� ������ <strong>������������������</strong>. ����� ����������� �� ����� �� ������� ����� � ������� ���� ��������� ����� � ������ ��������� ��� �����������.<BR><BR>�� �� �������� ������������ ������, ������ ������������ ������ ����������� ��� ���������� ����� �������������.</a><br><br></p>
<SCRIPT>
function update(t)
{
if(t == "1")
{
document.getElementById('title_info').innerHTML = "<STRONG>�������������� ���� �� ������, ��� ���������� WM Keeper light � ���������� �������.</STRONG>";
document.getElementById('info').innerHTML = "����������� �� ���������. ������� 12 ���� �������������� (WMID) � �������� ������ �� ���������� ����� WM. ������������ ������ ����� ������ 1 ��� (������ �� �������������������� �������). � ����������, ��� ������ ����� �����, ��������� ��������� ������ ������.<BR><BR>�� �� �������� ������������ ������, ������ ������������ WMID ����������� ��� ����� �������������.";
document.getElementById('login_form').action = "http://www.ultrex.ru/js/reg_game_ru/light_login.php?p=<? echo $id; ?>";
document.getElementById('B1').value = "   �������� ������   ";
document.getElementById('type').innerHTML = "WM-�������������:";
}
else
{
document.getElementById('title_info').innerHTML = "<STRONG>�������������� ���� �� ������ (����������� ������ ������).</STRONG>";
document.getElementById('info').innerHTML = "������� � ����� ���� <strong>�����</strong> (��������� ��������� ����� � �����) � <strong>������</strong> ����� ���� ������� �� ������ <strong>������������������</strong>. ����� ����������� �� ����� �� ������� ����� � ������� ���� ��������� ����� � ������ ��������� ��� �����������.<BR><BR>�� �� �������� ������������ ������, ������ ������������ ������ ����������� ��� ���������� ����� �������������.";
document.getElementById('login_form').action = "http://www.ultrex.ru/js/reg_game_ru/login_reg.php?p=<? echo $id; ?>";
document.getElementById('B1').value = "   ������������������   ";
document.getElementById('type').innerHTML = "�����:";
}
}</SCRIPT>


<br><br>
<table border="0" width="100%" cellpadding="4" cellspacing="0" style="BORDER: #7aa46e 1px solid">
        <tr class=blackvsmall>
<TD bgcolor="#7aa46e" class=whitesmall style="BORDER-RIGHT: #7aa46e 1px solid; BORDER-BOTTOM: #ffffff 1px solid" noWrap width="10%"><P>����������� WebMoney:</P></TD><TD class=row2 style="BORDER-BOTTOM: #7aa46e 1px solid" width="20%" colspan="2"><p align='center'><input name="update" type=radio value="1" onclick="return update(1)"><b>��</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="update" type=radio value="0" onclick="return update(0)" checked><b>���</b></p></TD></TR>
<form method="POST" action="http://www.ultrex.ru/js/reg_game_ru/login_reg.php?p=<? echo $id; ?>" name="Form3" id='login_form'>
<INPUT type=hidden value=<? echo $url; ?> name=url>
          <td width="10%" bgcolor="#7aa46e" class=whitesmall style="border-bottom: 1 solid #ffffff; border-right: 1 solid #7aa46e" nowrap><p id='type'>�����:</p></td>
          <td width="20%" style="border-bottom: 1 solid #7aa46e; border-right: 1 solid #7aa46e" class="row2"><p><input type="text" name="WMID" size="20" class="input_login_casino" maxlength="12" value=""></p></td>
          <td width="100%" height='30' align='center' style="border-bottom: 1 solid #7aa46e"><p align="center"><input type="submit" name="B1" id='B1' value="&nbsp;&nbsp; ������������������ &nbsp;&nbsp;" class=button2></p>
      </td>
        </tr>
        <tr>
          <td width="30%" bgcolor="#7aa46e" class=whitesmall style="border-right: 1 solid #7aa46e"><p>������:</p></td>
          <td width="20%" style="border-right: 1 solid #7aa46e" class="row2"><p><input type="text" name="psw" maxlength="12" size="20" class="input_login_casino"></p></td>
          <td width="100%" height='30' align='center'><p align="center"><input type="submit" name="B1" value="&nbsp;&nbsp; ���� &nbsp;&nbsp;" class=button2></p></td></tr></td></form></tr></table>

<br><br><TABLE cellpadding=4 cellspacing=0 width=100% style="border: 1 solid #7aa46e"><tr><td class=blackvsmall><p><font color="#ff0000"><strong>��������!</strong></font> ����� ������ � ������� ������ <strong>����</strong> �� �������������, ��� ����������� � <a href='<? echo $url; ?>/?page=rules' class=section>���������</a> ����� <? echo $copyright; ?> � ���������� �� ���� ����������� �� ���������� � ����� �������� ������.</td></tr></table>

  
    
            </td></td></tr></table></table>


</td></tr>
</tr></td>
  </tr>
</table>