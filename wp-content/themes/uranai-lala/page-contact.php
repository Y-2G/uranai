<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>ヒント出しヒーラー らら</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">    
	<link rel="stylesheet" href="page-contact.css">
</head>
<body>
	<div class="contact__container">

		<header class="contact__global-header">
			<div class="contact__global-logo">
				<img src="img/logo.png" alt= logo/>
			</div>
			<nav class="contact__global-navi"></nav>
		</header>
		<!-- /header -->

		<div class="contact__content">
			<section class="contact__first-view">
				<img src="img/first-view-uranai.jpeg" alt="占いの紹介" />
			</section>
		
			<section id="uranaiUranai" class="contact__section">
				<div class="contact__row">
					<h2>お問い合わせ</h2>
				</div>
				<div class="contact__row">
					<form class="contact__form">
						<fieldset>
							<div class="contact__form-group">
								<p>お問い合わせの種類</p>
								<label for="inquiry">お問い合わせ</label>
								<input type="radio" id="inquiry" name="kind" checked />
								<label for="reservation">鑑定のご予約</label>
								<input type="radio" id="reservation" name="kind" />
							</div>
						</fieldset>
						<fieldset>
							<div class="contact__form-group">
								<p><label for="name">お名前</label></p>
								<input type="text" id="name" name="name" />
							</div>
							<div class="contact__form-group">
								<p><label for="furigana">ふりがな</label></p>
								<input type="text" id="furigana" name="furigana" />
							</div>
							<div class="contact__form-group">
								<p><label for="mail">メールアドレス</label></p>
								<input type="email" id="mail" name="mail" />
							</div>
							<div class="contact__form-group">
								<p><label for="phon">お電話番号</label></p>
								<input type="text" id="phon" name="phon" />
							</div>
							<div class="contact__form-group">
								<p><label for="detail">お問い合わせ内容</label></p>
								<textArea type="text" id="detail" name="detail"></textArea>
							</div>
							<button type="submit">送信</button>
						</fieldset>
						<fieldset>
							<div class="contact__form-group">
								<p>鑑定の種類</p>
								<label for="offline">オフライン</label>
								<input type="radio" id="offline" name="kind" checked />
								<label for="online">オンライン</label>
								<input type="radio" id="online" name="kind" />
							</div>
							<div class="contact__form-group">
								<p><label for="name">お名前</label></p>
								<input type="text" id="name" name="name" />
							</div>
							<div class="contact__form-group">
								<p><label for="furigana">ふりがな</label></p>
								<input type="text" id="furigana" name="furigana" />
							</div>
							<div class="contact__form-group">
								<p><label for="mail">メールアドレス</label></p>
								<input type="email" id="mail" name="mail" />
							</div>
							<div class="contact__form-group">
								<p><label for="phon">お電話番号</label></p>
								<input type="text" id="phon" name="phon" />
							</div>
							<div class="contact__form-group">
								<p><label for="detail">ご希望日時</label></p>
								<input type="date" id="date" name="date" />
								<input type="time" id="time" name="time" />
							</div>
							<div class="contact__form-group">
								<p><label for="detail">備考</label></p>
								<textArea type="text" id="detail" name="detail"></textArea>
							</div>
							<button type="submit">送信</button>
						</fieldset>

					</form>
				</div>
			</section>
			<!-- /section -->
			
		</div>
		<!-- /.contact__content -->
		
		<footer class="contact__fotter">
			<nav class="contact__fotter-navi">
			<ul>
				<li><a href="#uranaiIntro">ごあいさつ</a></li>
				<li><a href="#uranaiUranai">占いの紹介</a></li>
				<li><a href="#uranaiCharge">鑑定の料金</a></li>
				<li><a href="#uranaiVoice">お客様の声</a></li>
				<li><a href="#uranaiRrequest">ご依頼の方法</a></li>
				<li><a href="#uranaiBlog">ブログ</a></li>
				<li><a href="#uranaiNews">ニュース</a></li>
				<li><a href="#uranaiContact">お問い合わせ</a></li>
				<li><a href="#">プライバシーポリシー</a></li>
				<li><a href="#">特定商取引法に基づく表示</a></li>
			</ul>
			</nav>
			<div class="contact__fotter-row">
			<div class="contact__fotter-logo"><a href="#"><img src="img/logo.png" /></a></div>
			<ul class="contact__fotter-sns">
				<li class="contact__fotter-sns-item"><a href="#"><img src="img/icon-twitter.png" /></a></li>
				<li class="contact__fotter-sns-item"><a href="#"><img src="img/icon-instagram.png" /></a></li>
				<li class="contact__fotter-sns-item"><a href="#"><img src="img/icon-facebook.png" /></a></li>
			</ul>
			</div>
			<div class="contact__copy-write">@2021 urania lala.</div>

		</footer>
		<!-- /footer -->

	</div>
	<!-- /.contact__container -->

</body>
</html>