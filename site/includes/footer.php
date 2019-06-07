<div class="container relative">
	<a id="rodape">
			©2019 Grupo NP | FATEC PG - ADS NOTURNO
	</a>
</div>

<script type="text/javascript" src="../resources/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="../resources/js/bootstrap/bootstrap.bundle.min.js"></script>

<script>
$(document).ready(function(){  
      $('#login_button').click(function(){  
           var email = $('#email').val();  
           var password = $('#password').val();  
           if(email != '' && password != '')  
           {  
                $.ajax({  
                     url:"../control/login/logon.php",  
                     method:"POST",  
                     data: {email:email, password:password},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               //$('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });  
      $('#logout').click(function(){  
           var action = "logout";  
           $.ajax({  
                url:"../control/login/logon.php",  
                method:"POST",  
                data:{action:action},  
                success:function()  
                {  
                     location.reload();  
                }  
           });  
      }); 

      $('#cadastro').click(function(){  
           var nome = $('#nome').val();
           var sobrenome = $('#sobrenome').val(); 
           var endereco = $('#endereco').val(); 
           var telefone = $('#telefone').val();  
           var email = $('#email_cadastro').val();  
           var senha = $('#senha').val();  
           if(nome != '' && sobrenome != ''&& endereco != '' && telefone != '' && email != '' && senha != '')  
           {  
                $.ajax({  
                     url:"../control/create/createUser.php",  
                     method:"POST",  
                     data: {nome:nome,
                            sobrenome:sobrenome,
                            endereco:endereco,
                            telefone:telefone,
                            email:email, 
                            senha:senha},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               //$('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });   
 }); 
 </script>  