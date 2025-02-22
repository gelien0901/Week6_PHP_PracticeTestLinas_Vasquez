<?php 
#1. What is the output of print_r($person);?
#Ans:Charlene 25
print_r("Hello");
print_r([1, 2, 3]);

class Person {
    public $name;
    public $age;
}
print_r($person);
$person = new Person();
$person = new("Charlene");
$person = age(25);

#2. What is the output of var_dump($person);?
#Ans: object(Person)#1 (2) { ["name"]=> string(8) "Charlene" ["age"]=> int(25) }
var_dump($Hello);
var_dump($person)
var_dump($Hello! Charlene);
var_dump([1,2,3]);

#3. What is the output of var_dump($cashOnHand);?
#Ans: float(10.5)
$cashOnHand = 10.5;
var_dump($cashOnHand);

#4. What character is used to concatenate strings?
#Ans: The character used to concatenate strings is period (.)
$name = "Charlene";
$greeting = "Hello, " . $name . "!";
echo $greeting;

#5. What is the output of echo HOST?
#Ans: localhost
define("HOST", "localhost");
echo HOST;

#6. How will you define in PHP the variable PI with value 3.1416?
#Ans: Output: 3.1416
define('PI', 3.1416);
echo PI;

#7. What is the output of echo $numbers[3] + $numbers[4];?
#Ans: 9
$numbers = [1, 2, 3, 4, 5];
echo $numbers[3] + $numbers[4];

#8. What is the output of echo $colors[30];?
#Ans: chartreuse
$colors = [
    'red', 'blue', 'green', 'yellow', 'purple', 'orange', 'pink', 'brown', 'black', 'white', 
    'violet', 'indigo', 'grey', 'cyan', 'magenta', 'lime', 'olive', 'maroon', 'navy', 'aqua',
    'teal', 'lavender', 'peach', 'plum', 'orchid', 'salmon', 'gold', 'silver', 'bronze', 'tan', 
    'chartreuse'
];
echo $colors[30];


#9. What are the keys in $person array?
#Ans: name and age
class Person {
    public $name;
    public $age;
}

$person = new Person();
$person->name = "Charlene";
$person->age = 25;

$personArray = get_object_vars($person);
print_r(array_keys($personArray));

#10. In PHP, how will you change the green into white in $colors array?
#Ans: we replaced the value at index 1, which was 'green', with 'white'. The print_r function then displays the modified array.
$colors = ['red', 'green', 'blue'];
$colors[1] = 'white';
print_r($colors);

#11. What is the output of echo $hex['red'];?
#Ans: 
#12.What is t he output of echo $matrix[1][2];?
#Ans: 
#13. What is the output of echo $people[0]['frstname'];?
#Ans: 
#14. What is tthe output of echo $people[2]['email'];?
#Ans: 
#15. What is he output of var_dump($chunckedArray);?
#Ans: 
?>



