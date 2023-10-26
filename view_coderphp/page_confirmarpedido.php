<?php 
$gerar_qrcode=true;
date_default_timezone_set('America/Sao_Paulo');
$date =  date('d/m/Y', time());

$upper = uniqid(implode('', range('A', 'Z'))); // ABCDEFGHIJKLMNOPQRSTUVWXYZ

$nums = uniqid(implode('', range(0, 9))); // 0123456789

$alphaNumeric = $upper.$nums; // ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789
$string = '';
$len = 3; // numero de chars
for($i = 0; $i < $len; $i++) {
    $string .= $alphaNumeric[rand(0, strlen($alphaNumeric) - 1)];
}


$upper1 = uniqid(implode('', range('Z', 'A'))); // ABCDEFGHIJKLMNOPQRSTUVWXYZ

$nums1 = uniqid(implode('', range(0, 9))); // 0123456789

$alphaNumeric1 = $upper1.$nums1; // ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789
$string1 = '';
$len1 = 3; // numero de chars
for($i = 0; $i < $len1; $i++) {
    $string1 .= $alphaNumeric[rand(0, strlen($alphaNumeric) - 1)];
}

?>
<script>	
	var min, seg;		min = 50;		seg = 1		
	function relogio(){			
		if((min > 0) || (seg > 0)){				
			if(seg == 0){					
				seg = 59;					
				min = min - 1	
			}				
			else{					
				seg = seg - 1;				
			}				
			if(min.toString().length == 1){					
				min = "0" + min;				
			}				
			if(seg.toString().length == 1){					
				seg = "0" + seg;				
			}				
			document.getElementById('spanRelogio').innerHTML = min + ":" + seg;				
			setTimeout('relogio()', 1000);			
		}			
		else{				
			document.getElementById('spanRelogio').innerHTML = "00:00";			
		}		
	}	
</script>

<section class="akjsdkjadkjaskdjsdaskjdcoderphp">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<span style="color:rgb(240, 89, 41);font-weight:500;cursor:pointer;"><i class="fa-solid fa-arrow-left"></i> Voltar para a página inicial</span>

				<br><br>


				<div class="conteudosite0000000000coderphp">
					<h3 style="margin-bottom:20px;font-weight:600;text-align: center;font-size:25px;">Pague pelo Pix agora!</h3>
					<p style="text-align: center;font-size:14px;">Efetue o pagamento em <strong>até</strong>  <span style="    color: #c10222;"><strong><span id="spanRelogio"></span>s</strong></span> (do dia <?= $date ?>) e, em <br> seguida, acompanhe seu pedido pelo e-mail <br>
						<strong><?= @$_SESSION['email1'] ?></strong></p>
						<p style="font-size:14px;text-align: center;"> Após esse prazo, o link ficará inativo e NÃO será mais possível efetuar o  <br>pagamento. Caso isso ocorra e ainda haja interesse pela compra, um novo pedido <br> deve ser realizado.</p>
						<p style="text-align: center;">O código dessa compra é</p>
						<p style="color: #414042;font-size:26px;text-align: center;"><strong><?=$string;?>-<?=$string1;?>-Q-23</strong></p>
						<p style="text-align: center;">Valor total:  <br>  <strong><s>R$ <?= $_SESSION['moedabr'] ?></s></strong></p>
						<p style="text-align: center;">Valor a pagar com desconto</p>
						
    <?php 

 include "valor.php";
$altura = str_replace('.', '', $_SESSION['moedabr']);
 $valortotao = $altura;

 @$valor_com_desconto = $valortotao - ($valortotao * $pctm * 0.01);

 $dois = $valor_com_desconto;

    ?>


						<p style="text-align: center;font-weight: 700;
    font-size: 2.2rem;
    line-height: 3rem;color:#00652e;"> R$ <?= $dois ?></p>




<?php include "valor.php"; ?>






						<!-- QRCODE AQUI -->

						<div class="sdasdsd900999090000090090909coderphppix">
							<div class="row">













								<div class="col-md-5">



									<?php
if ($gerar_qrcode){
   include "phpqrcode/qrlib.php"; 
   include "funcoes_pix.php";
   $px[00]="01"; //Payload Format Indicator, Obrigatório, valor fixo: 01
   // Se o QR Code for para pagamento único (só puder ser utilizado uma vez), descomente a linha a seguir.
   //$px[01]="12"; //Se o valor 12 estiver presente, significa que o BR Code só pode ser utilizado uma vez. 
   $px[26][00]="br.gov.bcb.pix"; //Indica arranjo específico; “00” (GUI) obrigatório e valor fixo: br.gov.bcb.pix
   $px[26][01]=$chave_pix;
   if (!empty($descricao)) {
      /* 
      Não é possível que a chave pix e infoAdicionais cheguem simultaneamente a seus tamanhos máximos potenciais.
      Conforme página 15 do Anexo I - Padrões para Iniciação do PIX  versão 1.2.006.
      */
      $tam_max_descr=99-(4+4+4+14+strlen($chave_pix));
      if (strlen($descricao) > $tam_max_descr) {
         $descricao=substr($descricao,0,$tam_max_descr);
      }
      $px[26][02]=$descricao;
   }
   $px[52]="0000"; //Merchant Category Code “0000” ou MCC ISO18245
   $px[53]="986"; //Moeda, “986” = BRL: real brasileiro - ISO4217
   if ($valor_pix > 0) {
      // Na versão 1.2.006 do Anexo I - Padrões para Iniciação do PIX estabelece o campo valor (54) como um campo opcional.
      $px[54]=$valor_pix;
   }
   $px[58]="BR"; //“BR” – Código de país ISO3166-1 alpha 2
   $px[59]=$beneficiario_pix; //Nome do beneficiário/recebedor. Máximo: 25 caracteres.
   $px[60]=$cidade_pix; //Nome cidade onde é efetuada a transação. Máximo 15 caracteres.
   $px[62][05]=$identificador;
//   $px[62][50][00]="BR.GOV.BCB.BRCODE"; //Payment system specific template - GUI
//   $px[62][50][01]="1.2.006"; //Payment system specific template - versão
   $pix=montaPix($px);
   $pix.="6304"; //Adiciona o campo do CRC no fim da linha do pix.
   $pix.=crcChecksum($pix); //Calcula o checksum CRC16 e acrescenta ao final.
   $linhas=round(strlen($pix)/120)+1;
   ?>

  


<center>

   <?php
   ob_start();
   QRCode::png($pix, null,'M',5);
   $imageString = base64_encode( ob_get_contents() );
   ob_end_clean();
   // Exibe a imagem diretamente no navegador codificada em base64.
   echo '<img src="data:image/png;base64,' . $imageString . '"></p>';


   
}

?>
 </center>





								</div>




								<div class="col-md-7">
									<center><button id="copy" style="margin-bottom:20px;border:none;color: #fff;
									background: linear-gradient(308.6deg,#F06531 -7.94%,#EA3D35 79.38%);
									border-color: linear-gradient(308.6deg,#F06531 -7.94%,#EA3D35 79.38%);width:100%;height:auto;padding:7px;border-radius:10px;"><i class="fa-regular fa-copy"></i> <strong>Copiar código do Pix</strong></button></center>
									<p><strong>Código Pix</strong></p>
									 <center><textarea id="text" style="border:none;"><?= $pix ?></textarea ></center>
								</div>
							</div>
						</div>



						<p style="text-align: center;">Pagar é bem simples e rápido:</p>
						<p style="text-align: center;">1. Abra o aplicativo do seu banco ou instituição financeira e acesse a área do Pix.</p>
						<p style="text-align: center;">2. Selecione a opção <strong>Pagar > Ler QR Code</strong> e escaneie o código acima.
						</p>
						<p style="text-align: center;">3. Confirme as informações, finalize o pagamento e pronto!
						</p>
						 <br><br>
						 <p style="text-align: center;">Muito obrigado por escolher a 123Milhas!</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include "class/boasvindas.php"; ?>


	   <script type="text/javascript">
    const textInput = document.getElementById('text');
    const copyButton = document.getElementById('copy');

    copyButton.addEventListener('click', ()=> {
      textInput.select();
      document.execCommand('copy');
      iziToast.success({
         position: 'topLeft',
              title: 'Pix copiado,',
              message: '<?= $pix ?>',
              timeout:2000
              });
    });
  </script>