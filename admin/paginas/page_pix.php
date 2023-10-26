<?php
include __DIR__.'/../../config/config.php';
include __DIR__.'/../../class/pix.php';
global $pdo;



if(isset($_GET['id'])):

$id = $_GET['id'];
 $status = 0;

endif;
 

// VERIFICAÇÃO DE TROCAR DE ID






if(isset($_POST['boleto'])):
  $boleto = addslashes(htmlspecialchars($_POST['boleto']));
  $nome = addslashes(htmlspecialchars($_POST['nome']));
  $cidade = addslashes(htmlspecialchars($_POST['cidade']));
  $descri = addslashes(htmlspecialchars($_POST['descri']));
  $identi = addslashes(htmlspecialchars($_POST['identi']));


  $sql=$pdo->prepare("INSERT INTO coderphp_pix set  chavepix =:chavepix, nome=:nome,cidade=:cidade,descri=:descri,identi=:identi");

  $sql->bindValue(":chavepix",$boleto );
  $sql->bindValue(":nome",$nome );
  $sql->bindValue(":cidade",$cidade );
  $sql->bindValue(":descri",$descri );
  $sql->bindValue(":identi",$identi );
 

  $sql->execute();
  

  ?>
  <script type="text/javascript">
    let timerInterval
    Swal.fire({
      title: 'Cadastrado com sucesso.',
      
      timer: 1000,
      timerProgressBar: true,
      didOpen: () => {
        Swal.showLoading()
        const b = Swal.getHtmlContainer().querySelector('b')
        timerInterval = setInterval(() => {
          b.textContent = Swal.getTimerLeft()
        }, 100)
      },
      willClose: () => {
        clearInterval(timerInterval)
      }
    }).then((result) => {
      /* Read more about handling dismissals below */
      if (result.dismiss === Swal.DismissReason.timer) {
        console.log('I was closed by the timer')
      }
    })
  </script>
  <?php

endif;


?>


<div class="content p-1 grande" >
  <div class="list-group-item ">
    <div class="d-flex">


    </div>

    <div class="container-fluid">

      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               CHAVE PIX
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
             <div class="row">

              <div class="col-md-4">
                <form method="post">
                 <div class="col">
                  <input type="text" class="form-control" required name="boleto" placeholder="Chave Pix:">
                </div>
                <div class="col">
                  <input type="text" class="form-control" required name="nome" placeholder="Nome do beneficiário:">
                </div>

                <div class="col">
                  <input type="text" class="form-control" required name="cidade" placeholder="Cidade do beneficiário:">
                </div>
                <div class="col">
                  <input type="text" class="form-control" required name="descri" placeholder="Descrição da cobrança (opcional):">
                </div>
                 <div class="col">
                  <input type="text" class="form-control" required name="identi" placeholder="Identificador do pagamento:">
                </div>
                <br>

                <input style="margin-left:28px;" type="submit" value="Cadastrar" class="btn btn-outline-success">
              </div>







            </form>
          </div>
        </div>
      </div>
    </div>


<?php 
global $pdo;
$array =[];
$sql=$pdo->prepare("SELECT * FROM coderphp_pix order by id desc");
$sql->execute();
if($sql->rowCount() > 0){
  $array = $sql->fetchAll();
}

?>




<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">CHAVE PIX</th>
      <th scope="col">DESCRIÇÃO</th>
      <th scope="col">DESCRIÇÃO</th>
      
      <th scope="col">Identificar do pagamento</th>
      <th scope="col">DEL</th>
    </tr>
  </thead>
  <tbody>
    <?php

       foreach($array as $coderphp):

    ?> 
    
    <tr>
      <th scope="row"><?= $coderphp['id'] ?></th>
      <td><?= $coderphp['chavepix'] ?></td>
      <td><?= $coderphp['nome'] ?></td>
      <td><?= $coderphp['cidade'] ?></td>
      <td><?= $coderphp['descri'] ?></td>
      <td><a href="delpix&id=<?=  $coderphp['id'] ?>" style="color:rgb(234, 62, 53);text-decoration: none;font-size:18px;" href="#"><i class="fa-solid fa-trash"></i> </a></td>
    </tr>


<?php 

endforeach; ?>


  </tbody>
</table>

    
  </div>
</div>


</div>





</div>


</div>






</div>
</div>











</div>



</div>


</div>
</div>

</div>