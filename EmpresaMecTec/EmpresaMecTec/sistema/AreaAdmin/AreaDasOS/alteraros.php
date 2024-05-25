<?php require_once '../../../conexao.php'; 

session_start();

if(!isset($_SESSION['id_user']) ) {
    echo '
        <script type = "text/javascript">
        alert( "Você precisa está logado para acessar essa página!");
        window.location = "../../../index.php"
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
      <a id="logo-container" href="../AreaAdmin.php" class="brand-logo"><img src="../../../backgrounds/logoofc.png" style="width:3em;"></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="consultaros.php">Voltar</a></li>
            <li><a class="waves-effect waves-light btn indigo darken-1" onclick="return confirm('Deseja realmente sair?');"href="../../../logout.php">Sair</a></li>
          </ul>

          <ul id="nav-mobile" class="sidenav">
            <li><a href="consultaros.php">Voltar</a></li>
            <li><a class="waves-effect waves-light btn indigo darken-1" onclick="return confirm('Deseja realmente sair?');"href="../../../logout.php">Sair</a></li>
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    </nav>
  <div class="section no-pad-bot" id="index-banner">
        <div class="carousel carousel-slider center">
            <div class="carousel-fixed-item center">
            </div>
            <div class="carousel-item white-text"  href="#one!">
                <a><img src="../../../backgrounds/S1.png"  style="width:150em; " class="responsive-img" alt="" srcset=""></a>
                <p class="white-text"></p>
            </div>
            <div class="carousel-item white-text" href="#two!">
                <a><img src="../../../backgrounds/S2.png" style="width:150em;" class="responsive-img" alt="" srcset=""></a>
              <p class="white-text"></p>
            </div>
            <div class="carousel-item white-text" href="#three!">
                <a><img src="../../../backgrounds/S3.png" style="width:150em;" class="responsive-img" alt="" srcset=""></a>
              <p class="white-text"></p>
            </div>
            </div>
        </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->

        <div class="col s12 m4">
          <div class="icon-block z-depth-3">
            <br>
            <h2 class="center light-blue-text"><i class="large material-icons indigo-text text-darken">border_color</i></h2>
            <h5 class="center">Alterar informações da ordem de serviço</h5>

            <p class="light">
                <form class="col s12" name="form_alterar" method="POST" action="alterar.php">
                    <?php
                        $idAlt = $_GET['id_os'];
                        $sql = " SELECT * FROM tb_os WHERE id_os = '$idAlt'; ";
                        $query = mysqli_query($conn, $sql);
                        if($query){
                            while( $row = mysqli_fetch_array($query, MYSQLI_ASSOC) ){
                    ?>

                    <div class="row">
                        <div class="input-field col s6">
                        <label>ID da os </label>
                        <input readonly="true" type="text" name="id_os" value="<?php echo $row['id_os'];?>">
                        </div>

                        <div class="input-field col s6">
                        <label>Id do usuário</label>
                        <input readonly="true" type="text" name="id_user" value="<?php echo $row['id_user'];?>">
                        </div>

                        <div class="input-field col s6">
                        <label>Id do equipamento</label>
                        <input readonly="true" type="text" name="id_equip" value="<?php echo $row['id_equip'];?>">
                        </div>

                        <div class="input-field col s6">
                            <select name="status">
                            <option value="Cadastrada">Cadastrada</option>
                            <option value="Pendente">Pendente</option>
                            <option value="Pronta">Pronta</option>
                            </select>
                            <label>Insira o status da ordem de serviço</label>
                        </div>

                        <div class="input-field col s6">
                        <input placeholder="Insira o orcamento" type="text" name="orcamento" value="<?php echo $row['orcamento'];?>">
                        <label>Orçamento</label>
                        </div>

                        <div class="input-field col s6">
                        <input readonly="true" placeholder="Insira uma observação (não obrigatório)" type="text" name="dataentrada"  value="<?php echo $row['dataentrada'];?>">
                        <label>Data de cadastro</label>
                        </div>

                        <div class="input-field col s6">
                        <input readonly="true" placeholder="Insira uma observação (não obrigatório)" type="text" name="datasaida"  value="<?php echo $row['datasaida'];?>">
                        <label>Data de término</label>
                        </div>

                        <div class="input-field col s6">
                        <input placeholder="Insira o diagnostico" type="text" name="diagnostico" value="<?php echo $row['diagnostico'];?>">
                        <label>Diagnostico</label>
                        </div>

                        <div class="input-field col s6">
                        <input placeholder="Insira uma observação (não obrigatório)" type="text" name="observacao"  value="<?php echo $row['observacao'];?>">
                        <label>Observacao</label>
                        </div>

                    <?php
                        }
                            }
                    ?>
                      <button class="btn waves-effect indigo col s8 m12" type="submit" name="action" > Atualizar
                          <i class="material-icons right">send</i>
                        </button>    
                    </div>   
                </form>
            </p>
            <br>
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

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
    });

    // Or with jQuery

    $(document).ready(function(){
        $('select').formSelect();
    });
  </script>

  </body>
</html>
        