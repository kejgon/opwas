<?php
// Create database connection

echo "<pre>";
print_r($_FILES['image']['tmp_name']);
move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $_FILES['image']['name']);
// Initialize message variable
//$msg = "";

// If upload button is clicked ...
// if (isset($_POST['upload'])) {
//     // Get image name
//     $image = $_FILES['image']['name'];
//     // Get text

//     // image file directory
//     $target = "uploads/" . basename($image);


//     if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
//         $msg = "Image uploaded successfully";
//     } else {
//         $msg = "Failed to upload image";
//     }
// }
?>
<!DOCTYPE html>
<html>

<head>
    <title>Image Upload</title>
    <style type="text/css">
        #content {
            width: 50%;
            margin: 20px auto;
            border: 1px solid #cbcbcb;
        }

        form {
            width: 50%;
            margin: 20px auto;
        }

        form div {
            margin-top: 5px;
        }

        #img_div {
            width: 80%;
            padding: 5px;
            margin: 15px auto;
            border: 1px solid #cbcbcb;
        }

        #img_div:after {
            content: "";
            display: block;
            clear: both;
        }

        img {
            float: left;
            margin: 5px;
            width: 300px;
            height: 140px;
        }
    </style>
</head>

<body>
    <div id="content">

        <form method="POST" action="test.php" enctype="multipart/form-data">
            <div>
                <input type="file" name="image">
            </div>
            <!-- <div>
                <textarea id="text" cols="40" rows="4" name="image_text" placeholder="Say something about this image..."></textarea>
            </div> -->
            <div>
                <button type="submit" name="upload">POST</button>
            </div>
        </form>
    </div>
</body>

</html>