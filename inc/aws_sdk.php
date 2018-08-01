<?php
  // Original by Keith Weaver. Modified by Minhyeong Joe

  // Set Up S3 Bucket (MAKE PUBLIC)
  //
  // 1. Enable Static Website Hosting to retrieve files from the bucket (access the image files in the bucket)
  // 2. Bucket Permission Policy
  // 3. CORS Policy


	// This file demonstrates file upload to an S3 bucket. This is for using file upload via a
	// file compared to just having the link. If you are doing it via link, refer to this:
	// https://gist.github.com/keithweaver/08c1ab13b0cc47d0b8528f4bc318b49a
	//
	// You must setup your bucket to have the proper permissions. To learn how to do this
	// refer to:
	// https://github.com/keithweaver/python-aws-s3
	// https://www.youtube.com/watch?v=v33Kl-Kx30o

	// I will be using composer to install the needed AWS packages.
	// The PHP SDK:
	// https://github.com/aws/aws-sdk-php
	// https://packagist.org/packages/aws/aws-sdk-php
	//
	// Install aws-sdk-php by running following command in the project root
	// Run:$ composer require aws/aws-sdk-php
	require_once('KEY.php');
	require_once ('../vendor/autoload.php');

	use Aws\S3\S3Client;
	use Aws\S3\Exception\S3Exception;
	
	// Connect to AWS
	try {
		// You may need to change the region. It will say in the URL when the bucket is open
		// and on creation.
		$s3 = S3Client::factory(
			array(
				'credentials' => array(
					'key' => $IAM_KEY,
					'secret' => $IAM_SECRET
				),
				'version' => 'latest',
				'region'  => 'us-west-1',
			)
		);
	} catch (Exception $e) {
		// We use a die, so if this fails. It stops here. Typically this is a REST call so this would
		// return a json object.
		die("Error: " . $e->getMessage());
	}

  // Parameter Explanation
  // $file = $_FILES['file']['tmp_name']; (the actual file)
  // $keyName = PATH_IN_BUCKET/$_FILES['file']['name']; (the path and name the file will be saved as)
  function s3_upload($file, $keyName) {
    global $bucketName, $s3;
    // $keyName = 'user/' . basename($_FILES["file"]['name']);
  	$pathInS3 = 'https://s3.us-west-1.amazonaws.com/' . $bucketName . '/' . $keyName;
  	// Add it to S3
  	try {
  		// Uploaded:
  		// $file = $_FILES["file"]['tmp_name'];
  		$s3->putObject(
  			array(
  				'Bucket'=>$bucketName,
  				'Key' =>  $keyName,
  				'SourceFile' => $file,
  				'StorageClass' => 'REDUCED_REDUNDANCY'
  			)
  		);
  	} catch (S3Exception $e) {
  		die('Error:' . $e->getMessage());
  	} catch (Exception $e) {
  		die('Error:' . $e->getMessage());
  	}
  }

  // $keyName = PATH_IN_BUCKET/$Name_of_file_to_be_removed; (the path and name the file is saved at)
  function s3_delete($keyName) {
    global $bucketName, $s3;

    $s3->deleteObject([
      'Bucket' => $bucketName,
      'Key'    => $keyName,
    ]);
  }

	// Now that you have it working, I recommend adding some checks on the files.
	// Example: Max size, allowed file types, etc.
?>
