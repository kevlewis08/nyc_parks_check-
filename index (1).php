<?php

// Function to generate a random name
function generateRandomName($isFirstName) {
    $firstNames = [
        "Alice", "Bob", "Charlie", "David", "Eva", "Frank", "Grace", "Hank", "Ivy", "Jack",
        "Katherine", "Liam", "Mia", "Noah", "Olivia", "Paul", "Quinn", "Ryan", "Sophia", "Tom",
        "Uma", "Vincent", "Wendy", "Xander", "Yara", "Zachary", "Abigail", "Benjamin", "Catherine", "Daniel"
    ];

    $lastNames = [
        "Anderson", "Brown", "Clark", "Davis", "Evans", "Foster", "Garcia", "Harris", "Irwin", "Jones",
        "Kelly", "Lopez", "Miller", "Nelson", "Owens", "Perez", "Quinn", "Roberts", "Smith", "Taylor",
        "Upton", "Vargas", "Williams", "Xavier", "Young", "Zimmerman", "Adams", "Baker", "Carter", "Diaz"
    ];

    if ($isFirstName) {
        return $firstNames[array_rand($firstNames)];
    } else {
        return $lastNames[array_rand($lastNames)];
    }
}

// Function to generate a random review
function generateRandomReview($starsGiven) {
    if ($starsGiven <= 2) {
        $badReviews = ["Terrible environment", "I didn't feel safe around the area.", "HIGHLY won't recommend this park to anybody.", "This park is not kid-friendly, too many rodents roaming around the area."];
        return $badReviews[array_rand($badReviews)];
    } elseif ($starsGiven >= 4) {
        $goodReviews = ["Beautiful site, will be seeing me around more often.", "This park hosts fantastic events and concerts. It's a hub of community activity and fun.", "Would highly recommend this beautiful area.", "The park is clean and well-kept. The staff is friendly."];
        return $goodReviews[array_rand($goodReviews)];
    } else {
        $averageReviews = ["Decent service.", "Not too bad.", "Could be better.", "Average experience."];
        return $averageReviews[array_rand($averageReviews)];
    }
}

// Set a random seed for better randomness
srand(time());

$numReviews = 5 + rand() % 6; // Generates a random number between 5 and 10

for ($i = 0; $i < $numReviews; ++$i) {
    $starsGiven = 1 + rand() % 5; // Generates a random number between 1 and 5
    $randomFirstName = generateRandomName(true);
    $randomLastName = generateRandomName(false);

    echo "Stars Given: $starsGiven\n<br>$randomLastName, $randomFirstName ";

    if ($starsGiven <= 2) {
        $badReview = generateRandomReview($starsGiven);
        echo "\n<br>Review: $badReview\n\n <br> <br>";
    } else {
        $goodReview = generateRandomReview($starsGiven);
        echo "\n<br>Review: $goodReview\n\n <br> <br>";
    }
}

?>
