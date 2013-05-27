<?php
   // Configuration - Your Options
      $allowed_filetypes = array('.JPG','.jpg','.png','.PNG','.pdf','.PDF',);//Add any file extension you want to upload. 
      $max_filesize = 1073741824; //BYTES (currently 1 GB) Change php.ini file to get max.
$upload_path = 'files/'; // The place the files will be uploaded to(This folder must be created before execution).
 
   $filename = $_FILES['userfile']['name']; // Get the name of the file (including file extension).
   $ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
 
   // Check if the filetype is allowed, if not DIE and inform the user.
   if(!in_array($ext,$allowed_filetypes))
      die('The file you attempted to upload is not allowed.');
 
   // Now check the filesize, if it is too large then DIE and inform the user.
   if(filesize($_FILES['userfile']['tmp_name']) > $max_filesize)
      die('The file you attempted to upload is too large.');
 
   // Check if we can upload to the specified path, if not DIE and inform the user.
   if(!is_writable($upload_path))
      die('You cannot upload to the specified directory.');
  
   // Upload the file to your specified path.
   if(move_uploaded_file($_FILES['userfile']['tmp_name'],$upload_path . $filename))
           echo '<CENTER>

<tr>
<td>
<center><font color="000">Your file was successfully uploaded.</font></br></br>
</center>
 &nbsp;
 <br>
 <center><form action="upfile.php" method="post" enctype="multipart/form-data">
   <p>
      <label for="file">Select a file:</label> <input type="file" name="userfile" id="file"> &nbsp;
      <button>Upload File</button>
   <p>
           </form></center>
 
</td>
</tr>
</CENTER>
      
'; // It worked.
      else
         echo 'There was an error during the file upload.  Please try again.'; // It failed :(.
 
?>
