<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

// Write your code below:

$netIncome = $incomeSegments[0][0] * $incomeSegments[0][1];
$netIncome += $incomeSegments[1][0] * $incomeSegments[1][1];
$netIncome += $incomeSegments[2][0] * $incomeSegments[2][1];

echo "net income " . $netIncome . "\n";

$annualIncome = $netIncome - $socialSecurity;
$annualIncome -= $annualExpenses["vacations"];
$annualIncome -= $annualExpenses["carRepairs"];

echo "annual income " . $annualIncome . "\n";

$monthlyIncome = ($annualIncome / 12) - $monthlyExpenses["rent"] - $monthlyExpenses["utilities"] - $monthlyExpenses["healthInsurance"];
echo "monthly income " . $monthlyIncome . "\n";


$weeklyExpenses = [
    "gas" => 25,
    "food" => 90,
    "entertainment" => 47
];
$weeklyIncome = ($monthlyIncome / 4.33) - $weeklyExpenses["gas"] - $weeklyExpenses["food"] - $weeklyExpenses["entertainment"];

echo "weekly income " . $weeklyIncome . "\n";

echo "you can save " . $weeklyIncome * 52 . " dollars per year!\n";



