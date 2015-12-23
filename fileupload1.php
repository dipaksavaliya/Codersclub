<?php

  if ($_FILES["file1"]["error"] > 0)
    {
        "Return Code: " . $_FILES["file1"]["error"] . "<br />";
    }
  else
    {
                "Upload: " . $_FILES["file1"]["name"] . "<br />";
                "Type: " . $_FILES["file1"]["type"] . "<br />";
                "Size: " . ($_FILES["file1"]["size"] / 1024) . " Kb<br />";
                "Temp file: " . $_FILES["file1"]["tmp_name"] . "<br />";   
    
                 if (file_exists("c:/upload1/" . $_FILES["file1"]["name"]))
                  {
                  $_FILES["file"]["name"] . " already exists. ";
                  }
                else
                  {
                      move_uploaded_file($_FILES["file1"]["tmp_name"],"c:/upload1/" . $_FILES["file1"]["name"]);
                      "Stored in: "."c:/upload1/" .$_FILES["file1"]["name"];
                  }
    }


?>