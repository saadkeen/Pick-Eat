<?php
// handling results

$sql  = 'UPDATE entree SET price=rate*quantity';
$sql  = 'UPDATE main SET price=rate*quantity';
$sql  = 'UPDATE drinks SET price=rate*quantity';
$sql  = 'UPDATE desserts SET price=rate*quantity';


$sum =
$_REQUEST['PineappleCheesecake'] * 600 +
$_REQUEST['PumpkinPudding'] * 650 +
$_REQUEST['ChocolateCherry'] * 700 +
$_REQUEST['RainbowChip'] * 770 +
$_REQUEST['PeachesCream'] * 850 +
$_REQUEST['WhiteTexas'] * 999 +
$_REQUEST['JellOSugar'] * 550 +
$_REQUEST['BirthdayCake'] * 1100 +

$_REQUEST['Coca'] * 40 +
$_REQUEST['Pepsi'] * 40 +
$_REQUEST['Fanta'] * 40 +
$_REQUEST['Marinda'] * 40 +
$_REQUEST['Sprite'] * 40 +
$_REQUEST['7UP'] * 40 +
$_REQUEST['Dew'] * 40 +
$_REQUEST['Sting'] * 40 +
$_REQUEST['Cappuccino'] * 100 +
$_REQUEST['Espresso'] * 100 +
$_REQUEST['Tea'] * 80 +
$_REQUEST['Coffee'] * 90 +
$_REQUEST['Green'] * 80 +
$_REQUEST['Mango'] * 150 +
$_REQUEST['Banana'] * 100 +
$_REQUEST['Strawberry'] * 80 +
$_REQUEST['Coconut'] * 80 +
$_REQUEST['Blueberry'] * 80 +
$_REQUEST['Apple'] * 70 +
$_REQUEST['Orange'] * 70 +
$_REQUEST['Guava'] * 70 +
$_REQUEST['Grapes'] * 70 +

$_REQUEST['Paties'] * 200 +
$_REQUEST['GarlicBread'] * 150 +
$_REQUEST['Nachos'] * 360 +
$_REQUEST['ChickenWings'] * 300 +
$_REQUEST['PotatoVeggies'] * 150 +
$_REQUEST['FishCrackers'] * 290 +
$_REQUEST['FrenchFries'] * 100 +
$_REQUEST['Nuggets'] * 300 +

$_REQUEST['Zinger'] * 180 +
$_REQUEST['Jalpeno'] * 200 +
$_REQUEST['Tower'] * 220 +
$_REQUEST['Chicken'] * 150 +
$_REQUEST['Calzone'] * 280 +
$_REQUEST['Venice'] * 280 +
$_REQUEST['Supremo'] * 320 +
$_REQUEST['Tikka'] * 299 +
$_REQUEST['Mexicana'] * 299 +	
$_REQUEST['Pepperoni'] * 299 ;
$_REQUEST['Simple'] * 70 +
$_REQUEST['Masala'] * 80 +
$_REQUEST['Mayo'] * 120 +
$_REQUEST['Cheese'] * 150 +
$_REQUEST['Garlic'] * 140 +
$_REQUEST['Taragon'] * 790 +
$_REQUEST['Pepper'] * 650 +
$_REQUEST['Mexican'] * 690 +
$_REQUEST['American'] * 780 +
$_REQUEST['Spanish'] * 780 +
$_REQUEST['Austrailian'] * 800 +
$_REQUEST['FriedPrawns'] * 400 +
$_REQUEST['DhakaPrawns'] * 400 +
$_REQUEST['PrawnsChilli'] * 400 +
$_REQUEST['SweetSourPrawns'] * 370 +
$_REQUEST['FingerFish'] * 360 +
$_REQUEST['FishChilli'] * 360 +
$_REQUEST['FishVege'] * 390 +
$_REQUEST['GarlicFish'] * 390 +
$_REQUEST['CrispyFish'] * 360 +
$_REQUEST['FriedFish'] * 390 +
$_REQUEST['ChickenAlmond'] * 440 +
$_REQUEST['ChickenPineapple'] * 490 +
$_REQUEST['ChickenChilli'] * 390 +
$_REQUEST['ChickenGinger'] * 490 +
$_REQUEST['ChickenShashli'] * 360 +
$_REQUEST['ChickenDrum'] * 300 +
$_REQUEST['HotSourChicken'] * 450 +
$_REQUEST['BeefChilli'] * 400 +
$_REQUEST['BeefVege'] * 450 +
$_REQUEST['BeefPineapple'] * 430 +
$_REQUEST['BeefGinger'] * 390 +
$_REQUEST['BeefOnion'] * 450;


print ("The total price will be $sum");

?>