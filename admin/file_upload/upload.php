<?php
$target_dir = 'uploads/'; //directory for saving uploaded file
$target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
if (isset($_POST['submit'])) {
    print_r($_FILES['fileToUpload']['tmp_name']);
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
        echo 'The file '.basename($_FILES['fileToUpload']['name']).' has been uploaded.';
    } else {
        echo 'Sorry, there was an error uploading your file.';
    }
}
