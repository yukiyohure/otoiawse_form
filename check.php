<?php
	$nickname=$_POST["nickname"];
	if($nickname==""){
		$nickname_result="ニックネームが入力されていません。<br>";
	}else{
		$nickname_result="ようこそ、".$nickname."様。<br>";
	}
	$email=$_POST["email"];
	if($email==""){
		$email_result="メールアドレスが入力されていません。<br>";
	}else{
		$email_result="メールアドレス：".$email."<br>";
	}
	$content=$_POST["content"];
	if($content==""){
		$content_result="お問い合わせ内容が入力されていません。<br>";
	}else{
		$content_result="お問い合わせ内容：".$content."<br>";
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>入力内容確認</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>入力内容確認</h1>
	<p><?php echo $nickname_result ?></p>
	<p><?php echo $email_result ?></p>
	<p><?php echo $content_result ?></p>
	<form method="POST" action="thanks.php">
		<input type="hidden" name="nickname" value="<?php echo $nickname; ?>">
		<input type="hidden" name="email" value="<?php echo $email; ?>">
		<input type="hidden" name="content" value="<?php echo $content; ?>">

		<input type="button" value="戻る" onclick="history.back()">
		<?php if($nickname!=""&&$email!=""&&$content!=""):?>
		<input type="submit" value="OK">
		<?php endif; ?>
	</form>
</body>
</html>