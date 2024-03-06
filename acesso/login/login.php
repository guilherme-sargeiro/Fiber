<?php
    include ('conect.php');

    $user = $_POST['username'];
    $pass = $_POST['pass'];
    
    $stmt = $conn->prepare("SELECT * FROM users WHERE user = '$user'");
    $stmt->execute(array('user' => $user));

    $result = $stmt->fetchAll();

    if (count($result)) {
        foreach($result as $row) {
            if ($pass == $row[2] && $user == $row[1]){
                session_start();

                $_SESSION["id"] = $row[0];
                $_SESSION["logado"] = 1;

                echo "<script>
                        location.href='../../cadastro/formulario.php';
                      </script>";
            } else {
                echo "<script>
                        alert('Acesso Inválido')
                        location.href='index.html'
                      </script>";
            }
        }
    } else {
        echo "<script>
                alert('Acesso Inválido')
                location.href='index.php'
              </script>";
    }

?>