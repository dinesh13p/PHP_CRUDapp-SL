<?php
if (isset($_POST['input_submit']) && $_SERVER["REQUEST_METHOD"] == 'POST') {
    $err = [];
    if (
        isset($_FILES['my_file']['error'])
        && $_FILES['my_file']['error'] == 0
    ) {

        // check file size 
        if ($_FILES['my_file']['size'] < 1024000 * 5) {

            // check type 
            $type = ['image/png', 'image/jpg', 'image/jpeg'];
            if (in_array($_FILES['my_file']['type'], $type)) {
                if (move_uploaded_file($_FILES['my_file']['temp_name'], 'photo/' . $_FILES['my_file']['name'])) {
                    echo 'File uploaded successfully';

                } else {
                    echo 'Failed to upload file';
                }
            } else {
                $err['file'] = "Type doesn't match";
            }

        }

    }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>

    <form action="" method="post" enctype="multipart/form-data">

        <input type="file" name="my_file">


        <button type="submit">Upload</button>

    </form>


</body>

</html>