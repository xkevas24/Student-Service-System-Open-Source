<?php
require("../app/core_auth.php");
if(isset($_GET["stuno"])){
	$stuno=$_GET["stuno"];
	$userdetail=mysqli_fetch_row(mysqli_query($con,"select * from stu_usrcache where sn='$stuno';"));
}
?>
<!doctype html>
<html xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word" xmlns:m="http://schemas.microsoft.com/office/2004/12/omml">

<head>
<meta charset="utf-8">
<meta http-equiv=Content-Type content="text/html; charset=gb2312">
<meta name=ProgId content=Word.Document>
<meta name=Generator content="Microsoft Word 15">
<meta name=Originator content="Microsoft Word 15">
<link rel=File-List href="book.files/filelist.xml">
<link rel=Edit-Time-Data href="book.files/editdata.mso">
<title><?php echo $userdetail[1]."的第二课堂评定手册"; ?></title>
<link rel=dataStoreItem href="book.files/item0001.xml"
target="book.files/props002.xml">
<link rel=themeData href="book.files/themedata.thmx">
<link rel=colorSchemeMapping href="book.files/colorschememapping.xml">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:宋体;
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-alt:SimSun;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 680460288 22 0 262145 0;}
@font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;
	mso-font-charset:1;
	mso-generic-font-family:roman;
	mso-font-pitch:variable;
	mso-font-signature:0 0 0 0 0 0;}
@font-face
	{font-family:仿宋;
	panose-1:2 1 6 9 6 1 1 1 1 1;
	mso-font-alt:仿宋;
	mso-font-charset:134;
	mso-generic-font-family:modern;
	mso-font-pitch:fixed;
	mso-font-signature:-2147482945 953122042 22 0 262145 0;}
@font-face
	{font-family:华文中宋;
	panose-1:2 1 6 0 4 1 1 1 1 1;
	mso-font-alt:华文中宋;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:647 135200768 16 0 262303 0;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;
	mso-font-charset:0;
	mso-generic-font-family:swiss;
	mso-font-pitch:variable;
	mso-font-signature:-536859905 -1073732485 9 0 511 0;}
@font-face
	{font-family:"\@华文中宋";
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:647 135200768 16 0 262303 0;}
@font-face
	{font-family:"\@仿宋";
	mso-font-charset:134;
	mso-generic-font-family:modern;
	mso-font-pitch:fixed;
	mso-font-signature:-2147482945 953122042 22 0 262145 0;}
@font-face
	{font-family:"\@宋体";
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 680460288 22 0 262145 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:宋体;
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:35.4pt;
	margin-bottom:.0001pt;
	mso-pagination:none;
	font-size:16.0pt;
	font-family:宋体;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;
	font-weight:bold;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:宋体;
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
p.TableParagraph, li.TableParagraph, div.TableParagraph
	{mso-style-name:"Table Paragraph";
	mso-style-priority:1;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	margin:0cm;
	margin-bottom:.0001pt;
	mso-pagination:none;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-ascii-font-family:Calibri;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:宋体;
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:Calibri;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-fareast-language:EN-US;}
span.SpellE
	{mso-style-name:"";
	mso-spl-e:yes;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-size:11.0pt;
	mso-ansi-font-size:11.0pt;
	font-family:"Calibri",sans-serif;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:0pt;
	mso-fareast-language:EN-US;}
.MsoPapDefault
	{mso-style-type:export-only;
	mso-pagination:none;}
 /* Page Definitions */
 @page
	{mso-page-border-surround-header:no;
	mso-page-border-surround-footer:no;}
@page WordSection1
	{size:595.5pt 842.0pt;
	margin:60.0pt 84.0pt 14.0pt 84.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection1
	{page:WordSection1;}
@page WordSection2
	{size:595.5pt 842.0pt;
	margin:58.0pt 84.0pt 14.0pt 78.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection2
	{page:WordSection2;}
@page WordSection3
	{size:595.5pt 842.0pt;
	margin:60.0pt 64.0pt 14.0pt 68.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection3
	{page:WordSection3;}
@page WordSection4
	{size:595.5pt 842.0pt;
	margin:52.0pt 64.0pt 14.0pt 68.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection4
	{page:WordSection4;}
@page WordSection5
	{size:595.5pt 842.0pt;
	margin:75.0pt 64.0pt 14.0pt 68.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection5
	{page:WordSection5;}
@page WordSection6
	{size:595.5pt 842.0pt;
	margin:52.0pt 64.0pt 14.0pt 68.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection6
	{page:WordSection6;}
@page WordSection7
	{size:595.5pt 842.0pt;
	margin:60.0pt 64.0pt 14.0pt 68.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection7
	{page:WordSection7;}
@page WordSection8
	{size:595.5pt 842.0pt;
	margin:52.0pt 64.0pt 14.0pt 68.0pt;
	mso-header-margin:36.0pt;
	mso-footer-margin:36.0pt;
	mso-paper-source:0;}
div.WordSection8
	{page:WordSection8;}
-->
</style>
    <!-- 打印的样式-->
    <style media="print">
        @page {
            size: auto;
            margin: 3mm;
        }
    </style>
</head>

<body lang=ZH-CN style='tab-interval:36.0pt'>
<button onclick='print_page()'>打印</button>
<div align="center">
<div class=WordSection1>

<p class=MsoNormal><b><span lang=EN-US style='font-size:22.0pt;font-family:
华文中宋;mso-bidi-font-family:华文中宋;mso-fareast-language:ZH-CN'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b><span lang=EN-US style='font-size:22.0pt;font-family:
华文中宋;mso-bidi-font-family:华文中宋;mso-fareast-language:ZH-CN'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:22.0pt;font-family:华文中宋;mso-bidi-font-family:华文中宋;mso-fareast-language:
ZH-CN'></span></b><span lang=EN-US style='font-size:10.0pt;font-family:
仿宋;mso-bidi-font-family:仿宋;mso-fareast-language:ZH-CN'><o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center'><b><span
style='font-size:22.0pt;font-family:华文中宋;mso-bidi-font-family:华文中宋;mso-fareast-language:
ZH-CN'>学生第二课堂培养计划评定手册</span></b><span lang=EN-US style='font-size:10.0pt;
font-family:仿宋;mso-bidi-font-family:仿宋;mso-fareast-language:ZH-CN'><o:p></o:p></span></p>

<p class=MsoNormal><b><span lang=EN-US style='font-size:10.0pt;font-family:
华文中宋;mso-bidi-font-family:华文中宋;mso-fareast-language:ZH-CN'><o:p>&nbsp;</o:p></span></b></p>


<img width=378 height=418
src="book.files/image002.gif" v:shapes="image1.png">


<p class=MsoNormal><b><span lang=EN-US style='font-size:10.0pt;font-family:
华文中宋;mso-bidi-font-family:华文中宋'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b><span lang=EN-US style='font-size:10.0pt;font-family:
华文中宋;mso-bidi-font-family:华文中宋'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal><b><span lang=EN-US style='font-size:10.0pt;font-family:
华文中宋;mso-bidi-font-family:华文中宋'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:.65pt'><b><span lang=EN-US
style='font-size:13.5pt;font-family:华文中宋;mso-bidi-font-family:华文中宋'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:.7pt;margin-right:0cm;margin-bottom:0cm;
margin-left:12.95pt;margin-bottom:.0001pt;tab-stops:173.95pt 314.0pt'>
<span
style='font-size:14.0pt;font-family:仿宋;mso-bidi-font-family:仿宋;letter-spacing:
-.1pt;mso-fareast-language:ZH-CN'>分院：
<span lang=EN-US>
<span style='mso-tab-count:
1'>&nbsp;&nbsp;<?php echo $userdetail[3] ?>&nbsp;&nbsp;</span>
</span>

年级：<span
lang=EN-US>
<span style='mso-tab-count:1'>&nbsp;&nbsp;<?php echo  substr($userdetail[2],0,4); ?>级&nbsp;&nbsp;</span>
</span>专业：</span>
<span
lang=EN-US style='font-size:14.0pt;font-family:仿宋;mso-bidi-font-family:仿宋;
mso-fareast-language:ZH-CN'><o:p><?php echo  substr($userdetail[4],7); ?></o:p></span></p>

<p class=MsoNormal><span lang=EN-US style='font-size:14.0pt;font-family:仿宋;
mso-bidi-font-family:仿宋;mso-fareast-language:ZH-CN'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-top:.25pt'><span lang=EN-US style='font-size:
19.5pt;font-family:仿宋;mso-bidi-font-family:仿宋;mso-fareast-language:ZH-CN'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:12.95pt;tab-stops:173.95pt 314.0pt'><span
style='font-size:14.0pt;font-family:仿宋;mso-bidi-font-family:仿宋;letter-spacing:
-.1pt;mso-fareast-language:ZH-CN'>班级：<span lang=EN-US><span style='mso-tab-count:
1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>姓名：<span
lang=EN-US><span style='mso-tab-count:1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></span>学号：</span><span
lang=EN-US style='font-size:14.0pt;font-family:仿宋;mso-bidi-font-family:仿宋;
mso-fareast-language:ZH-CN'><o:p></o:p></span></p>

</div>
<span lang=EN-US style='font-size:14.0pt;font-family:仿宋;mso-bidi-font-family:
仿宋;mso-ansi-language:EN-US;mso-fareast-language:ZH-CN;mso-bidi-language:AR-SA'><br
clear=all style='page-break-before:always;mso-break-type:section-break'>
</span>
<div style="page-break-after: always;"></div>

<div class=WordSection2>

<p class=MsoBodyText style='margin-left:105.6pt;line-height:20.2pt;mso-line-height-rule:
exactly'><span style='mso-fareast-language:ZH-CN'>个人信息及综合素质发展规划</span><span
lang=EN-US style='mso-fareast-language:ZH-CN;font-weight:normal'><o:p></o:p></span></p>

<p class=MsoNormal style='margin-top:.05pt'><b><span lang=EN-US
style='font-size:2.0pt;font-family:宋体;mso-bidi-font-family:宋体;mso-fareast-language:
ZH-CN'><o:p>&nbsp;</o:p></span></b></p>

<table class=TableNormal border=0 cellspacing=0 cellpadding=0 style='margin-left:
 5.85pt;border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 480;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:31.5pt;mso-height-rule:
  exactly'>
  <td width=83 valign=top style='width:62.3pt;border-top:1.5pt;border-left:
  1.5pt;border-bottom:1.0pt;border-right:1.0pt;border-color:black;border-style:
  solid;mso-border-top-alt:1.5pt;mso-border-left-alt:1.5pt;mso-border-bottom-alt:
  .75pt;mso-border-right-alt:.75pt;mso-border-color-alt:black;mso-border-style-alt:
  solid;padding:0cm 0cm 0cm 0cm;height:31.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.55pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.45pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>姓名</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=72 valign=top style='width:54.3pt;border-top:solid black 1.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  mso-border-top-alt:solid black 1.5pt;padding:0cm 0cm 0cm 0cm;height:31.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=83 valign=top style='width:61.95pt;border-top:solid black 1.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  mso-border-top-alt:solid black 1.5pt;padding:0cm 0cm 0cm 0cm;height:31.5pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.55pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.6pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>性别</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:solid black 1.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  mso-border-top-alt:solid black 1.5pt;padding:0cm 0cm 0cm 0cm;height:31.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.25pt;border-top:solid black 1.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  mso-border-top-alt:solid black 1.5pt;padding:0cm 0cm 0cm 0cm;height:31.5pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.55pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.25pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>民族</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=69 valign=top style='width:51.75pt;border-top:solid black 1.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  mso-border-top-alt:solid black 1.5pt;padding:0cm 0cm 0cm 0cm;height:31.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=106 rowspan=3 valign=top style='width:79.6pt;border-top:solid black 1.5pt;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.5pt;
  mso-border-left-alt:solid black .75pt;mso-border-top-alt:1.5pt;mso-border-left-alt:
  .75pt;mso-border-bottom-alt:.75pt;mso-border-right-alt:1.5pt;mso-border-color-alt:
  black;mso-border-style-alt:solid;padding:0cm 0cm 0cm 0cm;height:31.5pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.45pt'><b><span lang=EN-US
  style='font-size:17.5pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph align=center style='margin-left:.45pt;text-align:
  center'><span class=SpellE><b><span lang=EN-US style='font-size:12.0pt;
  font-family:仿宋;mso-bidi-font-family:仿宋'>照片</span></b></span><span lang=EN-US
  style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:33.85pt;mso-height-rule:exactly'>
  <td width=83 valign=top style='width:62.3pt;border-top:none;border-left:solid black 1.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .75pt;mso-border-alt:solid black .75pt;mso-border-left-alt:solid black 1.5pt;
  padding:0cm 0cm 0cm 0cm;height:33.85pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:6.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:6.45pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>出生年月</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=72 valign=top style='width:54.3pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .75pt;mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:33.85pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=83 valign=top style='width:61.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .75pt;mso-border-left-alt:solid black .75pt;
  mso-border-alt:solid black .75pt;padding:0cm 0cm 0cm 0cm;height:33.85pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:6.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:6.6pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>政治面貌</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .75pt;mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:33.85pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .75pt;mso-border-left-alt:solid black .75pt;
  mso-border-alt:solid black .75pt;padding:0cm 0cm 0cm 0cm;height:33.85pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:6.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.25pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>籍贯</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=69 valign=top style='width:51.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .75pt;mso-border-left-alt:solid black .75pt;
  mso-border-alt:solid black .75pt;padding:0cm 0cm 0cm 0cm;height:33.85pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:33.1pt;mso-height-rule:exactly'>
  <td width=83 valign=top style='width:62.3pt;border-top:none;border-left:solid black 1.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .75pt;mso-border-alt:solid black .75pt;mso-border-left-alt:solid black 1.5pt;
  padding:0cm 0cm 0cm 0cm;height:33.1pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:6.45pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.45pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>分院</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=72 valign=top style='width:54.3pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .75pt;mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:33.1pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=83 valign=top style='width:61.95pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .75pt;mso-border-left-alt:solid black .75pt;
  mso-border-alt:solid black .75pt;padding:0cm 0cm 0cm 0cm;height:33.1pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:6.45pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.6pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>专业</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .75pt;mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:33.1pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=47 valign=top style='width:35.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .75pt;mso-border-left-alt:solid black .75pt;
  mso-border-alt:solid black .75pt;padding:0cm 0cm 0cm 0cm;height:33.1pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:6.45pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.0pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>班级</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=69 valign=top style='width:51.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .75pt;mso-border-left-alt:solid black .75pt;
  mso-border-alt:solid black .75pt;padding:0cm 0cm 0cm 0cm;height:33.1pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:31.85pt;mso-height-rule:exactly'>
  <td width=83 valign=top style='width:62.3pt;border-top:none;border-left:solid black 1.5pt;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .75pt;mso-border-alt:solid black .75pt;mso-border-left-alt:solid black 1.5pt;
  padding:0cm 0cm 0cm 0cm;height:31.85pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.85pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:18.45pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>学号</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=155 colspan=2 valign=top style='width:116.25pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .75pt;mso-border-left-alt:solid black .75pt;
  mso-border-alt:solid black .75pt;padding:0cm 0cm 0cm 0cm;height:31.85pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=84 valign=top style='width:63.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .75pt;mso-border-left-alt:solid black .75pt;mso-border-alt:solid black .75pt;
  padding:0cm 0cm 0cm 0cm;height:31.85pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.85pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:7.05pt;margin-bottom:.0001pt'><span class=SpellE><b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'>联系电话</span></b></span><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋'><o:p></o:p></span></p>
  </td>
  <td width=222 colspan=3 valign=top style='width:166.6pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.5pt;
  mso-border-top-alt:solid black .75pt;mso-border-left-alt:solid black .75pt;
  mso-border-alt:solid black .75pt;mso-border-right-alt:solid black 1.5pt;
  padding:0cm 0cm 0cm 0cm;height:31.85pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:37.85pt;mso-height-rule:exactly'>
  <td width=544 colspan=7 valign=top style='width:408.15pt;border-top:none;
  border-left:solid black 1.5pt;border-bottom:solid black 1.0pt;border-right:
  solid black 1.5pt;mso-border-top-alt:solid black .75pt;mso-border-top-alt:
  .75pt;mso-border-left-alt:1.5pt;mso-border-bottom-alt:.75pt;mso-border-right-alt:
  1.5pt;mso-border-color-alt:black;mso-border-style-alt:solid;padding:0cm 0cm 0cm 0cm;
  height:37.85pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:8.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:119.25pt;margin-bottom:.0001pt'><b><span style='font-size:
  12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋;mso-fareast-language:ZH-CN'>大学期间综合素质自我培养计划</span></b><span
  lang=EN-US style='font-size:12.0pt;font-family:仿宋;mso-bidi-font-family:仿宋;
  mso-fareast-language:ZH-CN'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;mso-yfti-lastrow:yes;height:521.15pt;mso-height-rule:
  exactly'>
  <td width=544 colspan=7 valign=top style='width:408.15pt;border-top:none;
  border-left:solid black 1.5pt;border-bottom:solid black 1.0pt;border-right:
  solid black 1.5pt;mso-border-top-alt:solid black .75pt;mso-border-top-alt:
  .75pt;mso-border-left-alt:1.5pt;mso-border-bottom-alt:.75pt;mso-border-right-alt:
  1.5pt;mso-border-color-alt:black;mso-border-style-alt:solid;padding:0cm 0cm 0cm 0cm;
  height:521.15pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US style='mso-fareast-language:ZH-CN'><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>
<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:宋体;mso-fareast-theme-font:
minor-fareast;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
ZH-CN;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<div style="page-break-after: always;"></div>

<div class=WordSection3>

<p class=MsoBodyText style='line-height:19.5pt;mso-line-height-rule:exactly'><span
style='mso-fareast-language:ZH-CN'>第一学年<span lang=EN-US>“</span>第二课堂综合素质培养计划<span
lang=EN-US>”</span>积分登记表</span><span lang=EN-US style='mso-fareast-language:
ZH-CN;font-weight:normal'><o:p></o:p></span></p>

<p class=MsoNormal><b><span lang=EN-US style='font-size:10.0pt;font-family:
宋体;mso-bidi-font-family:宋体;mso-fareast-language:ZH-CN'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:.25pt'><b><span lang=EN-US
style='font-size:7.5pt;font-family:宋体;mso-bidi-font-family:宋体;mso-fareast-language:
ZH-CN'><o:p>&nbsp;</o:p></span></b></p>

<table class=TableNormal border=0 cellspacing=0 cellpadding=0 style='margin-left:
 5.3pt;border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 480;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:31.7pt;mso-height-rule:
  exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:31.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>板块</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:20.75pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>时间</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>活动项目内容</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:24.1pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>认证（签章</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>）<o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:11.35pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>积分</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.8pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>备注</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:51.5pt;mso-height-rule:exactly'>
  <td width=89 rowspan=8 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.5pt'><b><span lang=EN-US
  style='font-size:9.5pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>基础教育</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:51.5pt;mso-height-rule:exactly'>
  <td width=89 rowspan=4 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.55pt'><b><span lang=EN-US
  style='font-size:9.5pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>创新实践</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;height:51.5pt;mso-height-rule:
  exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>
<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:宋体;mso-fareast-theme-font:
minor-fareast;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<div style="page-break-after: always;"></div>

<div class=WordSection4>

<p class=MsoNormal style='margin-top:.4pt'><span lang=EN-US style='font-size:
3.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=0 cellspacing=0 cellpadding=0 style='margin-left:
 5.3pt;border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 480;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:31.7pt;mso-height-rule:
  exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:31.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>板块</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:20.75pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>时间</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>活动项目内容</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:24.1pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>认证（签章</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>）<o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:11.35pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>积分</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.8pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>备注</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:51.5pt;mso-height-rule:exactly'>
  <td width=89 rowspan=4 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:.1pt'><span lang=EN-US
  style='font-size:14.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>创新实践</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:52.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:52.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:43.0pt;mso-height-rule:exactly'>
  <td width=89 rowspan=8 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:.35pt'><span lang=EN-US
  style='font-size:13.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:9.0pt;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt;text-indent:-12.0pt;line-height:
  15.6pt;mso-line-height-rule:exactly'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>文化体育</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'> <span
  class=SpellE>竞赛</span><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:48.7pt;mso-height-rule:exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:48.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.55pt'><span lang=EN-US
  style='font-size:11.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>积分合计</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=199 colspan=2 valign=top style='width:149.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.55pt'><span lang=EN-US
  style='font-size:11.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:24.1pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>班级公示情况</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=154 colspan=2 valign=top style='width:115.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:48.7pt;mso-height-rule:exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:48.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.4pt'><span lang=EN-US
  style='font-size:13.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:15.0pt;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt;text-indent:-6.0pt;line-height:
  15.6pt;mso-line-height-rule:exactly'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>辅导员</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'> <span
  class=SpellE>意见</span><o:p></o:p></span></p>
  </td>
  <td width=199 colspan=2 valign=top style='width:149.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:6.1pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>二级分院团总支意见</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=154 colspan=2 valign=top style='width:115.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;mso-yfti-lastrow:yes;height:48.7pt;mso-height-rule:
  exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:48.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.3pt'><span lang=EN-US
  style='font-size:13.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:15.0pt;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt;text-indent:-6.0pt;line-height:
  15.6pt;mso-line-height-rule:exactly'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>院团委</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'> <span
  class=SpellE>意见</span><o:p></o:p></span></p>
  </td>
  <td width=514 colspan=5 valign=top style='width:385.65pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>
<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:宋体;mso-fareast-theme-font:
minor-fareast;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<div style="page-break-after: always;"></div>

<div class=WordSection5>

<p class=MsoBodyText style='line-height:20.1pt;mso-line-height-rule:exactly'><span
style='mso-fareast-language:ZH-CN'>第二学年<span lang=EN-US>“</span>第二课堂综合素质培养计划<span
lang=EN-US>”</span>积分登记表</span><span lang=EN-US style='mso-fareast-language:
ZH-CN;font-weight:normal'><o:p></o:p></span></p>

<p class=MsoNormal><b><span lang=EN-US style='font-size:10.0pt;font-family:
宋体;mso-bidi-font-family:宋体;mso-fareast-language:ZH-CN'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:.25pt'><b><span lang=EN-US
style='font-size:7.5pt;font-family:宋体;mso-bidi-font-family:宋体;mso-fareast-language:
ZH-CN'><o:p>&nbsp;</o:p></span></b></p>

<table class=TableNormal border=0 cellspacing=0 cellpadding=0 style='margin-left:
 5.3pt;border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 480;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:31.7pt;mso-height-rule:
  exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:31.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>板块</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:20.75pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>时间</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>活动项目内容</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:24.1pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>认证（签章</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>）<o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:11.35pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>积分</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.8pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>备注</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:51.5pt;mso-height-rule:exactly'>
  <td width=89 rowspan=8 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.4pt'><b><span lang=EN-US
  style='font-size:9.5pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>基础教育</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:51.5pt;mso-height-rule:exactly'>
  <td width=89 rowspan=4 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.25pt'><b><span lang=EN-US
  style='font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>创新实践</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;height:51.5pt;mso-height-rule:
  exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>
<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:宋体;mso-fareast-theme-font:
minor-fareast;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<div style="page-break-after: always;"></div>

<div class=WordSection6>

<p class=MsoNormal style='margin-top:.4pt'><span lang=EN-US style='font-size:
3.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=0 cellspacing=0 cellpadding=0 style='margin-left:
 5.3pt;border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 480;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:31.7pt;mso-height-rule:
  exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:31.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>板块</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:20.75pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>时间</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>活动项目内容</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:24.1pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>认证（签章</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>）<o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:11.35pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>积分</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.8pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>备注</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:51.5pt;mso-height-rule:exactly'>
  <td width=89 rowspan=4 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:.1pt'><span lang=EN-US
  style='font-size:14.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>创新实践</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:52.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:52.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:43.0pt;mso-height-rule:exactly'>
  <td width=89 rowspan=8 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:8.65pt;margin-right:9.0pt;
  margin-bottom:0cm;margin-left:21.0pt;margin-bottom:.0001pt;text-indent:-12.0pt;
  line-height:15.6pt;mso-line-height-rule:exactly'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>文化体育</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'> <span
  class=SpellE>竞赛</span><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:48.7pt;mso-height-rule:exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:48.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.55pt'><span lang=EN-US
  style='font-size:11.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>积分合计</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=199 colspan=2 valign=top style='width:149.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.55pt'><span lang=EN-US
  style='font-size:11.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:24.1pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>班级公示情况</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=154 colspan=2 valign=top style='width:115.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:48.7pt;mso-height-rule:exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:48.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.4pt'><span lang=EN-US
  style='font-size:13.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:15.0pt;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt;text-indent:-6.0pt;line-height:
  15.6pt;mso-line-height-rule:exactly'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>辅导员</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'> <span
  class=SpellE>意见</span><o:p></o:p></span></p>
  </td>
  <td width=199 colspan=2 valign=top style='width:149.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:6.1pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>二级分院团总支意见</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=154 colspan=2 valign=top style='width:115.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;mso-yfti-lastrow:yes;height:48.7pt;mso-height-rule:
  exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:48.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.3pt'><span lang=EN-US
  style='font-size:13.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:15.0pt;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt;text-indent:-6.0pt;line-height:
  15.6pt;mso-line-height-rule:exactly'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>院团委</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'> <span
  class=SpellE>意见</span><o:p></o:p></span></p>
  </td>
  <td width=514 colspan=5 valign=top style='width:385.65pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>
<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:宋体;mso-fareast-theme-font:
minor-fareast;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<div style="page-break-after: always;"></div>

<div class=WordSection7>

<p class=MsoBodyText style='line-height:19.5pt;mso-line-height-rule:exactly'><span
style='mso-fareast-language:ZH-CN'>第三学年<span lang=EN-US>“</span>第二课堂综合素质培养计划<span
lang=EN-US>”</span>积分登记表</span><span lang=EN-US style='mso-fareast-language:
ZH-CN;font-weight:normal'><o:p></o:p></span></p>

<p class=MsoNormal><b><span lang=EN-US style='font-size:10.0pt;font-family:
宋体;mso-bidi-font-family:宋体;mso-fareast-language:ZH-CN'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal style='margin-top:.25pt'><b><span lang=EN-US
style='font-size:7.5pt;font-family:宋体;mso-bidi-font-family:宋体;mso-fareast-language:
ZH-CN'><o:p>&nbsp;</o:p></span></b></p>

<table class=TableNormal border=0 cellspacing=0 cellpadding=0 style='margin-left:
 5.3pt;border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 480;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:31.7pt;mso-height-rule:
  exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:31.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>板块</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:20.75pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>时间</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>活动项目内容</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:24.1pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>认证（签章</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>）<o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:11.35pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>积分</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.8pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>备注</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:51.5pt;mso-height-rule:exactly'>
  <td width=89 rowspan=8 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.5pt'><b><span lang=EN-US
  style='font-size:9.5pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>基础教育</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:51.5pt;mso-height-rule:exactly'>
  <td width=89 rowspan=4 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph><b><span lang=EN-US style='font-size:12.0pt;
  font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-top:.55pt'><b><span lang=EN-US
  style='font-size:9.5pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>创新实践</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:51.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;mso-yfti-lastrow:yes;height:51.5pt;mso-height-rule:
  exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

</div>
<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:宋体;mso-fareast-theme-font:
minor-fareast;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<div style="page-break-after: always;"></div>

<div class=WordSection8>

<p class=MsoNormal style='margin-top:.4pt'><span lang=EN-US style='font-size:
3.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>

<table class=TableNormal border=0 cellspacing=0 cellpadding=0 style='margin-left:
 5.3pt;border-collapse:collapse;mso-table-layout-alt:fixed;mso-yfti-tbllook:
 480;mso-padding-alt:0cm 0cm 0cm 0cm'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:31.7pt;mso-height-rule:
  exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:31.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>板块</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:20.75pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>时间</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:5.4pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>活动项目内容</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:24.1pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>认证（签章</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>）<o:p></o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:11.35pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>积分</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border:solid black 1.0pt;
  border-left:none;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:31.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:5.95pt;margin-right:0cm;margin-bottom:
  0cm;margin-left:21.8pt;margin-bottom:.0001pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>备注</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:51.5pt;mso-height-rule:exactly'>
  <td width=89 rowspan=4 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:.35pt'><span lang=EN-US
  style='font-size:10.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>创新实践</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:51.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:51.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:52.5pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:52.5pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:52.5pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:45.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:45.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:45.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:45.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:45.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:45.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:4;height:48.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:48.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:5;height:43.0pt;mso-height-rule:exactly'>
  <td width=89 rowspan=8 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph><span lang=EN-US style='font-size:12.0pt;font-family:
  "Times New Roman",serif;mso-fareast-font-family:"Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:.4pt'><span lang=EN-US
  style='font-size:13.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:9.0pt;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt;text-indent:-12.0pt;line-height:
  15.6pt;mso-line-height-rule:exactly'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>文化体育</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'> <span
  class=SpellE>竞赛</span><o:p></o:p></span></p>
  </td>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:6;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:7;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:8;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:9;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:10;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:11;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:12;height:43.0pt;mso-height-rule:exactly'>
  <td width=88 valign=top style='width:66.0pt;border-top:none;border-left:none;
  border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;mso-border-top-alt:
  solid black .5pt;mso-border-left-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:43.0pt;mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=111 valign=top style='width:83.4pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=63 valign=top style='width:47.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=91 valign=top style='width:68.25pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:43.0pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:13;height:48.7pt;mso-height-rule:exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:48.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.5pt'><span lang=EN-US
  style='font-size:11.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:9.0pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>积分合计</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=199 colspan=2 valign=top style='width:149.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.5pt'><span lang=EN-US
  style='font-size:11.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:24.1pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>班级公示情况</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=154 colspan=2 valign=top style='width:115.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:14;height:48.7pt;mso-height-rule:exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:48.7pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.3pt'><span lang=EN-US
  style='font-size:13.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:15.0pt;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt;text-indent:-6.0pt;line-height:
  15.6pt;mso-line-height-rule:exactly'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>辅导员</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'> <span
  class=SpellE>意见</span><o:p></o:p></span></p>
  </td>
  <td width=199 colspan=2 valign=top style='width:149.4pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
  <td width=161 valign=top style='width:120.75pt;border-top:none;border-left:
  none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.5pt'><span lang=EN-US
  style='font-size:11.5pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-left:6.1pt'><span class=SpellE><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>二级分院团总支意见</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'><o:p></o:p></span></p>
  </td>
  <td width=154 colspan=2 valign=top style='width:115.5pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:48.7pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:15;mso-yfti-lastrow:yes;height:47.3pt;mso-height-rule:
  exactly'>
  <td width=89 valign=top style='width:66.6pt;border:solid black 1.0pt;
  border-top:none;mso-border-top-alt:solid black .5pt;mso-border-alt:solid black .5pt;
  padding:0cm 0cm 0cm 0cm;height:47.3pt;mso-height-rule:exactly'>
  <p class=TableParagraph style='margin-top:.35pt'><span lang=EN-US
  style='font-size:13.0pt;font-family:"Times New Roman",serif;mso-fareast-font-family:
  "Times New Roman"'><o:p>&nbsp;</o:p></span></p>
  <p class=TableParagraph style='margin-top:0cm;margin-right:15.0pt;margin-bottom:
  0cm;margin-left:21.0pt;margin-bottom:.0001pt;text-indent:-6.0pt;line-height:
  15.6pt;mso-line-height-rule:exactly'><span class=SpellE><span lang=EN-US
  style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'>院团委</span></span><span
  lang=EN-US style='font-size:12.0pt;font-family:宋体;mso-bidi-font-family:宋体'> <span
  class=SpellE>意见</span><o:p></o:p></span></p>
  </td>
  <td width=514 colspan=5 valign=top style='width:385.65pt;border-top:none;
  border-left:none;border-bottom:solid black 1.0pt;border-right:solid black 1.0pt;
  mso-border-top-alt:solid black .5pt;mso-border-left-alt:solid black .5pt;
  mso-border-alt:solid black .5pt;padding:0cm 0cm 0cm 0cm;height:47.3pt;
  mso-height-rule:exactly'>
  <p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal><span lang=EN-US><o:p>&nbsp;</o:p></span></p>

</div>
<span lang=EN-US style='font-size:11.0pt;font-family:"Calibri",sans-serif;
mso-ascii-theme-font:minor-latin;mso-fareast-font-family:宋体;mso-fareast-theme-font:
minor-fareast;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:"Times New Roman";
mso-bidi-theme-font:minor-bidi;mso-ansi-language:EN-US;mso-fareast-language:
EN-US;mso-bidi-language:AR-SA'><br clear=all style='page-break-before:always;
mso-break-type:section-break'>
</span>
<div style="page-break-after: always;"></div>
	</div>
</body>
<script type="text/javascript">
    function print_page() {
        if (!!window.ActiveXObject || "ActiveXObject" in window) { //是否ie
            remove_ie_header_and_footer();
        }
        window.print();
    }

    function remove_ie_header_and_footer() {
        var hkey_path;
        hkey_path = "HKEY_CURRENT_USER\\Software\\Microsoft\\Internet Explorer\\PageSetup\\";
        try {
            var RegWsh = new ActiveXObject("WScript.Shell");
            RegWsh.RegWrite(hkey_path + "header", "");
            RegWsh.RegWrite(hkey_path + "footer", "");
        } catch (e) {
        }
    }
</script>
</html>
