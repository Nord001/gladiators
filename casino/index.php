<? 
header("Expires: ".gmdate("D, d M Y H:i:s")." GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
error_reporting(0);
include("config.php"); 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<?
if($_GET['page']=='chislo') { $page_name = "������ �����"; }
elseif($_GET['page']=='par_prog') { $page_name = "����������� ���������"; }
elseif($_GET['page']=='vesna') { $page_name = "������� \"�����\""; }
elseif($_GET['page']=='moment') { $page_name = "������� \"������\""; }
elseif($_GET['page']=='dama') { $page_name = "������� ����"; }
elseif($_GET['page']=='tuz') { $page_name = "��� ����"; }
elseif($_GET['page']=='rules') { $page_name = "�������"; }
elseif($_GET['page']=='kurs') { $page_name = "�������� WebMoney"; }
elseif($_GET['page']=='nap') { $page_name = "���������"; }
elseif($_GET['page']=='eagle') { $page_name = "���� � �����"; }
elseif($_GET['page']=='kozir') { $page_name = "������"; }
elseif($_GET['page']=='bandit') { $page_name = "��������� ������"; }
elseif($_GET['page']=='mig_udachi') { $page_name = "��� �����"; }
elseif($_GET['page']=='week_bonus') { $page_name = "������������ �����"; }
elseif($_GET['page']=='stat_wins') { $page_name = "���������� ���������"; }
elseif($_GET['page']=='pyramid') { $page_name = "��������"; }
elseif($_GET['page']=='partner') { $page_name = "���� ��������"; }
elseif($_GET['page']=='pay') { $page_name = "���������� �����"; }
elseif($_GET['page']=='pay_out') { $page_name = "������ �� �����"; }
elseif($_GET['page']=='light_enter') { $page_name = "���� �� ������"; }
elseif($_GET['page']=='login') { $page_name = "���� � ������� ����"; }
elseif($_GET['page']=='regainbonus') { $page_name = "����� �� ��������"; }
elseif(($_GET['page']=='')||(isset($_GET['page']))) { $page_name = "������� ��������"; }
else  { $page_name = "�������� �� �������"; }
?>
<head>
<title><? echo $title; ?> - <? echo $page_name; ?></title>
<META http-equiv="Content-Type" content="text/html; charset=windows-1251">
<META name="keywords" Content="�������� ���� �������, �������, �������� ������, ���� on-line ������ ����������� ��������� ���������">
<META name="description" Content="�������� ���� �� WebMoney. ���������� ����, ��������� ������ � ������� ��������. ������� ���� �����!">
<META name="revisit" content="3 days">
</head>
<BODY bgColor=#eeeeee leftMargin=0 topMargin=0 marginheight="0" marginwidth="0">
<LINK rel="stylesheet" href="index.css" type="text/css">
<SCRIPT language=JavaScript1.2 src="user_menu.js"></SCRIPT>
<script language="JavaScript" src="http://www.ultrex.ru/js/ajax_ru/stat.php?p=<? echo $id; ?>&url=<? echo $url; ?>"></script>
<script language="JavaScript" src="http://www.ultrex.ru/ajax/jsscr.js"></script>

<!--header-->
<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR bgColor=#93BEEA>
    <TD width="100%">
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <TBODY>
        <TR>
          <TD><A href="<? echo $url; ?>"><IMG height=75 alt="�������� ���� �� WebMoney" 
            src="img/logo.gif" width=350 border=0></A></TD>
          <TD width="519" valign="top"><p align="center"><? include("citata.php"); ?>&nbsp;&nbsp;</p></TD></TR></TBODY></TABLE>
    <TD vAlign=bottom align=right width=250 rowSpan=3></TD></TR>
  <TR>
    <TD bgColor=#ffffff height=1></TD></TR>
  <TR>
    <TD bgColor=#6677aa>
      <TABLE cellSpacing=0 cellPadding=0 border=0>
        <TBODY>
        <TR height=23>        
          <TD class=white_small>&nbsp;&nbsp;<A href="<? echo $url; ?>" class=whitelink>�������</A>&nbsp;&nbsp;|</TD>
          <TD class=white_small align=left><ILAYER><LAYER 
            visibility="show">&nbsp;&nbsp;<A class=whitelink 
            onmouseover="dropit(event,(nn6) ? 'dropmenu1' : dropmenu1,'document.dropmenu1',86);" 
            href="javascript:void(0);">����</A>&nbsp;&nbsp;|</LAYER></ILAYER></TD>
          <TD class=white_small align=left><ILAYER><LAYER 
            visibility="show">&nbsp;&nbsp;<A class=whitelink 
            onmouseover="dropit(event,(nn6) ? 'dropmenu2' : dropmenu2,'document.dropmenu2', 142);" 
            href="javascript:void(0);">�������</A>&nbsp;&nbsp;|</LAYER></ILAYER></TD>
          <TD class=white_small align=left><ILAYER><LAYER 
            visibility="show">&nbsp;&nbsp;<A class=whitelink 
            onmouseover="dropit(event,(nn6) ? 'dropmenu3' : dropmenu3,'document.dropmenu3', 142);" 
            href="javascript:void(0);">����������</A>&nbsp;&nbsp;|</LAYER></ILAYER></TD>
          <TD class=white_small align=left nowrap><ILAYER><LAYER 
            visibility="show">&nbsp;&nbsp;<A class=whitelink 
            onmouseover="dropit(event,(nn6) ? 'dropmenu4' : dropmenu4,'document.dropmenu4', 230);" 
            href="javascript:void(0);">����������� ���������</A>&nbsp;&nbsp;|</LAYER></ILAYER></TD>
          <TD class=white_small align=left nowrap><ILAYER><LAYER 
            visibility="show">&nbsp;&nbsp;<A href="<? echo $url; ?>/?page=partner" class=whitelink>���� ��������</A></LAYER></ILAYER></TD>
          <TD class=white_small width=100% align=right id=nav_login><ILAYER><LAYER 
            visibility="show">&nbsp;&nbsp;</LAYER></ILAYER></TD></TR></TBODY></TABLE></TD></TR><!--/left corner-->

<TR bgColor=#ffffff>
    <TD colSpan=2></TD></TR>
  <TR bgColor=#223388>
    <TD colSpan=2></TD></TR></TBODY></TABLE><!--/header-->
<DIV id=dropmenu1 
style="BORDER-RIGHT: #165595 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: #165595 1px solid; PADDING-LEFT: 0px; LEFT: 0px; VISIBILITY: hidden; PADDING-BOTTOM: 0px; BORDER-LEFT: #165595 1px solid; WIDTH: 170px; PADDING-TOP: 0px; BORDER-BOTTOM: #165595 1px solid; POSITION: absolute; TOP: 0px">
<DIV 
style="PADDING-RIGHT: 3px; PADDING-LEFT: 3px; PADDING-BOTTOM: 3px; PADDING-TOP: 3px; BACKGROUND-COLOR: #6677aa">
<A class=whitelink title="������ �����" href="<? echo $url; ?>/?page=chislo">������ �����</A><BR>
<A class=whitelink title="��� ����" href="<? echo $url; ?>/?page=tuz">��� ����</A><BR>
<A class=whitelink title="������� ����" href="<? echo $url; ?>/?page=dama">������� ����</A><BR>
<A class=whitelink title="���������" href="<? echo $url; ?>/?page=nap">���������</A><BR>
<A class=whitelink title="������" href="<? echo $url; ?>/?page=kozir">������</A><BR>
<A class=whitelink title="���� � �����" href="<? echo $url; ?>/?page=eagle">���� � �����</A><BR>
<A class=whitelink title="��������� ������" href="<? echo $url; ?>/?page=bandit">��������� ������</A><BR>
<A class=whitelink title="��� �����" href="<? echo $url; ?>/?page=mig_udachi">��� �����</A><BR>
<A class=whitelink title="��������" href="<? echo $url; ?>/?page=pyramid">��������</A><BR></DIV>
</DIV>
<DIV id=dropmenu2 
style="BORDER-RIGHT: #165595 1px solid; PADDING-RIGHT: 3px; BORDER-TOP: #165595 1px solid; PADDING-LEFT: 3px; LEFT: 0px; VISIBILITY: hidden; PADDING-BOTTOM: 3px; BORDER-LEFT: #165595 1px solid; WIDTH: 160px; PADDING-TOP: 3px; BORDER-BOTTOM: #165595 1px solid; POSITION: absolute; TOP: 0px; BACKGROUND-COLOR: #6677aa">
<A class=whitelink title="�����" href="<? echo $url; ?>/?page=vesna">�����</A><BR>
<A class=whitelink title="������" href="<? echo $url; ?>/?page=moment">������</A><BR></DIV>
<DIV id=dropmenu3 
style="BORDER-RIGHT: #165595 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: #165595 1px solid; PADDING-LEFT: 0px; LEFT: 0px; VISIBILITY: hidden; PADDING-BOTTOM: 0px; BORDER-LEFT: #165595 1px solid; WIDTH: 170px; PADDING-TOP: 0px; BORDER-BOTTOM: #165595 1px solid; POSITION: absolute; TOP: 0px">
<DIV 
style="PADDING-RIGHT: 3px; PADDING-LEFT: 3px; PADDING-BOTTOM: 3px; PADDING-TOP: 3px; BACKGROUND-COLOR: #6677aa">
<A class=whitelink title="�������" href="<? echo $url; ?>/?page=rules">�������</A><BR>
<A class=whitelink title="����� �� ��������" href="<? echo $url; ?>/?page=regainbonus">����� �� ��������</A><BR>
<A class=whitelink title="������������ �����" href="<? echo $url; ?>/?page=week_bonus">������������ �����</A><BR>
<A class=whitelink title="���������� ���������" href="<? echo $url; ?>/?page=stat_wins">���������� ���������</A><BR>
<A class=whitelink title="�������� WebMoney" href="<? echo $url; ?>/?page=kurs">�������� WebMoney</A><BR>
</DIV></DIV>
<DIV id=dropmenu4 
style="BORDER-RIGHT: #165595 1px solid; PADDING-RIGHT: 0px; BORDER-TOP: #165595 1px solid; PADDING-LEFT: 0px; LEFT: 0px; VISIBILITY: hidden; PADDING-BOTTOM: 0px; BORDER-LEFT: #165595 1px solid; WIDTH: 240px; PADDING-TOP: 0px; BORDER-BOTTOM: #165595 1px solid; POSITION: absolute; TOP: 0px">
<DIV 
style="PADDING-RIGHT: 3px; PADDING-LEFT: 3px; PADDING-BOTTOM: 3px; PADDING-TOP: 3px; BACKGROUND-COLOR: #6677aa">
<A class=whitelink title="�������" href="<? echo $url; ?>/?page=par_prog">����������� � ����������� ���������</A><BR>
<A class=whitelink title="�������� WebMoney" href="http://www.ultrex.ru/?page=partner_enter">���� ��� ���������</A><BR>
</DIV></DIV>
<!------>
  <tr> 
    <td width="100%" valign="top"> 
<TABLE cellSpacing=0 cellPadding=0 border=0 bgcolor="#ffffff">
        <TBODY>
        <TR>
          <TD noWrap width="18%" height="100%" valign="top">
<table width="100%" border="0" height="100%" cellspacing="0" cellpadding="10" valign=top align="center">     
  <tr valign=top> 
          <td valign=top width="100%" bgcolor="#FFFFFF">
            <TABLE cellSpacing=0 cellPadding=0 width="170" border=0 style="BORDER: #6677aa 1px solid">
               <tr> 
          <td bgcolor="#88aadd" class=whitesmall height="25" width="170" style="BORDER-BOTTOM: #6677aa 1px solid"> 
            <div align="center">����������</div></td></tr>
              <TR>
                <TD vAlign=top noWrap height="100%" class=blackvsmall><br><div align='center'><font color='#333333'>������� �������: </font><span class='targetvsmall'><strong><u>
<a id=game_count><script language="JavaScript">
<!--
document.write(all_games); 
//-->
</script></a></u></strong></span><br>
<font color='#333333'>��������� �� �����: </font><strong><br><br>    
<p><SPAN style="COLOR: green"><B><u>
<a id=wmz_out><script language="JavaScript">
<!--
document.write(out_wmz); 
//-->
</script></u></B></SPAN> WM<SPAN style="COLOR: green"><B>Z</B></SPAN></p>  


<p><SPAN style="COLOR: red"><B><u>
<a id=wmr_out><script language="JavaScript">
<!--
document.write(out_wmr); 
//-->
</script></a></u></B></SPAN> WM<SPAN style="COLOR: red"><B>R</B></SPAN></p> 

<p><SPAN style="COLOR: blue"><B><u>
<a id=wme_out><script language="JavaScript">
<!--
document.write(out_wme); 
//-->
</script></a></u></B></SPAN> WM<SPAN style="COLOR: blue"><B>E</B></SPAN><br> 
   
<p><SPAN style="COLOR: olive"><B><u>
<a id=wmu_out><script language="JavaScript">
<!--
document.write(out_wmu); 
//-->
</script></a></u></B></SPAN> WM<SPAN style="COLOR: olive"><B>U</B></SPAN></div><br></td></tr></table><br>

<TABLE cellSpacing=0 cellPadding=0 width="170" border=0 style="BORDER: #7aa46e 1px solid">
            


<TABLE cellSpacing=0 cellPadding=0 width="170" border=0 style="BORDER: #88aadd 1px solid">
            
<tr>
 <td bgcolor="#88aadd" class=whitesmall height="25" height="100%" width="170" style="BORDER-BOTTOM: #6677aa 1px solid"> 
            <div align="center">��� ��������</div></td></tr>
              <TR>
                <TD vAlign=top height="100%" align="center"><br><a class='section' href="https://passport.webmoney.ru/asp/certView.asp?wmid=<? echo $id; ?>" target=_blank><IMG SRC="http://www.ultrex.ru/images/certificate.gif" title="����� ��������� �������� ������ WMID <? echo $id; ?>" border="0"><br><strong>��� ��������</strong></a><!-- end WebMoney Transfer : attestation label --><br><br></td></tr></table></tr></td></tr></table>
    <td width="100%" valign=top>
   <table width="100%" border="0" height="100%" cellspacing="0" cellpadding="10">     
  <tr> 
          <td width="100%" bgcolor="#FFFFFF" valign="top">
<?
if (isset($_GET['page']) == false)
{
include("inc/index.inc");
$_GET['page'] = 'index';
}
else 
{
if (ereg ("[a-z]", $_GET['page']) and file_exists("inc/".$_GET['page'].".inc") == true)
{ 
include("inc/".$_GET['page'].".inc");
}
else 
{ 
include("inc/404.inc"); 
}
}
?>

<td valign=top height=100% bgcolor='#FFFFFF' id=table_account style='DISPLAY: none'>
            <TABLE cellSpacing=0 cellPadding=0 width='170' height='100%' border=0 style='BORDER: #6677aa 1px solid'>
               <TR id=title_account style='DISPLAY: none'>
          <td bgcolor='#88aadd' class=whitesmall height='25' width='170' style='BORDER-BOTTOM: #6677aa 1px solid'> 
            <div align='center'>������ ����</div></td></tr>              
                <tr id=stat_account style='DISPLAY: none'><TD vAlign=top noWrap height='100%'>


<table width='100%' border='0' valign=top align=center cellspacing='0' cellpadding='4'>
  <tr>
    <td align=right class=blackvsmall><strong><font color='green'><u><a id=zcount>0.00</a></u></font></strong></td>
    <td align=left class=blackvsmall><strong>WM<font color='green'>Z</font></strong></td>
  </tr>
  <tr>
    <td align=right class=blackvsmall><strong><font color='#ff0000'><u><a id=rcount>0.00</a></u></font></strong></td>
    <td align=left class=blackvsmall><strong>WM<font color='#ff0000'>R</font></strong></td>
  </tr>
  <tr>
    <td align=right class=blackvsmall><strong><font color='blue'><u><a id=ecount>0.00</a></u></font></strong></td>
    <td align=left class=blackvsmall><strong>WM<font color='blue'>E</font></strong></td>
  </tr>
  <tr>
    <td align=right class=blackvsmall><strong><font color='olive'><u><a id=ucount>0.00</a></u></font></strong></td>
    <td align=left class=blackvsmall><strong>WM<font color='olive'>U</font></strong></td>
  </tr>
  <tr>
    <td colspan='2' class=blackvsmall><p>&nbsp;</p><p>&nbsp;</p><p align='center'><a href="<? echo $url; ?>/?page=pay_out" title="����� �� �����" class="section"><strong>�����</strong></a> / <a href="<? echo $url; ?>/?page=pay" title="��������� ����" class="section"><strong>���������</strong></a></p></td></tr>
</table>
<body>
<script>update_account();</script>

</TD></TR></table>

</table></table>   
<body><script>view_account();</script>    

<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
  <TBODY>
  <TR bgColor=#eeeeee>
    <TD style="BORDER-TOP: #acacac 1px solid" vAlign=top>
<!--��������-->
      <TABLE cellSpacing=2 cellPadding=2 width="100%" border=0>
        <TBODY>
        <TR>
          <TD class=blackvsmall width="100%"><A class=section href="http://www.wmcap.ru/" target=_blank>�������� ������ <a href="index1.php">.</a></A> ����������� � 
            �������������� ����������� �������� <BR>Copyright � <? echo "".date("Y").""; ?> �<? echo $copyright; ?>�</TD>         
   <td>
      <table border=0 cellspacing=0 cellpadding=4><tr>
      <td>
<!-- ������(�������) ������� 88�31 �1 -->
</td>
<td>
<!-- ������(�������) ������� 88�31 �2 -->
</td>
<td>
<!-- ������(�������) ������� 88�31 �3 -->
</td>
<td>
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='http://counter.yadro.ru/hit?t12.6;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: �������� ����� ���������� �� 24 ����, ����������� �� 24 ���� � �� �������' "+
"border=0 width=88 height=31><\/a>")//--></script><!--/LiveInternet-->
</td>
<td>
<!-- SpyLOG -->
<script src="http://tools.spylog.ru/counter2.2.js" type="text/javascript" id="spylog_code" counter="924559" ></script>
<noscript>
<a href="http://u9245.59.spylog.com/cnt?cid=924559&f=3&p=0" target="_blank">
<img src="http://u9245.59.spylog.com/cnt?cid=924559&p=0" alt='SpyLOG' border='0' width=88 height=31 ></a> 
</noscript>
<!--/ SpyLOG -->
</td>
</tr></table></td>

          <TD></TD></TR></TBODY></TABLE></TD></TR></TBODY></TABLE></BODY></HTML>