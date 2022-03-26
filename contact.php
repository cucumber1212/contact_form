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
		<h2 class="entry-title">- お問い合わせ -</h2>
		<div class="contact-content">
			<form action="confirm.php" method="post">
				<p class="contact-note"><span>※</span>入力必須項目</p>
				<table class="contact-table">
					<!-- /件名 -->
					<tr><td class="item">件名<span>※</span></td>
					<td><select name="subject" id="">
						<option value="ご意見">ご意見</option>
						<option value="ご感想">ご感想</option>
						<option value="その他">その他</option>
					</select></td></tr>

					<!-- お名前 -->
					<tr><td class="item">お名前<span>※</span></td><td><input type="text" name="name" required></td></tr>

					<!-- メールアドレス -->
					<tr><td class="item">メールアドレス<span>※</span></td><td><input type="email" name="email" pattern="^[a-zA-Z0-9.!#$&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+$" required></td></tr>

					<!-- 電話番号 -->
					<tr><td class="item">電話番号<span>※</span></td><td><input type="tel" name="phone" pattern="^[0-9]{7,}" required></td></tr>

					<!-- お問い合わせ内容 -->
					<tr><td class="item">お問い合わせ内容<span>※</span></td><td><textarea name="content" required></textarea></td></tr>
					<tr><td></td><td class="note">(1000文字以内)</td></tr>
				</table>

				<input type="submit" value="確認ページへ">
			</form>
		</div>
	</main>

</body>
</html>