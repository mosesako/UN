<?php
// Database connection details
$host = 'localhost';
$dbname = 'staff_info';
$username = 'root';
$password = '';

// Create connection
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $id = $_POST['id'];
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

    // Insert or update data
    if (empty($id)) {
        // Add new record
        $sql = "INSERT INTO staff (
            indexNumber, fullNames, email, currentLocation, highestLevelOfEducation,
            dutyStation, availabilityForRemoteWork, softwareExpertise, softwareExpertiseLevel,
            language, levelOfResponsibility
        ) VALUES (
            :indexNumber, :fullNames, :email, :currentLocation, :highestLevelOfEducation,
            :dutyStation, :availabilityForRemoteWork, :softwareExpertise, :softwareExpertiseLevel,
            :language, :levelOfResponsibility
        )";
    } else {
        // Update existing record
        $sql = "UPDATE staff SET
            indexNumber = :indexNumber,
            fullNames = :fullNames,
            email = :email,
            currentLocation = :currentLocation,
            highestLevelOfEducation = :highestLevelOfEducation,
            dutyStation = :dutyStation,
            availabilityForRemoteWork = :availabilityForRemoteWork,
            softwareExpertise = :softwareExpertise,
            softwareExpertiseLevel = :softwareExpertiseLevel,
            language = :language,
            levelOfResponsibility = :levelOfResponsibility
            WHERE id = :id";
    }

    try {
        $stmt = $conn->prepare($sql);
        if (!empty($id)) {
            $stmt->bindParam(':id', $id);
        }
        $stmt->execute([
            ':indexNumber' => $indexNumber,
            ':fullNames' => $fullNames,
            ':email' => $email,
            ':currentLocation' => $currentLocation,
            ':highestLevelOfEducation' => $highestLevelOfEducation,
            ':dutyStation' => $dutyStation,
            ':availabilityForRemoteWork' => $availabilityForRemoteWork,
            ':softwareExpertise' => $softwareExpertise,
            ':softwareExpertiseLevel' => $softwareExpertiseLevel,
            ':language' => $language,
            ':levelOfResponsibility' => $levelOfResponsibility
        ]);

        header("Location: index.php"); // Redirect back to the form
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
} else {
    echo "Form not submitted.";
}
?>
