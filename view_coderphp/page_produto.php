<?php
include __DIR__.'/../class_coderphp/produtos.php';
include __DIR__.'/../class/listarprodutos.php';
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mercado livre</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0"/>
	<link rel="stylesheet" href="coderphp_css/style.css">
	<link href="https://http2.mlstatic.com/frontend-assets/ml-web-navigation/ui-navigation/5.21.3/mercadolibre/180x180.png" rel="apple-touch-icon" data-head-react="true"/>
	<script src="https://kit.fontawesome.com/4245c9f638.js" crossorigin="anonymous"></script>
	<!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body style='background:rgb(237, 237, 237)'> 

	<div class="dsdsdlklk22">
		<main class="viewpadrao">

			<div class="headerdesktop">
				<div class="container-fluid">
				<div class="row">
					<div class="col-md-2">
						<a href=""><img src="coderphp_img/logo-pt__large_plus.png"></a>
					</div>

					<div class="col-md-6">
						<form  method="post" accept-charset="utf-8">
							<input required placeholder="Buscar produtos, marcas e muito mais..." type="text" class="pesquisar" name="">
							<button class="button"><i style='font-size:14px;color:rgb(160, 160, 160);' class="fa-solid fa-magnifying-glass"></i></button>
						</form>
					</div>

					<div class="col-md-4">
						<div style='float:right'> 
							<img border="0" height="40px" src="coderphp_img/D_NQ_618580-MLA52432822706_112022-OO.webp"></div>
						</div>

						<div style='margin-top:-20px;'>
							<div class="row">
								<div class="col-md-2">
									<div class="cpehover">
										<img style='cursor:pointer;' src="coderphp_img/meucep00002.png" alt="">
									</div>
								</div>

								<div class="col-md-6"><nav class="navulli">
									<ul><li>Categorias</li>
										<li>Ofertas do dia</li>
										<li>Histórico</li>
										<li>Supermercado</li>
										<li>Moda</li>
										<li>Vender</li>
										<li>Contato</li>

									</ul>
								</nav></div>
								<div class="col-md-4"><nav class="navulli1">
									<ul><li>Crie a sua conta</li>
										<li>Entre</li>
										<li>Compras</li>
										<li><img style='position: relative;top:-5px;' border="0px" height="30px" src="coderphp_img/carinnho000002.png" alt=""></li>


									</ul>
								</nav></div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<!-- MOBILE -->
			 <div class="headermobile">
			 	
			 	<img src="coderphp_img/headermobile.png" alt="">
			 </div>


			</main>
			
		</div>

<div class="heas" style='width:100%;height:auto;padding:1px;background:rgb(255, 241, 89)'>
	<p style='width:100%;height:0.10px;background:rgb(0 0 0 / 10%)'></p>
	<img style='margin-top:-12px;margin-left:5px;' src="coderphp_img/mobilecep.png" alt="">
</div>

<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.css">

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick-theme.css">
<section class="produtosmobile">
	<span style='color: rgba(0,0,0,.55);
    font-size: 11px;
    font-weight: 400;
    white-space: pre-wrap;float:left;'>Novo  |  +10mil vendidos</span>
	<img border="0px" height="14px;" style='float:right;' src="coderphp_img/estrela.png" alt="">
	<br>
	<h1 style='    color: rgba(0,0,0,.9);
    font-size: 17px;
    font-weight: 400;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
    line-height: 1.18;
    padding-bottom: 8px;
    padding-right: 10px;
    word-break: break-word;'><?= $_SESSION['title'] ?></h1>
    <img src="coderphp_img/recomenda.png" alt="">

    <br><br>



     <div class="carousel">
     	<div><center><img style='width:100%' src="<?= $_SESSION['fotos1'] ?>"  /></center></div>
  <div><center><img  style='width:100%' src="<?= $_SESSION['fotos2'] ?>"  /></div>
  <div><center><img style='width:100%' src="<?= $_SESSION['fotos3'] ?>" /></div>
  <div><center><img style='width:100%' src="<?= $_SESSION['fotos4'] ?>"  /></div>
  <div><center><img style='width:100%' src="<?= $_SESSION['fotos5'] ?>"  /></div>
 
     </div>


<script>
	$('.carousel').slick({
  dots: true,
  infinite: true,
  speed: 500,
  slidesToShow: 1,
  slidesToScroll: 1,
});
</script>

     <div>
     	<s style='font-size:16px;'>R$ <?= $_SESSION['preco'] ?></s>
						<p style="font-family: 'Roboto', sans-serif;font-size:2.2em;">R$ <?= $_SESSION['precofake'] ?>
						<br>

					</p>

					<span style='font-family: Geomanist-Medium;position:absolute;margin-top:-25px;'>em <span style='font-size:13px;font-weight:bold;color:rgb(64, 188, 124)'>12x R$ <?php echo  number_format($valor_ultima_parc, 2, ',', '.')?> sem juros</span></span>
					<span style='cursor:pointer;font-size:13px;margin-top:10px;color:rgb(52, 131, 250);'>Ver os meios de pagamento</span>

					<p style='margin-top:10px;font-size:11px;text-align:center;width:100px;border-radius:2px;color:white;background:rgb(52, 131, 250);padding:2px;'>OFERTA DO DIA</p>
     </div>



     <div class="desenho001">
					<img src="coderphp_img/fretegratis.png" alt="">
					<br><br>
					 <p style='font-weight: bold;'>Estoque disponível</p>
					 <span style='font-size:12px;'>Quantidade:
<span style='font-weight: bold;'>1 unidade</span>
<span style='color:rgb(210,210,210)'>(16 disponív...)</span></span>
<br><br>
					
					<button onclick="window.location.href='msllogin/cartv2.php?acao=add&id=<?= $_SESSION['id'] ?>'" class="comprar0002">Adicionar ao carrinho</button>
					<br><br>
					<img  src="coderphp_img/garantiar.png" alt="">
				</div>

				<div class="desenho001">
					<img class="img-fluid" src="coderphp_img/pagamento.png" alt="">

				</div>


				<div class="desenho001">
					<p>Informações da loja
					</p>

					<img style='float:left;' border="0" height="40px" src="https://http2.mlstatic.com/D_Q_NP_624834-MLB53253860959_012023-R.webp" alt="">







					<span style='margin-left:10px;font-size:13px;float:left;'>Nutry Suplementos <br>
						Loja oficial no Mercado Livre


					</span>
					<br><br>
					<img border="0px" height="120px"  src="coderphp_img/platinum.png" alt="">

				</div>

<p style='width:100%;height:1px;background:rgb(220,220,220);'></p>
						<br>
						<h4>Descrição</h4>

						<p>    <?= trim(nl2br($_SESSION['descricao']))  ?></p>
						


<p style='width:100%;height:1px;background:rgb(220,220,220);'></p>

<p style='font-size:25px;'>Também podem ser do seu interesse</p>
             	<?php 
                 $list = new produtos();
                 $carregar = $list->homeProduto11();

                 foreach($carregar as $pro001):
                 $url = $pro001['title'];
  $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
  $b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';  
  $url = utf8_decode($url);
  $url = strtr($url, utf8_decode($a), $b);
  $url = strip_tags(trim($url));
  $url = str_replace(" ","-",$url);
  $url = str_replace(array("-----","----","---","--"),"-",$url);

                 
             	?>

             	<div style='margin-bottom:20px;' class="col-md-3">
             		 <center><a href="produto&?id=<?= $pro001['id'] ?>&<?= $url ?>" style='text-decoration: none;'><img class="img-fluid"   src="<?= $pro001['fotos1'] ?>" alt=""></a></center>
  <br> 
             		 <p style='text-align:center;'><strong></strong><?= $pro001['title'] ?></strong></strong></p>
<center><span style='text-align:center;'><strong>R$ <?=  number_format($pro001['precofake'], 2, ',', '.') ?></strong></span></center>
             		<center> <a href="produto&?id=<?= $pro001['id'] ?>&<?= $url ?>" style='text-decoration: none;'>Ver produto</a></center>
             	

             	</div>

             	<?php endforeach;
             	?>
						<br>
						
						<iframe frameborder="0px" style='width:100%;height:1000px' src="https://produto.mercadolivre.com.br/noindex/catalog/reviews/<?= $_SESSION['idproduto'] ?>?noIndex=true&access=view_all&modal=true"></iframe>
			</div>
</section>







		<section class="cenennene">
			<div style='padding:20px;' class="container">
				<div class="row">

					<div class="col-md-1">	
						<div style='cursor:pointer;margin-bottom:10px;' class="card" >
							<img title="<?= $_SESSION['title']?>"  src="<?= $_SESSION['fotos1'] ?>" onmouseover="trocar()"  class="card-img-top img-fluid" >

						</div>	

						<div style='cursor:pointer;margin-bottom:10px;' class="card" >
							<img  title="<?= $_SESSION['title']?>"  src="<?= $_SESSION['fotos2'] ?>p" onmouseover="trocar()" class="card-img-top img-fluid change " >

						</div>	

						<div style='cursor:pointer;margin-bottom:10px;' class="card" >
							<img  title="<?= $_SESSION['title']?>"  src="<?= $_SESSION['fotos3'] ?>" onmouseover="trocar()" class="card-img-top img-fluid change " >

						</div>	

						<div style='cursor:pointer;margin-bottom:10px;' class="card" >
							<img title="<?= $_SESSION['title']?>"  src="<?= $_SESSION['fotos4'] ?>" onmouseover="trocar()" class="card-img-top img-fluid change " >

						</div>	

						<div style='cursor:pointer;margin-bottom:10px;' class="card" >
							<img   src="<?= $_SESSION['fotos5'] ?>" onmouseover="trocar()" class="card-img-top img-fluid change " >

						</div>	

					</div>	

					<div class="col-md-4">
						<br>	<br>	
						<img id="agni" class="img-fluid  img-change" src="<?= $_SESSION['fotos1'] ?>" title="<?= $_SESSION['title'] ?>" alt="<?= $_SESSION['title'] ?>">
					</div>

					<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
					<script>
						var imagens = [
							"<?= $_SESSION['fotos1']?>",
							"<?= $_SESSION['fotos2']?>",
							"<?= $_SESSION['fotos3']?>",
							"<?= $_SESSION['fotos4']?>",
   "<?= $_SESSION['fotos5']?>" // ← não tem vírgula
   ];

						function trocar(){
							var img = document.getElementById("agni");
							var img_src = img.src;
							var img_idx = imagens.indexOf(img_src);
							img.src = imagens[ img_idx == imagens.length-1 ? 0 : img_idx+1 ];
						}
					</script>

					<div class="col-md-4">
						<p style='color: rgba(0,0,0,.55);
						font-size: 13px;
						font-weight: 400;
						white-space: pre-wrap;'>Novo  |  +10mil vendidos</p>
						<p style="
						font-size: 20px;
						
						white-space: pre-wrap;text-align: left;"><?= $_SESSION['title'] ?>
					</p>
					<img style='position:absolute;margin-top:-10px;' src="coderphp_img/estrela.png" alt="">
					<br>
					<img src="coderphp_img/recomenda.png" alt="">
					<div>
						<s style='font-size:16px;'>R$ <?= $_SESSION['preco'] ?></s>
						<p style="font-family: 'Roboto', sans-serif;font-size:2.2em;">R$ <?= $_SESSION['precofake'] ?>
						<br>

					</p>

					<span style='font-family: Geomanist-Medium;position:absolute;margin-top:-25px;'>em <span style='font-size:13px;font-weight:bold;color:rgb(64, 188, 124)'>10x R$ <?= number_format($valor_ultima_parc, 2, ',', '.')  ?> sem juros</span></span>
					<span style='cursor:pointer;font-size:13px;margin-top:10px;color:rgb(52, 131, 250);'>Ver os meios de pagamento</span>

					<p style='margin-top:10px;font-size:11px;text-align:center;width:100px;border-radius:2px;color:white;background:rgb(52, 131, 250);padding:2px;'>OFERTA DO DIA</p>
				</div>
			</div>

			<div class="col-md-3">
				<div class="desenho001">
					<img src="coderphp_img/fretegratis.png" alt="">
					<br><br>
					 <p style='font-weight: bold;'>Estoque disponível</p>
					 <span style='font-size:12px;'>Quantidade:
<span style='font-weight: bold;'>1 unidade</span>
<span style='color:rgb(210,210,210)'>(16 disponív...)</span></span>
<br><br>
					
					<button onclick="window.location.href='msllogin/cartv2.php?acao=add&id=<?= $_SESSION['id'] ?>'" class="comprar0002">Adicionar ao carrinho</button>
					<br><br>
					<img  src="coderphp_img/garantiar.png" alt="">
				</div>

				<div class="desenho001">
					<img class="img-fluid" src="coderphp_img/pagamento.png" alt="">

				</div>


				<div class="desenho001">
					<p>Informações da loja
					</p>

					<img style='float:left;' border="0" height="40px" src="https://http2.mlstatic.com/D_Q_NP_624834-MLB53253860959_012023-R.webp" alt="">
					<span style='margin-left:10px;font-size:13px;float:left;'>Nutry Suplementos <br>
						Loja oficial no Mercado Livre


					</span>
					<br><br>
					<img border="0px" height="120px"  src="coderphp_img/platinum.png" alt="">

				</div>


			</div>

		</div>	
		<!-- DESCRICAO -->
		<section >
			<div style='position:relative;top:-360px;'> <div class="row">
				<div class="row">
					<div class="col-md-9">
						<p style='width:100%;height:1px;background:rgb(220,220,220);'></p>
						<br>
						<h4>Descrição</h4>

						<p>    <?= trim(nl2br($_SESSION['descricao']))  ?></p>

					</div>
					<br>
             <div class="row">
             	<p style='font-size:25px;'>Também podem ser do seu interesse</p>
             	<?php 
                 $list = new produtos();
                 $carregar = $list->homeProduto11();

                 foreach($carregar as $pro001):
                 $url = $pro001['title'];
  $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
  $b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';  
  $url = utf8_decode($url);
  $url = strtr($url, utf8_decode($a), $b);
  $url = strip_tags(trim($url));
  $url = str_replace(" ","-",$url);
  $url = str_replace(array("-----","----","---","--"),"-",$url);

                 
             	?>

             	<div style='margin-bottom:20px;' class="col-md-3">
             		 <center><a href="produto&?id=<?= $pro001['id'] ?>&<?= $url ?>" style='text-decoration: none;'><img border="0" height="120px"   src="<?= $pro001['fotos1'] ?>" alt=""></a></center>
  <br> 
             		 <p style='text-align:center;'><strong></strong><?= $pro001['title'] ?></strong></strong></p>
<center><span style='text-align:center;'><strong>R$ <?=  number_format($pro001['precofake'], 2, ',', '.') ?></strong></span></center>
             		<center> <a href="produto&?id=<?= $pro001['id'] ?>&<?= $url ?>" style='text-decoration: none;'>Ver produto</a></center>
             	

             	</div>

             	<?php endforeach;
             	?>

             	


             </div>
					<div class="col-md-9">
						<p style='width:100%;height:1px;background:rgb(220,220,220);'></p>
						<br>
						
						<iframe frameborder="0px" style='width:100%;height:1000px' src="https://produto.mercadolivre.com.br/noindex/catalog/reviews/<?= $_SESSION['idproduto'] ?>?noIndex=true&access=view_all&modal=true"></iframe>
					</div>
				</div>
			</div></div>
		</section>
	</div>
</section>




<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>	
</body>
</html>

