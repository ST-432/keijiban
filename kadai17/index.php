<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>4eachblog 掲示板</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>


<body>
		<div class="titlelogo">
				<img src="4eachblog_logo.jpg">
		</div>
		<header>
			<ul>
				<li>トップ</li>
				<li>プロフィール</li>
				<li>4eachについて</li>
				<li>登録フォーム</li>
				<li>お問い合わせ</li>
				<li>その他</li>
			</ul>
		</header>
		<main>

		<div class="left">
			<h1>プログラミングに役立つ掲示板</h1>

			<div class="form">
				<h2 class="NH">入力フォーム</h2>
				<form method="post" action="insert.php">

				<label>ハンドルネーム</label>
				<br>
				<input type="text" name="ind_handlename" size="40">
				<br>

				<label>タイトル</label>
				<br>
				<input type="text" name="ind_title" size="40">
				<br>

				<label>コメント</label>
				<br>
				<textarea rows="6" cols="40" name="ind_comments"></textarea>
				<br>

				<div class="a">
					<input type="submit" value="送信">
				</div>
			</div>
			<div class="toukou">
				<div class="toukou1">
					<h2>タイトル</h2>
					<p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、</p>
				</div>
				<div class="toukou2">
					<h2>タイトル</h2>
					<p>記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、記事の中身、</p></div>
			</div>
		</div>



		<div class="right">
		<br>
		<br>
		<h2>人気の記事</h2>
		<p>
			phpのおすすめ本<br>
			PHP MyAdminの使い方<br>
			今人気のエディタ<br>
			HTMLの基礎
		</p>
		<h2>おすすめリンク</h2>
		<p>
			インターノウス株式会社<br>
			XAMPPのダウンロード<br>
			AAAAAのダウンロード<br>
			BBBBBのダウンロード
		</p>
		<h2>カテゴリ</h2>
		<p>
			HTML<br>
			PHP<br>
			MySQL<br>
			JavaScript<br>
		</p>
		</div>

		<footer>
	<p>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</p>
	</footer>

	</main>
</body>
</html>