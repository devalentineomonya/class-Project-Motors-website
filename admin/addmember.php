<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate form fields
    $errors = [];
    $name = $_POST["name"];
    $role = $_POST["role"];

    // Validate image upload
    if ($_FILES["image"]["error"] == UPLOAD_ERR_OK) {
        $target_dir = "../images/uploads/";
        $random_chars = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 10);
        $original_name = strtolower($_FILES["image"]["name"]);
        $file_extension = pathinfo($original_name, PATHINFO_EXTENSION);
        $target_file = $target_dir . "member_" . $random_chars . "_" . $original_name;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            // Check file size
            if ($_FILES["image"]["size"] > 500000) {
                $errors[] = "Sorry, your file is too large.";
            }

            // Allow certain file formats
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $errors[] = "Sorry, only JPG, JPEG, PNG files are allowed.";
            }

            if (empty($errors)) {
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // File uploaded successfully, insert into database
                    $sql = "INSERT INTO DevsTeam (MemberName, MemberRole, MemberImg) VALUES (?, ?, ?)";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute([$name, $role, $target_file]);

                    echo '<div class="success-message">Member added successfully.</div>';
                } else {
                    $errors[] = "Sorry, there was an error uploading your file.";
                }
            }
        } else {
            $errors[] = "File is not an image.";
        }
    } else {
        $errors[] = "Image upload error.";
    }

    // Display errors if any
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo '<div class="error-message">' . $error . '</div>';
        }
    }
}
?>
<div class="form-container">
    <form class="member-form" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" class="form-input" required><br><br>
        <label for="role">Role:</label><br>
        <input type="text" id="role" name="role" class="form-input" required><br><br>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image" class="file-input" required><br><br>
        <input type="submit" value="Submit" class="submit-btn">
    </form>
</div>