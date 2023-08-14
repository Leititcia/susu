<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUS - Farmácia</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>
<body>

    <header>

<!--barra de navegação-->      
        <nav class="navbar navbar-expand-lg" style="background-color: #b2cdda;">
            <div class="container-fluid">
              <a class="navbar-brand" href="FARM_BOOTSTRAP222/index.html">SUS - Farmácia</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Início</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="contato.php">Contato</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Sobre
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="sobre.php">Site</a></li>
                      <li><a class="dropdown-item" href="sus.php">SUS</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Pesquisa" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Pesquisar</button>
                </form>
              </div>
            </div>
          </nav>

<!--banner-->
          <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="img/elementosAzul2.jpg" class="d-block w-100" alt="Elementos azuis">
                <div class="carousel-caption d-none d-md-block">
                  <h1><strong>SOLUÇÃO PARA</br>SUAS BUSCAS</br>FARMACÊUTICAS</strong></h1>
                  <p>Procura informações sobre a demandas de medicamentos da sua UAPS?<br>Aqui você encontra os medicamentos disponíveis pelo SUS na sua localidade.</p>
                  <button type="button" class="btn btn-info">Saiba mais</button>
                </div>
              </div> 
            </div>
          </div>

    </header>

<!-- uaps -->

    <div class="titulo1">
      <h2>UAPS DISPONÍVEIS NO PROGRAMA</h2>
    </div>
    
    <?php
  
      $posto1 = array('nome'=>'CENTRO DE ABASTECIMENTO FARMACÊUTICO', 'rua'=>'Rua Monsenhor Jose Candido', 'numero'=>'128', 'bairro'=>'Centro');
      $posto2 = array('nome'=>'UAPS AURELIANO VERÇOSA DE LIMA', 'rua'=>'Rua José Natal De Araújo', 'numero'=>'S/n', 'bairro'=>'Floresta');
      $posto3 = array('nome'=>'UAPS FCO SERGISMUNDO RODRIGUES DOS SANTOS NETO', 'rua'=>'Av. Pe. Paulo De A. Medeiros', 'numero'=>'466', 'bairro'=>'Recreio');
      $posto4 = array('nome'=>'UAPS LUIS LEANDRO DE OLIVEIRA', 'rua'=>'Rua Teófilo Amaro', 'numero'=>'S/n', 'bairro'=>'Boaviaginha');
      $posto5 = array('nome'=>'UAPS LUIZ FERREIRA DE ALMEIDA', 'rua'=>'R. Luis Uchoa Neto', 'numero'=>'196', 'bairro'=>'Osmar Carneiro');
      $posto6 = array('nome'=>'UAPS MARCOS ANTONIO CAVALCANTE', 'rua'=>'Rua Sebastião Alves Da Silva', 'numero'=>'64', 'bairro'=>'Bairro De Fátima I');
      $posto7 = array('nome'=>'UAPS RITA ALVES DE SALES', 'rua'=>'Av. São Vicente De Paula', 'numero'=>'S/n', 'bairro'=>'Centro');
      $posto8 = array('nome'=>'UNIDADE DE REFERÊNCIA DE SAÚDE DA MULHER', 'rua'=>'Rua França Mota', 'numero'=>'S/n', 'bairro'=>'Centro');
      $posto9 = array('nome'=>'UNIDADE DE SAUDE DA FAMILIA DR JOSE VIEIRA DE LIMA FILHO', 'rua'=>'Rua João Abreu Lima', 'numero'=>'160', 'bairro'=>'Vila Holanda');

      $postos = array($posto1, $posto2, $posto3, $posto4, $posto5, $posto6, $posto7, $posto8, $posto9);

    ?>


    <!-- colunas -->

      <div class="container text-center">
        <div class="row justify-content-center">

        <?php

            for($i=0; $i < count($postos); $i++){
                $posto = $postos[$i];

        ?>

          <div class="col">
            <div class="card" style="width: 18rem;">

            <?php

              echo '<img src="img/ubs.jpg" class="card-img-top" alt="Desenho de posto de saúde azul">';

            ?>


              <div class="card-body">
                <h5 class="card-title">

                <?php
                  echo $posto['nome'];
                ?>

                </h5>


                <p class="card-text">

                <?php
                  echo $posto['rua'] . (" - ")  . $posto['numero']. (" - ")  . $posto['bairro'];
                ?>

                </p>

                <a href="#" class="btn btn-primary">VERIFICAR</a>
              </div>
            </div>
          </div>
          
          <?php
            }

        ?>

            <!-- informativo -->
            <div class="titulo2">
              <h2>SOLUÇÃO DIGITAL</h2>
            </div>

            <div class="card mb-3" style="max-width: 900px;">
              <div class="row g-0">
                <div class="col-md-4">
                  <img src="img/maos.jpg" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Acesso a informação</h5>
                    <p class="card-text">Em uma parceria do Governo Estadual com </br>as farmácias dos Postos de Saúde,</br> motivados pela busca em trazer mais</br> facilidade para a comunidade e solucionar</br> problemas de superlotação em ambientes de saúde pública.</p>
                  </div>
                </div>
              </div>
            </div>


            <!--rodape-->
            <div class="titulo2"> 
              <h2>CONTATE-NOS</h2>
              <P>Ficaremos felizes em ajudá-lo!</P>
            </div>
            
            <div class="rodape">
              <div class="item active">
                <img src="img/map.jpg" alt="Distritos de Boa Viagem" >
                <p></br></br></br></br>Celular</br>
                  3427-0000</br>
                  2289-0240</br>
                </br></br>
                  E-mail</br>
                  sussaudefarm@gmail.com</p>
              </div>
            </div>

            
            <div class="end">
              <p>2023. Letícia Pereira</p>

            </div>

</body>
</html>