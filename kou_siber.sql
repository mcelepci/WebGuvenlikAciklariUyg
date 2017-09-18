-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 30 Nis 2017, 03:55:33
-- Sunucu sürümü: 10.1.21-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kou_siber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `code`
--

CREATE TABLE `code` (
  `id` int(2) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kod` text COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `code`
--

INSERT INTO `code` (`id`, `isim`, `kod`) VALUES
(1, 'SQL Injection Uygulama Kodları', 'if( isset( $_GET ) ) { //GET varsa aşağıdaki bloğu işle   \n$id =$_GET[ \'id\' ]; // GET ile id değerini al \n$sqlsorgu = mysql_query(\"SELECT * FROM uyeler WHERE id=\'$id\'\"); //sql sorgusunu çalıştır\n\nif(mysql_num_rows($sqlsorgu)> 0){ // sorgudan cevap gelirse bu bloğu çalıştır.\n\necho mysql_num_rows($sqlsorgu).\' tane kullanıcı bulundu.\';\n\nwhile($yazdir=mysql_fetch_array($sqlsorgu)){ //gelen değerleri çıkar.\nextract($yazdir);\n$uyeid = $yazdir[\'id\'];\n$uyeadi = $yazdir[\'uyeadi\'];\n$sifre = $yazdir[\'sifre\'];\n$mail = $yazdir[\'mail\'];		\n		\necho \"Üye ID : \".$uyeid.\"<br><br>Üye Adı : \".$uyeadi.\"<br><br>Şifre : \".$sifre.\"<br><br>Mail : \".$mail;\n}\n}else if($id != \'\'){				\necho \"Bu id\'ye sahip kullanıcı yok. \";\n}\n}'),
(2, 'XSS Cross site Reflected Uygulama Kodları', 'if( isset( $_GET ) ) { //GET varsa aşağıdaki bloğu işle\n   \n$isim = trim($_GET[ \'isim\' ] );//Name değeri \"isim\" olan input\'tan gelen veriden trim() fonksiyonu ile boşlukları silip $isim değişkenine ata\n\n$yas  =	trim($_GET[ \'yas\' ] );//Name değeri \"yas\" olan input\'tan gelen veriden trim() fonksiyonu ile boşlukları silip $yas değişkenine ata\n\necho \"Merhaba ben \".$isim.\"   . \".$yas.\" yaşındayım.\"; // Alınan verileri yazdır\n}'),
(3, 'XSS Cross Site Stored Uygulama Kodları', 'if(isset($_POST[\'gonder2\'])){ //Eğer post varsa aşağıdaki işlemleri yap.\n\n$isim = $_POST[\'isim\'];//post ile gelen verileri alıyoruz.\n$mesaj = $_POST[\'mesaj\'];\n$tarih = date(\'d.m.Y H:i\'); //date fonksiyonu ile tarihi alıyoruz.\n\nif($isim != \'\'){ //İsim boş değilse işlemleri yap.\n\n$ekle = $db->prepare( \'INSERT INTO  mesajlar (id, isim, mesaj,tarih) VALUES ( null,:isim, :mesaj, :tarih );\' ); \n// SQL injection\'dan arındırmak amacıyla PDO sınıfı ile ekleme işlemi yaptırılıyor.\n\n$ekle->bindParam( \':isim\', $isim, PDO::PARAM_STR ); \n$ekle->bindParam( \':mesaj\', $mesaj, PDO::PARAM_STR );\n$ekle->bindParam( \':tarih\', $tarih, PDO::PARAM_STR ); \n$ekle->execute(); \n				\nif($ekle){\n\necho\'tamam\';//Eklediyse sayfayı yeniliyoruz.\n\n}else{\n\necho\'eklenemedi\';//Eklenemediyse ekrana eklenemedi yazdır.\n}\n}\n}'),
(4, 'Command Injection Uygulama Kodları', 'if( $_POST ) { \n$hedef = trim($_POST[ \'ip\' ]);// Gelen input post metodu ile çekilip boşluk silme fonksiyonuna tabi tutulmuştur. \n\nif( stristr( php_uname( \'s\' ), \'Windows NT\' ) ) {// Hangi işletim sistemi kullanıldığını anlamak amacı ile phpuname() fonksiyonu kullanılır.\n// stristr fonksiyonu ise string içinde belirtilen kelime geçiyor mu kontrolü yapar.\n// İşletim sistemi çıktısında windows NT geçiyor mu diye kontrol ettik\n\n// Windows işletim sisteminde çalışacak kod\n$cmd = shell_exec( \'ping \' . $hedef ); \n		\n}else { \n// *nix sistemlerde çalışacak kod\n   \n$cmd = shell_exec( \'ping  -c 4 \' . $hedef ); \n    } \n// cmd kodu çalıştıktan sonra dönecek sonuç bildirisi\n    \necho {$cmd}; \n} \n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(10) NOT NULL,
  `isim` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` text COLLATE utf8_turkish_ci NOT NULL,
  `tarih` varchar(20) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `isim`, `mesaj`, `tarih`) VALUES
(16, 'muhammet celepci', 'deneme yazısı yazıyorum.', ''),
(17, 'fahri', 'ben de boş boş yatıyorum', '21.04.2017 06:55'),
(55, '<marquee>afafma<marquee>', 'asdşas', '27.04.2017 17:12'),
(56, 'dada', '<script> alert(\"xss bulundu\");</script>', '27.04.2017 17:13');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(10) NOT NULL,
  `uyeadi` varchar(50) NOT NULL,
  `sifre` varchar(50) NOT NULL,
  `mail` varchar(75) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `uyeadi`, `sifre`, `mail`) VALUES
(1, 'muhammet', 'celepci', 'muhammet467@gmail.com'),
(2, 'fahri', 'karaca', 'fahrikaraca@gmail.com'),
(3, 'john', 'doe', 'johndoe@gmail.com'),
(4, 't', 'se7en', 'seven@gmail.com'),
(5, 'muhammet', 'celepci', 'muhammet467@gmail.com'),
(6, 'fahri', 'karaca', 'fahrikaraca@gmail.com'),
(7, 'john', 'doe', 'johndoe@gmail.com'),
(8, 't', 'se7en', 'seven@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetim`
--

CREATE TABLE `yonetim` (
  `id` int(6) NOT NULL,
  `isim` varchar(15) DEFAULT NULL,
  `soyad` varchar(15) DEFAULT NULL,
  `kullanici_adi` varchar(15) DEFAULT NULL,
  `sifre` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `yonetim`
--

INSERT INTO `yonetim` (`id`, `isim`, `soyad`, `kullanici_adi`, `sifre`) VALUES
(1, 'admin', 'admin', 'admin', 'celepci'),
(2, 'fahri', 'fahri', 'karaca', 'karaca123123'),
(3, 'tiger', 'tiger', 'seven', 'se7en777');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetim`
--
ALTER TABLE `yonetim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `code`
--
ALTER TABLE `code`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
