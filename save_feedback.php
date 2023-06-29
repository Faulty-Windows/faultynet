<?php
// Retrieve the form data
$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

// Format the data as a string
$data = "Name: $name\nEmail: $email\nFeedback: $feedback\n\n";

// Specify the path to the text file
$file = 'feedback.txt';

// Save the data to the file
file_put_contents($file, $data, FILE_APPEND);

// Display a success message
echo "Thank you for your feedback!";
?>
