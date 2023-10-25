<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file upload field is set and a file has been uploaded
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        // Define the target directory for file uploads (e.g., "covers/")
        $target_dir = '';

        // Generate a unique filename for the uploaded file
        $file_name = $target_dir . uniqid() . '_' . $_FILES['file']['name'];

        // Move the uploaded file to the target directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $file_name)) {
            // Get the title and content from the form
            $title = $_POST['title'];
            $content = $_POST['content'];

            // Save the title, content, and image link to an array
            $announcement_data = array(
                'title' => $title,
                'content' => $content,
                'image_link' => $file_name
            );

            // Read existing data from the JSON file (if any)
            $existing_data = json_decode(file_get_contents('announcement.json'), true) ?? array();

            // Append the new data to the existing data
            $existing_data[] = $announcement_data;

            // Encode the combined data as JSON
            $json_data = json_encode($existing_data, JSON_PRETTY_PRINT);

            // Write the JSON data to the file
            if (file_put_contents('announcement.json', $json_data) !== false) {
                // Success: Data was saved to the file
                header('Location: index.php'); // Redirect to the admin page
                exit;
            } else {
                // Error: Failed to save the data
                echo 'Failed to save the data.';
            }
        } else {
            echo 'Failed to move the uploaded file to the target directory.';
        }
    } else {
        echo 'Failed to upload the file.';
    }
}
?>
