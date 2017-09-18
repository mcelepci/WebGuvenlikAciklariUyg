<?php
include("baglanti.php");
error_reporting(0);
?>


<!DOCTYPE html>
<html><head>
<title>Siber Eğitim</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
<meta name="keywords" content="#" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/hover-min.css">
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<link href="https://fonts.googleapis.com/css?family=Armata|Baloo+Bhaina|Josefin+Slab|Righteous|Yellowtail" rel="stylesheet">

<link href="ok.png" rel="shortcut icon" >


</head>
<body style="background:url('blur-bg.jpg') no-repeat center center fixed; background-size:cover;">
	<!-- Header -->
	<!-- Header -->
	<div class="col-xs-12 " style="width:100%; height:3px;background-color:rgba(255,255,255,0.5);position:fixed;top:0; z-index:1000;">
		<div class="col-xs-12 hidden-sm hidden-xs" id="scrollbar" style="transition:all 0.5s linear;height:3px;background-color:rgba(255,0,0,1);position:fixed;top:0;left:0; z-index:1001;">
		</div>
	</div>
	<div class="container-full">

		<div class="col-sm-12 bant" style="min-height:600px;" >
			
			<div align="center" class="icerik"style="margin-top:15%" >
				<h1 class="sqlinjection"id="study"style="word-wrap:break-word;color:#FFF;letter-spacing:4px; font-weight:bold;
				font-size:32px;  margin-bottom:30px; text-shadow:0 8px 9px #000, 0px -2px 1px #000;text-align:center;"></h1>
				
				<div class="play" ><i class="fa fa-play" aria-hidden="true"></i><br></div>
				<br><br>
				<div style="background:linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);
				background: -webkit-linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);padding:10px;">
				Lütfen eğitime başlamadan önce notu <i data-toggle="modal" data-target=".benioku" class="fa fa-flag beniokuflag" aria-hidden="true"></i> okuyunuz.
			</div>
		</div>
		<div class="clear"></div>
		<ul class="sagustmenu" style="list-style:none; position:absolute;top:0;right:20px">
			<li><a data-toggle="modal" data-target=".bs-example-modal-lg" class="yardim" style="position:fixed;top:0;right:7px;"  ><i class="fa fa-question-circle" aria-hidden="true"></i></a></li>
			<li><a href="/yazlab/" style="position:fixed;top:0;right:40px;"><i class="fa fa-home" aria-hidden="true"></i></a></li>
		</ul>
		
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content" style="padding:15px;font-size:13px;background:rgba(0,0,0,1);line-height:20px;color:#fff;box-shadow:-11px 12px 18px 7px rgba(0, 0, 0, 0.2)">
					<h1 style="text-align:center;">Nedir Bu ?</h1>
					<hr><br/>
					Bu uygulama, kasıtlı olarak bırakılmış güvenlik zafiyetlerini (vulnerability) içeren zayıf (vulnerable) bir web uygulamasıdır.
					Uygulamalı siber güvenlik eğitimlerinde kullanılması için yapılmıştır. 
					Yasal olmayan bir şekilde gerçek sistemlere saldırmadan bu uygulama üzerinde öğrendiklerinizi tecrübe etmeniz açısından hazırlanmıştır.
					Üzerinde zafiyetler bulunan bu web uygulamasında, zafiyetlerin neden kaynaklandığının ve bu zafiyetlerin
					nasıl sömürüleceği açık ve anlaşılır bir şekilde adım adım açıklanmıştır.
				</div>
			</div>
		</div>
		<div class="modal fade benioku" tabindex="-1" role="dialog" aria-labelledby="benioku" style="">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content" style="padding:10px; background:rgba(0,0,0,1);color:#FFF;box-shadow:-11px 12px 18px 7px rgba(0, 0, 0, 0.2)">
					<h1 style="text-align:center;">NOT</h1>
					<hr>
					<p style="font-size:14px; text-align:center; padding:20px;">
						<i>
							SQL Injection hakkında verilen bu eğitimde, öğrencinin temel veritabanı bilgisi olduğu varsayılır. Eğer SQL hakkında yeterli düzeyde değil iseniz öncelikle bu açığı kapatınız.
						</i>
					</p>
				</div>
			</div>
		</div>

	</div>
</div>
<div class="container">
	<div class="col-sm-12 bant" style="padding:5px;font-weight:bold;
	background:linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.4) 50%, transparent 100%);
	background: -webkit-linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.4) 50%, transparent 100%);
	" >
	
	<h1 style="text-align:center;">SQL Injection Nedir ?</h1>
	<hr>
	<p>
		SQL injection, veri tabanına SQL ile veriler işlenirken, araya bir takım karakterlerin eklenmesiyle veri tabanına zararlı kodların enjekte edilmesine denir. 
		Bu yöntem ile bir korsan, mevcut verilerle oynayabilir, sistem üzerindeki kayıtlara ulaşabilir, yeni kayıt ekleyebilir ve silebilir. 
		Hatta yönetici yetkilerini dahi alabilir. SQL injection açığı yaratan karakterlerin programlama dillerinde bir karşılığı vardır. 
		Bu SQL cümlecikleri oluşturulurken araya sıkıştırılan herhangi bir meta-karakter SQL Injection’ a neden olabilir.
		<br>
		<h1 style="text-align:center;">Meta Karakter Nedir ?</h1>
		<hr>
		Meta-karakter bir program için özel anlamı olan karakterlere verilen isimdir. Örnek olarak C temelli C#, Javascript, PHP gibi dillerde (\) backslash karakteri 
		bir meta-karakterdir. Compiler (derleyici) ya da Interpreter (yorumlayıcı) bu karakteri görünce ondan sonraki karakteri ona göre işler.
		SQL için kritik meta-karakter (‘) tek tırnak’ tır. Çünkü SQL için tek tırnak (') art arda geldiği zaman arada bulunan değerler, string olarak tanımlanır.
		Diğer bir önemli meta-karakter ise (;) noktalı virgüldür, satırın bittiğini ve yeni satır başladığını bildirir.
	</p>
	<h1 style="text-align:center;">Kaç Tür SQL Injection Var ?</h1>
	<hr>
	Error based SQL injection(Hata tabanlı sql enjektesi)<br>
	SQL union(SQL birleşimi)<br>
	Blind SQL injection(Deneme-yanılma ile SQL enjektesi)<br>
</p>
<center>
	<a  href="sqluyg.php"><div class="btn btn-primary buton-mor" style="">Uygulamaya Git</div></a>
</center>



</div>

</div>
<div class="clear"></div>

<!-- Header -->

<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.teletype.js"></script>

<script>

	$(function(){
		var height = $("body").height();

		$(".bant").css("min-height",height);
		$(window).resize(function(){
			var height = $("body").height();

			$(".bant").css("min-height",height);
		});


	});

	$(".play").click(function(){
		var height = $("body").height();
		$('html, body').animate({
			scrollTop:height,
			
		},2000,'easeInOutBack');
		$(".icerik").addClass("animated fadeOutUp");

		
		setTimeout(function() { $('.icerik').removeClass("fadeOutUp").addClass("animated fadeIn "); },3000);
	});
	$(".ilkuyg").click(function(){
		var height = $("body").height();
		$('html, body').animate({
			scrollTop:height*2,
			
		},2000,'easeInOutBack');
	});

</script>

</body>
</html>