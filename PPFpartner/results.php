<?php
// Retrieve form inputs
$living_space = $_POST['living_space']; // 1 = Small, 2 = Medium, 3 = Large
$activity_level = $_POST['activity_level']; // 10 = Low, 20 = Medium, 30 = High
$allergies = $_POST['allergies']; // Yes or No

// Define pet recommendations based on the criteria
function getPetRecommendation($living_space, $activity_level, $allergies) {
    if ($allergies === "Yes") {
        if ($living_space == 1 || $living_space == 2) {
            return "Fish or Reptile"; // Best for small or medium spaces with allergies
        } else {
            return "Birds or Hypoallergenic Dogs"; // Best for large spaces with allergies
        }
    } else { // No allergies
        if ($living_space == 1 && $activity_level == 10) {
            return "Hamster or Cat"; // Small space, low activity
        } elseif ($living_space == 1 && $activity_level >= 20) {
            return "Small Dog"; // Small space, medium or high activity
        } elseif ($living_space == 2 && $activity_level == 10) {
            return "Cat or Medium Dog"; // Medium space, low activity
        } elseif ($living_space == 2 && $activity_level >= 20) {
            return "Medium Dog or Active Cat"; // Medium space, medium or high activity
        } elseif ($living_space == 3 && $activity_level == 10) {
            return "Large Dog or Senior Dog"; // Large space, low activity
        } else { // Large space, medium or high activity
            return "Large Active Dog or Horse";
        }
    }
}

// Get the recommendation
$recommendation = getPetRecommendation($living_space, $activity_level, $allergies);

// Display the result
?>
</div>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Results</title>
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="png" href="paw.png">
    <style>
        body {
    display: flex; /* Enable Flexbox */
    text-align: center;
    flex-direction: column; /* Stack elements vertically */
    min-height: 100vh; /* Ensure full viewport height */
    margin: 0; /* Remove default margin */
    background-color: #07674C;
    color: white;
    font-family: 'Poppins', sans-serif;
}
        video {
            height: 75%;
            margin-top: -185px;
        }
        .result-box {
            background-color: #00765a;
            color: white;
            padding: 20px;
            margin: 0 auto;
            width: 50%;
            min-height: 50vh;
            border-radius: 10px;
        }
        .h1 {
            font-size: 36px;
            margin-bottom: 20px;
        }
        .p {
            font-size: 20px;
        }
        .a {
    display: inline-block;
    border: 2px solid black; /* Fixed border width for consistency */
    background-color: #00765a;
    text-decoration: none;
    color: white;
    padding: 10px 20px; /* Added padding for a better look */
    font-weight: bold;
    border-radius: 10px;
    font-size: 18px;
    transition: transform 0.2s ease, box-shadow 0.2s ease; /* Smoother hover effect */
}

.a:hover {
    transform: scale(1.05); /* Slightly enlarge the button on hover */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Add a subtle shadow */
    background-color: #048c6b; /* Optional: Slight color change on hover */
}
        footer {
    background-color: #048c6b;
    text-align: center;
    font-size: 20px;
    padding: 10px 0;
    border-top: 3px solid black;
    width: 100%; /* Ensure it spans the full width */
    flex-shrink: 0; /* Prevent it from shrinking */
    margin: 0;
    position: relative; /* Ensure it's within the normal layout flow */
}
        main {
    flex: 1; /* Take up remaining space */
    display: flex; /* Optional: to center the result-box or other content */
    justify-content: center; /* Optional: center content horizontally */
    align-items: center; /* Optional: center content vertically */
}
    </style>
<script>
    function showResults() {
        console.log("Video ended. Showing results."); // Debugging
        document.querySelector("video").style.display = "none"; // Hide video
        document.getElementById("results").style.display = "block"; // Show results
    }
</script>
</head>
<main>
<body>
<video autoplay muted onended="showResults()">
    <source src="load.mp4">
    Your browser does not support the video tag.
</video>
    <div class="result-box" id="results" style="display: none;">
        <h1 class="h1">Your Perfect Pet Recommendation</h1>
        <p class="p">Based on your inputs, we recommend: <b><?php echo $recommendation; ?></b></p>
        <p class="p">Thank you for using Perfect Pet Finder!</p>
        <a href="form.php" class="a">Go Back to Form</a>
    </div>
</body>
</main>
    <footer>
        <p>&copy; 2024 Muhd Asyraf & Ahmad Muhsin. All Rights Reserved.</p>
    </footer>
</html>
