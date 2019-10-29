<?php if($gift_check[0]<>""){ 
	$gift_sql_x = "update stu_gift_record set ifchecked='0' where sn='$sn';";
	$gift_check_x = mysqli_query($con,$gift_sql_x);
	?>
	
	<audio id="musicAudio" autoplay>
<source src="mp3/gift_notice.mp3" type="audio/mpeg">
</audio>
	<script>alert("有朋友向你赠送了礼物，请到“钱包和卡券”中查收！");</script>
<?php } ?>
