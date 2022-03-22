<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>TraderOpções</title>
    <!-- Login styles -->
    <link rel="stylesheet" href="./Themes/css/login.css" />
</head>
<body>
  <div class="container" >
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <h1>Login</h1> 
            <?php 
              if(!empty($login_err)){
                    echo '<p><span style="color:red">' . $login_err . '</span></p>';
              }        
            ?>
          <p> 
            <label for="nome_login">Login</label>
            <input id="username" name="username" required="required" type="text"/>
          </p>           
          <p> 
            <label for="email_login">Password</label>
            <input type="password" id="password" name="password" required="required"/> 
          </p>           
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>           
          <p> 
            <input type="submit" value="Logar" /> 
          </p>       
        </form>
      </div>
    </div>
  </div>  
</body>
</html>