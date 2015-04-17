<?php
/* If the redirect button is clicked, user is redirected to the specified URL */
if (isset($_POST['redirect'])) {
header("location:https://www.google.com");
}
?>
<table>
<tr><td>
<form name='redirect' action='<?php echo $_SERVER['PHP_SELF'];?>' method='post'>
<tr>
<td>
&nbsp; <input type='submit' value='Redirect To Google.com' name='redirect'/>
</td>
</tr>
</form>
</td></tr>
</table>
