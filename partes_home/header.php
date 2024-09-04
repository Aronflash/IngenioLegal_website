<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      .rd-nav-item {
            position: relative;
        }

        .rd-nav-item .rd-dropdown {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #ffffff;
            box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
            z-index: 1;
            opacity: 0.2;
            transform: translateY(10px);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }

        .rd-nav-item:hover .rd-dropdown {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .rd-dropdown a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            color: #000;
            transition: background-color 0.3s ease;
        }
        .rd-dropdown a:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
        <!-- Page Header-->
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
              <nav class="rd-navbar rd-navbar-classic rd-navbar-classic-minimal"  data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                      <!-- RD Navbar Toggle-->
                      <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                      <!-- RD Navbar Brand-->
                      <div class="rd-navbar-brand">
                        <!--Brand--><a class="brand" href="index.html"><img class="Hlogo" src="assets/img/logo.png" /></a>
                      </div>
                    </div>
                    <div class="rd-navbar-main-element">
                      <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                          <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                          </li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="./pantallas/acta.php">Actas Constitutivas</a>
                          </li>
                          <li class="rd-nav-item"><a class="rd-nav-link" href="">Generar Contrato</a>
                          </li>
                          
                          </li>
                          <li class="dropdown rd-nav-item"><a class="rd-nav-link">Temario</a>
                          <ul class="rd-dropdown">
                              <li><a href="pantallas\temario\derecho\derecho.php">El derecho</a></li>
                              <li><a href="pantallas\temario\leyingenieria\ley_ingeniería.php">Ley de ingeniería</a></li>
                              <li><a href="pantallas\temario\firmacompania\firmayca.php">Firma personal y CA</a></li>
                              <li><a href="pantallas\temario\derechoautor\derechosautor.php">Derechos de Autor</a></li>
                              <li><a href="pantallas\temario\delitosinformaticos\delitosinfor.php">Delitos Informáticos</a></li>
                              <li><a href="pantallas\temario\contrato\contrato.php">Contratos</a></li>
                          </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </nav>
            </div>
          </header>
          <!-- Swiper-->
</body>
</html>