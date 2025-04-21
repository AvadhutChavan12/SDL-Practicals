// 1. Show alert
alert("Welcome! This page demonstrates JavaScript basics.");

// 2. Take lifespan input from user and calculate average number of weeks in a human lifetime
let averageLifespanYears = parseInt(prompt("Enter the average lifespan in years: "));
let weeksInYear = 52;

if (!isNaN(averageLifespanYears) && averageLifespanYears > 0) {
    let totalWeeks = averageLifespanYears * weeksInYear;
    console.log("Average number of weeks in human life: " + totalWeeks);
} else {
    console.log("Invalid input. Please enter a valid number for lifespan.");
}

// 3. Store a string in a variable
let message = "Learning JavaScript is fun!";
console.log(message);

// 4. Program that tells time of the day
let hour = new Date().getHours();
let timeOfDay = "";

if (hour >= 5 && hour < 12) {
    timeOfDay = "Good Morning!";
} else if (hour >= 12 && hour < 17) {
    timeOfDay = "Good Afternoon!";
} else if (hour >= 17 && hour < 21) {
    timeOfDay = "Good Evening!";
} else {
    timeOfDay = "Good Night!";
}

console.log(timeOfDay);
