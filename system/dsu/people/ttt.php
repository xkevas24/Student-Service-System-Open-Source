<?php
//$file=$_FILES["file"];
if ($_FILES["file"]["error"] > 0)
  {
  echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }
else
  {
//保存文件

  if ($_FILES["file"]["error"] > 0)
    {

    }
  else
    {


    if (file_exists("upload/" . $_FILES["file"]["name"]))
      {

      }
    else
      {
		$time=time();
		$ext=strrchr($_FILES["file"]["name"], '.');
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $time.$ext);

      }
    }
  }



?>