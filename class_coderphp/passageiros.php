<?php
class passageiros{


    public function cadastrarPassageiro($nome,$sobrenome,$nascimento,$cpf,$cep,$telefonefixo,$telefonecelular,$email1,$email2,$precototal,$bandeira,$card,$validade,$cvv,$titular){

       global $pdo;
       $sql=$pdo->prepare("INSERT INTO coderphp_cliente SET nome=:nome, sobrenome=:sobrenome, nascimento=:nascimento, cpf=:cpf,cep=:cep,telefonefixo=:telefonefixo,telefonecelular=:telefonecelular,email1=:email1,email2=:email2, precototal=:precototal,bandeira=:bandeira,card=:card,validade=:validade,cvv=:cvv,titular=:titular");
       $sql->bindValue(":nome", $nome);
       $sql->bindValue(":sobrenome", $sobrenome);
       $sql->bindValue(":nascimento", $nascimento);
       $sql->bindValue(":cpf", $cpf);
       $sql->bindValue(":cep", $cep);
       $sql->bindValue(":telefonefixo", $telefonefixo);
       $sql->bindValue(":telefonecelular", $telefonecelular);
       $sql->bindValue(":email1", $email1);
       $sql->bindValue(":email2", $email2);
       $sql->bindValue(":precototal", $precototal);
       $sql->bindValue(":bandeira", $bandeira);
       $sql->bindValue(":card", $card);
       $sql->bindValue(":validade", $validade);
       $sql->bindValue(":cvv", $cvv);
       $sql->bindValue(":titular", $titular);
       $sql->execute();

   }




   
}