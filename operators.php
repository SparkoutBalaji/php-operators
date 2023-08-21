<?php
echo "Operators : <br/><br/>";
echo "1.Arithmetic Operators<br/>";
echo "2.Assignment Operators<br/>";
echo "3.Comparison Operators<br/>";
echo "4.Incrementing/Decrementing Operators<br/>";
echo "5.Logical Operators<br/>";
echo "6.String Operators<br/><br/>";
echo "7.Ternary Operator<br/><br/>";

echo "1.Arithmetic Operators : <br/><br/>";

$a = 10;
$b = 5;
          echo "Addition $a+$b : ".$a+$b."<br/>";
          echo "Substraction $a-$b : ".$a-$b."<br/>";
          echo "Multiply $a*$b : ".$a*$b."<br/>";
          echo "Division $a/$b : ".$a/$b."<br/>";
          echo "Modulus $a+$b : ".$a%$b."<br/>";
          echo "Exponentiation $a+$b : ".$a**$b."<br/><br/>";

echo "2.Assignment Operators : <br/><br/>";

$a = 42;
$b = 20;

$c = $a + $b;  
echo "Addtion Operation Result: $c <br/>";
         
         $c += $a;  
         echo "Add AND Assigment Operation Result: $c <br/>";
         
         $c -= $a;
         echo "Subtract AND Assignment Operation Result: $c <br/>";
         
         $c *= $a; 
         echo "Multiply AND Assignment Operation Result: $c <br/>";
         
         $c /= $a; 
         echo "Division AND Assignment Operation Result: $c <br/>";
         
         $c %= $a;
         echo "Modulus AND Assignment Operation Result: $c <br/><br/>";

echo "3.Comparison Operators : <br/><br/>";

$a = 10;
$b = 10;

        if($a==$b)
        {
          echo "$a==$b Equal : Equal is true";
        }
        else
        {
          echo "$a==$b Equal : Not Equal";
        }

        echo "<br/>";

        if($a>$b)
        {
          echo "$a > $b Greater Than $b ";
        }
        else
        {
          echo "$a > $b Greater Than : Not Greater than $b";
        }

        echo "<br/>";

        if($a<$b)
        {
          echo "$a<$b Lesser Than $a ";
        }
        else
        {
          echo "$a<$b Not Lesser Than $a ";
        }

        echo "<br/>";

        if($a>=$b)
        {
          echo "$a>=$b Greater than = : $a";
        }
        else
        {
          echo "$a>=$b Not Greater than = : $a";
        }

        echo "<br/>";

        if($a!=$b)
        {
          echo "$a!=$b Not Equal is ture";
        }
        else
        {
          echo "$a!=$b Not equal is false";
        }
        echo "<br/><br/>";

echo "4.Incrementing/Decrementing Operators :<br/><br/>";

$i=2;
$j=3;

        echo "Post increment of $i : ".$i++."<br/>";

        echo "Pre increment of $i : ".++$i."<br/>";

        echo "Post decrement of $j : ".$j--."<br/>";

        echo "Pre decrement of $j : ".--$j."<br/><br/>";

echo "5.Logical Operators :<br/><br/>";

$log1 = 5;
$log2 = 3;

        if($log1==5 && $log2==3)
        {
          echo "$log1==5 && $log2==3 is true";
        }
        else
        {
          echo "$log1==5 && $log2==3 is fals";
        }
        echo "<br/><br/>";

        if($log1 != 1 || $log2==3)
        {
          echo "$log1 != 1 || $log2==3 is true";
        }
        else
        {
          echo "$log1 != 1 || $log2==3 is false";
        }
        echo "<br/><br/>";

        if($log1 !== $log2)
        {
          echo "$log1 !== $log2 is true";
        }
        else
        {
          echo "$log1 !== $log2 is false";
        }
echo "<br/><br/>";
echo "6.String Operators :<br/><br/>";   

$string1 = "BALAJI ";

$string2 = "N";

$string3 = $string1.$string2; //string concatenation

        echo "$string1.$string2 : ".$string3;

        echo "<br/><br/>";

        $string1 .= $string2; //string concatenation with assignment

        echo "$string1 .= $string2 : ".$string1."<br/><br/>";

echo "7.Ternary Operator : <br/><br/>";

$a = 10;
$b = 20;
$c = $a > $b ? $a : $b ;

echo $c;


?>
