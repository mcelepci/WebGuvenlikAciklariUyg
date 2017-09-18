<?php

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
<link rel="stylesheet" type="text/css" href="css/hover-min.css">
<link href="https://fonts.googleapis.com/css?family=Armata|Baloo+Bhaina|Josefin+Slab|Righteous|Yellowtail" rel="stylesheet">

<link href="ok.png" rel="shortcut icon" >


</head>
<body style="background:#23241f; overflow-x:hidden;overflow-y:hidden;">

	<div class="container" style="margin-top:0px;padding-left:0;">
		<div class="col-sm-12">
			<pre>
				<code class="php" style="overflow-x:hidden;">

					<?php
					if( isset( $_GET ) ) { 
						
						$sqlsorgu = $db->prepare("SELECT * FROM code WHERE id= :id");
						
						$sqlsorgu->execute(array(
							"id" => $_GET['id']
							));
						$yazdir = $sqlsorgu->fetch(PDO::FETCH_ASSOC);
						
						$ad = $yazdir['isim'];
						$kod = $yazdir['kod'];
						?>
						<div class="container"> 
							<div class="col-sm-12" style="margin-top:-100px;"> 
								<div class="phpetiket">&lt;?php</div>
								<?php echo $kod;?><br/><div class="phpetiket">?&gt;</div>
							</div> 
						</div> 
						<?php
					}
					
					?>
					
				</code></pre>
			</div>
		</div>
		<div style="position:absolute;top:-10px; right:39%;color:#FFF;background:rgba(0,0,0,0.3);
		padding:20px;border-radius:0 0 10px 10px;font-weight:bold;">

		<?php echo $ad;?></div>


		<script src="js/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/languages/php.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/languages/sql.min.js"></script>

		<script>hljs.initHighlightingOnLoad();</script>
		<script src="js/script.js"></script>
		<script src="js/jquery.teletype.js"></script>

	</body>
	</html>