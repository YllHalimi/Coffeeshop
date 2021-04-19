 <?php
 require_once ('validimi.php');
 ?>
<a href="../index.php"> <-------back to the homepage </a>
 
 <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
		  <table border="0">
			<tr bgcolor="#cccccc">
				<td width="150">Item</td>
				<td width="15">Quantity</td>
			</tr>
		 <tr>
		 <td>Expresso</td>
		 <td align="left"><input type="text" name="expressoqty" size="3" maxlength="3" autocomplete="off"/>
		 <p class="error" style="color:red;"><?= $expressoqtyErr ?></p></td>
		 </tr>
		 <tr>
		 <td>Latte</td>
		 <td align="left"><input type="text" name="latteqty" size="3" maxlength="3" autocomplete="off"/>
		 <p class="error" style="color:red;"><?= $latteqtyErr ?></p></td>
		 </tr>
		 <tr>
		 <td>Tea</td>
		 <td align="left"><input type="text" name="teaqty" size="3" maxlength="3" autocomplete="off"/>
		 <p class="error" style="color:red;"><?= $teaqtyErr ?></p></td>
		 </tr>
	 <tr>
	<td>Shipping Adress</td>
	<td align="left"><input type="text" name="address" autocomplete="off">
	<p class="error" style="color:red;"><?= $addressErr ?></p></td>
	</td>
	</tr>
	
	<tr>
	<td>Email Adress</td>
	<td align="left"><input type="text" name="email" autocomplete="off">
	<p class="error" style="color:red;"><?= $emailErr ?></p></td>
	</td>
	</tr>
	
	
	
	<hr/>
		 <tr>
		 <td colspan="2" align="center"><input type="submit" name=" dergo" value="submit Order"/>
		 <p class="error"></p></td>
		 </tr>
		 <tr>
		 
		 
		 </tr>
		 </table>
		 <hr/>
		 
		  </form>
	 	<?php
 echo "<h3>POO</h3>";
	class  Delivery{
		
		
		function __construct(){
			print "Gjithmone ne te miren tuaj!";
			
		}
		
		function __destruct(){
			print "<br/>"."thirrja e destruktorit, kur nuk kemi referenca per objektin ne fjale.Pra,
			kur mbraron jetegjatesia e tij.";
			
		}
		
	}
	$produkti = new Delivery();
	
	class Coffee extends Delivery{
		
		
	}
	$obj = new Coffee();
	
	
	
	
	?>
	
	
	 <?php

class Klasa {
    private $cmimi;

    function __get($name)
    {
        return $this->cmimi;
    }
   
    function __set($name, $value)    {
      
            $this->cmimi=$value; 
      }
}

$a= new Klasa();
 $a->__set("cmimi",6);
echo $a ->__get("cmimi");
	?>
	<?php 
//asociative arrays
$price = array("expresso"=>"1", "late"=>"2");
echo "Expresso is " . $price['expresso'] . " euro.";
echo "<br/>";
echo "<hr/>";
//Indexed array with sort
$products = array("Latte", "Expresso", "American");
sort($products);
$clength = count($products);
for($x = 0; $x < $clength; $x++) {
    echo $products[$x];
    echo "<br>";
}
echo "<hr/>";


//multidimensional arrays
$products = array
  (
  array("Latte",22,18),
  array("Expresso",15,13),
  array("American",5,2),
  );
  
echo $products[0][0].": In Te porositura: ".$products[0][1].", Te paporositura: ".$products[0][2].".<br>";
echo $products[1][0].": In Te porositura: ".$products[1][1].", Te paporositura: ".$products[1][2].".<br>";
echo $products[2][0].": In Te porositura: ".$products[2][1].", Te paporositura: ".$products[2][2].".<br>";


echo"<hr/>";
//  The explode() function breaks a string into an array.
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
echo "<hr/>";
echo "<br/>";
// The implode() function returns a string from the elements of an array.
$arr = array('Hello','Sunday!','Beautiful','Day!');
echo implode(" ",$arr);
echo "<hr/>";

// The printf() function outputs a formatted string.
// The arg1, arg2, ++ parameters will be inserted at percent (%) signs in the main string.
 // This function works "step-by-step". At the first % sign, arg1 is inserted, at the second % sign, arg2 is inserted, etc.
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);
echo "<br/>";
echo "<hr/>";
// The str_replace() function replaces some characters with some other characters in a string.
echo	'<p>In this example, we search for the string "Hello day!", find the value "day" and then replace the value with "night".</p>';
echo str_replace("day","night","Hello day!");
echo "<hr/>";


// The substr() function returns a part of a string.
echo substr("Hello world",1,8)."<br>";
echo "<hr/>";
// The strlen() function returns the length of a string.
echo "<br/>";
echo strlen("coffee shop");
echo "<br/>";
echo "<hr/>";
// preg_replace — Perform a regular expression search and replace
$string = 'The quick brown fox jumps over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = array();
$replacements[2] = 'bear';
$replacements[1] = 'black';
$replacements[0] = 'slow';
echo preg_replace($patterns, $replacements, $string);

echo"<br/><br/>";
echo "<hr/>";

// split the phrase by any number of commas or space characters,
// which include " ", \r, \t, \n and \f
$keywords = preg_split("/[\s,]+/", "hypertext language, programming");
print_r($keywords);




?>



		  
		  
		  
		  