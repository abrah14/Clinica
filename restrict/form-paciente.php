<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="imagex/png" href="../img/AmanhecerIcon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="../css/meuCss.css" rel="stylesheet">
    <link href="../css/login.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Flex:opsz,wght@8..144,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;1,200;1,600&display=swap" rel="stylesheet">
    <title>Clínica</title>
</head>

<body id="corpo">
    <nav class="navbar navbar-expand-lg navbar-light bg-branco">
        <div class="container-fluid col-lg-8 col-xs-12">
            <a class="navbar-brand" href="#"><img src="../img/AmanhecerSupremo.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item" id="list-nav">
                        <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item" id="list-nav">
                        <a class="nav-link" href="#">Sobre Nós</a>
                    </li>
                    <li class="nav-item" id="list-nav">
                        <a class="nav-link" href="#">Diferenciais</a>
                    </li>
                    <li class="nav-item dropdown" id="list-nav">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tratamentos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Prótese Fixa</a></li>
                            <li><a class="dropdown-item" href="#">Periodontia</a></li>
                            <li><a class="dropdown-item" href="#">Ortodontia</a></li>
                            <li><a class="dropdown-item" href="#">Alinhadores invisíveis</a></li>
                            <li><a class="dropdown-item" href="#">Clareamento dental</a></li>
                            <li><a class="dropdown-item" href="#">Implante dentário</a></li>
                        </ul>
                    </li>
                    <li class="nav-item" id="list-nav">
                        <a class="nav-link">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row justify-content-center text-center mt-5">
        <div class="card-center">
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                    <form name='login' method='post' action="cadastra-paciente.php">
                        <div class="form-group">
                            <div class="form-row mt-14">
                                <div class=" mb-3">
                                    <label for="validationDefault01"><b>ÁREA RESTRITA</b></label><br>
                                    <label for="validationDefault01"><b>CADASTRO DO PACIENTE</b></label><br>
                                    <form>
                                        <div class="form-row">
                                            <text-align: center> </text-align:>

                                            <div class="form-group col-md">
                                                <label for="inputname"> Nome</label>
                                                <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Digite seu Nome...">
                                            </div>
                                            <div>
                                                <div class="form-row">
                                                    <div class="form-group col-md">
                                                        <label for="diaa">Data Nascimento</label>
                                                        <input type="date" class="form-control" id="dtNascimento" name="dtNascimento">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group col-md">
                                                <label for="inputcpf">CPF</label>
                                                <input type="text" class="form-control" id="txtCpf" name="txtCpf" placeholder="Digite seu CPF...">
                                            </div>
                                        </div>

                                        <div class="form-group col-md">
                                            <label for="inputEmail">Email</label>
                                            <input type="email" class="form-control" id="txtEmail" name="txtEmail" placeholder="Digite seu Email...">
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">RG</label>
                                    <input type="text" class="form-control" id="txtRg" name="txtRg" placeholder="Digite seu RG...">
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md">
                                        <label for="inputCity">Telefone</label>
                                        <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" placeholder="Digite seu Telefone...">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md">
                                            <label for="inputCity">Celular</label>
                                            <input type="text" class="form-control" id="txtCelular" name="txtCelular" placeholder="Digite seu Celular...">
                                        </div>

                                        <br>
                                        <button type="submit" class="btn btn-secondary" href='cadastra-paciente.php'>Cadastrar</button>
                                        <a class="btn btn-secondary" href='logout.php' role="button">Sair</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center text-center mt-5">
        <footer class="text-center text-lg-start bg-light text-muted mt-5">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                <i class="fas fa-gem me-3"></i>Company name
                            </h6>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Products
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Angular</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">React</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Vue</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Laravel</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Useful links
                            </h6>
                            <p>
                                <a href="#!" class="text-reset">Pricing</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Settings</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Orders</a>
                            </p>
                            <p>
                                <a href="#!" class="text-reset">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-4">
                                Contact
                            </h6>
                            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
                            <p>
                                <i class="fas fa-envelope me-3"></i>
                                info@example.com
                            </p>
                            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2021 Copyright:
                <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
            <!-- Copyright -->
        </footer>
    </div>
    <!-- Footer -->
    <!--scripts JS!-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>