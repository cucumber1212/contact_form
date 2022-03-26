<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>- お問い合わせ -</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/reset.css">
</head>
<body>
	<main>
	<?php

		$dsn  = 'mysql:dbname=contactdb;host=127.0.0.1';  // 接続先を定義
		$user = 'root';      // MySQLのユーザーID
		$pw   = 'pass';   // MySQLのパスワード

		$pdo=new PDO($dsn, $user, $pw);

		$subject=$_REQUEST['subject'];
		$name=$_REQUEST['name'];
		$email=$_REQUEST['email'];
		$phone=$_REQUEST['phone'];
		$content=$_REQUEST['content'];

		if(empty($subject and $name and $email and $phone and $content)){
			echo '<h2 class="entry-title">- ERROR!! -</h2>';
			echo '<p class="contact-message">必須項目が入力されていません。</p>';
			echo '<p class="contact-message">もう一度やり直してください。</p>';
			echo '<input type="button" value="内容を修正する" onclick="history.go(-2)" class="contact-correction">';

		} else {
			$sql=$pdo->prepare('INSERT INTO enquiry VALUES(?,?,?,?,?)');
			$sql->execute([
				$subject,
				$name,
				$email,
				$phone,
				$content
			]);
			echo '<h2 class="entry-title">- THANK YOU!! -</h2>';
			echo '<p class="contact-message">送信完了しました。</p>';
			echo '<p class="contact-message"><a href="contact.php">お問い合わせページへ戻る</a></p>';
		}

	?>

	</main>

</body>
</html>

		