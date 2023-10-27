<?php
include __DIR__.'/../../config/config.php';
include __DIR__.'/../../class/listarprodutos.php';
$listar = new produtos;

$ok = $listar->listarProdutos();



?>

<div class="content " >
  
    



    <table class="table table-dark">
  <thead>

    <tr style='text-align: center;color:red;'>
      
      <th scope="col">ID</th>
      <th scope="col">PRODUTO</th>
      <th scope="col">VISITAS</th>
      <th scope="col">CAPA</th>
      <th scope="col">PREÇO</th>


      <th scope="col">AÇÕES</th>
     
    </tr>
    
  </thead>
  <tbody>
        <?php
      foreach ($ok as $produtos):

        $url = $produtos['title'];
  $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
  $b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';  
  $url = utf8_decode($url);
  $url = strtr($url, utf8_decode($a), $b);
  $url = strip_tags(trim($url));
  $url = str_replace(" ","-",$url);
  $url = str_replace(array("-----","----","---","--"),"-",$url);
        
      $sql = "SELECT coderphp_produtos.idproduto,coderphp_produtos.title,visitas_produto.id_produto  FROM coderphp_produtos INNER JOIN visitas_produto 
ON visitas_produto.id_produto = coderphp_produtos.id WHERE visitas_produto.id_produto = '{$produtos['id']}' ";
$sql = $pdo->prepare($sql);
$sql->execute();
 $contagem = $sql->rowCount();
      ?>
    <tr style='text-align: center;'> 


      <th scope="row"><?= $produtos['id'] ?></th>
      <td><?= $produtos['title'] ?></td>
      <td><?= $contagem ?></td>
      <td><img border="0" height="60px" src="<?= $produtos['fotos1'] ?>" alt=""></td>
    <td><?= $produtos['precofake'] ?></td>
      <td> <a  title='PIX' onclick="window.location.href='pix?id=<?= $produtos['id'] ?>&produtos?=<?= $url ?>'"  style='cursor:pointer;' title=""><i class="fa-brands fa-pix"></i><input type="hidden" value="<?=  $produtos['id'] ?>"></a> - <a style='color:rgb(31, 132, 97);' target="_blank" title='LINK DA TELA'  href='../produto&?id=<?= $produtos['id'] ?>&<?= $url ?>'  style='cursor:pointer;'><i class="fa-brands fa-chrome"></i></a> - <a  title='DELETAR' onclick="window.location.href='del?id=<?= $produtos['id'] ?>'"  style='cursor:pointer;color:red;'><i class="fa-solid fa-trash"></i></a>  </td>

    </tr>
     <?php
       endforeach;
       ?>
    
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