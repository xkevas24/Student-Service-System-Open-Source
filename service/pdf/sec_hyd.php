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
<title><?php echo $userdetail[1]."的第二课堂报告"; ?></title>
<meta charset="utf-8">
<meta name="ProgId" content="Word.Document">
<meta name="Generator" content="Microsoft Word 15">
<meta name="Originator" content="Microsoft Word 15">
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
	{font-family:等线;
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-alt:DengXian;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:-1610612033 953122042 22 0 262159 0;}
@font-face
	{font-family:"\@等线";
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:-1610612033 953122042 22 0 262159 0;}
@font-face
	{font-family:"\@宋体";
	panose-1:2 1 6 0 3 1 1 1 1 1;
	mso-font-charset:134;
	mso-generic-font-family:auto;
	mso-font-pitch:variable;
	mso-font-signature:3 680460288 22 0 262145 0;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-parent:"";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:justify;
	text-justify:inter-ideograph;
	mso-pagination:none;
	font-size:10.5pt;
	mso-bidi-font-size:11.0pt;
	font-family:等线;
	mso-ascii-font-family:等线;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:等线;
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:等线;
	mso-hansi-theme-font:minor-latin;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;
	mso-font-kerning:1.0pt;}
h1
	{mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-qformat:yes;
	mso-style-link:"标题 1 字符";
	mso-style-next:正文;
	margin-top:17.0pt;
	margin-right:0cm;
	margin-bottom:16.5pt;
	margin-left:0cm;
	text-align:justify;
	text-justify:inter-ideograph;
	line-height:240%;
	mso-pagination:lines-together;
	page-break-after:avoid;
	mso-outline-level:1;
	font-size:22.0pt;
	font-family:等线;
	mso-ascii-font-family:等线;
	mso-ascii-theme-font:minor-latin;
	mso-fareast-font-family:等线;
	mso-fareast-theme-font:minor-fareast;
	mso-hansi-font-family:等线;
	mso-hansi-theme-font:minor-latin;
	mso-font-kerning:22.0pt;}
span.1
	{mso-style-name:"标题 1 字符";
	mso-style-priority:9;
	mso-style-unhide:no;
	mso-style-locked:yes;
	mso-style-link:"标题 1";
	mso-ansi-font-size:22.0pt;
	mso-bidi-font-size:22.0pt;
	mso-font-kerning:22.0pt;
	font-weight:bold;}
.MsoChpDefault
	{mso-style-type:export-only;
	mso-default-props:yes;
	font-family:等线;
	mso-bidi-font-family:"Times New Roman";
	mso-bidi-theme-font:minor-bidi;}
 /* Page Definitions */
 @page
	{mso-page-border-surround-header:no;
	mso-page-border-surround-footer:no;}
@page WordSection1
	{size:595.3pt 841.9pt;
	margin:72.0pt 90.0pt 72.0pt 90.0pt;
	mso-header-margin:42.55pt;
	mso-footer-margin:49.6pt;
	mso-paper-source:0;
	layout-grid:15.6pt;}
div.WordSection1
	{page:WordSection1;}
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

<body lang="ZH-CN" style='tab-interval:21.0pt;text-justify-trim:punctuation'>
<button onclick='print_page()'>打印</button>
<div class="WordSection1" style='layout-grid:15.6pt'>
<div align="center">
<h1 align="center" style='text-align:center'>第二课堂数字积分验证单</h1>

<p class="MsoNormal"><b style='mso-bidi-font-weight:normal'><span
style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:宋体'>注意：本验证单系学生服务系统为了方便同学们进行线下认证而自动生成。同学们认证时携带本单，可以进行快速验证。第二课堂最终解释权归校团委所有，如实际与本单冲突，以校团委为准。<span
lang="EN-US"><o:p></o:p></span></span></b></p>
<br>
<hr>

<table class="MsoTableGrid" border="1" cellspacing="0" cellpadding="0" align="center"
 width="0" style='width:472.7pt;border-collapse:collapse;border:none;mso-border-alt:
 solid windowtext .5pt;mso-yfti-tbllook:1184;mso-table-lspace:9.0pt;margin-left:
 6.75pt;mso-table-rspace:9.0pt;margin-right:6.75pt;mso-table-anchor-vertical:
 paragraph;mso-table-anchor-horizontal:margin;mso-table-left:left;mso-table-top:
 10.25pt;mso-padding-alt:0cm 5.4pt 0cm 5.4pt'>
 <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;height:36.6pt'>
  <td width="105" valign="top" style='width:78.75pt;border:solid windowtext 1.0pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.6pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  宋体'><nobr>姓名</nobr><span lang="EN-US">
    <o:p></o:p></span></span></b></p>
  </td>
  <td width="159" valign="top" style='width:119.45pt;border:solid windowtext 1.0pt;
  border-left:none;mso-border-left-alt:solid windowtext .5pt;mso-border-alt:
  solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.6pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo $userdetail[1]; ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="156" colspan="2" rowspan="4" valign="top" style='width:116.9pt;border:
  solid windowtext 1.0pt;border-left:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.6pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><img src="../app/xj_time.php?poststuno=<?php echo $stuno; ?>" width="180px"><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p></o:p></span></b></p>
  </td>
  <td width="210" colspan="2" rowspan="4" valign="top" style='width:157.6pt;border:
  solid windowtext 1.0pt;border-left:none;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.6pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'>&nbsp;</p>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><img src="../app/qrcode.php?var=000026&actcode=<?php echo $userdetail[2]; ?>" width="200px"></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:1;height:36.6pt'>
  <td width="105" valign="top" style='width:78.75pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:36.6pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  宋体'><nobr>学号</nobr><span lang="EN-US"><o:p></o:p></span></span></b></p>
  </td>
  <td width="159" valign="top" style='width:119.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.6pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo $userdetail[2]; ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:2;height:34.85pt'>
  <td width="105" valign="top" style='width:78.75pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
	  宋体'><nobr>核验单号</nobr><span lang="EN-US"><o:p></o:p></span></span></b></p>
  </td>
  <td width="159" valign="top" style='width:119.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo time(); ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
 <tr style='mso-yfti-irow:3;height:36.6pt'>
  <td width="105" valign="top" style='width:78.75pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:36.6pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  宋体'><nobr>出单日期</nobr><span lang="EN-US"><o:p></o:p></span></span></b></p>
  </td>
  <td width="159" valign="top" style='width:119.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:36.6pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo date("Y年m月d日"); ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p></o:p></span></b></p></td>
 </tr>
 <tr style='mso-yfti-irow:4;height:34.85pt'>
  <td width="105" valign="top" style='width:78.75pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  宋体'><nobr>举办时间</nobr><span lang="EN-US"><o:p></o:p></span></span></b></p>
  </td>
  <td width="159" valign="top" style='width:119.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  宋体'><nobr>活动名称</nobr><span lang="EN-US"><o:p></o:p></span></span></b></p>
  </td>
  <td width="51" valign="top" style='width:38.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  宋体'><nobr>分值</nobr><span lang="EN-US"><o:p></o:p></span></span></b></p>
  </td>
  <td width="105" valign="top" style='width:78.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  宋体'><nobr>举办单位</nobr><span lang="EN-US"><o:p></o:p></span></span></b></p>
  </td>
  <td width="105" valign="top" style='width:78.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  宋体'><nobr>所属板块</nobr><span lang="EN-US"><o:p></o:p></span></span></b></p>
  </td>
  <td width="105" valign="top" style='width:78.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><span style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:
  宋体'><nobr>类别备注</nobr><span lang="EN-US"><o:p></o:p></span></span></b></p>
  </td>
 </tr>
 <?php
				  $yx_eid=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"))[0];
					$yx_eid=explode("@",$yx_eid);
					/*$jifen_sql="select sum(value) from stu_erkejifen where sn='$userdetail[2]' and(eid='".implode("' or eid='",$yx_eid)."') group by eid;";
					$erke_jf=mysqli_fetch_row(mysqli_query($con,$jifen_sql))[0];*/
				  ?>
				  <?php
								$yx_eid=mysqli_fetch_row(mysqli_query($con,"select eids from stu_erkeyx where id='1';"))[0];
								$yx_eid=explode("@",$yx_eid);
								$list_sql="select * from stu_erkejifen where sn='$userdetail[2]' and(eid='".implode("' or eid='",$yx_eid)."') group by eid;";
								  //echo $list_sql;
								$list_result=mysqli_query($con,$list_sql);
								 while($list=mysqli_fetch_row($list_result)){
									 $eid=$list[1];
								$erke_info=mysqli_fetch_row(mysqli_query($con,"select * from stu_erkeku where eid='$eid';"));
							?>
 <tr style='mso-yfti-irow:5;height:34.85pt'>
  <td width="105" valign="top" style='width:78.75pt;border:solid windowtext 1.0pt;
  border-top:none;mso-border-top-alt:solid windowtext .5pt;mso-border-alt:solid windowtext .5pt;
  padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo $erke_info[2]; ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="159" valign="top" style='width:119.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo $erke_info[1]; ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="51" valign="top" style='width:38.1pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo $erke_info[4]; ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="105" valign="top" style='width:78.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo $erke_info[3]; ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="105" valign="top" style='width:78.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo $erke_info[5]; ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  </td>
  <td width="105" valign="top" style='width:78.8pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  mso-border-top-alt:solid windowtext .5pt;mso-border-left-alt:solid windowtext .5pt;
  mso-border-alt:solid windowtext .5pt;padding:0cm 5.4pt 0cm 5.4pt;height:34.85pt'>
  <p class="MsoNormal" style='mso-element:frame;mso-element-frame-hspace:9.0pt;
  mso-element-wrap:around;mso-element-anchor-vertical:paragraph;mso-element-anchor-horizontal:
  margin;mso-element-top:10.25pt;mso-height-rule:exactly'><b style='mso-bidi-font-weight:
  normal'><nobr><?php echo $erke_info[6]; ?></nobr><span lang="EN-US" style='font-size:12.0pt;mso-bidi-font-size:11.0pt;
  font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>
  </td>
 </tr>
<?php } ?>
</table>

<hr>
<div align="right">
	<p>学院学生服务系统监制</p>
	<p>校团委拥有最终解释权</p>
	<img src="../logo_big.png" width="250px">
	<p><?php echo date("Y年m月d日"); ?></p>
</div>

</div>
<p class="MsoNormal"><b style='mso-bidi-font-weight:normal'><span lang="EN-US"
style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>

<p class="MsoNormal"><b style='mso-bidi-font-weight:normal'><span lang="EN-US"
style='font-size:12.0pt;mso-bidi-font-size:11.0pt;font-family:宋体'><o:p>&nbsp;</o:p></span></b></p>

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
