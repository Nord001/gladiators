<?
 ############################################################################
 # WFSearch Engine Pro by jID     Version 1.0 (PHP4)                        #
 # Copyright (C) jID, 2003                                                  #
 #                                                                          #
 # filling MySQL tables :: ��������� ��������� MySQL (�������� ������)      #
 ############################################################################

require("connect.php");

if (!isset($language)) $language="english.php";
if (file_exists("language/".$language))
  include("language/".$language);
else
{
  $language="english.php";
   include("language/".$language);
}

echo "<html>\n".
     "<title>WFSearch Engine Pro - $lang_insttit</title>\n".
     "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=$lang_codepage\">\n".
     "<link href=\"wfsearch.css\" rel=\"stylesheet\" type=\"text/css\">\n".
     "<body><p>\n";
echo "<center><b>";

mysql_query("create table _wfspro_index (
  id int(12) not null auto_increment ,
  dosearch int(12),
  execindex int(12),
  path text,
  content text,
  date datetime,
  pop int(12),
  keywords text,
  primary key (id))") or die(str_replace("%1", "_wfspro_index", $lang_tabcrerr)."<br>".mysql_error());
echo str_replace("%1", "_wfspro_index", $lang_tabcrsucc)."<br>";

mysql_query("create table _wfspro_admin (
  id int(12) not null auto_increment ,
  pwd text,
  lastindex datetime,
  indexed int(12),
  allowed text,
  disallowed text,
  root text,
  desc_header text,
  desc_footer text,
  color1 text,
  color2 text,
  startpath text,
  pages int(12),
  language text,
  primary key (id))")or die(str_replace("%1", "_wfspro_admin", $lang_tabcrerr)."<br>".mysql_error());
echo str_replace("%1", "_wfspro_admin", $lang_tabcrsucc)."<br>";

mysql_query("insert into _wfspro_admin (indexed, allowed, disallowed, desc_header, desc_footer, color1, color2, startpath, pages, language, root) values(0,'.php,.htm,.html,.txt','wfsearchpro.php,admin.php,admin2.php,connect.php,link.php,header.php,footer.php,english.php,russian.php','<font size=-1>','</font>','#F0F0F0','#D0D0D0','..\.',5,'$language','')") or die(str_replace("%1", "_wfspro_admin", $lang_tabuperr)."<br>".mysql_error());
echo str_replace("%1", "_wfspro_admin", $lang_tabupsucc)."<br>";

echo    "</b><br><a href=admin.php>$lang_toadminpg</a></center></p></body></html>";
?>