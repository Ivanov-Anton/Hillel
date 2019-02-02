<?php

	class Html
	{
		public static function a($url, $text)
		{
			return '<a href="' . $url . '" class="">' . $text . '</a>';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sample HTML Helper</title>
</head>
<body>
	<?=Html::a('http://google.com', 'Google')?>
</body>
</html>