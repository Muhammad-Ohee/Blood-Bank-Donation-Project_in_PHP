<?php

include "autoloader.php";

use app\Classes\BloodBank;
use app\Classes\VolunteerDonor;
use app\Classes\ProfessionalDonor;


//initiating objects
$donor1 = new VolunteerDonor("Muhammad", "B+", 25);
$donor2 = new VolunteerDonor("Ohee", "B+", 29);
$donor3 = new ProfessionalDonor("Angel", "O+", 24);


$bloodBank = new BloodBank();

//Receive Blood from Donors
$bloodBank->receivedBlood($donor1);
$bloodBank->receivedBlood($donor2);
$bloodBank->receivedBlood($donor3);

echo "\n";

//Display Donors
$bloodBank->displayDonors();

//DIsplay Donors with Blood Group B+
echo "\nDonors with Blood Group B+:\n";
$bPlusDonors = $bloodBank->getDonorsByBloodGroup("B+");

foreach($bPlusDonors as $donor){
    $donor->displayDonorInfo();
}

echo "\nPolymorphism: \n";
$donors = [$donor1, $donor2, $donor3];

foreach($donors as $donor){
    $donor->donateBlood();
}


?>