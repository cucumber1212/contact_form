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
		<h2 class="entry-title">- お問い合わせ内容確認 -</h2>
			<div class="contact-content">
				<?php
					$subject=$_REQUEST['subject'];
					$name=$_REQUEST['name'];
						if (!preg_match('/(?=.)/', $name)) {
						echo '<p class="attention">!お名前を入力してください。</p>';
					}
					$email=$_REQUEST['email'];
						if (!preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/', $email)) {
						echo '<p class="attention">!メールアドレスを入力してください。</p>';
					}
					$phone=$_REQUEST['phone'];
						if (!preg_match('/([0-9]){7,}/', $phone)) {
						echo '<p class="attention">!電話番号を入力してください。</p>';
					}
					$content=$_REQUEST['content'];
						if (!preg_match('/(?=.)/', $content)) {
						echo '<p class="attention">!お問い合わせ内容を入力してください。</p>';
					}

					echo '<table class="contact-table">';
					echo '<tr><td class="item">件名<span>※</span></td>';
					echo '<td class="contact-check">', $subject, '</td></tr>';
					echo '<tr><td class="item">お名前<span>※</span></td>';
					echo '<td class="contact-check">', $name, '</td></tr>';
					echo '<tr><td class="item">メールアドレス<span>※</span></td>';
					echo '<td class="contact-check">', $email, '</td></tr>';
					echo '<tr><td class="item">電話番号<span>※</span></td>';
					echo '<td class="contact-check">', $phone, '</td></tr>';
					echo '<tr><td class="item">お問い合わせ内容<span>※</span></td>';
					echo '<td class="contact-check">', $content, '</td></tr>';
					echo '</table>';
					echo '<p class="contact-note"><span>※</span>入力必須項目</p>';
				?>

				<form action="complete.php" method="post">
					<input type="hidden" name="subject" value="<?php echo $subject; ?>">
					<input type="hidden" name="name" value="<?php echo $name; ?>">
					<input type="hidden" name="email" value="<?php echo $email; ?>">
					<input type="hidden" name="phone" value="<?php echo $phone; ?>">
					<input type="hidden" name="content" value="<?php echo $content; ?>">
					<input type="submit" value="上記内容で送信する">
					<input type="button" value="内容を修正する" onclick="history.back(-1)">
				</form>
			</div>
	</main>
</body>
</html>