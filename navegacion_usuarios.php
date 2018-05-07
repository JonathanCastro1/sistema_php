<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#colapsar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Sistema en php</a>
    </div>
    <div class="collapse navbar-collapse" id="colapsar">
      
      <ul class="nav navbar-nav navbar-right">
         
         <li><a href="iniciar_session.php"><span class="glyphicon glyphicon-user"></span>
          <?php
            echo "Usuario:"." ".$_SESSION["user"];
           ?> 
         </a></li>      

        <li><a href="iniciar_session.php"><span class="glyphicon glyphicon-remove-sign"></span> Cerrar Sessión</a></li>        
      </ul>
    </div>
  </div>
</nav>