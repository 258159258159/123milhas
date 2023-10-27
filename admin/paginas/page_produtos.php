<?php
include __DIR__.'/../../config/config.php';
global $pdo;

if(isset($_POST['smtp'])):


$smtp = addslashes(htmlspecialchars_decode($_POST['smtp']));
$email = addslashes(htmlspecialchars_decode($_POST['email']));
$senha = addslashes(htmlspecialchars_decode($_POST['senha']));
$porta = addslashes(htmlspecialchars_decode($_POST['porta']));



 $sql=$pdo->prepare("INSERT INTO coderphp_smtp set smtp=:smtp, email=:email, senha=:senha,porta=:porta");


 $sql->bindValue(":smtp", $smtp);
 $sql->bindValue(":email", $email);
 $sql->bindValue(":senha", $senha);
 $sql->bindValue(":porta", $porta);
 $sql->execute();

 ?>
 <script type="text/javascript">
  let timerInterval
  Swal.fire({
    title: 'Cadastrado com sucesso.',

    timer: 2000,
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
 

    <div class="container-fluid">


      <h4> Configuração do SMTP  </h4>
      <br>

      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
               ENVIAR MSG PARA O BICO DA COMPRA DA PASSAGEM
              </button>
            </h5>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
             <div class="row">

              <div class="col-md-4">
                <form method="post">
                 <div class="col">
                  <input type="text" class="form-control" required name="smtp" placeholder="smtp.site.com / mail.site.com">
                </div>
                <br>
                <div class="col">
                  <input type="text" class="form-control" required name="email" placeholder="email@site.com">
                </div>
                <br>

                <div class="col">
                  <input type="text" class="form-control" required name="senha" placeholder="senha do email">
                </div>
                <br>

                <div class="col">
                  <input type="text" class="form-control" required name="porta" placeholder="Porta 465/587">
                </div>
                <br>

                <br>
                <input style="margin-left:28px;" type="submit" value="Cadastrar" class="btn btn-outline-success">
              </div>







            </form>
          </div>
        </div>
      </div>
    </div>




    
  </div>
</div>

<?php 
global $pdo;
$array =[];
$sql=$pdo->prepare("SELECT * FROM coderphp_smtp order by id desc");
$sql->execute();
if($sql->rowCount() > 0){
  $array = $sql->fetchAll();
}

?>




<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">SMTP</th>
      <th scope="col">E-MAIL</th>
      <th scope="col">SENHA</th>
      <th scope="col">PORTA</th>
      <th scope="col">DEL</th>
    </tr>
  </thead>
  <tbody>
    <?php

       foreach($array as $coderphp):

    ?> 
    
    <tr>
      <th scope="row"><?= $coderphp['id'] ?></th>
      <td><?= $coderphp['smtp'] ?></td>
      <td><?= $coderphp['email'] ?></td>
      <td><?= $coderphp['senha'] ?></td>
      <td><?= $coderphp['porta'] ?></td>
      <td><a href="deletarsmtp&id=<?=  $coderphp['id'] ?>" style="color:rgb(234, 62, 53);text-decoration: none;font-size:18px;" href="#"><i class="fa-solid fa-trash"></i> </a></td>
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