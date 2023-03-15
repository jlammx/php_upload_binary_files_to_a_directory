# PHP | Upload binary files to a directory

This repository is an example of upload binary files to a specified directory via PHP's HTTP POST upload mechanism.

- method=’post’ and enctype=’multipart/form-data’
- [$_FILES](https://www.php.net/manual/en/reserved.variables.files.php)
- HTTP POST method
- [is_uploaded_file()](https://www.php.net/manual/en/function.is-uploaded-file.php)
- [move_uploaded_file()](https://www.php.net/manual/en/function.move-uploaded-file.php)


### What is a binary file?
A binary file is a file whose content is in a binary format consisting of a series of sequential bytes, each of which is eight bits in length. The content must be interpreted by a program or a hardware processor that understands in advance exactly how that content is formatted and how to read the data. Binary files include a wide range of file types, including executables, libraries, graphics, databases, archives and many others.


### Summary
A binary file is a file that contains information in binary code, which means it is in a format that is not easily readable by humans. This type of file may be more efficient in terms of file size, as it does not need to be encoded or decoded for transfer and storage. However, binary files can be more difficult to handle and read for users, and some web browsers may not support viewing or downloading certain types of binary files or well the channel does not allow binary data for transmission.

Overall, the best way to send a file over the web will depend on the file type, the purpose of the transfer, and user preferences. If data transfer efficiency is a priority, you may want to send a binary file. If readability and ease of use are more important, you may want to send an encoded file. In any case, it is important to ensure file transfer is secure and complies with applicable privacy and security policies and requirements. - Chat GPT


### Create HTML form

The form should contain the attributes as **method=’post’** and **enctype=’multipart/form-data’** to support file upload. It helps to bundle the form data and the binary data to post it to the **server-side** PHP file.

```html
<form action="" enctype="multipart/form-data" method="POST" name="frm">
    <input type="file" name="myfile" /> 
    <input type="submit" name="submit" value="Upload"/>
</form>
```


### PHP file upload code

Check that the **$_FILES** array is an array and not is empty.

The **is_uploaded_file()** function will check if the uploaded file is posted via the **HTTP POST method** to protect the file data. 

PHP provides built-in function **move_uploaded_file()** for uploading files to a directory. This function requires two parameters, those are the source file and the destination for the moved file.

```php
<?php
    $targetDir = "uploads";
    // Check if it is an array and if it has data
    if(is_array($_FILES) && !empty($_FILES["myfile"]["name"])) {
        // Validates that the uploaded file is not empty and is posted via the HTTP_POST method
        if(is_uploaded_file($_FILES['myfile']['tmp_name'])) {
            // Specifies the source and destination file path to move the source file to the target as specified
            if(move_uploaded_file($_FILES['myfile']['tmp_name'],"$targetDir/".$_FILES['myfile']['name'])) {
                echo "File uploaded successfully!";
                // Show a preview of image uploaded
		$newDir = "$targetDir/".$_FILES['myfile']['name'];
                echo '<img src="'.$newDir.'">';
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Please select a file to upload.";
    }
?>
```


### Screenshots

> 🔴 Live 
<p align="left">
	<a href=https://youtu.be/WNumGEPRsBI target="_blank"><img src="https://markdown-videos.deta.dev/youtube/WNumGEPRsBI" height="250"></a></img>
</p>


### Skills
<p align="left">
	<a href="https://dart.dev" target="_blank">
		<img src="https://raw.githubusercontent.com/devicons/devicon/master/icons/php/php-original.svg" alt="PHP" width="40" height="40"/>
	</a> 
</p>

<br/>

<p align="center">
	<div align="center" inline>
		<span> <a href="https://www.linkedin.com/in/jlammx/" target="_blank">
			<img src="https://content.linkedin.com/content/dam/me/business/en-us/amp/brand-site/v2/bg/LI-Logo.svg.original.svg" alt="Jorge Aguirre" height="25"/></a>
		</span>
		&nbsp;&nbsp;&nbsp;&nbsp;
	</div>
</p>

<p align="center"> Last updated at 14 Mar 2023</p>
