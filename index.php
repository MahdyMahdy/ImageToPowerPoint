<?php
    require "upload.php";
?>
<html>
    <header>
        <link rel="stylesheet" href="assets/style.css">
        <script src="assets/myscripts.js"></script>
        <script class="jsbin" src="assets/jquery.min.js"></script>
    </header>
    <body>
        <div class="file-upload">
            <form action="index.php" method="post" enctype="multipart/form-data">
                <div class="image-upload-wrap">
                    <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="fileToUpload"/>
                    <div class="drag-text">
                        <h3>Drag and drop a file or click to select image</h3>
                    </div>
                </div>
                <div class="file-upload-content">
                    <img class="file-upload-image" src="#" alt="your image" />
                    <div class="image-title-wrap">
                        <button type="button" onclick="removeUpload()" class="remove-image">Remove <span
                                class="image-title">Uploaded Image</span></button>
                    </div>
                </div>
                <br>
                <input placeholder='Email' type='text' name='email' class="text-input"/>
                <br> <br>
                <input type="submit" class="file-upload-btn" value="SUBMIT">
            </form>
        </div>
    </body>
</html>