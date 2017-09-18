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
    
    <a href="sqlinjection.php"><div class="btn btn-primary buton-red " style="position:fixed;top:10px;left:3px"><i style="font-size:17px"class="fa fa-chevron-circle-left" aria-hidden="true"></i>
     Geri Dön</div></a>
     <a target="_blank" href="code.php?id=1"><div class="btn btn-primary buton-mor " style="position:fixed;bottom:10px;left:3px">
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
   
   
   
   <div class="col-sm-12 bant" style="color:#fff;padding:10px;font-weight:bold;" >
    <h1 style="text-align:center;background:linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);
    background: -webkit-linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);"><div style="background:linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);
    background: -webkit-linear-gradient(0deg,  transparent 0%,rgba(0,0,0,0.2) 50%, transparent 100%);font-size:25px;font-weight:bold;">UYGULAMA-1 / SQL INJECTION</div> Olası Senaryo</h1>
    <hr>
    <p>
      Uygulamada bir text alanı bir de sorgula butonu bulunmaktadır. Sorgula butonuna tıklandığında text alanına girilen id numarasına göre kullanıcı bilgileri gösterilmektedir.
      Çoğu web sitesinde böyle tehlikeli bir alan bulamazsınız ama burada amaç öğrenmek olduğu için en düşük seviyeden başlayarak tüm detaylar anlatılmaya çalışılacaktır.
      <br/>
      <br/>
      Alttaki kutucukta sizden bir id girilmesi bekleniyor. Bu id'ye göre veritabanında bulunan üyeler tablosundan o id'ye sahip üye bilgileri sağ tarafta gösterilecektir.
      SQL injection işlemi ile bütün kullanıcı bilgilerini aynı anda yazdırabiliriz. Bunu görelim.
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
            1- Text alanına dilediğiniz rakamı yazarak sorgula butonuna tıklayın ve sonucu görün.<br/><br/>
            1.1- Görüldüğü üzere 1 ile 4 arası girilen id değerine göre bir sonuç dönüyor. Bunun dışındaki değerlere ise <i>"Bu id'ye sahip kullanıcı yok."</i> uyarısı alınmaktadır.
            <br/>
            Text alanına 1 girdiğinizde SQL Sorgusunun Durumu:<br/><br/>
            <pre>
              <code class="sql">SELECT * FROM uyeler WHERE id='1' </code></pre>
              
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
            Fakat SQL sorgusunun WHERE cümleciğindeki alanların değerini kapatıp devamına yeni SQL kodları ekleyerek farkı sorguları çalıştırabiliyoruz.
            Arkaplandaki SQL sorgusunun WHERE cümleciğini iptal edelim. Böylece veritabanından çekilecek veri kısıtlaması ortadan kalkacak ve 
            ilgili sayfasının kullandığı tüm veritabanı tablosu kayıtları sağ tarafa yansıtılacaktır. 
            <br/><br/>
            
            Metin Kutusuna Girilecek Kod: <br/><br/>
            <pre><code class="mysql">8' or '1' = '1' #</code></pre><br/>

            SQL Sorgusunun Durumu:<br/><br/>
            <pre><code class="sql">SELECT * FROM uyeler WHERE id = '8' or '1' = '1' # </code></pre><br/>
            2.1- Görüldüğü üzere yukarıda verilen ifade girildiğinde veri tabanındaki tüm veriler çekildi.
            Arkaplandaki while döngüsü satır sayısı kadar sorgu çalıştı ve her iterasyonda ilgili satırın bilgilerini ekrana çıktı olarak verdi.
            Metin kutusuna girilen kodun sonundaki # işareti MySQL'de SQL sorgusunun geri kalanını yorum yap manasına gelir.
            Böylece SQL sorgusunun kendinde olan tırnak karakteri fazla olmasına rağmen hataya neden olmayacaktır. 
            <br/><br/>

            Yukarıdaki 8 sayısının bir anlamı yoktur. İstediğiniz sayıyı girebilirsiniz. Fakat <pre><code class="mysql"> '1' = '1' </code></pre> ifadesinin bir anlamı vardır. 
            1 sayısı daima 1 sayısına eşit olacağından bu ifade sürekli true döneceği için WHERE koşulu veritabanından çekilecek kayıtları hiçbir kısıtlama olmadan çekecektir.
            <br/><br/>
            <br/><br/>
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
            3-ORDER BY İLE VERİ TABANI KEŞFİ<br/><br/>
            Düşük güvenlikli web sayfasına kendi oluşturacağımız SQL sorgusunu enjekte etmenin yolu UNION keyword'ünü kullanarak sağlanır.
            Bu anahtar kelime solunda ve sağındaki SQL sorgularının çektiği satırları alt alt toplamaya yarar.
            <br/><br/> 
            Örnek:<br/><br/>
            Tablo 1<br/><br/>
            <table class="table" style="background:rgba(0,200,0,0.3);">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>John</td>
                  <td>Doe</td>
                  <td>john@example.com</td>
                </tr>
                <tr>
                  <td>Mary</td>
                  <td>Moe</td>
                  <td>mary@example.com</td>
                </tr>
                <tr>
                  <td>July</td>
                  <td>Dooley</td>
                  <td>july@example.com</td>
                </tr>
              </tbody>
            </table>
            Tablo 2<br/><br/>
            <table class="table" style="background:rgba(200,0,0,0.3);">
              <thead>
                <tr>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Muhammet</td>
                  <td>Celepci</td>
                  <td>muh@example.com</td>
                </tr>
                <tr>
                  <td>Fahri</td>
                  <td>Karaca</td>
                  <td>fah@example.com</td>
                </tr>
                <tr>
                  <td>Tiger</td>
                  <td>Seven</td>
                  <td>tiger@example.com</td>
                </tr>
              </tbody>
            </table>
            <br/>
            Sorgu - 1<br/><br/>
            <pre><code class="sql">SELECT Firstname FROM tablo1
            </code></pre><br/>

            Sorgu - 2<br/><br/>

            <pre><code class="sql">SELECT Firstname FROM tablo2
            </code></pre><br/>
            Sorguların Union İle Birleştirilmiş Hali<br/><br/>

            
            <pre><code class="sql">SELECT Firstname FROM tablo1 UNION SELECT Firstname FROM tablo2
            </code></pre><br/>

            Sorgu Cevabı<br/><br/>
            <table class="table" style="background:rgba(100,200,200,0.3);">
              <thead>
                <tr>
                  <th>Firstname</th>
                </tr>
              </thead>
              <tbody>
               <tr>
                <td>John</td>
                
              </tr>
              <tr>
                <td>Mary</td>
                
              </tr>
              <tr>
                <td>July</td>
                
              </tr>
              <tr>
                <td>Muhammet</td>
              </tr>
              <tr>
                <td>Fahri</td>
                
              </tr>
              <tr>
                <td>Tiger</td>
                
              </tr>
            </tbody>
          </table>
          
          <br/>
          Union anahtar kelimesinin kullanımı bu şekildedir. 
          <br/>
          <br/>
          
          Sql enjekte ederken bu kelimeyi kullanacağız. Fakat UNION'ın şöyle bir kısıtı vardır: UNION'ın sol tarafındaki sorgunun seçilen kolonlarının sayısı ile sağ tarafındaki sorgunun seçilen kolonlarının sayısının
          aynı olması gerekmektedir. Dolayısıyla UNION'i kullanabilmek için bizim SQL Injection zafiyetine sahip ilgili sayfanın kullandığı SQL sorgusunda kaç tane kolon
          seçildiğini öğrenmemiz gerekir. Bunu öğrenebilmek için ORDER BY'dan yararlanacağız. Bu keyword esasında tablodan çekilen kayıtları sıralama düzenini ayarlar,
          fakat biz bunu tablonun kolon sayılarını belirleme amacıyla kullanacağız.
          <br/>
          <br/>
          
          <pre><code class="sql">SELECT * FROM tablo_adi WHERE koşul ORDER BY 1
          </code></pre>
          <br/>
          <br/>

          Yukarıdaki ORDER BY Select'in seçtiği satırları 1. Kolona göre alfabetik olarak sıralanmasını sağlar. Eğer 1 sayısı yerine 2 sayısı konulsaydı 
          o zaman "Select'in seçtiği satırları 2. kolona göre alfabetik olarak sırala" emri verilmiş olurdu.<br/>
          ORDER BY'ın sayısını sırayla arttırıp metin kutusuna girdiğimizde tüm satırlar ilgili kolona göre sıralanacaktır. 
          Ne zaman ki sayfa bir SQL hatası verir ya da bu durumu belirten bir işlem yaparsa, bu durumda girilen sayıda kolon, sayfadaki SQL sorgusunun kullandığı tabloda mevcut değil demektir. 
          Örneğin, ORDER BY 10 olarak seçildiğinde eğer sayfa hata verirse o zaman anlaşılır ki kolon sayısı 9'dur. 


        </div>
      </div>
    </div>
    <div class="panel panel-default" id="panel4">
      <div class="panel-heading collapsed" role="tab" style="cursor:pointer;"id="headingFour" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
        <h4 class="panel-title">
         
         ADIM - 4 <i class="fa fa-sort-desc" aria-hidden="true"></i>
         
       </h4>
     </div>
     <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
       4- Sırasıyla aşağıdaki kodlar girilirse bir yerden sonra <i>"Bu id'ye sahip kullanıcı yok."</i> cevabı alınacaktır. Bu cevap alındığı anda anlıyoruz ki kolon sayısı bi önceki kadar.
       <br/><br/>
       Metin Kutusuna Girilecek Kod: <br/><br/>
       <pre><code class="mysql"> 
        8' or '1' = '1' ORDER BY 1 # <br/>

        8' or '1' = '1' ORDER BY 2 # <br/>

        8' or '1' = '1' ORDER BY 3 # <br/>

        8' or '1' = '1' ORDER BY 4 # <br/>

        8' or '1' = '1' ORDER BY 5 # <br/>
      </code></pre><br/>

      Kolon sayısı belli oldu. Sorgu da 4 tane kolon var.
      <br/><br/>
      Bu durumda biz Union ile sorgu birleştirirken 4 tane değer girmek zorundayız.

      <br/><br/>
      <pre><code class="sql">8' or '1' = '1' UNION Select 1,2,3,4 # 
      </code></pre><br/><br/>

      Bu kodu text alanına yazarak çıktıyı inceleyin.
      <br/><br/>
      <br/><br/>
    </div>
  </div>
</div>
<div class="panel panel-default" id="panel5">
  <div class="panel-heading collapsed" role="tab" style="cursor:pointer;"id="headingFive" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
    <h4 class="panel-title">
     
     ADIM - 5 <i class="fa fa-sort-desc" aria-hidden="true"></i>
     
   </h4>
 </div>
 <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
  <div class="panel-body">
   5- Sorguya sql fonksiyonları girerek çıktıları inceleyelim.<br/><br/>
   Metin Kutusuna Girilecek Kod: <br/><br/>
   <pre><code class="sql">8' or '1' = '1' UNION Select @@datadir,database(),version(),user() #
   </code></pre><br/>
   @@datadir anahtar kelimesi veritabanının yüklü olduğu dizini verir.
   database() fonksiyonu veri tabanının ismini verir.
   version() fonksiyonu veri tabanını yazılımının sürümünü verir.
   user() fonksiyonu veri tabanı yazılımının kullanıcı adını verir.

   <br/><br/>

   <br/><br/>
 </div>
</div>
</div>
<div class="panel panel-default" id="panel6">
  <div class="panel-heading collapsed" role="tab" style="cursor:pointer;"id="headingSix" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseTwo">
    <h4 class="panel-title">
     
     ADIM - 6 <i class="fa fa-sort-desc" aria-hidden="true"></i>
     
   </h4>
 </div>
 <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
  <div class="panel-body">
    6- Bu adımda hedef sistemdeki tüm veritabanı isimlerini öğrenerek keşif yapmaya devam edeceğiz.<br/>
    
    MySQL ile beraber gelen information_schema adlı veritabanına gireceğiz.
    Bu veritabanı MySQL'in 5.0.0 versiyonu ve sonrasında vardır.
    Biz 5.adımda versiyonun 10.1.21 olduğunu görmüştük.information_schema adlı veritabanı MySQL'de oluşturulan tüm yeni veritabanlarının, tabloların, kolonların kaydını dinamik 
    olarak tutan bir veritabanıdır.
    Hedef sistemdeki tüm veritabanlarının isimlerini information_schema veritabanının schemata adli tablosundaki schema_name adlı kolonundan öğrenebiliriz
    <br/><br/>Metin Kutusuna Girilecek Kod:<br/> <br/>
    <pre><code class="sql">8' or '1' = '1' UNION Select 1,2,3,group_concat(schema_name) from information_schema.schemata #
    </code></pre><br/>



    Okunurluğu arttırmak adına bu dönen satırları group_concat() fonksiyonu ile tek satıra indirgeyip virgül ile birbirlerinden ayırdık.
    Çıktıyı incelediğinizde bütün veri tabanı isimlerini öğrenmiş olduk.


  </div>
</div>
</div>
<div class="panel panel-default" id="panel7">
  <div class="panel-heading collapsed" role="tab" style="cursor:pointer;"id="headingSeven" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
    <h4 class="panel-title">
     
     ADIM - 7 <i class="fa fa-sort-desc" aria-hidden="true"></i>
     
   </h4>
 </div>
 <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
  <div class="panel-body">
    7- Bu adımda daha önce öğrendiğimiz veri tabanlarına bağlanarak şifre gibi verileri elde edeceğiz.<br/>
    Herhangi bir veri tabanı ismini seçerek içindeki tabloları öğreniyoruz."kou_siber" isimli veri tabanındaki tabloları öğrenelim.
    <br/><br/>Metin Kutusuna Girilecek Kod:<br/> <br/>

    <pre><code class="sql">8' or '1' = '1' UNION Select 1,2,3,group_concat(table_name) from information_schema.tables Where table_schema='kou_siber' # 
    </code></pre><br/>

    Çıktıyı incelediğinizde veri tabanındaki bütün tablo isimlerini öğrenmiş olduk. "yonetim" isimli tabloyu seçerek devam edelim.
    <br/><br/>Metin Kutusuna Girilecek Kod:<br/> <br/>

    <pre><code class="sql">8' or '1' = '1' UNION Select 1,2,3,group_concat(column_name) from information_schema.columns Where table_name='yonetim' # 
    </code></pre><br/>
    Çıktıyı incelediğinizde bütün tablodaki kolonları öğrenmiş olduk. Bu kolonlardan dilediğinizi seçerek içindeki verileri yazdırabilirsiniz.
    <br/><br/>Metin Kutusuna Girilecek Kod:<br/> <br/>
    <pre><code class="sql">8' or '1' = '1' UNION Select 1,2,3,group_concat(kullanci_adi,0x20,sifre,0x20) from kou_siber.yonetim #
    </code></pre><br/>

    "0x20" space karakterinin hexadecimal kodudur. Yukarıdaki sorguda "kou_siber" veritabanındaki "yonetim" tablosuna ulaşarak "kullanci_adi" ve "sifre" kolonlarındaki verileri elde ettik.

  </div>
</div>
</div>
<div class="panel panel-default" id="panel8">
  <div class="panel-heading collapsed" role="tab" style="cursor:pointer;"id="headingE" data-toggle="collapse" data-parent="#accordion" href="#collapseE" aria-expanded="false" aria-controls="collapseTwo">
    <h4 class="panel-title">
     
      SQL INJECTION AÇIKLARINI KAPATMA <i class="fa fa-sort-desc" aria-hidden="true"></i>
      
    </h4>
  </div>
  <div id="collapseE" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingE">
    <div class="panel-body">
      1- Inputta mysql_real_escape_string() kontrolü
      <br/><br/>
      Input alanına eğer ' meta karakteri girilmişse bunu engelleyebiliriz. PHP yeni sürümlerinde mysql'in güvenlik açıkları nedeniyle mysqli'ye veya PDO'ya geçilmesini öneriyor.
      <br/><br/>
      Kod'a eklenmesi gereken güvenlik önlemi: <br/><br/>
      Güvenlik Seviyesi: <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> 
      <br/><br/>
      <pre><code class="php">
        $id = mysql_real_escape_string($_GET[ 'id' ]); 
        // id değişkenine ekstra güvenlik önlemi getiriyoruz
        // mysql_real_escape_string() fonksiyonu ile girilen değerde ' varsa bunun yanına \ işareti getirerek işlevini kaldırıyor.
      </code></pre>
      <br/>
      <hr/>
      <br/>
      2- PDO ile kodlama yapılmasıÇok daha güvenilir bir web ortamı için PDO sınıfını kullanın.<br/>
      Aşağıdaki kodda PDO ile veri alımı gösterilmiştir.<br/><br/>
      Güvenlik Seviyesi: <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i>
      <br/><br/>
      
      <pre><code class="php">
        <div class="phpetiket">&lt;?php</div>
        if( isset( $_GET ) ) { //GET varsa aşağıdaki bloğu işle

        $id = mysql_real_escape_string($_GET[ 'id' ]); // id değişkenini mysql_real_escape_string() fonksiyonuna alarak ' meta karakterinin işlevini iptal ediyoruz.

        if(is_numeric($id)){ // id değeri sayı ise aşağıdaki bloğu işle
        
        $sqlsorgu = $db->prepare("SELECT * FROM uyeler WHERE id= :id"); // PDO yöntemiyle veritabanından verileri çekiyoruz.
        $sqlsorgu->execute(array(
        "id" => $_GET['id']
        ));

        $yazdir = $sqlsorgu->fetch(PDO::FETCH_ASSOC);

        if($sqlsorgu->rowCount() == 1){ // Sorgudan dönen kaç değer var. Eğer 1 tane varsa işlemleri gerçekleştir.

        $uyeid = $yazdir['id'];
        $uyeadi = $yazdir['uyeadi'];
        $sifre = $yazdir['sifre'];
        $mail = $yazdir['mail']; 

        <div class="phpetiket">?></div>
        <div class="phpetiket">&lt;?php</div> echo "Üye ID : ".$uyeid."<br><br>Üye Adı : ".$uyeadi."<br><br>Şifre : ".$sifre."<br><br>Mail : ".$mail;<div class="phpetiket">?></div>// Değişkenleri yazdır.
        <div class="phpetiket">&lt;?php</div>
      }
    }else{
    echo'Geçerli bir id giriniz';
  }
}

<div class="phpetiket">?></div>
</code></pre>
<br/><br/>
<i style="font-size:40px;"class="fa fa-user-secret" aria-hidden="true"></i> Ekstra güvenlik hamleleri: <br/><br/>

</div>
</div>
</div>
</div>
</div>
<div class="col-sm-6 liste_alani"> 
 <form  align="center" style="margin-bottom:20px;margin-top:8px;"action="" method="GET" class="form" name="form2">
  <input type="text" class="uyg" placeholder="ID giriniz" required="" name="id" style=""><br>	
  <input type="submit" class="btn btn-primary buton-mor gonder" name="sorgula" value="Sorgula">
</form>

<?php

			if( isset( $_GET ) ) { //GET varsa aşağıdaki bloğu işle
       
			$id =$_GET[ 'id' ]; // GET ile id değerini al

     
			$sqlsorgu = mysql_query("SELECT * FROM uyeler WHERE id='$id'"); //sql sorgusunu çalıştır
			if(mysql_num_rows($sqlsorgu)> 0){ // sorgudan cevap gelirse bu bloğu çalıştır.
       echo '<div class="col-sm-12" style="text-align:center;background:rgba(0,0,100,0.2); max-width:530px;border-radius:10px;">'.mysql_num_rows($sqlsorgu).' tane kullanıcı bulundu.</div>';
			while($yazdir=mysql_fetch_array($sqlsorgu)){ //
       extract($yazdir);
       $uyeid = $yazdir['id'];
       $uyeadi = $yazdir['uyeadi'];
       $sifre = $yazdir['sifre'];
       $mail = $yazdir['mail'];
       
       ?>
       <div class="col-sm-5" style="padding:10px;background:rgba(0,0,0,0.3);border-radius:10px;border:1px solid #000;min-width:250px;margin:5px;font-weight:bold;">
        
        
        <?php echo "Üye ID : ".$uyeid."<br><br>Üye Adı : ".$uyeadi."<br><br>Şifre : ".$sifre."<br><br>Mail : ".$mail;?> </div>
        <?php	}}else if($id != ''){
         
         ?><div class="col-sm-4" style="padding:10px;background:rgba(0,0,0,0.3);border-radius:10px;margin:5px; min-width:250px;"><?php echo "Bu id'ye sahip kullanıcı yok. ";?> </div><?php
       } }
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