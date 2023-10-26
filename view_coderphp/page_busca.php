<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>





<script>
	$( document ).ready(function() {
		setTimeout(carregar, 6000);
	});

	function carregar() {
		$('#teste').show();
		document.getElementById("coderphp").style.display="none";
	}
</script>


<?php 

if(isset($_POST['saindo'])):
	$_SESSION['saindo'] =  $saindo = addslashes(htmlspecialchars_decode($_POST['saindo']));
	$_SESSION['indo'] = $indo = addslashes(htmlspecialchars_decode($_POST['indo']));
	 $_SESSION['ida'] = $ida = addslashes(htmlspecialchars_decode($_POST['ida']));
	 
	 $_SESSION['volta'] = $volta = addslashes(htmlspecialchars_decode($_POST['volta']));
	$_SESSION['passageiros'] = $passageiros = addslashes(htmlspecialchars_decode($_POST['passageiros']));

endif;

include "algoritmo/index.php";

?>




<section class="dasjdksajdkjsadcoderphpdsakjdskad">
	<div class="container">


		<br>
		<div class="row">

			<div class="col-md-2">
				<p style="font-size: 0.90rem;
				line-height: 1;color:rgb(230,230,230);">Origem</p>
				<p style="font-size:15px;color:white;font-weight: 600;"><?php if($_SESSION['saindo']):
				echo $_SESSION['saindo'];
				endif;  ?></p>
			</div>

			<div class="col-md-2">
				<p style="font-size: 0.90rem;
				line-height: 1;color:rgb(230,230,230);">Destino</p>
				<p style="font-size:15px;color:white;font-weight: 600;"><?php if($_SESSION['indo']):
				echo $_SESSION['indo'];
				endif;  ?></p>
			</div>


			<div class="col-md-2">
				<p style="font-size: 0.90rem;
				line-height: 1;color:rgb(230,230,230);">Ida</p>
				<p style="font-size:15px;color:white;font-weight: 600;"><?php if($_SESSION['ida']):
				echo $_SESSION['ida'];
				endif;  ?></p>
			</div>

			<div class="col-md-2">
				<?php 
				if(isset($_SESSION['volta'])):
					?>
					<p style="font-size: 0.90rem;
					line-height: 1;color:rgb(230,230,230);">Volta</p>
					<p style="font-size:15px;color:white;font-weight: 600;"><?php if($_SESSION['volta']):
					echo $_SESSION['volta'];
					endif;  ?></p>


					<?php
				endif;
				?>
			</div>

			<div class="col-md-2">
				<p style="font-size: 0.90rem;
				line-height: 1;color:rgb(230,230,230);">Passageiros</p>
				<p style="font-size:15px;color:white;font-weight: 600;"><?php if($_SESSION['passageiros']):
				echo $_SESSION['passageiros'];
				endif;  ?> Passageiro</p>
			</div>

			<div class="col-md-2">
				<i style="color:rgb(238, 86, 51);position: absolute;margin-top:15px;margin-left:15px;" class="fa-solid fa-magnifying-glass"></i>
				<a style="font-weight: bold;color:rgb(238, 86, 51);border-radius:8px;text-decoration:none;text-align: center;display:block;width:100%;height:auto;padding:12px;background:white;" href="#">NOVA BUSCA</a>
			</div>
		</div> </div>
	</section>




	<center><div id="coderphp" style="background:rgb(248, 246, 247);margin:0 auto !important;padding:30px;"><img class="askdlskdlslksdlsdklsadlksaklsdaldlklasdl" src="img/loading-search-airplane.gif" alt="">
		<p style="margin-top:10px;text-align:center;font-weight: 500;">Já vamos te apresentar os melhores preços para o seu destino!</p></div></center>




		<div id="teste" style="display:none;">


			<section class="bsucar0001">
				<div class="precosaeresscoderphp">
					<div class="row">
						<div class="col-md-8">
							<!-- COMEÇO DO CONTEUDO -->

							<form  >
								<div class="conteudooooooooo">
									<div class="row">
										<div class="col-md-2">

											<div class="d-flex justify-content-start"><span  style="
											font-weight: 700;
											font-size: 1.8rem;
											line-height: 3.1rem;color: #414042;">IDA</span></div>

										</div>

										<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
										font-size: 0.90rem;
										color: #414042;margin-left:"><strong><?php if($_SESSION['saindo']):
										echo $_SESSION['saindo'];
									endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['saindo']):
									echo $_SESSION['saindo'];
									endif;  ?></span>
								</span>

								<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
								<span><strong style="
								font-size: 0.90rem;
								color: #414042;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></strong> <br>
								<span style="font-size:12px;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></span></span></div></div>


							</div>

						</div>


						<!-- Escolher hora -->


						<div class="conteudooooooooo">
							<div class="row">
								<div class="col-md-2"> 
									<div style="margin-top:10px;">


										<input  class="form-check-input" type="radio" name="tipo" value="" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked" > 
										<span style="position:absolute;margin-top:2px;margin-left:20px;">Gol</span></div>

									</div>



									<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
									font-size: 0.90rem;
									color: #414042;margin-left:"><strong>08:55</strong> <br> 
								</span>

								<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


								<span><strong style="
								font-size: 0.90rem;
								color: #414042;">11:35</strong> <br>
							</span></div></div>
							<div class="col-md-2">
								<div class="d-flex justify-content-end">

									<img 
									style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

									<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
								</div>

							</div>
						</div>

					</div>
					<!-- Escolher hora -->


					<div class="conteudooooooooo">
						<div class="row">
							<div class="col-md-2"> 
								<div style="margin-top:10px;"><input  value="tam1"  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
									<span style="position:absolute;margin-top:2px;margin-left:20px;">Gol</span></div>

								</div>



								<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
								font-size: 0.90rem;
								color: #414042;margin-left:"><strong>11:35</strong> <br> 
							</span>

							<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


							<span><strong style="
							font-size: 0.90rem;
							color: #414042;">14:35</strong> <br>
						</span></div></div>
						<div class="col-md-2">
							<div class="d-flex justify-content-end">

								<img 
								style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

								<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
							</div>

						</div>
					</div>

				</div>
				<!-- Escolher hora -->

				
				<div class="conteudooooooooo">
					<div class="row">
						<div class="col-md-2"> 
							<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
								<span style="position:absolute;margin-top:2px;margin-left:20px;">Gol</span></div>

							</div>



							<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
							font-size: 0.90rem;
							color: #414042;margin-left:"><strong>14:20</strong> <br> 
						</span>

						<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


						<span><strong style="
						font-size: 0.90rem;
						color: #414042;">17:20</strong> <br>
					</span></div></div>
					<div class="col-md-2">
						<div class="d-flex justify-content-end">

							<img 
							style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

							<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
						</div>

					</div>
				</div>
			</form>
		</div>
		<!-- COMEÇO DO CONTEUDO -->
		<div class="conteudooooooooo">
			<div class="row">
				<div class="col-md-2">

					<div class="d-flex justify-content-start"><span  style="
					font-weight: 700;
					font-size: 1.8rem;
					line-height: 3.1rem;color: #414042;">Volta</span></div>

				</div>

				<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
				font-size: 0.90rem;
				color: #414042;margin-left:"><strong><?php if($_SESSION['indo']):
				echo $_SESSION['indo'];
			endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['indo']):
			echo $_SESSION['indo'];
			endif;  ?></span>
		</span>

		<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
		<span><strong style="
		font-size: 0.90rem;
		color: #414042;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></strong> <br>
		<span style="font-size:12px;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></span></span></div></div>


	</div>

</div>




<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked"  > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div><!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


</div>











<div class="col-md-4">
	<div class="conteudooooooooo1">
		<p style="font-weight:bold;font-size:20px;text-align:center;color:white">R$ <span style="font-size:30px !important;"><?= $minEconomica  ?></span></p>
		<p style="margin-top:-14px;text-align:center;color:white;">por adulto, sem taxas</p>
	</div>

	<!-- Preco -->
	<div class="conteudooooooooo2">
		<div class="row">
			<div class="col-md-6"><span style="font-size:13px;"><?= $passageiros ?> Adultos:</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ <?= $_SESSION['totalcompra1'] ?></span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de embarque</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de serviço</span>
			</div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span>
			</div>
		</div>
	</div>

	<!-- TOTAL -->
	<div class="conteudooooooooo3">
		<p style="position:relative;top:10px;float:left;"><strong>TOTAL</strong></p>
		<p style="position:relative;top:10px;float:right;"><strong>R$ <?= $_SESSION['totalcompra1'] ?></strong></p>
		<div style="clear:both;"></div>
	</div>
	<!-- DESCONTO -->
	<div class="conteudooooooooo4">
		<p style="text-align:center;color:rgb(41, 116, 86)"><span style="font-size:14px !important;"><strong>no pix com desconto </strong></span></p>
		<hr>
		<center><span style="font-size:12px;padding:5px;top:-29px;position:relative;width:50px;background:white;"> <strong>OU</strong></span></center>
		<div style="clear:both;"></div>
		<div style="margin-left:20%;"><i  style="position: relative;top:10px;float:left;" class="fa-solid fa-credit-card"></i></div>
		<p  style="margin-left:20px;float:left;font-size:14px;">  Em até 12x sem juros <br>
		no cartão de crédito</p>
		<div style="clear:both;"></div>



		<center>  <button onclick="window.location.href='passageiros?passageiros=<?= $passageiros?>&saindo=<?= $saindo ?>&ido=<?= $indo ?>&ida=<?= $ida ?>&volta=<?= $volta ?>&valor=<?= $_SESSION['totalcompra1'] ?>'" class="button0000000coderphp">REALIZAR PEDIDO</button></center>
		<br>
	</div>


	<!-- ACUMULE PONTOS -->
	<div class="conteudooooooooo5">
		<div class="row">
			<div class="col-md-2">

				<img style="margin-left:20px;margin-top:20px;" src="https://123milhas.com/img/icons/loyalty-badge.svg" alt="">
			</div>
			<div class="col-md-7">
				<p style="font-size:16px;margin-left:20px;margin-top:13px;color:white;">Acumule <span style="color:#ffb727;">1.964 pts</span> com
					o <strong>123fidelidade</strong></p>
				</div>
				<div class="col-md-3">
					<i style="margin-left:20px;margin-top:25px;color:white;" class="fa-solid fa-arrow-right"></i>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</section>

<!-- CONTEÚDO 2 -->
<section class="bsucar0001">
				<div class="precosaeresscoderphp">
					<div class="row">
						<div class="col-md-8">
							<!-- COMEÇO DO CONTEUDO -->

							<form  >
								<div class="conteudooooooooo">
									<div class="row">
										<div class="col-md-2">

											<div class="d-flex justify-content-start"><span  style="
											font-weight: 700;
											font-size: 1.8rem;
											line-height: 3.1rem;color: #414042;">IDA</span></div>

										</div>
										
										<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
										font-size: 0.90rem;
										color: #414042;margin-left:"><strong><?php if($_SESSION['saindo']):
										echo $_SESSION['saindo'];
									endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['saindo']):
									echo $_SESSION['saindo'];
									endif;  ?></span>
								</span>

								<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
								<span><strong style="
								font-size: 0.90rem;
								color: #414042;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></strong> <br>
								<span style="font-size:12px;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></span></span></div></div>


							</div>

						</div>


						<!-- Escolher hora -->

						
						<div class="conteudooooooooo">
							<div class="row">
								<div class="col-md-2"> 
									<div style="margin-top:10px;">


										<input  class="form-check-input" type="radio" name="tipo" value="<?= $data ='wissae'; ?>" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked" > 
										<span style="position:absolute;margin-top:2px;margin-left:20px;">Azul</span></div>

									</div>



									<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
									font-size: 0.90rem;
									color: #414042;margin-left:"><strong>08:55</strong> <br> 
								</span>

								<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


								<span><strong style="
								font-size: 0.90rem;
								color: #414042;">11:35</strong> <br>
							</span></div></div>
							<div class="col-md-2">
								<div class="d-flex justify-content-end">

									<img 
									style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

									<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
								</div>

							</div>
						</div>

					</div>
					<!-- Escolher hora -->

					
					<div class="conteudooooooooo">
						<div class="row">
							<div class="col-md-2"> 
								<div style="margin-top:10px;"><input  value="tam1"  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
									<span style="position:absolute;margin-top:2px;margin-left:20px;">Azul</span></div>

								</div>



								<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
								font-size: 0.90rem;
								color: #414042;margin-left:"><strong>11:35</strong> <br> 
							</span>

							<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


							<span><strong style="
							font-size: 0.90rem;
							color: #414042;">14:35</strong> <br>
						</span></div></div>
						<div class="col-md-2">
							<div class="d-flex justify-content-end">

								<img 
								style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

								<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
							</div>

						</div>
					</div>

				</div>
				<!-- Escolher hora -->

				
				<div class="conteudooooooooo">
					<div class="row">
						<div class="col-md-2"> 
							<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
								<span style="position:absolute;margin-top:2px;margin-left:20px;">Azul</span></div>

							</div>



							<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
							font-size: 0.90rem;
							color: #414042;margin-left:"><strong>14:20</strong> <br> 
						</span>

						<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


						<span><strong style="
						font-size: 0.90rem;
						color: #414042;">17:20</strong> <br>
					</span></div></div>
					<div class="col-md-2">
						<div class="d-flex justify-content-end">

							<img 
							style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

							<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
						</div>

					</div>
				</div>
			</form>
		</div>
		<!-- COMEÇO DO CONTEUDO -->
		<div class="conteudooooooooo">
			<div class="row">
				<div class="col-md-2">

					<div class="d-flex justify-content-start"><span  style="
					font-weight: 700;
					font-size: 1.8rem;
					line-height: 3.1rem;color: #414042;">Volta</span></div>

				</div>

				<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
				font-size: 0.90rem;
				color: #414042;margin-left:"><strong><?php if($_SESSION['indo']):
				echo $_SESSION['indo'];
			endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['indo']):
			echo $_SESSION['indo'];
			endif;  ?></span>
		</span>

		<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
		<span><strong style="
		font-size: 0.90rem;
		color: #414042;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></strong> <br>
		<span style="font-size:12px;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></span></span></div></div>


	</div>

</div>




<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked"  > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div><!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


</div>











<div class="col-md-4">
	<div class="conteudooooooooo1">
		<p style="font-weight:bold;font-size:20px;text-align:center;color:white">R$ <span style="font-size:30px !important;"><?= $maxEconomica   ?></span></p>
		<p style="margin-top:-14px;text-align:center;color:white;">por adulto, sem taxas</p>
	</div>

	<!-- Preco -->
	<div class="conteudooooooooo2">
		<div class="row">
			<div class="col-md-6"><span style="font-size:13px;"><?= $passageiros ?> Adultos:</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ <?= $_SESSION['totalcompra2'] ?></span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de embarque</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de serviço</span>
			</div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span>
			</div>
		</div>
	</div>

	<!-- TOTAL -->
	<div class="conteudooooooooo3">
		<p style="position:relative;top:10px;float:left;"><strong>TOTAL</strong></p>
		<p style="position:relative;top:10px;float:right;"><strong>R$ <?= $_SESSION['totalcompra2'] ?></strong></p>
		<div style="clear:both;"></div>
	</div>
	<!-- DESCONTO -->
	<div class="conteudooooooooo4">
		<p style="text-align:center;color:rgb(41, 116, 86)"><span style="font-size:14px !important;"><strong>no pix com desconto </strong></span></p>
		<hr>
		<center><span style="font-size:12px;padding:5px;top:-29px;position:relative;width:50px;background:white;"> <strong>OU</strong></span></center>
		<div style="clear:both;"></div>
		<div style="margin-left:20%;"><i  style="position: relative;top:10px;float:left;" class="fa-solid fa-credit-card"></i></div>
		<p  style="margin-left:20px;float:left;font-size:14px;">  Em até 12x sem juros <br>
		no cartão de crédito</p>
		<div style="clear:both;"></div>



		<center>  <button onclick="window.location.href='passageiros?passageiros=<?= $passageiros?>&saindo=<?= $saindo ?>&ido=<?= $indo ?>&ida=<?= $ida ?>&volta=<?= $volta ?>&valor=<?= $_SESSION['totalcompra2'] ?>'" class="button0000000coderphp">REALIZAR PEDIDO</button></center>
		<br>
	</div>


	<!-- ACUMULE PONTOS -->
	<div class="conteudooooooooo5">
		<div class="row">
			<div class="col-md-2">

				<img style="margin-left:20px;margin-top:20px;" src="https://123milhas.com/img/icons/loyalty-badge.svg" alt="">
			</div>
			<div class="col-md-7">
				<p style="font-size:16px;margin-left:20px;margin-top:13px;color:white;">Acumule <span style="color:#ffb727;">1.964 pts</span> com
					o <strong>123fidelidade</strong></p>
				</div>
				<div class="col-md-3">
					<i style="margin-left:20px;margin-top:25px;color:white;" class="fa-solid fa-arrow-right"></i>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</section>

<!-- FIM CONTEÚDO2 -->





<!-- COMEÇO DO CONTEÚDO3 -->

<!-- CONTEÚDO 2 -->
<section class="bsucar0001">
				<div class="precosaeresscoderphp">
					<div class="row">
						<div class="col-md-8">
							<!-- COMEÇO DO CONTEUDO -->

							<form  >
								<div class="conteudooooooooo">
									<div class="row">
										<div class="col-md-2">

											<div class="d-flex justify-content-start"><span  style="
											font-weight: 700;
											font-size: 1.8rem;
											line-height: 3.1rem;color: #414042;">IDA</span></div>

										</div>
										
										<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
										font-size: 0.90rem;
										color: #414042;margin-left:"><strong><?php if($_SESSION['saindo']):
										echo $_SESSION['saindo'];
									endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['saindo']):
									echo $_SESSION['saindo'];
									endif;  ?></span>
								</span>

								<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
								<span><strong style="
								font-size: 0.90rem;
								color: #414042;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></strong> <br>
								<span style="font-size:12px;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></span></span></div></div>


							</div>

						</div>


						<!-- Escolher hora -->

						
						<div class="conteudooooooooo">
							<div class="row">
								<div class="col-md-2"> 
									<div style="margin-top:10px;">


										<input  class="form-check-input" type="radio" name="tipo" value="<?= $data ='wissae'; ?>" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked" > 
										<span style="position:absolute;margin-top:2px;margin-left:20px;">Latam</span></div>

									</div>



									<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
									font-size: 0.90rem;
									color: #414042;margin-left:"><strong>08:55</strong> <br> 
								</span>

								<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


								<span><strong style="
								font-size: 0.90rem;
								color: #414042;">11:35</strong> <br>
							</span></div></div>
							<div class="col-md-2">
								<div class="d-flex justify-content-end">

									<img 
									style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

									<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
								</div>

							</div>
						</div>

					</div>
					<!-- Escolher hora -->

					
					<div class="conteudooooooooo">
						<div class="row">
							<div class="col-md-2"> 
								<div style="margin-top:10px;"><input  value="tam1"  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
									<span style="position:absolute;margin-top:2px;margin-left:20px;">Latam</span></div>

								</div>



								<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
								font-size: 0.90rem;
								color: #414042;margin-left:"><strong>11:35</strong> <br> 
							</span>

							<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


							<span><strong style="
							font-size: 0.90rem;
							color: #414042;">14:35</strong> <br>
						</span></div></div>
						<div class="col-md-2">
							<div class="d-flex justify-content-end">

								<img 
								style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

								<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
							</div>

						</div>
					</div>

				</div>
				<!-- Escolher hora -->

				
				<div class="conteudooooooooo">
					<div class="row">
						<div class="col-md-2"> 
							<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
								<span style="position:absolute;margin-top:2px;margin-left:20px;">Latam</span></div>

							</div>



							<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
							font-size: 0.90rem;
							color: #414042;margin-left:"><strong>14:20</strong> <br> 
						</span>

						<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


						<span><strong style="
						font-size: 0.90rem;
						color: #414042;">17:20</strong> <br>
					</span></div></div>
					<div class="col-md-2">
						<div class="d-flex justify-content-end">

							<img 
							style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

							<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
						</div>

					</div>
				</div>
			</form>
		</div>
		<!-- COMEÇO DO CONTEUDO -->
		<div class="conteudooooooooo">
			<div class="row">
				<div class="col-md-2">

					<div class="d-flex justify-content-start"><span  style="
					font-weight: 700;
					font-size: 1.8rem;
					line-height: 3.1rem;color: #414042;">Volta</span></div>

				</div>

				<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
				font-size: 0.90rem;
				color: #414042;margin-left:"><strong><?php if($_SESSION['indo']):
				echo $_SESSION['indo'];
			endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['indo']):
			echo $_SESSION['indo'];
			endif;  ?></span>
		</span>

		<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
		<span><strong style="
		font-size: 0.90rem;
		color: #414042;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></strong> <br>
		<span style="font-size:12px;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></span></span></div></div>


	</div>

</div>




<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked"  > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div><!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


</div>











<div class="col-md-4">
	<div class="conteudooooooooo1">
		<p style="font-weight:bold;font-size:20px;text-align:center;color:white">R$ <span style="font-size:30px !important;"><?= $minExecutiva   ?></span></p>
		<p style="margin-top:-14px;text-align:center;color:white;">por adulto, sem taxas</p>
	</div>

	<!-- Preco -->
	<div class="conteudooooooooo2">
		<div class="row">
			<div class="col-md-6"><span style="font-size:13px;"><?= $passageiros ?> Adultos:</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ <?= $_SESSION['totalcompra3'] ?></span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de embarque</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de serviço</span>
			</div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span>
			</div>
		</div>
	</div>

	<!-- TOTAL -->
	<div class="conteudooooooooo3">
		<p style="position:relative;top:10px;float:left;"><strong>TOTAL</strong></p>
		<p style="position:relative;top:10px;float:right;"><strong>R$ <?= $_SESSION['totalcompra3'] ?></strong></p>
		<div style="clear:both;"></div>
	</div>
	<!-- DESCONTO -->
	<div class="conteudooooooooo4">
		<p style="text-align:center;color:rgb(41, 116, 86)"><span style="font-size:14px !important;"><strong>no pix com desconto </strong></span></p>
		<hr>
		<center><span style="font-size:12px;padding:5px;top:-29px;position:relative;width:50px;background:white;"> <strong>OU</strong></span></center>
		<div style="clear:both;"></div>
		<div style="margin-left:20%;"><i  style="position: relative;top:10px;float:left;" class="fa-solid fa-credit-card"></i></div>
		<p  style="margin-left:20px;float:left;font-size:14px;">  Em até 12x sem juros <br>
		no cartão de crédito</p>
		<div style="clear:both;"></div>



		<center>  <button onclick="window.location.href='passageiros?passageiros=<?= $passageiros?>&saindo=<?= $saindo ?>&ido=<?= $indo ?>&ida=<?= $ida ?>&volta=<?= $volta ?>&valor=<?= $_SESSION['totalcompra3'] ?>'" class="button0000000coderphp">REALIZAR PEDIDO</button></center>
		<br>
	</div>


	<!-- ACUMULE PONTOS -->
	<div class="conteudooooooooo5">
		<div class="row">
			<div class="col-md-2">

				<img style="margin-left:20px;margin-top:20px;" src="https://123milhas.com/img/icons/loyalty-badge.svg" alt="">
			</div>
			<div class="col-md-7">
				<p style="font-size:16px;margin-left:20px;margin-top:13px;color:white;">Acumule <span style="color:#ffb727;">1.964 pts</span> com
					o <strong>123fidelidade</strong></p>
				</div>
				<div class="col-md-3">
					<i style="margin-left:20px;margin-top:25px;color:white;" class="fa-solid fa-arrow-right"></i>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</section>

<!-- FIM CONTEÚDO3 -->



<!-- COMEÇO DO CONTEÚDO4 -->

<!-- COMEÇO DO CONTEÚDO3 -->

<!-- CONTEÚDO 2 -->
<section class="bsucar0001">
				<div class="precosaeresscoderphp">
					<div class="row">
						<div class="col-md-8">
							<!-- COMEÇO DO CONTEUDO -->

							<form  >
								<div class="conteudooooooooo">
									<div class="row">
										<div class="col-md-2">

											<div class="d-flex justify-content-start"><span  style="
											font-weight: 700;
											font-size: 1.8rem;
											line-height: 3.1rem;color: #414042;">IDA</span></div>

										</div>
										
										<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
										font-size: 0.90rem;
										color: #414042;margin-left:"><strong><?php if($_SESSION['saindo']):
										echo $_SESSION['saindo'];
									endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['saindo']):
									echo $_SESSION['saindo'];
									endif;  ?></span>
								</span>

								<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
								<span><strong style="
								font-size: 0.90rem;
								color: #414042;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></strong> <br>
								<span style="font-size:12px;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></span></span></div></div>


							</div>

						</div>


						<!-- Escolher hora -->

						
						<div class="conteudooooooooo">
							<div class="row">
								<div class="col-md-2"> 
									<div style="margin-top:10px;">


										<input  class="form-check-input" type="radio" name="tipo" value="<?= $data ='wissae'; ?>" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked" > 
										<span style="position:absolute;margin-top:2px;margin-left:20px;">Azul</span></div>

									</div>



									<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
									font-size: 0.90rem;
									color: #414042;margin-left:"><strong>08:55</strong> <br> 
								</span>

								<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


								<span><strong style="
								font-size: 0.90rem;
								color: #414042;">11:35</strong> <br>
							</span></div></div>
							<div class="col-md-2">
								<div class="d-flex justify-content-end">

									<img 
									style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

									<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
								</div>

							</div>
						</div>

					</div>
					<!-- Escolher hora -->

					
					<div class="conteudooooooooo">
						<div class="row">
							<div class="col-md-2"> 
								<div style="margin-top:10px;"><input  value="tam1"  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
									<span style="position:absolute;margin-top:2px;margin-left:20px;">Azul</span></div>

								</div>



								<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
								font-size: 0.90rem;
								color: #414042;margin-left:"><strong>11:35</strong> <br> 
							</span>

							<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


							<span><strong style="
							font-size: 0.90rem;
							color: #414042;">14:35</strong> <br>
						</span></div></div>
						<div class="col-md-2">
							<div class="d-flex justify-content-end">

								<img 
								style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

								<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
							</div>

						</div>
					</div>

				</div>
				<!-- Escolher hora -->

				
				<div class="conteudooooooooo">
					<div class="row">
						<div class="col-md-2"> 
							<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
								<span style="position:absolute;margin-top:2px;margin-left:20px;">Azul</span></div>

							</div>



							<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
							font-size: 0.90rem;
							color: #414042;margin-left:"><strong>14:20</strong> <br> 
						</span>

						<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


						<span><strong style="
						font-size: 0.90rem;
						color: #414042;">17:20</strong> <br>
					</span></div></div>
					<div class="col-md-2">
						<div class="d-flex justify-content-end">

							<img 
							style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

							<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
						</div>

					</div>
				</div>
			</form>
		</div>
		<!-- COMEÇO DO CONTEUDO -->
		<div class="conteudooooooooo">
			<div class="row">
				<div class="col-md-2">

					<div class="d-flex justify-content-start"><span  style="
					font-weight: 700;
					font-size: 1.8rem;
					line-height: 3.1rem;color: #414042;">Volta</span></div>

				</div>

				<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
				font-size: 0.90rem;
				color: #414042;margin-left:"><strong><?php if($_SESSION['indo']):
				echo $_SESSION['indo'];
			endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['indo']):
			echo $_SESSION['indo'];
			endif;  ?></span>
		</span>

		<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
		<span><strong style="
		font-size: 0.90rem;
		color: #414042;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></strong> <br>
		<span style="font-size:12px;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></span></span></div></div>


	</div>

</div>




<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked"  > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div><!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Tam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


</div>











<div class="col-md-4">
	<div class="conteudooooooooo1">
		<p style="font-weight:bold;font-size:20px;text-align:center;color:white">R$ <span style="font-size:30px !important;"><?= $minPrimeira   ?></span></p>
		<p style="margin-top:-14px;text-align:center;color:white;">por adulto, sem taxas</p>
	</div>

	<!-- Preco -->
	<div class="conteudooooooooo2">
		<div class="row">
			<div class="col-md-6"><span style="font-size:13px;"><?= $passageiros ?> Adultos:</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ <?= $_SESSION['totalcompra4'] ?></span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de embarque</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de serviço</span>
			</div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span>
			</div>
		</div>
	</div>

	<!-- TOTAL -->
	<div class="conteudooooooooo3">
		<p style="position:relative;top:10px;float:left;"><strong>TOTAL</strong></p>
		<p style="position:relative;top:10px;float:right;"><strong>R$ <?= $_SESSION['totalcompra4'] ?></strong></p>
		<div style="clear:both;"></div>
	</div>
	<!-- DESCONTO -->
	<div class="conteudooooooooo4">
		<p style="text-align:center;color:rgb(41, 116, 86)"><span style="font-size:14px !important;"><strong>no pix com desconto </strong></span></p>
		<hr>
		<center><span style="font-size:12px;padding:5px;top:-29px;position:relative;width:50px;background:white;"> <strong>OU</strong></span></center>
		<div style="clear:both;"></div>
		<div style="margin-left:20%;"><i  style="position: relative;top:10px;float:left;" class="fa-solid fa-credit-card"></i></div>
		<p  style="margin-left:20px;float:left;font-size:14px;">  Em até 12x sem juros <br>
		no cartão de crédito</p>
		<div style="clear:both;"></div>



		<center>  <button onclick="window.location.href='passageiros?passageiros=<?= $passageiros?>&saindo=<?= $saindo ?>&ido=<?= $indo ?>&ida=<?= $ida ?>&volta=<?= $volta ?>&valor=<?= $_SESSION['totalcompra4'] ?>'" class="button0000000coderphp">REALIZAR PEDIDO</button></center>
		<br>
	</div>


	<!-- ACUMULE PONTOS -->
	<div class="conteudooooooooo5">
		<div class="row">
			<div class="col-md-2">

				<img style="margin-left:20px;margin-top:20px;" src="https://123milhas.com/img/icons/loyalty-badge.svg" alt="">
			</div>
			<div class="col-md-7">
				<p style="font-size:16px;margin-left:20px;margin-top:13px;color:white;">Acumule <span style="color:#ffb727;">1.964 pts</span> com
					o <strong>123fidelidade</strong></p>
				</div>
				<div class="col-md-3">
					<i style="margin-left:20px;margin-top:25px;color:white;" class="fa-solid fa-arrow-right"></i>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</section>

<!-- FIM CONTEÚDO4 -->



<!-- CONTEÚDO 5 -->
<section class="bsucar0001">
				<div class="precosaeresscoderphp">
					<div class="row">
						<div class="col-md-8">
							<!-- COMEÇO DO CONTEUDO -->

							<form  >
								<div class="conteudooooooooo">
									<div class="row">
										<div class="col-md-2">

											<div class="d-flex justify-content-start"><span  style="
											font-weight: 700;
											font-size: 1.8rem;
											line-height: 3.1rem;color: #414042;">IDA</span></div>

										</div>
										
										<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
										font-size: 0.90rem;
										color: #414042;margin-left:"><strong><?php if($_SESSION['saindo']):
										echo $_SESSION['saindo'];
									endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['saindo']):
									echo $_SESSION['saindo'];
									endif;  ?></span>
								</span>

								<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
								<span><strong style="
								font-size: 0.90rem;
								color: #414042;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></strong> <br>
								<span style="font-size:12px;"><?php if($_SESSION['indo']):
								echo $_SESSION['indo'];
								endif;  ?></span></span></div></div>


							</div>

						</div>


						<!-- Escolher hora -->

						
						<div class="conteudooooooooo">
							<div class="row">
								<div class="col-md-2"> 
									<div style="margin-top:10px;">


										<input  class="form-check-input" type="radio" name="tipo" value="<?= $data ='wissae'; ?>" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked" > 
										<span style="position:absolute;margin-top:2px;margin-left:20px;">Azul</span></div>

									</div>



									<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
									font-size: 0.90rem;
									color: #414042;margin-left:"><strong>08:55</strong> <br> 
								</span>

								<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


								<span><strong style="
								font-size: 0.90rem;
								color: #414042;">11:35</strong> <br>
							</span></div></div>
							<div class="col-md-2">
								<div class="d-flex justify-content-end">

									<img 
									style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

									<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
								</div>

							</div>
						</div>

					</div>
					<!-- Escolher hora -->

					
					<div class="conteudooooooooo">
						<div class="row">
							<div class="col-md-2"> 
								<div style="margin-top:10px;"><input  value="tam1"  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
									<span style="position:absolute;margin-top:2px;margin-left:20px;">Azul</span></div>

								</div>



								<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
								font-size: 0.90rem;
								color: #414042;margin-left:"><strong>11:35</strong> <br> 
							</span>

							<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


							<span><strong style="
							font-size: 0.90rem;
							color: #414042;">14:35</strong> <br>
						</span></div></div>
						<div class="col-md-2">
							<div class="d-flex justify-content-end">

								<img 
								style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

								<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
							</div>

						</div>
					</div>

				</div>
				<!-- Escolher hora -->

				
				<div class="conteudooooooooo">
					<div class="row">
						<div class="col-md-2"> 
							<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 
								<span style="position:absolute;margin-top:2px;margin-left:20px;">Azul</span></div>

							</div>



							<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
							font-size: 0.90rem;
							color: #414042;margin-left:"><strong>14:20</strong> <br> 
						</span>

						<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


						<span><strong style="
						font-size: 0.90rem;
						color: #414042;">17:20</strong> <br>
					</span></div></div>
					<div class="col-md-2">
						<div class="d-flex justify-content-end">

							<img 
							style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

							<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
						</div>

					</div>
				</div>
			</form>
		</div>
		<!-- COMEÇO DO CONTEUDO -->
		<div class="conteudooooooooo">
			<div class="row">
				<div class="col-md-2">

					<div class="d-flex justify-content-start"><span  style="
					font-weight: 700;
					font-size: 1.8rem;
					line-height: 3.1rem;color: #414042;">Volta</span></div>

				</div>

				<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
				font-size: 0.90rem;
				color: #414042;margin-left:"><strong><?php if($_SESSION['indo']):
				echo $_SESSION['indo'];
			endif;  ?></strong> <br> <span style="float:right;"><?php if($_SESSION['indo']):
			echo $_SESSION['indo'];
			endif;  ?></span>
		</span>

		<span> <i style="margin-top:10px;font-size:20px;margin-left:20px;margin-right:20px;" class="fa-solid fa-arrow-right"></i> </span>
		<span><strong style="
		font-size: 0.90rem;
		color: #414042;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></strong> <br>
		<span style="font-size:12px;"><?php if($_SESSION['saindo']):
		echo $_SESSION['saindo'];
		endif;  ?></span></span></div></div>


	</div>

</div>




<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked"  > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Latam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


<!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Latam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div><!-- Escolher hora -->


<div class="conteudooooooooo">
	<div class="row">
		<div class="col-md-2"> 
			<div style="margin-top:10px;"><input  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 
				<span style="position:absolute;margin-top:2px;margin-left:20px;">Latam</span></div>

			</div>



			<div class="col-md-8"><div class="d-flex justify-content-center"><span style="
			font-size: 0.90rem;
			color: #414042;margin-left:"><strong>12:55</strong> <br> 
		</span>

		<span style="font-weight:500;color:rgb(234, 62, 53);font-size:16px;margin-left:25px;margin-right:20px">  <br>  <img style="margin-top:-25px;" border="0" height="30px" src="img/direto.png" alt=""></span>


		<span><strong style="
		font-size: 0.90rem;
		color: #414042;">02:35</strong> <br>
	</span></div></div>
	<div class="col-md-2">
		<div class="d-flex justify-content-end">

			<img 
			style="margin-top:8px;margin-right:20px;" border="0" height="30px" src="img/malas.png" alt="">

			<i style="cursor:pointer;margin-top:15px;" class="fa-solid fa-circle-info"></i>
		</div>

	</div>
</div>

</div>


</div>











<div class="col-md-4">
	<div class="conteudooooooooo1">
		<p style="font-weight:bold;font-size:20px;text-align:center;color:white">R$ <span style="font-size:30px !important;"><?= $maxPrimeira    ?></span></p>
		<p style="margin-top:-14px;text-align:center;color:white;">por adulto, sem taxas</p>
	</div>

	<!-- Preco -->
	<div class="conteudooooooooo2">
		<div class="row">
			<div class="col-md-6"><span style="font-size:13px;"><?= $passageiros ?> Adultos:</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ <?= $_SESSION['totalcompra5'] ?></span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de embarque</span></div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span></div>
			<div class="col-md-6"><span style="font-size:13px;">Taxa de serviço</span>
			</div>
			<div class="col-md-6"><span style="float:right;font-size:13px">R$ 0</span>
			</div>
		</div>
	</div>

	<!-- TOTAL -->
	<div class="conteudooooooooo3">
		<p style="position:relative;top:10px;float:left;"><strong>TOTAL</strong></p>
		<p style="position:relative;top:10px;float:right;"><strong>R$ <?= $_SESSION['totalcompra5'] ?></strong></p>
		<div style="clear:both;"></div>
	</div>
	<!-- DESCONTO -->
	<div class="conteudooooooooo4">
		<p style="text-align:center;color:rgb(41, 116, 86)"><span style="font-size:14px !important;"><strong>no pix com desconto </strong></span></p>
		<hr>
		<center><span style="font-size:12px;padding:5px;top:-29px;position:relative;width:50px;background:white;"> <strong>OU</strong></span></center>
		<div style="clear:both;"></div>
		<div style="margin-left:20%;"><i  style="position: relative;top:10px;float:left;" class="fa-solid fa-credit-card"></i></div>
		<p  style="margin-left:20px;float:left;font-size:14px;">  Em até 12x sem juros <br>
		no cartão de crédito</p>
		<div style="clear:both;"></div>



		<center>  <button onclick="window.location.href='passageiros?passageiros=<?= $passageiros?>&saindo=<?= $saindo ?>&ido=<?= $indo ?>&ida=<?= $ida ?>&volta=<?= $volta ?>&valor=<?= $_SESSION['totalcompra5'] ?>'" class="button0000000coderphp">REALIZAR PEDIDO</button></center>
		<br>
	</div>


	<!-- ACUMULE PONTOS -->
	<div class="conteudooooooooo5">
		<div class="row">
			<div class="col-md-2">

				<img style="margin-left:20px;margin-top:20px;" src="https://123milhas.com/img/icons/loyalty-badge.svg" alt="">
			</div>
			<div class="col-md-7">
				<p style="font-size:16px;margin-left:20px;margin-top:13px;color:white;">Acumule <span style="color:#ffb727;">1.964 pts</span> com
					o <strong>123fidelidade</strong></p>
				</div>
				<div class="col-md-3">
					<i style="margin-left:20px;margin-top:25px;color:white;" class="fa-solid fa-arrow-right"></i>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</section>

<!-- FIM CONTEÚDO5 -->

</div>