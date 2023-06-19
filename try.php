<?php
// Assuming you have established a database connection already
session_start();
$connection = mysqli_connect('localhost', 'root', '', 'resume_builder');
if (!$connection) {
    echo "Error";
}
// Assuming you have established a database connection already

// Query the database to fetch multiple records for a specific user
$userID = 1; // Assuming the user ID is 1
$query = "SELECT Project_Name FROM projects WHERE Name = 'Manav Adwani'";
$result = mysqli_query($connection, $query);

// Initialize arrays or variables for different sections
$section1Data = array();
$section2Data = array();

// Check if any records were returned
if (mysqli_num_rows($result) > 0) {
    // Initialize a variable to store the previous value
    $previousValue = null;

    // Loop through each row of data
    while ($row = mysqli_fetch_assoc($result)) {
        // Access the field1 value of each row
        $field1 = $row["Project_Name"];
        $a =1;
        // Check if the current value is different from the previous value
        if ($field1 !== $previousValue) {
            // Add the field1 data to the respective section
            if ($a = 1) {
                $section1Data[] = $field1;
            }

            // Update the previous value
            $previousValue = $field1;
        }
    }
}

// Print Section 1 data
echo "Section 1:<br>";
foreach ($section1Data as $data) {
    echo $data . "<br>";
}

echo "<br>";

// Print Section 2 data
echo "Section 2:<br>";
foreach ($section2Data as $data) {
    echo $data . "<br>";
}

// Close the database connection
mysqli_close($connection);
?>
