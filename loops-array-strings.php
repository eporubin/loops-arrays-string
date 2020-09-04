<!DOCTYPE HTML>
<html>
<head>
<title>Loops, Arrays and Strings</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<?php

/*
Q1) Loops
a) Modify the following code so that the loop outputs the numbers 5-15
b) Re-write the loop as a while loop
*/

while($i<=10)
{
    echo "{$i}<br>";
    $i++;
}


/*
Q2) Arrays
a) Output the entire contents of the $countries array using a var_dump() or print_r() statement
b) Using this array, write a single echo statement that outputs 'China, India, Indonesia and Pakistan are all in Asia'
c) Output the entire contents of the array as an HTML list using a foreach loop
d) Uncomment the line that declares the $moreCountries array. Join the two arrays together  Do some research using php.net
http://php.net/manual/en/function.array-merge.php. Output the joined array using a var_dump() or print_r() statement.
e) Sort this larger list of countries into reverse alphabetical order (do some research into sorting functions) and output the result using a foreach loop.
*/


$countries=["China","India","USA","Indonesia","Brazil","Pakistan"];

//$moreCountries=["Nigeria","Bangladesh","Russia","Japan"];



/*
Q3) Associative Arrays
a) Using the $films array, write an echo statement that outputs 'Spirited Away was released in 2001'
b) Add another film to the array, using an echo statement, output some of new the film's details
c) Using a foreach loop display the details for all the films
d) Output the data from (c) using an HTML table.
*/

$films=[
    ["title"=>"Jaws", "year"=>"1975", "duration"=>124,"certificate"=>"15"],
    ["title"=>"Spirited Away", "year"=>"2001", "duration"=>124,"certificate"=>"PG"],
    ["title"=>"Winter's Bone", "year"=>"2010", "duration"=>100,"certificate"=>"15"],
];

/*
Q4) Strings
a) Using the following string, write an echo statement that outputs the fifth character in the string
b) Use the strlen() (http://php.net/manual/en/function.strlen.php) function to output the length of the string
c) Convert the string to lowercase (http://php.net/manual/en/function.strtolower.php) and output it.
d) Use the substr() (http://php.net/manual/en/function.substr.php) function to output the word 'Web'
*/

$moduleStr="CIT2202 Web Development";

?>

</body>
</html>
