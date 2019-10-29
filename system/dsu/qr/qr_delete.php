<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>活动开启/关闭</title>
</head>
<body>

	<script>
		function GetRequest() {   
   var url = location.search; //获取url中"?"符后的字串   
   var theRequest = new Object();   
   if (url.indexOf("?") != -1) {   
      var str = url.substr(1);   
      strs = str.split("&");   
      for(var i = 0; i < strs.length; i ++) {   
         theRequest[strs[i].split("=")[0]]=unescape(strs[i].split("=")[1]);   
      }   
   }   
   return theRequest;   
}
		var Request = new Object();
		Request = GetRequest();
		var actcode;
    	actcode = Request["actcode"];
		var r=confirm('警告！该操作不可逆，是否继续？');
		if(r==false)
		{
			alert('操作已取消');			
			history.go(-1);
		}else
		{
			window.location.href ="do_delete.php?actcode="+actcode;			
		}


	</script>
	

</body>
</html>