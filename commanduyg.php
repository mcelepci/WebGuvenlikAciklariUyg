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
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/styles/monokai-sublime.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
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

		<div class="col-sm-12 " style="">	

			<a href="command.php"><div class="btn btn-primary buton-red " style="position:fixed;top:10px;left:3px"><i style="font-size:17px"class="fa fa-chevron-circle-left" aria-hidden="true"></i>
				Geri Dön</div></a>
				<a target="_blank" href="code.php?id=4"><div class="btn btn-primary buton-mor " style="position:fixed;bottom:10px;left:3px">
					<i class="fa fa-code" aria-hidden="true"></i> Kodu Göster</div></a>


					<ul class="sagustmenu" style="list-style:none; position:absolute;top:0;right:20px">
						<li><a data-toggle="modal" data-target=".bs-example-modal-lg" class="yardim" style="position:fixed;top:0;right:7px;">
							<i class="fa fa-question-circle" aria-hidden="true"></i></a></li>
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



					<div class="col-sm-12 bant" style="color:#fff;padding:10px;font-weight:bold;" >
						<h1 style="text-align:center;background:linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);
						background: -webkit-linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);"><div style="background:linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);
						background: -webkit-linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);font-size:25px;font-weight:bold;">UYGULAMA-4 / COMMAND INJECTION</div> Olası Senaryo</h1>
						<hr>
						<p>
							Uygulamada girilecek IP adresine ping göndermek amaçlı bir input bulunmakta.Gönderdiğimiz ip adresi ile “xxx.xxx.xxx.xxx” şeklinde serverda komut çalıştırmaktadır.
						</p>
						<div class="col-sm-6"> 

							<div class="adimlar" style="font-size:12px;background-color:rgba(0,0,50,0.3);padding:2px 10px;margin-top:10px">
								<i style="padding:3px;font-size:10px; color:#fA6644">Adımları sırayla uygulayıp çalışmayı inceleyiniz.</i>
								<p>
									<h1 style="text-align:center;font-size:22px;">UYGULANACAK ADIMLAR</h1><hr>
								</p>
							</div>

							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default" id="panel1">
									<div class="panel-heading" role="tab" style="cursor:pointer;" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
										<h4 class="panel-title">

											ADIM - 1 <i id="" class="fa fa-sort-desc" aria-hidden="true"></i>



										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
										<div class="panel-body">
											1- Text alanına dilediğiniz ip adresini veya internet sitesini yazarak ping gönder butonuna tıklayın ve sonucu görün.<br/><br/>
											<br/>
											<pre>
												<code class="sql" style="color:lightgreen">www.google.com</code></pre>
												Sitesine ping gönderelim. Sonucunda 4 tane ping gönderdik. Bu pinglerin ulaşma süreleri ve diğer veriler ekrana yazdırılmıştır. Tıpkı bir cmd ekranı görevi görmüştür.

											</div>
										</div>
									</div>

									<div class="panel panel-default" id="panel2">
										<div class="panel-heading collapsed" role="tab" style="cursor:pointer;"id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<h4 class="panel-title">

												ADIM - 2 <i class="fa fa-sort-desc" aria-hidden="true"></i>

											</h4>
										</div>
										<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
											<div class="panel-body">

												2-Şuan görünürde bir zaafiyet yok gibi. Gayet normal çalışan bir sistem gibi gözüküyor.
												Fakat gerekli kontroller yapılmadıysa zararlı komutlar enjekte edilebilir. Kontrol yapılıp yapılmadığına bakalım.
												<br/><br/>
												Metin Kutusuna Girilecek Kod: <br/><br/>
												<pre><code class="sql" style="color:lightgreen">www.google.com<code class="sql" style="color:red">&& dir</code></code></pre><br/>

												"&&" ve komutu ile ekstra işlem yaptırdık.<br/>
												dir komutu windows sistemlerde dosyaları listelemeye yarar.
												<br/><br/>
												Görüldüğü üzere çıktıda sistemdeki dosyaları çektik. Ms DOS sistemde çalışan bütün komutları deneyebilirsiniz. 
												<br/><br/>
												Metin Kutusuna Girilecek Kod: <br/><br/>
												<pre><code class="sql" style="color:lightgreen">www.google.com<code class="sql" style="color:red">&& netstat</code></code></pre><br/>
												<br/>
												netstat komutu windows sistemlerde hostta bulunan açık ve aktif portları listeler.
												<br/><br/>

												Daha fazla komut için:<a href = "https://tr.wikipedia.org/wiki/MS-DOS" style=" color:#00c6ff;"> https://tr.wikipedia.org/wiki/MS-DOS</a>
											</div>
										</div>
									</div>

									<div class="panel panel-default" id="panel3">
										<div class="panel-heading collapsed" role="tab"  style="cursor:pointer;" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<h4 class="panel-title">
												ADIM - 3 <i class="fa fa-sort-desc" aria-hidden="true"></i>        
											</h4>
										</div>
										<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
											<div class="panel-body">
												3- Sistemde açığın olduğunu gördük. Peki saldırıyı yapan bu aşamada ne yapabilir onları görelim.
												<br/>
												Daha önce dir komutu ile sistemdeki dosyaları listelemiştik. Bu dosyaları silebilir, yeniden adlandırabilir, içeriklerine yazılar yazabiliriz.
												<br/><br/>
												Test amaçlı oluşturulmuş commandtest.php dosyası bulunmaktadır. Bu dosya şu an içinde bulunduğunuz dosya ile aynı dizindedir.
												Bu dosyaya command injection yöntemi ile yazı yazacağız.
												<br/><br/>
												Metin Kutusuna Girilecek Kod: <br/><br/>
												<pre><code class="php" >www.google.com && echo "&lt;center style='color:Red;font-size:40px;'>Sayfa hacklendi &lt;/center>"
													> commandtest.php</code></pre><br/>
													<br/>
													echo ile kodumuzu commandtest.php dosyasına yazdırdık. echo komutundan sonra gelen > işareti hangi dosyaya yazılacağını işaret eder.
													<br/><br/>

												</div>
											</div>
										</div>    
										<div class="panel panel-default" id="panel8">
											<div class="panel-heading collapsed" role="tab" style="cursor:pointer;"id="headingE" data-toggle="collapse" data-parent="#accordion" href="#collapseE" aria-expanded="false" aria-controls="collapseTwo">
												<h4 class="panel-title">

													COMMAND INJECTION AÇIKLARINI ÖNLEME <i class="fa fa-sort-desc" aria-hidden="true"></i>

												</h4>
											</div>
											<div id="collapseE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingE">
												<div class="panel-body">
													Command injection açığı input alanına girilen değerden meta karakterleri filtrelemediğimiz için ortaya çıkmıştır. Bu karakterler & && || - $ ( ) ' dir.
													Komut enjeksiyonlarını önlemek için mutlaka kullanıcıdan gelen verilerin bir süzgeçten geçirilmesi gerekir.
													<br/><br/>
													1- Yasaklı Listesi Oluşturma
													<br/><br/>
													Input alanına girilen meta karakterleri sınırlandırarak ekstra komut girişi önlemek amaçlanır. Tam anlamıyla koruma sağlamaz. Aşılma ihtimali vardır.
													<br/><br/>
													Kod'a eklenmesi gereken güvenlik önlemi: <br/><br/>
													Güvenlik Seviyesi: <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
													<br/><br/>

													<pre><code class="php">
														$yasakli_liste = array( 
														'&'  => '', 
														';'  => '', 
														'| ' => '', 
														'-'  => '', 
														'$'  => '', 
														'('  => '', 
														')'  => '', 
														'`'  => '', 
														'||' => '', 
														); 
														// yasaklı_liste isimli bir dizi oluşturduk. Bu diziyi, gelen input içinden bu dizideki karakterleri ayıklayacağız.

														$hedef = str_replace( array_keys( $yasakli_liste ), $yasakli_liste, $hedef );

														// str_replace fonksiyonu ile gelen hedef inputunundan yasakli_liste elemanlarını temizledik. Geri kalan girdi artık gönderilmeye hazırdır.
													</code></pre>
													<br/><br/>

													<hr/>
													<br/>
													2- İzinler Listesi Oluşturma<br/><br/>
													Filtreleme yaparken bu şekilde yasaklılar listesi oluşturmak hesaba katmadığımız durumlar için her zaman zafiyete imkan tanır.
													Bu yüzden yasaklılar listesi yerine izinliler listesi oluşturarak kullanıcıdan gelen verinin izin verilen şekilde olursa kabul edilmesi daha güvenlidir.
													<br/><br/>
													Güvenlik Seviyesi: <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
													<br/><br/>
													İzinler listesi yapıldığında kodun son hali bu şekildedir. Amaç xxx.xxx.xxx.xxx şeklinde ip almak.
													<pre><code class="php">
														if( $_POST ) { 
														$hedef = stripslashes( $hedef ); // bu fonksiyon ile hedeften ters bölü (\) işaretini temizledik.

														$dizi = explode( ".", $hedef ); // gelen ip adresini . ile bölerek dizi haline getiriyoruz

														if( ( is_numeric( $dizi[0] ) ) && ( is_numeric( $dizi[1] ) ) && ( is_numeric( $dizi[2] ) ) && ( is_numeric( $dizi[3] ) ) && ( sizeof( $dizi ) == 4 ) ) { 
														// is_numeric fonksiyonu ile gelen değerlerin sayı olup olmadığını kontrol ettik.
														$hedef = $dizi[0] . '.' . $dizi[1] . '.' . $dizi[2] . '.' . $dizi[3]; // bütün diziler sayı ise hedefi xxx.xxx.xxx.xxx olarak birleştiriyoruz.

														if( stristr( php_uname( 's' ), 'Windows NT' ) ) { 
														// Windows işletim sisteminde çalışacak kod
														$cmd = shell_exec( 'ping ' . $hedef ); 

													} 
													else { 
													// *nix sistemlerde çalışacak kod
													$cmd = shell_exec( 'ping  -c 4 ' . $hedef ); 
												} 
											}else { 

											echo 'Geçerli bir ip giriniz'; 
										}
									}
								</code></pre>



							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-6 liste_alani"> 
				<form  align="center" style="margin-bottom:20px;margin-top:8px;"action="" method="POST" class="form" name="form2">
					<input type="text" class="uyg" placeholder="IP giriniz" required="" size="30" name="ip" style=""><br>	
					<input type="submit" class="btn btn-primary buton-mor gonder" name="ping" value="Ping Gönder">
				</form>

				<?php 

				if( $_POST ) { 
    // Gelen input post metodu ile çekilip boşluk silme fonksiyonuna tabi tutulmuştur.
					$hedef = trim($_POST[ 'ip' ]); 

    // Hangi işletim sistemi kullanıldığını anlamak amacı ile phpuname() fonksiyonu kullanılır.
	// stristr fonksiyonu ise string içinde belirtilen kelime geçiyor mu kontrolü yapar.
	// İşletim sistemi çıktısında windows NT geçiyor mu diye kontrol ettik
					if( stristr( php_uname( 's' ), 'Windows NT' ) ) { 
        // Windows işletim sisteminde çalışacak kod
						$cmd = shell_exec( 'ping ' . $hedef ); 

					} 
					else { 
        // *nix sistemlerde çalışacak kod
						$cmd = shell_exec( 'ping  -c 4 ' . $hedef ); 
					} 

    // cmd kodu çalıştıktan sonra dönecek sonuç bildirisi
					echo "<pre><code class='crmsh'>{$cmd}<br/></code></pre>"; 
				} 
				?>




			</div>
		</div>
		<div class="clear"></div>
		
		<!-- Header -->

		<script src="js/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/languages/php.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/languages/sql.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/languages/crmsh.min.js"></script>
		<script>hljs.initHighlightingOnLoad();</script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.teletype.js"></script>
		<script>

			$(function(){

				$(".panel-heading").click(function(){
					var a = $(this).find("i");

					if(a.hasClass("fa-sort-desc")){

						$(this).find(".fa-sort-desc").removeClass("fa-sort-desc").addClass("fa-sort-asc");
					}else{
						$(this).find(".fa-sort-asc").removeClass("fa-sort-asc").addClass("fa-sort-desc");
					}

				});
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