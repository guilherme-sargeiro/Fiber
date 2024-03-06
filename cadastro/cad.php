<?php
    session_start();
    $id = $_SESSION["id"];

    include ('conect.php');

    $nome = $_POST['nome'];
    $nascimento = $_POST['data'];
    $cpf = $_POST['cpf'];
    $identidade = $_POST['identidade'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $referencia = $_POST['referencia'];
    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $planos = $_POST['planos'];
    $vencimento = $_POST['vencimento'];
    $pagamento = $_POST['pagamento'];
    $indicacao = $_POST['indicacao'];
    
    $stmt1 = $conn->prepare("INSERT INTO cadastros (nome, nascimento, CPF, identidade, email, endereco, referencia, cep, telefone, planos, vencimento, pagamento, indicacao, id_func) values (:nome, :nascimento, :CPF, :identidade, :email, :endereco, :referencia, :cep, :telefone, :planos, :vencimento, :pagamento, :indicacao, :id)");

      $stmt1->bindParam(':nome', $nome);
      $stmt1->bindParam(':nascimento', $nascimento);
      $stmt1->bindParam(':CPF', $cpf);
      $stmt1->bindParam(':identidade', $identidade);
      $stmt1->bindParam(':email', $email);
      $stmt1->bindParam(':endereco', $endereco);
      $stmt1->bindParam(':referencia', $referencia);
      $stmt1->bindParam(':cep', $cep);
      $stmt1->bindParam(':telefone', $telefone);
      $stmt1->bindParam(':planos', $planos);
      $stmt1->bindParam(':vencimento', $vencimento);
      $stmt1->bindParam(':pagamento', $pagamento);
      $stmt1->bindParam(':indicacao', $indicacao);
      $stmt1->bindParam(':id', $id);

      if ($stmt1->execute()) {
          echo "<script>
                  alert('Cadastro Realizado');
                </script>";
          
        $stmt = $conn->prepare("SELECT * FROM cadastros WHERE CPF = '$cpf'");
        $stmt->execute();
    
        $result = $stmt;

        foreach ($result as $row) {
          echo $row[0]. "<br>";
          echo $row[1]. "<br>";
          echo $row[2]. "<br>";
          echo $row[3]. "<br>";
          echo $row[4]. "<br>";
          echo $row[5]. "<br>";
          echo $row[6]. "<br>";
          echo $row[7]. "<br>";
          echo $row[8]. "<br>";
          echo $row[9]. "<br>";
          echo $row[10]. "<br>";
          echo $row[11]. "<br>";
          echo $row[12]. "<br>";
          echo $row[13]. "<br>";
          echo $row[14]. "<br>";
        }
        
      } else {
          echo "<script>
                  alert('Erro ao Cadastrar');
                </script>";
      }
?>