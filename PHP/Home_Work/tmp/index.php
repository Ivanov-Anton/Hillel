<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
<h3>strpos(), должно быть, вернул не false</h3>
<p>Вы используете Internet Explorer</p>
<?php
} else {
?>
<h3>strpos() вернул false</h3>
<p>Вы не используете Internet Explorer</p>
<?php
}
?> 