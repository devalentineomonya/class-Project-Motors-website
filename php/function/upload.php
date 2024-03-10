<?php

function uploadFile($file)
{
    if ($file['error'] === UPLOAD_ERR_OK) {
        $tempFile = $file['tmp_name'];
        $fileOriginalName = basename(strtolower( $file['name']));
        $randomString = bin2hex(random_bytes(10)); // Generate a random string of 10 characters
        $randomFileName =$randomString .  '_' .  $fileOriginalName; // Combine original name with random string

        $uploadDir = dirname(__DIR__, 2) . '/images/uploads/';
        $targetFile = $uploadDir . $randomFileName;

        if (!is_dir($uploadDir) && !mkdir($uploadDir, 0777, true)) {
            return "Error: Failed to create target directory.";
        }

        if (move_uploaded_file($tempFile, $targetFile)) {
            $result['name'] = $randomFileName;
            return $result;
        } else {
            return "Error: Failed to move uploaded file.";
        }
    } else {
        switch ($file['error']) {
            case UPLOAD_ERR_INI_SIZE:
                return "Error: The uploaded file exceeds the upload_max_filesize directive in php.ini.";
            case UPLOAD_ERR_FORM_SIZE:
                return "Error: The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.";
            case UPLOAD_ERR_PARTIAL:
                return "Error: The uploaded file was only partially uploaded.";
            case UPLOAD_ERR_NO_FILE:
                return "Error: No file was uploaded.";
            case UPLOAD_ERR_NO_TMP_DIR:
                return "Error: Missing a temporary folder.";
            case UPLOAD_ERR_CANT_WRITE:
                return "Error: Failed to write file to disk.";
            case UPLOAD_ERR_EXTENSION:
                return "Error: File upload stopped by extension.";
            default:
                return "Error: Unknown error occurred during file upload.";
        }
    }
}
