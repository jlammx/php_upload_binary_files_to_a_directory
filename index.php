<?php
    $targetDir = "uploads";
    // Check if it is an array and if it has data
    if(is_array($_FILES) && !empty($_FILES["myfile"]["name"])) {
        // Validates that the uploaded file is not empty and is posted via the HTTP_POST method
        if(is_uploaded_file($_FILES['myfile']['tmp_name'])) {
            // Specifies the source and destination file path to move the source file to the target as specified
            if(move_uploaded_file($_FILES['myfile']['tmp_name'],"$targetDir/".$_FILES['myfile']['name'])) {
                echo "File uploaded successfully!";
                $newDir = "$targetDir/".$_FILES['myfile']['name'];
                // Show a preview of image uploaded
                echo '<img src="'.$newDir.'">';
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Please select a file to upload.";
    }
?>

<form action="" enctype="multipart/form-data" method="POST" name="frm_user_file">
    <input type="file" name="myfile" /> 
    <input type="submit" name="submit" value="Upload" />
</form>