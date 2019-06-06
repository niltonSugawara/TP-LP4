<?php  
 session_start();
 date_default_timezone_set('America/Sao_Paulo');
 $connect = mysqli_connect("localhost", "root", "", "museugames");  
 
 $email = $_POST["email"];
 $pass = $_POST["password"];
 //$result="";
//$cont = 0;
 
 if(isset($_POST["email"]))  
 {  
      $query = "  
      SELECT id_usuario,nome FROM usuario  
      WHERE email =?  
      AND senha =?
      ";  
      
      $stmt = mysqli_stmt_init($connect);
      if(!mysqli_stmt_prepare($stmt, $query)) {
          echo 'No';
      } else { 
          mysqli_stmt_bind_param($stmt,'ss', $email,$pass);
          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          foreach($result as $i => $value)
          {
          		$user = $value['nome'];
              $id = $value['id_usuario'];
          }
          
          //$prod = mysqli_fetch_array($query);
          
          //$user = $prod['nome'];
          //$id = $prod['id_usuario'];

          $_SESSION['username'] = $user;
          $_SESSION['id'] = $id;
          
        
          
      }
      
      if(mysqli_num_rows($result) > 0)  
      {  
           setcookie("uVisita",date('d/m/Y H:i:s'), (time()+ (3 * 24 * 3600)));                      
           echo 'Yes';
      }  
      else  
      {  
           echo 'No';  
      }  
 }  
 if(isset($_POST["action"]))  
 {  
      unset($_SESSION["username"]);
      //$cont=0;
      session_destroy();
 }  
 ?>  