<!--
	Homework for Day 4
	
Exercise 1:
-----------

•Write a short PHP program, as we just did, that will print three lines:
–Your name
–Your birth date
–Your favorite color
•My name is James Marcus.
•I was born January 26, 1961.
   My favorite color is blue

	
-->

<?php
    $myName = "Ajay Panchal";
    $todayDate = date('Format String', time());
    $myBirthDate = $todayDate;
	print "Day 4 Homework - Exercise 1" . "<br /><br /><br />";
	
	print "My name is: " . $myName . "<br />";
	print "My birth date is: " . $myBirthDate . "<br />";

	
?>

