<html>
    <body>
        <?php
        
$target = "C:/xampp/htdocs/PHPprograms/"; // Corrected path

// Make sure the directory exists
if (!is_dir($target)) {
    mkdir($target, 0777, true); // creates it if missing
}

$targetFile = $target . basename($_FILES['fileToUpload']['name']);

if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
    echo "File uploaded successfully!";
} else {
    echo "Sorry, file not uploaded. Please try again!";
}

        
        ?>
    </body>
</html>
