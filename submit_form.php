<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $indexNumber = $_POST['indexNumber'];
    $fullNames = $_POST['fullNames'];
    $email = $_POST['email'];
    $currentLocation = $_POST['currentLocation'];
    $highestLevelOfEducation = $_POST['highestLevelOfEducation'];
    $dutyStation = $_POST['dutyStation'];
    $availabilityForRemoteWork = $_POST['availabilityForRemoteWork'];
    $softwareExpertise = $_POST['softwareExpertise'];
    $softwareExpertiseLevel = $_POST['softwareExpertiseLevel'];
    $language = $_POST['language'];
    $levelOfResponsibility = $_POST['levelOfResponsibility'];

    // Display the collected data (for demonstration purposes)
    echo "<h2>Submitted Information:</h2>";
    echo "<p>Index Number: $indexNumber</p>";
    echo "<p>Full Names: $fullNames</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Current Location: $currentLocation</p>";
    echo "<p>Highest Level of Education: $highestLevelOfEducation</p>";
    echo "<p>Duty Station: $dutyStation</p>";
    echo "<p>Availability for Remote Work: $availabilityForRemoteWork</p>";
    echo "<p>Software Expertise: $softwareExpertise</p>";
    echo "<p>Software Expertise Level: $softwareExpertiseLevel</p>";
    echo "<p>Language: $language</p>";
    echo "<p>Level of Responsibility: $levelOfResponsibility</p>";

    // Here you can add code to save the data to a database or perform other actions
} else {
    echo "Form not submitted.";
}
?>
