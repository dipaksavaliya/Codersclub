<?php

  if ($_FILES["file"]["error"] > 0)
    {
        "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
                "Upload: " . $_FILES["file"]["name"] . "<br />";
                "Type: " . $_FILES["file"]["type"] . "<br />";
                "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
                "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";   
    
                 if (file_exists("c:/upload/" . $_FILES["file"]["name"]))
                  {
                  $_FILES["file"]["name"] . " already exists. ";
                  }
                else
                  {
                      move_uploaded_file($_FILES["file"]["tmp_name"],"c:/upload/" . $_FILES["file"]["name"]);
                      "Stored in: "."c:/upload/" .$_FILES["file"]["name"];
                  }
    }


?>