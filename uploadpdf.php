<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require 'vendor2/autoload.php';
$s3 = new Aws\S3\S3Client([
			'region'  => 'ap-south-1',
			'version' => 'latest',
			'credentials' => [
				'key'    => "AKIAUUP2XAQ4U6QIMF5P",
				'secret' => "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",
			]
		]);	
// ini_set('display_errors', '0');
// ini_set('display_startup_errors', '0');
// error_reporting(0);

// $allowed_file_types = ['image/jpeg','image/svg+xml','image/svg','image/jpg','image/webp', 'image/png'];
$allowed_size_mb = 5; 

// validate upload error
switch($_FILES['file']['error']) {
	// no error
	case UPLOAD_ERR_OK:
		break;

	// no file
	case UPLOAD_ERR_NO_FILE:
		exit('Error : No file send as attachment');

	// php.ini file size exceeded 
	case UPLOAD_ERR_INI_SIZE:
		exit('Error : File size exceeded as set in php.ini');

	// other upload error
	default:
        exit('Error : File upload failed');
}

// validate file type from file data
$finfo = finfo_open();
$file_type = finfo_buffer($finfo, file_get_contents($_FILES['file']['tmp_name']), FILEINFO_MIME_TYPE);


// validate file size
$file_size = $_FILES['file']['size'];
if($file_size > $allowed_size_mb*1024*1024)
	exit('Error : Exceeded size');

// safe unique name from file data
$file_unique_name = sha1_file($_FILES['file']['tmp_name']);
$file_extension = strtolower(pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION));
$file_name = $file_unique_name . '.pdf';
// . $file_extension;

$destination = 'uploads/' . $file_name;

// save file to destination
if(move_uploaded_file($_FILES['file']['tmp_name'], $destination) === TRUE){
// Maximum width and height

$result = $s3->putObject([
	'Bucket' => 'pharmabag03',
	'Key'    => $file_name,
	'SourceFile' => "uploads/".$file_name


]);

$s3->waitUntil('ObjectExists', array(
    'Bucket' => "pharmabag03",
    'Key'    => $file_name,
));
unlink("uploads/".$file_name);

$file_name=$result["ObjectURL"];



	echo $file_name;





}else{
	echo 0;
}
?>
