<!doctype html>
<html>
<?php
	include("he_a.php");
	$org=$_SESSION["orgname"];
	$iden=$_SESSION["iden"];
	$dep=$_SESSION["dep"];
	$suauth=$_SESSION["suauth"];
	$active=8;
	$article_id=$_GET["id"];
	$article_row=mysqli_fetch_row(mysqli_query($con,"select * from stu_article where id='$article_id' and org='$org';"));
?>
<head>
<meta charset="utf-8">
<title>文章编辑-<?php echo $org; ?>-学生服务系统</title>

	<!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
	
 <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
	
	<link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
	
	 <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

<link rel="stylesheet" href="edit/assets/design/css/trumbowyg.css">
<script src="edit/assets/jquery.min.js"></script>
<script src="edit/assets/trumbowyg.js"></script>
<script src="edit/assets/plugins/base64/trumbowyg.base64.js"></script>
	
	<script src="JS/jquerynav.js"></script>
  <script type="text/javascript" src="convertImgBase64/webuploader.custom.min.js"></script>
  <script type="text/javascript" src="convertImgBase64/FeilChooseOfBase64.js"></script>

</head>

<body class="theme-red">
<?php include("header.php"); ?>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    活动推文编辑器
                </h2>
            </div>
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
						<div class="header">
                            <h2>
                                编辑文章
                            </h2>
                        </div>
					<form method="post" action="controller/activity_re_pub.php?id=<?php echo $article_id; ?>">
<div class="body">
<div class="col-md-12">
<div class="form-group">
  <div class="form-line">
  <input name="title" type="text" class="form-control" value="<?php echo $article_row[1]; ?>" placeholder="文章标题" required />
 </div>
 </div>
</div>
<div class="col-md-12">
<div class="row clearfix">
<div class="col-md-6">
<div><h3>上传文章封面缩略图</h3></div>
 <input accept="image/*" name="upimage" id="upload_file" type="file" class="btn bg-grey waves-effect">		
</div>
<div class="col-md-4">
<image src="<?php echo $article_row[3]; ?>" id="show_image" class="img-polaroid"/>
	<textarea id="base64_output" name="picsrc"  placeholder="这里输出base64码" class="form-control invisible" rows="5"><?php echo $article_row[3]; ?></textarea>
</div>
</div>	
</div>
<div id="odiv" style="display:none;position:absolute;z-index:100;">
    <img src="edit/assets/pic/sx.png" title="缩小" border="0" alt="缩小" onclick="sub(-1);"/>
    <img src="edit/assets/pic/fd.png" title="放大" border="0" alt="放大" onclick="sub(1)"/>
    <img src="edit/assets/pic/cz.png" title="重置" border="0" alt="重置" onclick="sub(0)"/>
    <img src="edit/assets/pic/sc.png" title="删除" border="0" alt="删除" onclick="del();odiv.style.display='none';"/>
</div>
<div onmousedown="show_element(event)" style="clear:both" id="customized-buttonpane" class="editor"><?php echo $article_row[4]; ?></div>

<div id="show" style="display: none"></div>
<button id="box" type="submit" class="btn btn-success waves-effect">更新</button>
						</div>

</form>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

<!-- Jquery Core Js -->


    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>
	    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- TinyMCE -->
    <!--<script src="plugins/tinymce/tinymce.js"></script>-->

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <!--<script src="js/pages/forms/editors.js"></script>-->

    <!-- Demo Js -->
    <script src="js/demo.js"></script>


<script type="text/javascript">
window.onload = function(){
// 抓取元素
var editor = document.getElementById("customized-buttonpane");
var box = document.getElementById("box");
// 给他绑定单击事件
box.onclick = function(){
// 获取元素内的所有内容
var con= editor.innerHTML;

var para=document.createElement("textarea");
var node=document.createTextNode(con);
para.setAttribute("name", "content");
para.appendChild(node);

var element=document.getElementById("show");
element.appendChild(para);
}
}
</script>
	
<script type="text/javascript">

//写法打包
function $_(id) {
    var idHead=id.substr(0,1);
    var idRoot=id.substr(1,id.length);
    if(idHead.indexOf("#")>-1) return document.getElementById(idRoot);
    else if(idHead.indexOf("@")>-1) return document.getElementsByName(idRoot);
    else if(idHead.indexOf(".")>-1) return document.getElementsByClassName(idRoot);
    else  return document.getElementById(id);
}


$(document).ready(function() {
	$('#nav').onePageNav();
});

//js自带base64自带加解密（不可用中文）
//alert(window.atob("dGVzdA=="));
 
   //1.加密解密方法使用：
//1.加密  
// var str = "这是中文编码";  
// var base = new Base64();  
// var result = base.encode(str);  


// //2.解密  
// var str2="MjAxNzAxMTdfMjk2NTI=";
// var result2 = base.decode(str2);  


// document.write("加密："+result);  
// document.write("<br\>解密："+result2);  


function jiami(){
    var base = new Base64();  
    var txt_input=$_("txt_input").value;
    $_("txt_output").value=base.encode(txt_input);
    
}

function jiemi(){
    var base = new Base64();  
    var txt_input=$_("txt_input").value;
    $_("txt_output").value=base.decode(txt_input);
}

function URLchange(){ 
    var txt_input=$_("txt_input").value;
    $_("txt_output").value=StrToHex(txt_input);
}

function ChangeURL(){ 
    var txt_input=$_("txt_input").value;
    $_("txt_output").value=escape(txt_input);
}


function tounicode()
{
   var txt_input=$_("txt_input").value;
   var data=txt_input;
   var str =''; 
   if(data == '') str='请输入汉字';
   for(var i=0;i<data.length;i++)
   {
      str+="\\u"+parseInt(data[i].charCodeAt(0),10).toString(16);
   }
   $_("txt_output").value=str;
}
function tohanzi(data)
{
    var flag="\\u";
    var txt_input=$_("txt_input").value;
    var data=txt_input;
    if(data.indexOf("\\u")==-1) flag="%";
    var str ='';
    if(data == '') str='请输入十六进制unicode';
    data = data.split(flag);
    for(var i=0;i<data.length;i++)
    {
        str+=String.fromCharCode(parseInt(data[i],16).toString(10));
    }
    $_("txt_output").value=str;
}

//本地图片转base64
$_("upload_file").onchange = function () {
                gen_base64();
            };
 $_("upload_file2").onchange = function () {
                gen_base64_2();
            };           
function gen_base64() {
                var file = $_('upload_file').files[0];
                r = new FileReader();  //本地预览
                r.onload = function(){
                    $_('base64_output').value = r.result;
                    $_('show_image').src=r.result;
                    $_('show_image').style="width:150px;";
                }
                r.readAsDataURL(file);    //Base64
            }
function gen_base64_2() {
                var file = $_('upload_file2').files[0];
                r = new FileReader();  //本地预览
                r.onload = function(){
                    $_('base64_output_2').value = r.result;
                    $_('show_image_2').src=r.result;
                    $_('show_image_2').style="width:150px;";
                }
                r.readAsDataURL(file);    //Base64
            }

//网络图片链接转base64
//urlstr="http://f10.baidu.com/it/u=1981748892,3031683197&fm=72"
$_("image_Net_Url").onblur=function (){
    convertImgToBase64($_("image_Net_Url").value, function(base64Img){
    // Base64DataURL
    $_('show_image').src=base64Img;
    $_('base64_output').value=base64Img;
  });
}


//-------------------------------------------------------------------------------------
//加密、解密算法封装
//-------------------------------------------------------------------------------------

function StrToHex(str){
    var head="";
    if(str.indexOf("https://")>-1) {
        str=str.replace("https://","");
        head="https://";
    }
    if(str.indexOf("http://")>-1) {
        str=str.replace("http://","");
        head="http://";
    }
    if(str.charAt(str.length - 1)=="/")
     str=str.substr(0,str.length - 1);
　　　　var val="";
　　　　for(var i = 0; i < str.length; i++){
　　　　　　if(val == "")
　　　　　　　　val = str.charCodeAt(i).toString(16);
　　　　　　else
　　　　　　　　val += "%" + str.charCodeAt(i).toString(16);
　　　　 }
    if(val!="") val="%"+val;
　　　　return head+val;
　　}

   
function Base64() {  
   
    // private property  
    _keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";  
   
    // public method for encoding  
    this.encode = function (input) {  
        var output = "";  
        var chr1, chr2, chr3, enc1, enc2, enc3, enc4;  
        var i = 0;  
        input = _utf8_encode(input);  
        while (i < input.length) {  
            chr1 = input.charCodeAt(i++);  
            chr2 = input.charCodeAt(i++);  
            chr3 = input.charCodeAt(i++);  
            enc1 = chr1 >> 2;  
            enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);  
            enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);  
            enc4 = chr3 & 63;  
            if (isNaN(chr2)) {  
                enc3 = enc4 = 64;  
            } else if (isNaN(chr3)) {  
                enc4 = 64;  
            }  
            output = output +  
            _keyStr.charAt(enc1) + _keyStr.charAt(enc2) +  
            _keyStr.charAt(enc3) + _keyStr.charAt(enc4);  
        }  
        return output;  
    }  
   
    // public method for decoding  
    this.decode = function (input) {  
        var output = "";  
        var chr1, chr2, chr3;  
        var enc1, enc2, enc3, enc4;  
        var i = 0;  
        input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");  
        while (i < input.length) {  
            enc1 = _keyStr.indexOf(input.charAt(i++));  
            enc2 = _keyStr.indexOf(input.charAt(i++));  
            enc3 = _keyStr.indexOf(input.charAt(i++));  
            enc4 = _keyStr.indexOf(input.charAt(i++));  
            chr1 = (enc1 << 2) | (enc2 >> 4);  
            chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);  
            chr3 = ((enc3 & 3) << 6) | enc4;  
            output = output + String.fromCharCode(chr1);  
            if (enc3 != 64) {  
                output = output + String.fromCharCode(chr2);  
            }  
            if (enc4 != 64) {  
                output = output + String.fromCharCode(chr3);  
            }  
        }  
        output = _utf8_decode(output);  
        return output;  
    }  
   
    // private method for UTF-8 encoding  
    _utf8_encode = function (string) {  
        string = string.replace(/\r\n/g,"\n");  
        var utftext = "";  
        for (var n = 0; n < string.length; n++) {  
            var c = string.charCodeAt(n);  
            if (c < 128) {  
                utftext += String.fromCharCode(c);  
            } else if((c > 127) && (c < 2048)) {  
                utftext += String.fromCharCode((c >> 6) | 192);  
                utftext += String.fromCharCode((c & 63) | 128);  
            } else {  
                utftext += String.fromCharCode((c >> 12) | 224);  
                utftext += String.fromCharCode(((c >> 6) & 63) | 128);  
                utftext += String.fromCharCode((c & 63) | 128);  
            }  
   
        }  
        return utftext;  
    }  
   
    // private method for UTF-8 decoding  
    _utf8_decode = function (utftext) {  
        var string = "";  
        var i = 0;  
        var c = c1 = c2 = 0;  
        while ( i < utftext.length ) {  
            c = utftext.charCodeAt(i);  
            if (c < 128) {  
                string += String.fromCharCode(c);  
                i++;  
            } else if((c > 191) && (c < 224)) {  
                c2 = utftext.charCodeAt(i+1);  
                string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));  
                i += 2;  
            } else {  
                c2 = utftext.charCodeAt(i+1);  
                c3 = utftext.charCodeAt(i+2);  
                string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));  
                i += 3;  
            }  
        }  
        return string;  
    }  
}


//imageTobase64
//图片转base64
function convertImgToBase64(url, callback, outputFormat){
    var canvas = document.createElement('CANVAS'),
      ctx = canvas.getContext('2d'),
      img = new Image;
    img.crossOrigin = 'Anonymous';
    img.onload = function(){
      canvas.height = img.height;
      canvas.width = img.width;
      ctx.drawImage(img,0,0);
      var dataURL = canvas.toDataURL(outputFormat || 'image/png');
      callback.call(this, dataURL);
      canvas = null; 
    };
    img.src = url;
}
  

//-------------------------------------------------------------------------------------
//加密算法封装结束
//-------------------------------------------------------------------------------------
    </script>
</body>
<?php mysqli_close($con); ?>
</html>