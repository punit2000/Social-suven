
<form method='post' action='messages.php?view=$view'>
<fieldset data-role="controlgroup" data-type="horizontal">
<legend>Type here to leave a message</legend>
<input type='radio' name='pm' id='public' value='0' checked='checked'>
<label for="public">Public</label>
<input type='radio' name='pm' id='private' value='1'>
<label for="private">Private</label>
</fieldset>

<textarea name='text'></textarea>
<input data-transition='slide' type='submit' value='Post Message'>
 </form><br>

 
 <br><span class='info'>No messages yet</span><br><br>";
 <br><a data-role='button'
href='messages.php?view=$view'>Refresh messages</a>";
?>
 </div><br>
 </body>
</html>