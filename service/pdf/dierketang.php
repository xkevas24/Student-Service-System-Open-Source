<?php
require("../app/core_auth.php");
?>
<!DOCTYPE>
<html>
  <head>
    <title>
      我的第二课堂成绩单
    </title>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style type="text/css">
      body {
        margin: 0;
        padding: 0;
        background-color: white;
      }
      header, section {
          overflow: hidden;
      }
      ul {
        margin: 0;
        border: 0;
        padding: 0;
      }
      li {
        display: block; /* i.e., suppress marker */
        color: black;
        height: 4em;
        width: 25%;
        margin: 0;
        float: left;
        background-color: green;
        text-align: center;
        line-height: 4em;
      }
      
      aside {
        width: 20%;
        float: left;
        text-align: center;
      }

      aside a {
        display: block;
        height: 4em;
        color: blue;
      }

      article {
        padding: 2em 0;
        width: 80%;
        float: left;
      }
    </style>
  </head>
  <body>
   <div>
   	<p>学生服务系统第二课堂成绩报告</p><button id="renderPdf">下载pdf</button>
   </div>
   <hr>
    <div align="center">
    	
    	
    </div>
    </section>
    <script type="text/javascript" src="./js/html2canvas.js"></script>
    <script type="text/javascript" src="./js/jsPdf.debug.js"></script>
    <script type="text/javascript">

      var downPdf = document.getElementById("renderPdf");

      downPdf.onclick = function() {
          html2canvas(document.body, {
              onrendered:function(canvas) {

                  var contentWidth = canvas.width;
                  var contentHeight = canvas.height;

                  //一页pdf显示html页面生成的canvas高度;
                  var pageHeight = contentWidth / 595.28 * 841.89;
                  //未生成pdf的html页面高度
                  var leftHeight = contentHeight;
                  //pdf页面偏移
                  var position = 0;
                  //a4纸的尺寸[595.28,841.89]，html页面生成的canvas在pdf中图片的宽高
                  var imgWidth = 555.28;
                  var imgHeight = 555.28/contentWidth * contentHeight;

                  var pageData = canvas.toDataURL('image/jpeg', 1.0);

                  var pdf = new jsPDF('', 'pt', 'a4');
                  //有两个高度需要区分，一个是html页面的实际高度，和生成pdf的页面高度(841.89)
                  //当内容未超过pdf一页显示的范围，无需分页
                  if (leftHeight < pageHeight) {
                      pdf.addImage(pageData, 'JPEG', 20, 0, imgWidth, imgHeight );
                  } else {
                      while(leftHeight > 0) {
                          pdf.addImage(pageData, 'JPEG', 20, position, imgWidth, imgHeight)
                          leftHeight -= pageHeight;
                          position -= 841.89;
                          //避免添加空白页
                          if(leftHeight > 0) {
                              pdf.addPage();
                          }
                      }
                  }

                  pdf.save('我的成绩单.pdf');
              }
          })
      }
    </script>
  </body>
</html>