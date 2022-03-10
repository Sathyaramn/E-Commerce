
// Get Image Dimension
/*$fileinfo = @getimagesize($_FILES["file-input"]["tmp_name"]);
$width = $fileinfo[0];
$height = $fileinfo[1];*/
    $allowed_image_extension = array(
        "png",
        "jpg",
        "jpeg"
    );

    // Get image file extension
    $file_extension = pathinfo($_FILES["image1"]["name"], PATHINFO_EXTENSION);

    // Validate file input to check if is not empty
    if (! file_exists($_FILES["file-input"]["tmp_name"])) {
         $image1ExistErr="Image 1 can't be empty";
    }    // Validate file input to check if is with valid extension
    else if (! in_array($file_extension, $allowed_image_extension)) {
        $image1ExtensionErr="Upload valid images. Only PNG,JPG and JPEG are allowed.";

    }    // Validate image file size
    else if (($_FILES["image1"]["size"] > 5000000)) {
            $image1SizeErr="Image size exceeds 5MB";

    }
    /*else if ($width > "300" || $height > "200") {
        $response = array(
            "type" => "error",
            "message" => "Image dimension should be within 300X200"
        );
    } */else {
        $target = "image/" . basename($_FILES["image1"]["name"]);
        if (move_uploaded_file($_FILES["image1"]["tmp_name"], $target)) {
            $response = array(
                "type" => "success",
                "message" => "Image uploaded successfully."
            );
        }
    }
