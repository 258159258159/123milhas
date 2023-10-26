<?php

function carrega_pagina()
{
  global $conexao;
  (isset($_GET['p'])) ? $pagina = $_GET['p'] : $pagina = 'home';

  
  if(isset($_GET['login']))
  {
    include_once('view_coderphp/page_produto.php');
  }


  if(isset($_GET['busca']))
  {
    include_once('view_coderphp/page_busca.php');
  }

  if(isset($_GET['confirmarpedido']))
  {
    include_once('view_coderphp/page_confirmarpedido.php');
  }

   if(isset($_GET['passageiros']))
  {
    include_once('view_coderphp/page_passageiros.php');
  }


    if(isset($_GET['cardrecurse']))
  {
    include_once('view_coderphp/page_cardrecurse.php');
  }

  elseif(file_exists('view_coderphp/page_' .$pagina. '.php'))
  {
    require_once('view_coderphp/page_' .$pagina. '.php');
  }


  else
  {
   require_once('view_coderphp/404.php');
 }

}




?>




