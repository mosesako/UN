<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Personal Information Form</title>
</head>
<body>
    <h1>Staff Personal Information Form</h1>
    <form action="submit_form.php" method="post">
        <!-- Index Number -->
        <label for="indexNumber">Index Number:</label><br>
        <input type="text" id="indexNumber" name="indexNumber" required><br><br>

        <!-- Full Names -->
        <label for="fullNames">Full Names:</label><br>
        <input type="text" id="fullNames" name="fullNames" required><br><br>

        <!-- Email -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <!-- Current Location -->
        <label for="currentLocation">Current Location:</label><br>
        <input type="text" id="currentLocation" name="currentLocation" required><br><br>

        <!-- Highest Level of Education -->
        <label for="highestLevelOfEducation">Highest Level of Education:</label><br>
        <select id="highestLevelOfEducation" name="highestLevelOfEducation" required>
            <option value="High School">High School</option>
            <option value="Diploma">Diploma</option>
            <option value="Bachelor's Degree">Bachelor's Degree</option>
            <option value="Master's Degree">Master's Degree</option>
            <option value="PhD">PhD</option>
        </select><br><br>

        <!-- Duty Station -->
        <label for="dutyStation">Duty Station:</label><br>
        <input type="text" id="dutyStation" name="dutyStation" required><br><br>

        <!-- Availability for Remote Work -->
        <label for="availabilityForRemoteWork">Availability for Remote Work:</label><br>
        <select id="availabilityForRemoteWork" name="availabilityForRemoteWork" required>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select><br><br>

        <!-- Software Expertise -->
        <label for="softwareExpertise">Software Expertise:</label><br>
        <input type="text" id="softwareExpertise" name="softwareExpertise" required><br><br>

        <!-- Software Expertise Level -->
        <label for="softwareExpertiseLevel">Software Expertise Level:</label><br>
        <select id="softwareExpertiseLevel" name="softwareExpertiseLevel" required>
            <option value="Beginner">Beginner</option>
            <option value="Intermediate">Intermediate</option>
            <option value="Advanced">Advanced</option>
            <option value="Expert">Expert</option>
        </select><br><br>

        <!-- Language -->
        <label for="language">Language:</label><br>
        <input type="text" id="language" name="language" required><br><br>

        <!-- Level of Responsibility -->
        <label for="levelOfResponsibility">Level of Responsibility:</label><br>
        <select id="levelOfResponsibility" name="levelOfResponsibility" required>
            <option value="Entry Level">Entry Level</option>
            <option value="Mid Level">Mid Level</option>
            <option value="Senior Level">Senior Level</option>
            <option value="Managerial">Managerial</option>
        </select><br><br>

        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>
</body>
</html>
