<?php
session_unset();

echo "<div class='centerMsg'>";
echo "<h2 class='green'> Thank you </h2>";
echo "<h3 class='green'>You will be redirected to the home page now</h3>";
echo "</div>";
session_destroy();
 header("location: http://example.com",  true,  301 );  exit;
?>
</div>