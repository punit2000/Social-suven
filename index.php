<?php
 session_start();
 require_once 'header.php';
 echo "<div class='center'>Welcome to my website,";
 if ($loggedin) echo " $user, you are logged in";
 else echo ' User please sign up or log in';
 echo <<<_END
</div><br>

 </div>
 <div data-role="footer">
<h4>Thank you for visiting. All rights reserved.</
h4>
 </div>
 </body>
</html>
_END;
?>