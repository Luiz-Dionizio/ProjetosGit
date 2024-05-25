<?php
    require_once '../../conexao.php';

    session_start();

    if(!isset($_SESSION['id_user']) ) {
        echo '
            <script type = "text/javascript">
            alert( "Você precisa está logado para acessar essa página!");
            window.location = "../../index.php"
            </script>
            ';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Empresa MecTec</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="indigo darken-3" role="navigation">
    <div class="nav-wrapper container">
        <a id="logo-container" class="brand-logo"><img src="../../backgrounds/logoofc.png" style="width:3em;"></a>
          <ul class="right hide-on-med-and-down">
            <li>Bem vindo, <?php echo $_SESSION["nome_user"];?></li>
            <li><a class="waves-effect waves-light btn indigo darken-1" onclick="return confirm('Deseja realmente sair?');"href="../../logout.php">Sair</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav">
            <li>Bem vindo, <?php echo $_SESSION["nome_user"];?></li>
            <li><a class="waves-effect waves-light btn indigo darken-1" onclick="return confirm('Deseja realmente sair?');"href="../../logout.php">Sair</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
  <div class="section no-pad-bot" id="index-banner">
        <div class="carousel carousel-slider center">
            <div class="carousel-fixed-item center">
            </div>
            <div class="carousel-item white-text"  href="#one!">
                <a><img src="../../backgrounds/S1.png"  style="width:150em; " class="responsive-img" alt="" srcset=""></a>
                <p class="white-text"></p>
            </div>
            <div class="carousel-item white-text" href="#two!">
                <a><img src="../../backgrounds/S2.png" style="width:150em;" class="responsive-img" alt="" srcset=""></a>
              <p class="white-text"></p>
            </div>
            <div class="carousel-item white-text" href="#three!">
                <a><img src="../../backgrounds/S3.png" style="width:150em;" class="responsive-img" alt="" srcset=""></a>
              <p class="white-text"></p>
            </div>
            </div>
        </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4 z-depth-3">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="large material-icons indigo-text text-darken">insert_invitation</i></h2>
            <h5 class="center">Área OS</h5>
                    <table border="1">
                    <thead>
                        <tr>
                            <th>Consultar os</th>
                        </tr>
                    </thead>
                  
                        <tbody>
                            <td>
                            <a href="./AreaDasOS/consultaros.php?id_user=<?=$_SESSION['id_user'] ?>"> <i class="large material-icons indigo-text text-darken">chrome_reader_mode</i> </a>
                            </td>
                        </tbody>
                </table>
          </div>
        </div>



        <div class="col s12 m4">
          <div class="icon-block">
            
            <h5 class="center"></h5>

            <p class="light"></p>
          </div>
        </div>

        <div class="col s12 m4 z-depth-3">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="large material-icons indigo-text text-darken">devices</i></h2>
            <h5 class="center">Área Equipamentos</h5>

            <table border="1">
                    <thead>
                        <tr>
                            <th> Criar Equipamento </th>
                            <th> Consultar Equipamento </th>
                        </tr>
                    </thead>
                  
                        <tbody>
                            <tr>
                                <td>
                                <a href="./AreaDosEquip/cadastrarequip.php?id_user=<?=$_SESSION['id_user'] ?>"> <i class="large material-icons indigo-text text-darken">add_box</i> </a>
                                </td>

                                <td>
                                <a href="./AreaDosEquip/consultarequip.php?id_user=<?=$_SESSION['id_user'] ?>"> <i class="large material-icons indigo-text text-darken">chrome_reader_mode</i> </a>
                                </td>
                            </tr>
                        </tbody>
                </table>

          </div>
        </div>
      </div>

    </div>
    <br><br>
  </div>

<!--   Footer   -->
<footer class="page-footer indigo darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Um pouco de NÓS!</h5>
          <p class="grey-text text-lighten-4">A empresa Mec Tec surgiu em meados de maio de 2023 com o objetivo de renovar o mercado de assitência técnica, nós da Mec Tec prezamos pelo custo benéficio e satisfação do cliente.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Equipe</h5>
          <ul>
            <li><a class="white-text" href="">Luiz Dionizio</a></li>
            <li><a class="white-text" href="">Ruan Pablo</a></li>
            <li><a class="white-text" href="">Jennifer Grey</a></li>
            <li><a class="white-text" href="">M° Letícia</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Redes Sociais</h5>
          <ul>
            <li><a class="white-text" href="https://www.instagram.com/luiiz_dionizio/">@Luiz Dionizio</a></li>
            <li><a class="white-text" href="https://www.instagram.com/ruanxyzz7/">@Ruan Pablo</a></li>
            <li><a class="white-text" href="https://www.instagram.com/jenny.vasconcelos/">@Jennifer Grey</a></li>
            <li><a class="white-text" href="https://www.instagram.com/m.leticia_araujo/">@M° Letícia</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
    <a class="orange-text text-lighten-3" href="">Made by Wireless Objective</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script> 
        var instance = M.Carousel.init({
    fullWidth: true,
    indicators: true,
    duration: 1000
  });
  </script>

  <script>
        $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    duration: 1000
  });
  </script>

  </body>
</html>
        