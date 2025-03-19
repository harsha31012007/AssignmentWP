<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = trim($_POST['full_name']);
    $passport_number = trim($_POST['passport_number']);
    $dob = $_POST['dob'];
    $nationality = $_POST['nationality'];
    $purpose = $_POST['purpose'];
    $duration = $_POST['duration'];
    $address = trim($_POST['address']);
    $contact = trim($_POST['contact']);
    
    $visa_message = "";
    
    switch ($nationality) {
        case "USA":
            $visa_message = "Visa required for most applicants.";
            break;
        case "Canada":
            $visa_message = "Visa required unless you have an eTA.";
            break;
        case "UK":
            $visa_message = "Visa depends on the duration of stay.";
            break;
        case "India":
            $visa_message = "Visa required before travel.";
            break;
        case "Australia":
            $visa_message = "eVisa available for eligible travelers.";
            break;
        default:
            $visa_message = "Invalid country selection.";
    }

    echo "<h2>Visa Application Result</h2>";
    echo "<p><strong>Full Name:</strong> $full_name</p>";
    echo "<p><strong>Passport Number:</strong> $passport_number</p>";
    echo "<p><strong>Date of Birth:</strong> $dob</p>";
    echo "<p><strong>Nationality:</strong> $nationality</p>";
    echo "<p><strong>Purpose of Visit:</strong> $purpose</p>";
    echo "<p><strong>Duration of Stay:</strong> $duration days</p>";
    echo "<h3>$visa_message</h3>";
} else {
    echo "Invalid request.";
}
?>
