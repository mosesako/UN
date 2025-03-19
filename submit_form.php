<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Personal Information Form</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid black; }
        th, td { padding: 10px; text-align: left; }
    </style>
</head>
<body>
    <h1>Staff Personal Information Form</h1>
    <form action="submit_form.php" method="post">
        <!-- Hidden field for record ID (used for editing) -->
        <input type="hidden" name="id" value="<?php echo isset($_GET['edit']) ? $_GET['edit'] : ''; ?>">

        <!-- Index Number -->
        <label for="indexNumber">Index Number:</label><br>
        <input type="text" id="indexNumber" name="indexNumber" value="<?php echo isset($_GET['edit']) ? $editRecord['indexNumber'] : ''; ?>" required><br><br>

        <!-- Full Names -->
        <label for="fullNames">Full Names:</label><br>
        <input type="text" id="fullNames" name="fullNames" value="<?php echo isset($_GET['edit']) ? $editRecord['fullNames'] : ''; ?>" required><br><br>

        <!-- Email -->
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo isset($_GET['edit']) ? $editRecord['email'] : ''; ?>" required><br><br>

        <!-- Current Location -->
        <label for="currentLocation">Current Location:</label><br>
        <input type="text" id="currentLocation" name="currentLocation" value="<?php echo isset($_GET['edit']) ? $editRecord['currentLocation'] : ''; ?>" required><br><br>

        <!-- Highest Level of Education -->
        <label for="highestLevelOfEducation">Highest Level of Education:</label><br>
        <select id="highestLevelOfEducation" name="highestLevelOfEducation" required>
            <option value="High School" <?php echo (isset($_GET['edit']) && $editRecord['highestLevelOfEducation'] == 'High School') ? 'selected' : ''; ?>>High School</option>
            <option value="Diploma" <?php echo (isset($_GET['edit']) && $editRecord['highestLevelOfEducation'] == 'Diploma') ? 'selected' : ''; ?>>Diploma</option>
            <option value="Bachelor's Degree" <?php echo (isset($_GET['edit']) && $editRecord['highestLevelOfEducation'] == 'Bachelor\'s Degree') ? 'selected' : ''; ?>>Bachelor's Degree</option>
            <option value="Master's Degree" <?php echo (isset($_GET['edit']) && $editRecord['highestLevelOfEducation'] == 'Master\'s Degree') ? 'selected' : ''; ?>>Master's Degree</option>
            <option value="PhD" <?php echo (isset($_GET['edit']) && $editRecord['highestLevelOfEducation'] == 'PhD') ? 'selected' : ''; ?>>PhD</option>
        </select><br><br>

        <!-- Duty Station -->
        <label for="dutyStation">Duty Station:</label><br>
        <input type="text" id="dutyStation" name="dutyStation" value="<?php echo isset($_GET['edit']) ? $editRecord['dutyStation'] : ''; ?>" required><br><br>

        <!-- Availability for Remote Work -->
        <label for="availabilityForRemoteWork">Availability for Remote Work:</label><br>
        <select id="availabilityForRemoteWork" name="availabilityForRemoteWork" required>
            <option value="Yes" <?php echo (isset($_GET['edit']) && $editRecord['availabilityForRemoteWork'] == 'Yes') ? 'selected' : ''; ?>>Yes</option>
            <option value="No" <?php echo (isset($_GET['edit']) && $editRecord['availabilityForRemoteWork'] == 'No') ? 'selected' : ''; ?>>No</option>
        </select><br><br>

        <!-- Software Expertise -->
        <label for="softwareExpertise">Software Expertise:</label><br>
        <input type="text" id="softwareExpertise" name="softwareExpertise" value="<?php echo isset($_GET['edit']) ? $editRecord['softwareExpertise'] : ''; ?>" required><br><br>

        <!-- Software Expertise Level -->
        <label for="softwareExpertiseLevel">Software Expertise Level:</label><br>
        <select id="softwareExpertiseLevel" name="softwareExpertiseLevel" required>
            <option value="Beginner" <?php echo (isset($_GET['edit']) && $editRecord['softwareExpertiseLevel'] == 'Beginner') ? 'selected' : ''; ?>>Beginner</option>
            <option value="Intermediate" <?php echo (isset($_GET['edit']) && $editRecord['softwareExpertiseLevel'] == 'Intermediate') ? 'selected' : ''; ?>>Intermediate</option>
            <option value="Advanced" <?php echo (isset($_GET['edit']) && $editRecord['softwareExpertiseLevel'] == 'Advanced') ? 'selected' : ''; ?>>Advanced</option>
            <option value="Expert" <?php echo (isset($_GET['edit']) && $editRecord['softwareExpertiseLevel'] == 'Expert') ? 'selected' : ''; ?>>Expert</option>
        </select><br><br>

        <!-- Language -->
        <label for="language">Language:</label><br>
        <input type="text" id="language" name="language" value="<?php echo isset($_GET['edit']) ? $editRecord['language'] : ''; ?>" required><br><br>

        <!-- Level of Responsibility -->
        <label for="levelOfResponsibility">Level of Responsibility:</label><br>
        <select id="levelOfResponsibility" name="levelOfResponsibility" required>
            <option value="Entry Level" <?php echo (isset($_GET['edit']) && $editRecord['levelOfResponsibility'] == 'Entry Level') ? 'selected' : ''; ?>>Entry Level</option>
            <option value="Mid Level" <?php echo (isset($_GET['edit']) && $editRecord['levelOfResponsibility'] == 'Mid Level') ? 'selected' : ''; ?>>Mid Level</option>
            <option value="Senior Level" <?php echo (isset($_GET['edit']) && $editRecord['levelOfResponsibility'] == 'Senior Level') ? 'selected' : ''; ?>>Senior Level</option>
            <option value="Managerial" <?php echo (isset($_GET['edit']) && $editRecord['levelOfResponsibility'] == 'Managerial') ? 'selected' : ''; ?>>Managerial</option>
        </select><br><br>

        <!-- Submit Button -->
        <input type="submit" value="<?php echo isset($_GET['edit']) ? 'Update Record' : 'Add Record'; ?>">
    </form>

    <h2>Staff Records</h2>
    <table>
        <thead>
            <tr>
                <th>Index Number</th>
                <th>Full Names</th>
                <th>Email</th>
                <th>Current Location</th>
                <th>Highest Level of Education</th>
                <th>Duty Station</th>
                <th>Availability for Remote Work</th>
                <th>Software Expertise</th>
                <th>Software Expertise Level</th>
                <th>Language</th>
                <th>Level of Responsibility</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Fetch all records from the database
            $host = 'localhost';
            $dbname = 'staff_info';
            $username = 'root';
            $password = '';

            try {
                $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $stmt = $conn->query("SELECT * FROM staff");
                $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

                foreach ($records as $record) {
                    echo "<tr>
                        <td>{$record['indexNumber']}</td>
                        <td>{$record['fullNames']}</td>
                        <td>{$record['email']}</td>
                        <td>{$record['currentLocation']}</td>
                        <td>{$record['highestLevelOfEducation']}</td>
                        <td>{$record['dutyStation']}</td>
                        <td>{$record['availabilityForRemoteWork']}</td>
                        <td>{$record['softwareExpertise']}</td>
                        <td>{$record['softwareExpertiseLevel']}</td>
                        <td>{$record['language']}</td>
                        <td>{$record['levelOfResponsibility']}</td>
                        <td>
                            <a href='index.php?edit={$record['id']}'>Edit</a>
                            <a href='delete_record.php?id={$record['id']}' onclick='return confirm(\"Are you sure you want to delete this record?\");'>Delete</a>
                        </td>
                    </tr>";
                }
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
            ?>
        </tbody>
    </table>
</body>
</html>
