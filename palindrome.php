#A PROGRAM TO FIND THE PALINDROME
<?php  
function palindrome($n){  
$number = $n;  
$sum = 0;  
while(floor($number)) {  
$rem = $number % 10;  
$sum = $sum * 10 + $rem;  
$number = $number/10;  
}  
return $sum;  
}  
$input = 1235321;  
$num = palindrome($input);  
if($input==$num){  
echo "$input is a Palindrome number"; //display number is palindrome 
} else {  
echo "$input is not a Palindrome";  
}  
?>  
