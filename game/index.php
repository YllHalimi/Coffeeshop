
<a href="../index.php"> <-------back to the homepage </a>


<div>
<h1> Dice Roll Game</h1>

<input type="button" value="Roll The Dice" onclick="window.location.reload()"/>
<p>

<img src="dice/<?php echo rand(1,6); ?>.PNG" />

</p>
</div>

	 <?php  include "ajaxphp.php";		 ?>
