<?php

/* WHILE LOOPS SECTION */

$i = 0;

while ($i < 10){
    
    echo $i."<br>";
    $i++;
    
}

/* - Here is a basic while loop. It states that while a variable $i is less than 10, we will echo $i. It then increases $i by one for each iteration, which is a very important element of the loop because otherwise it will go on infinitely and I think will produce a variable. */

echo "<br><br>";

$five = 5;

while ($five <= 50){
    
    echo $five."<br>";
    $five = $five + 5;
}

/* - Here is a challenge to produce the first 10 numbers in the 5 times table. We create a variable $five that is set to 5 and set up a loop that says while $five is less than or equal to 50 (which is the tenth number in the five times table), we will echo $five and then increase $five by 5. */

echo "<br><br>";

$whileArray = array("One", "Two", "Three");

$counter = 0;

while($counter < sizeof($whileArray)){
    
    echo $whileArray[$counter]."<br>";
    $counter++;
    
}

/* - Here is a challenge to create an array and then use a while loop to display each of the values in the array. So we create an array called $whileArray and a counting variable $counter to control how many times the loop iterates. Then we say that while $counter is less than the size of $whileArray (which will be 2, since it has "One" = 0, "Two" = 1 and "Three = 2), we are to echo $whileArray[whatever number the counter is on] (so in the case of $counter = 0, it would be $whileArray[0] which is "One") and then we add one to the counter on each iteration. */



/* FOR AND FOR EACH LOOPS SECTION 

for($i = 0; $i < 10; $i++){
    echo $i."<br>";
}

 - here we have set up a for loop very similar to the javascript for loop. we set a variable ($i) to equal 0, then set the condition for the loop to keep running (so in this case it will keep running as long as $i is less than 10), and we increase $i by 1 each time the loop executes ($i++ is the same as $i = $i+1)
- so this will show 0-9 on separate lines (because of the <br> we put into the echo statement) and stop looping when it reaches 9 

echo "<br>";

for ($i = 2; $i <= 30; $i = $i+2){
    echo $i."<br>";
}

echo "<br>";

for ($i=10; $i>=0; $i--){
    echo $i."<br>";
}

 - just some variations of counting loops 

echo "<br>";

$familyArray = array("Kelli", "Jesse", "Zack", "Kathy", "Mike");

foreach($familyArray as $key => $value){
    
    $familyArray[$key] = $value." McCloskey";
    
    echo "Array item ".$key." is ".$value."<br>";
}

- here is a foreach loop. It doesn't make sense with the example that Rob provided, but basically you can write it like this:
foreach($familyArray as $value)
or like this:
foreach($familyArray as $key => $value)
and the only difference is that in one you are asking it to access the key (in this case 0, 1, 2, 3, 4) and the other you are just asking for the value (in this case Kelli, Jesse, Zack, Kathy, Mike). That's as best I can understand it at this time because Rob doesn't explain it at all in the video. Not frustrated or anything hahaha.

echo "<br>";
echo "<br>";

for ($i=0; $i < sizeof($familyArray); $i++){
    echo $familyArray[$i]."<br>";
}

- here we use a for loop to display all the items in an array 

echo "<br>";








 IF STATEMENTS SECTION

$user = "Kelli";

if($user == "Kelli"){
    echo "Hello ".$user."!";
} else{
    echo "I don't know you";
}

echo "<br>";

$age = 30;
    
if($age < 18 || $user != "Kelli"){
    echo "You are too young and I don't know you!";
} else{
    echo "You are old enough, Kelli!";
}

 - here we have a simple if statement first, setting the variable user to "Kelli" and asking it to show "Hello" + user (Kelli) + "!" if the username is Kelli, which it is. It will show "I don't know you if user is set to anything other than Kelli
- the next statement uses an "or" operator (||) to ask it to show "You are too young and I don't know you"; if the age variable is set to less than 18 or user is not set to Kelli, and to say "You are old enough, Kelli!" if neither of those are true



ARRAYS SECTION


$myArray = array("Kelli", "Jesse", "Zack");

$myArray[] = "Parents";

print_r($myArray);

 
- here we define an array in the same way that a variable is defined, with a $ symbol, followed by array() with the contents of the array listed in quotes and separated by commas.
- echo can not be used with entire arrays, so we use print_r, which can be used to show the contents of any kind of object; this will show:

Array ( [0] => Kelli [1] => Jesse [2] => Zack )

- when we use 
$myArray[] = "Parents";
this simply adds "Parents" as the last value in the array, which when print_r is applied will show:

Array ( [0] => Kelli [1] => Jesse [2] => Zack [3] => Parents )


echo "<p>".$myArray[1]."</p>";


- here we echo just one value of $myArray concatenated with some html for formatting
- array values can be identified by their default number (0 for the first one, 1 for the second one, etc), but they can also be defined however you want to define them. for example, we could use a string as such:
$myArray["randomstring"] = "Random String";


$anotherArray = array(
    "France" => "French", 
    "USA" => "English", 
    "Germany" => "German");

echo "<br>";

unset($anotherArray["France"]);

print_r($anotherArray);

 
- here we are defining the values in the array using strings. so we are saying $anotherArray["France"] = "French"
- when we print_r this, it turns out like this:

Array ( [France] => French [USA] => English [Germany] => German )

- unset is used to remove a value from an array, in this case "France", so it will then print_r like this:

Array ( [USA] => English [Germany] => German ) 



echo "<br>";

echo sizeof($anotherArray);

- here we are asking for the length of anotherArray, which is 3 since it has 3 values assigned to it




VARIABLES SECTION:

- We use the filename index.whatever (html, php, etc) because when we are typing in the url, we can use either example.com/folderwherefileislocated/index.php OR we can just type example.com/folderwherefileislocated and it will still find it because by default index.html is the home page of that folder.

- HTML must be written outside of php tags




$name = "Kelli<br>";
     to define a variable in PHP, we use the $ symbol followed by the variable name. 

echo $name;
    here we have asked the page to show the contents of myvariable, which is "Kelli" 


echo "My name is $myvariable";

    here we have put the variable into a sentence 

$string1 = "This is the first part";
$string2 = "of a sentence.<br>";

echo $string1." ".$string2;
    here we concatenate two strings together with a space in between 

$myNumber = 45;

$calculation = $myNumber * 10 / 2 + 5;

echo "The result of the calculation is ".$calculation;

    here we use numbers to show a calculation

$myBool = true;

echo "<p>This statement is true?".$myBool."</p>";
    here we use a boolean statement "true" as the definition of a variable "myBool". when we ask the system to return the value of myBool it shows a 1, which stands for "true". if it were set to false, it would show nothing.

$variableName = "name";

echo $$variableName;

    here we call a variable within a variable. first we call variableName, which is "name", but in our echo statement we ask for $ + the value of variable name, which equals $name, and since we have a variable $name above in our code that equals "Kelli<br>", that is what gets printed. */



?>



