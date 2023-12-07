<html>
<body>
<form method="POST">
Enter a number:
<input type="text" name="number">
<input type="submit" name="submit">
</form>
</body>
</html>
<?php
if($_POST){
$number=$_POST['number'];
$n = $number;  
$f = 1; 
for ($i=1; $i <= $n; $i++)
 {  
  $f = $f * $i;  
} 
echo "Factorial of $n is $f";  
}
?>