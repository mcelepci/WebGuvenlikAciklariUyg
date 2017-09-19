# ZAYIF (VULNERABLE) WEB UYGULAMASI

## 1.1. Problem Tanımı

Problemin genel tanımı kısaca, uygulamalı siber güvenlik eğitimlerinde eğitimde kullanılmak amacıyla, üzerinde test edilebilecek açıklar bulunduran web uygulaması hazırlamaktır. Uygulamada web güvenliği alanında tespit edilip literatürde birer isim edinmiş açıklardan SQL injection, XSS cross site scripting ve Command injection incelenip bunlara uygun örnekler hazırlanacaktır. Elbette bu bir eğitim olacağından örnekleri hazırlamak yetmeyecektir. Aynı zamanda bu zafiyetlerin nasıl sömürüleceği, nasıl giderileceği de gösterilecektir. Eğitimdeki öğrencinin de koda uygun önlemler alabilmesi amacıyla dilediğinde kodu görmesi sağlanacaktır. Projeye uygun veri tabanı oluşturulacak, bu veri tabanında uygun tablolar ve kolonlar oluşturulacak, dahası bu zafiyetlerle ilgili yoğun araştırma yapıp sağlıklı, tutarlı ve doğru bilgiler son kullanıcıya iletilecektir. 

<hr>


## 1.2. Yapılan Araştırmalar
Proje hazırlanırken yapılan araştırmalar şu başlıklar üzerinde yoğunlaşmıştır.

	PHP kodlama standartları <br>
	PHP de PDO veri tabanı sınıfı ile temel işlemler<br>
	PHP de güvenlik önlemleri<br>
	SQL injection nedir ve nasıl önlenir<br>
	XSS cross site scripting nedir ve nasıl önlenir<br>
	Command injection nedir ve nasıl önlenir<br>
	PHP de terminal işlemleri nedir ve ne zaman kullanılır<br>
	Bootstrap CSS kütüphanesi kodlama temelleri<br>
	XAMPP paket programı kullanımı<br>
	Web de güvenlik temelleri<br>
	Bu alanda yapılmış başarılı savunmasız web uygulamaları<br>

<hr>

## 1.3 Genel Yapı

Hazırlanan bu proje, siber güvenlik eğitimlerindeki Türkçe uygulama azlığını hedef alarak hazırlanmıştır. Web ortamlarında güvenlik önlemleri nasıl alınır, ne tür açıklar vardır, bu açıklar ne gibi tehlikeler oluşturur gibi soruların cevapları uygulamalı bir şekilde ve adım adım anlatılmıştır. 
Proje hazırlanırken temel web dilleri olan HTML5, CSS 3, JavaScript, PHP kullanılmıştır. Yerel ağda çalışmak için XAMPP paket sunucu programı kullanılmıştır. 
Bu uygulama nihayetinde bir eğitim için kullanılacağı için sadece uygulamayı oluşturmak yeterli olamayacaktır. Aynı zamanda yazdığımız kodların açıklamaları ve yazdığımız uygulamanın kullanımı açık bir şekilde kurulum dokümanında anlatılmıştır.
Projede birçok web site açığı incelenmiştir. Bunlar SQL injection, XSS cross site scripting ve Command injection olmak üzere 3 tanedir. Bu zafiyetler ayrı sayfalarda anlatılıp adım adım zafiyetin nasıl sömürüleceği gösterilmiştir.

### 1.3.1 SQL INJECTION

SQL injection, veri tabanına SQL ile veriler işlenirken, araya bir takım karakterlerin eklenmesiyle veri tabanına zararlı kodların enjekte edilmesine denir. Bu yöntem ile bir korsan, mevcut verilerle oynayabilir, sistem üzerindeki kayıtlara ulaşabilir, yeni kayıt ekleyebilir ve silebilir. Hatta yönetici yetkilerini dahi alabilir. SQL injection açığı yaratan karakterlerin programlama dillerinde bir karşılığı vardır. Bu SQL cümlecikleri oluşturulurken araya sıkıştırılan herhangi bir meta-karakter SQL Injection’ a neden olabilir.
Meta-karakter bir program için özel anlamı olan karakterlere verilen isimdir. Örnek olarak C temelli C#, Javascript, PHP gibi dillerde (\) backslash karakteri bir meta-karakterdir. Compiler (derleyici) ya da Interpreter (yorumlayıcı) bu karakteri görünce ondan sonraki karakteri ona göre işler. SQL için kritik meta-karakter (‘) tek tırnak’ tır. Çünkü SQL için tek tırnak (') art arda geldiği zaman arada bulunan değerler, string olarak tanımlanır. Diğer bir önemli meta-karakter ise (;) noktalı virgüldür, satırın bittiğini ve yeni satır başladığını bildirir.
SQL injection açığının üç türü bulunmaktadır. Bunlar;<br>

  Error based SQL injection(Hata tabanlı sql enjektesi), SQL union(SQL birleşimi),Blind SQL injection(Deneme-yanılma ile SQL enjektesi) dir.

### 1.3.2 XSS CROSS SITE SCRIPTING

Sunucu tarafından gönderilen betik (script) kodlarının, kullanıcı taraflı tarayıcıda yorumlanmasına Cross site scripting denir. Kelime manası “Çapraz Kod Çalıştırmak” dır. Çok basit bir zafiyettir. Çok büyük sistemlerde bile rastlanabilen bir türdür. Diğer güvenlik tehditlerinde olduğu gibi bu zafiyette yeterli denetime sahip olmadığı için oluşur.	
XSS sitelerin arama yorum gibi text inputlarında bulunan bir açıktır. Basitçe söyler isek html kod yazım özelliğinin açık unutulmasından meydana gelir.Günümüzde çok rastlanır ama bir o kadar da az kullanılır. Saldırılar, sql injectiondaki gibi server'a değil kullanıcıya yöneliktir. Temelde siteye javascript kodları ile etki etmek amaçtır. Hedef ise cookielerdir.
Birçok XSS yöntemi bulunmaktadır. Birbirine çok benzeyen bu yöntemlerden en çok kullanılan iki yöntemi incelenmiştir. Bunlar Reflected XSS ve Stored XSS’dir.

#### 1.3.2.1 REFLECTED XSS CROSS SITE SCRIPTING 

Yansıtılmış XSS yönteminde oluşturulan zararlı linkler, ziyaretçi kullanıcıya çeşitli iletişim araçları ile ulaştırarak tıklaması sağlanır. Bu sayede sanki güvenilir bir siteye gidiyormuş gibi gözükür ama aslında alt tarafta çalışan saldırgan siteye yönlenir. Bu şekilde cookie'ye ulaşılmış olur. Yapılan bu saldırı sadece XSS saldırısı yapan kullanıcı tarafından görülür. Ziyaretçiler bu saldırıyı göremezler.

#### 1.3.2.2 STORED XSS CROSS SITE SCRIPTING

Depolanan XSS saldırısı oldukça tehlikeli saldırı yöntemlerinden biridir. 
Daha çok forum tarzı sitelerde veya web sitelerindeki ziyaretçi defterlerinde bulunur.
Bu alanlara gönderilen XSS kodları veri tabanına kaydedilir. Sayfaya giren her kullanıcı için sayfayı görüntülerken XSS saldırısına maruz kalır.

### 1.3.3 COMMAND INJECTION

Geliştirilen web uygulamalarında bazen uygulamanın üzerinde çalıştığı işletim sisteminin terminalinde komut çalıştırma ihtiyacı hissedilir. Örnek verilirse PHP de shell_exec() , exec(), system() gibi fonksiyonlar ile komut satırında istenilen işlemin yapılması sağlanabilir. Ancak bu fonksiyonlara gönderilen parametreler kullanıcıdan alınıyorsa ve gerekli kontroller(kısıtlamalar) yapılmadıysa, kullanıcı istediği komutu yazarak sistemde çalıştırabilir. Bu yüzden kullanıcıdan gelen verilerin direkt olarak çalıştırılmadan önce kontrol edilip zararlı karakter ve verilerin ayıklanması gerekmektedir.

<hr>

> Kurulum Dökumanı : [Kurulum Dökümanı İçin Tıklayın](https://github.com/mcelepci/WebGuvenlikAciklariUyg/blob/master/KURULUM%20D%C3%96KUMANI.pdf)

<hr>

## 1.4 Referanslar

1.	H.Elbahadır.,2010, Hacking Interface, Kodlab Yayınları, s.133-181.
2.	S.Çakır.,2015, PHP 5.4, Kodlab Yayınları, s.315-329.
3.	U.Gelişken.,2017, A’dan Z’ye Yeni Nesil Tekniklerle Web Tasarım ve Web Programlama
4.	http://www.includekarabuk.com/kategoriler/DVWAUygulamasi/
5.	http://www.gurelahmet.com/dvwa-sql-injection-bölümü-cevapları-level-low/
6.	http://guysanonymous.org/showthread.php?tid=82
7.	http://www.turkhackteam.org/web-server-guvenligi/959955-xss-acigi-genis-anlatim.html
8.	http://www.turkhackteam.org/web-server-guvenligi/1182726-sql-injection-enjeksiyon-bypass-detayli-bilgi-beyin-firtinasi.html
9.	http://www.turkhackteam.org/web-server-guvenligi/968605-sql-injection-bypass-anlatimlarim.html
10.	http://www.gelistiricigunlugu.com/capraz-site-istek-csrf-aciklarinin-onune-gecmek/
11.	http://www.diaryofinjector.com/2015/08/trnak-isareti-filtreli-scriptlerde-sql.html
12.	https://alihassanpenetrationtester.blogspot.com.tr/2013/01/bypassing-xss-filters-advanced-xss.html
13.	https://gist.github.com/mbijon/1098477
14.	http://blog.btrisk.com/2015/10/DVWA-Security-LAB-Web-Uygulama-Guvenlik-Testleri.html
15.	http://www.covingtoninnovations.com/mc/winforunix.html
16.	http://www.teknolojik-blog.com/index.php/dos-komutlari/#&panel1-6
17.	https://www.olympos.net/belgeler/xss/xss-cross-site-scripting-nedir-ne-degildir-kullanimi-ve-korunma-yollari-187291.html
18.	http://bilgive.blogspot.com.tr/2015/08/xampp-nedir.html
19.	http://www.erbilen.net/pdo-kullanimi/
20.	http://php.net/manual/tr/pdo.exec.php
21.	http://www.scriptalert1.com
22.	https://www.owasp.org/index.php/Command_Injection
23.	https://www.youtube.com/watch?v=4EtLQvjju54
24.	http://www.dvwa.co.uk
25.	https://github.com/ethicalhack3r/DVWA
26.	https://www.youtube.com/watch?v=HAod8K5UNFk
27.	https://code2flow.com
28.	http://www.vertabelo.com
29.	https://www.youtube.com/watch?v=Oj4xgJN_waU





