/*
Create a function for:
lastnames, (done)
firstnames, (done)
starsgiven, (done)
badreview, (done)
averagereview, (done)
goodreview. (done)
generate random and involve srand function - go on w3schools to find out how to properly use srand and create a random generator.
30 first names and 30 last names, have it so it can be a combination of up to 900 names. (done)

create the if statements that were mentioned in github "bad review" "good review"

*new - add a average review function

if review >= 3 stars, print good review
if review <= 2 stars, print bad review
else print average review (stars = 3)

what to work on next:
find out how to convert c++ to html for the (reviews function)

"did you vist here? leave us a review for others to see!"

if functions required? not anymore
*/
#include <iostream>
#include <string>
#include <cstdlib>
#include <ctime>
using namespace std;


// Function to generate a random name
std::string generateRandomName(bool isFirstName) {
    const std::string firstNames[] = {
        "Alice", "Bob", "Charlie", "David", "Eva", "Frank", "Grace", "Hank", "Ivy", "Jack",
        "Katherine", "Liam", "Mia", "Noah", "Olivia", "Paul", "Quinn", "Ryan", "Sophia", "Tom",
        "Uma", "Vincent", "Wendy", "Xander", "Yara", "Zachary", "Abigail", "Benjamin", "Catherine", "Daniel"
    };

    const std::string lastNames[] = {
        "Anderson", "Brown", "Clark", "Davis", "Evans", "Foster", "Garcia", "Harris", "Irwin", "Jones",
        "Kelly", "Lopez", "Miller", "Nelson", "Owens", "Perez", "Quinn", "Roberts", "Smith", "Taylor",
        "Upton", "Vargas", "Williams", "Xavier", "Young", "Zimmerman", "Adams", "Baker", "Carter", "Diaz"
    };

    if (isFirstName) {
        return firstNames[rand() % 30];
    } else {
        return lastNames[rand() % 30];
    }
}

// Function to generate a random review
std::string generateRandomReview(int starsGiven) {
    if (starsGiven <= 2) {
        const std::string badReviews[] = {"Terrible enviornment", "I didn't feel safe around the area.", "HIGHLY wont recommend this park to nobody.", "This park is not kid friendly, too much rodents roaming around the area."};
        return badReviews[rand() % 4];
    } else if (starsGiven >= 4) {
        const std::string goodReviews[] = {"Beautiful site, will be seeing me around more often.", "This park hosts fantastic events and concerts. It's a hub of community activity and fun.", "Would highly recommend this beautiful area.", "The park is clean and well-kept. The staff is friendly."};
        return goodReviews[rand() % 4];
    } else {
        const std::string averageReviews[] = {"Decent service.", "Not too bad.", "Could be better.", "Average experience."};
        return averageReviews[rand() % 4];
    }
}

int main() {
    srand(time(0)); 

    int numReviews = 5 + rand() % 6; // Generates a random number between 5 and 10

    for (int i = 0; i < numReviews; ++i) {
        int starsGiven = 1 + rand() % 5; // Generates a random number between 1 and 5
        std::string randomFirstName = generateRandomName(true);
        std::string randomLastName  = generateRandomName(false);

        std::cout << "Stars Given: " << starsGiven << "\n" << randomLastName << ", " << randomFirstName << " ";

        if (starsGiven <= 2) {
            std::string badReview = generateRandomReview(starsGiven);
            std::cout << "\nReview: " << badReview << "\n\n";
        } else {
            std::string goodReview = generateRandomReview(starsGiven);
            std::cout << "\nReview: " << goodReview << "\n\n";
        }
    }

    return 0;
}
