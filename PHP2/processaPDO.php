<?php
    $usuario = "root";
    $senha = "123456";

    @$nome = $_GET['nome'];
    @$email = $_GET['email'];
    @$site = $_GET['site'];
    @$mensagem = $_GET['mensagem'];

    try{
        $conn = new PDO("mysql:host=localhost; dbname=Snake", $usuario, $senha);
        $conn->exec("set names utf8");
        echo "Conexão efetuada com sucesso!"."<br/>";

        $stmt = $conn->prepare('INSERT INTO mensagem (nome,email,website,mensagem) VALUES (:nome,:email,:site,:mensagem)');

        $stmt->bindValue(':nome', $nome);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':site', $site);
        $stmt->bindValue(':mensagem', $mensagem);

        $stmt->execute();
        echo "Dados inseridos com sucesso no Banco de Dados!"."<br/><br/>";


        $stmt = $conn->prepare('SELECT * FROM mensagem');
        $stmt->execute();

        echo "Número de linhas da tabela mensagem: ".$stmt->rowCount()."<br/><br/>";

        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            //print($row['nome']."<br/>");
            echo "ID: ".$row->id."<br/>
                NOME: ".$row->nome."<br/>
                EMAIL: ".$row->email."<br/>
                WEBSITE: ".$row->website."<br/>
                MENSAGEM: ".$row->mensagem."<br/><br/>";
        }

    }catch(PDOException $e){
        echo  $e->getMessage();
    }

?>

