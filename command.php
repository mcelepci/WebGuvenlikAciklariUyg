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
				<h1 class="commandtext"id="study"style="word-wrap:break-word;color:#FFF;letter-spacing:4px; font-weight:bold;
				font-size:32px;  margin-bottom:30px; text-shadow:0 8px 9px #000, 0px -2px 1px #000;text-align:center;"></h1>
				
				<div class="play" ><i class="fa fa-play" aria-hidden="true"></i><br></div>
				<br><br>
				
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
		</div>
	</div>
	<div class="container">
		<div class="col-sm-12 bant" style="padding:5px;font-weight:bold;
		background:linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.4) 50%, transparent 100%);
		background: -webkit-linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.4) 50%, transparent 100%);
		" >
		
		<h1 style="text-align:center;">Command Injection Nedir ?</h1>
		<hr>
		<p>
			Geliştirilen web uygulamalarında bazen uygulamanın üzerinde çalıştığı işletim sisteminin terminalinde komut çalıştırma ihtiyacı hissedilir.
			Örnek verilirse PHP de shell_exec() , exec(), system() gibi fonksiyonlar ile komut satırında istenilen işlemin yapılması sağlanabilir.Ancak bu fonksiyonlara gönderilen parametreler 
			kullanıcıdan alınıyorsa, ve gerekli kontroller(kısıtlamalar) yapılmadıysa, kullanıcı istediği komutu yazarak sistemde çalıştırabilir.
			Bu yüzden kullanıcıdan gelen verilerin direkt olarak çalıştırılmadan önce kontrol edilip zararlı karakter ve verilerin ayıklanması gerekmektedir.
			<br>
			<h1 style="text-align:center;">Meta Karakter Nedir ?</h1>
			<hr>
			Meta-karakter bir program için özel anlamı olan karakterlere verilen isimdir.
			Örnek olarak C temelli C#, Javascript, PHP gibi dillerde (\) backslash karakteri bir meta-karakterdir. 
			Compiler (derleyici) ya da Interpreter (yorumlayıcı) bu karakteri görünce ondan sonraki karakteri ona göre işler.
			Command injection'da da && || > ; gibi birçok meta karakter bulunmaktadır.
		</p>
		<center>
			<a  href="commanduyg.php"><div class="btn btn-primary buton-mor" style="">Uygulamaya Git</div></a></center>
			
			
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