<?php
echo "<p>Welcome<b>".$_POST["user"]."</b>!</p>";
if ($_POST["message"]=="happy")
	{echo "you are sad";}
else echo"you are feeling".$_POST["message"];
?>