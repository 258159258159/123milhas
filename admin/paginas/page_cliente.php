<?php
include __DIR__.'/../../config/config.php';
include __DIR__.'/../../class/cliente.php';
$listar = new produtos;

$ok = $listar->cliente();
?>

<div class="content " >

  <table class="table table-dark">
    <thead>
      <tr>
        <th scope="row">#ID</th>
        <td>CLIENTE</td>
        <td>NASCIMENTO</td>
        <td>CPF</td>

        <td>CEP</td>


        <td>TELEFONE 1</td>
        <td>TELEFONE 2</td>
        <td>E-MAIL 1</td>
        <td>E-MAIL 2</td>
        <td>PREÇO</td>
        <td>CONFIG</td>

      </tr>


    </thead>
    <tbody>


      <?php 
      foreach($ok as $cc):
        ?>
        <tr>
          <th scope="col"><?= $cc['id'] ?></th>
          <th scope="col"><?= $cc['nome'] ?> <?= $cc['sobrenome'] ?></th>
          <th scope="col"><?= $cc['nascimento'] ?></th>
          <th scope="col"><?= $cc['cpf'] ?></th>
          <th scope="col"><?= $cc['cep'] ?></th>


          <th scope="col"><?= $cc['telefonefixo'] ?></th>
          <th scope="col"><?= $cc['telefonecelular'] ?></th>
          <th scope="col"><?= $cc['email1'] ?></th>
          <th scope="col"><?= $cc['email2'] ?></th>
          <th scope="col"><?= $cc['precototal'] ?></th>
          <th scope="col"><a  style="color:rgb(25, 181, 83);font-size:18px;text-decoration: none;" ><i  class="fa-brands fa-whatsapp"></i> </a>   <a href="del&id=<?=  $cc['id'] ?>" style="color:rgb(234, 62, 53);text-decoration: none;font-size:18px;" href="#"><i class="fa-solid fa-trash"></i> </a></th>
          
         


        </tr>

      <?php endforeach; ?>

    </tbody>
  </table>




</div>







</form>
</div>
</div>
</div>
</div>


<script type="text/javascript">
  $(function () {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>


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