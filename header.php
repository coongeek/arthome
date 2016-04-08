<!DOCTYPE html>
<html lang="<? LANGUAGE_ID ?>">
<head>
	<meta charset="<? LANG_CHARSET ?>">
	<?=$APPLICATION->ShowMeta("keywords")?>
	<?=$APPLICATION->ShowMeta("description")?>
	<link rel="shortcut icon" type="image/x-icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
	<?=$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/style/bootstrap/css/bootstrap.css")?>
	<title><?=$APPLICATION->ShowTitle()?></title>
	<?=$APPLICATION->ShowCSS()?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/style/bootstrap/js/bootstrap.js" type="text/javascript"></script>
</head>
<body>
	<?=$APPLICATION->ShowPanel()?>
	<div class="container">
		<div class="row">
			<div class="text-center col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<img class="img-responsive center-block" src="<?=SITE_TEMPLATE_PATH?>/image/arthome.png">
			</div>
		</div>
		<div class="row">
			<div class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div class="collapse navbar-collapse" id="responsive-menu">
						<ul class="nav navbar-nav">
							<li>
								<a href="#">Магазин</a>
							</li>
							<li>
								<a href="#">Доставка и оплата</a>
							</li>
							<li>
								<a href="#">Контакты</a>
							</li>
							<li>
								<a href="#">О нас</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script sttrc="hps://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?=SITE_TEMPLATE_PATH?>./style/bootstrap/js/bootstrap.js"></script>

