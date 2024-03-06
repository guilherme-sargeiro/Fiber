<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Cadastro de Viabildade</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Custom Google font-->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
                <div class="container px-5">
                   
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                            <li class="nav-item"><a class="nav-link" href="index.html">Principal</a></li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <section class="py-5">
                <div class="container px-5">
                    <!-- Contact form-->
                    <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                        <div class="text-center mb-5">
                            <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                            <h1 class="fw-bolder">VIABILIDADE T&Eacute;CNICA</h1>
                            <p class="lead fw-normal text-muted mb-0">PREENCHA OS CAMPOS ABAIXO: </p>
                        </div>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-8 col-xl-6">
                              
                                <!-- to get an API token!-->
                                
                               
                                <form method="POST" action="cad.php" id="contactForm" data-sb-form-api-token="API_TOKEN">
                                    <div>
                                    <!-- Nome Completo-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-uppercase" required name="nome" id="nome" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">NOME COMPLETO</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigat&oacute;rio.</div>
                                    </div>
                                    
                                     <!-- Data de Nascimento-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-uppercase" required name="data" id="datadenascimento" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">DATA DE NASCIMENTO</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigat&oacute;rio.</div>
                                    </div>
                                    
                                    <!-- CPF-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-uppercase" required name="cpf" id="cpf" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">CPF</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigat&oacute;rio.</div>
                                    </div>
                                    
                                     <!-- Identidade-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-uppercase" required name="identidade" id="identidade" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">IDENTIDADE</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigat&oacute;rio.</div>
                                    </div>
                                     
                                    
                                    <!-- Email-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-uppercase" required name="email" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                                        <label for="email">EMAIL</label>
                                        <div class="invalid-feedback" data-sb-feedback="email:required">Campo obrigat&oacute;rio.</div>
                                        <div class="invalid-feedback" data-sb-feedback="email:email">Digite um email v�lido.</div>
                                    </div> 
                                    
                                    
                                     <!-- Endere�o-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-uppercase" required name="endereco" id="endereco" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">ENDERE&Ccedil;O COMPLETO</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigat&oacute;rio.</div>
                                    </div>
                                    
                                    
                                     <!-- Refer�ncia-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-uppercase" required name="referencia" id="referencia" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">REFER&Ecirc;NCIA</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigat&oacute;rio.</div>
                                    </div>
                                    
                                     <!-- CEP-->                                    
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-uppercase" required name="cep" id="cep" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                                        <label for="name">CEP</label>
                                        <div class="invalid-feedback" data-sb-feedback="name:required">Campo obrigat&oacute;rio.</div>
                                    </div>
                                    
                                    
                                    <!-- Telefone-->
                                    <div class="form-floating mb-3">
                                        <input class="form-control text-uppercase" required name="telefone" id="telefone" type="tel" placeholder="(00)0000-0000" data-sb-validations="required" />
                                        <label for="phone">TELEFONE</label>
                                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                    </div>
                                    
                                    
                                     <!-- Planos-->
                                  
                                  <div class="form-floating mb-3"> 
                                  <select class="form-control text-uppercase" required name="planos" id="plano">
      
                                    <option><p class="text-uppercase">Planos</p></option>
                                    <option>PLANO GLOBOPLAY-200MB</option>
                                    <option>PLANO GLOBOPLAY-300MB</option>
                                    <option>PLANO GLOBOPLAY-400MB</option>
                                    <option>PLANO GLOBOPLAY-500MB</option>
                                    <option>PLANO GLOBOPLAY-1GB</option>
                                    <option>PLANO PREMIUM-150MB</option>
                                    <option>PLANO PREMIUM-250MB</option>
                                    <option>PLANO PREMIUM-450MB</option>
                                    <option>PLANO PREMIUM-600MB</option>
                                    <option>PLANO PREMIUM-800MB</option>
                                    <option>PLANO STANDARD-150MB</option>
                                    <option>PLANO STANDARD-250MB</option>
                                    <option>PLANO STANDARD-450MB</option>
                                    <option>PLANO TELEFONIA PF</option>
                                    <option>PLANO TELEFONIA PJ</option>
                                    <option>PLANO DGO</option>
                                  </select>
                                        
                                    </div>
                                    
                                    <!-- Data de vencimento-->
                                  
                                  <div class="form-floating mb-3"> 
                                  <select class="form-control" name="vencimento" required id="datadevencimento">
      
                                    <option selected>DATA DE VENCIMENTO</option>
                                    <option>10</option>
                                    <option>20</option>
                                  
                                  </select>
                                        
                                    </div>
                                    
                                      <!-- Forma de pagamento-->
                                  
                                  <div class="form-floating mb-3"> 
                                  <select class="form-control" name="pagamento" required id="datadevencimento">
      
                                    <option selected>FORMA DE PAGAMENTO</option>
                                    <option>DINHEIRO</option>
                                    <option>CART&Atilde;O</option>
                                    <option>PIX</option>
                                  
                                  </select>
                                        
                                    </div>
                                  
                                   <!-- Indica��o-->
                                  
                                  <div class="form-floating mb-3"> 
                                  <select class="form-control" name="indicacao" required id="indicacao">
      
                                    <option selected>INDICA&Ccedil;&Atilde;O  </option>
                                    <option>LOJA PRINCIPAL</option>
                                    <option>LOJA FILIAL</option>
                                    
                                  
                                  </select>
                                        
                                    </div>
                                     
                                    <!-- Submit success message-->
                                    <!---->
                                    <!-- This is what your users will see when the form-->
                                    <!-- has successfully submitted
                                    <div class="d-none" id="submitSuccessMessage">
                                        <div class="text-center mb-3">
                                            <div class="fw-bolder">Form submission successful!</div>
                                            To activate this form, sign up at
                                            <br />
                                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                                        </div>
                                    </div>-->
                                    <!-- Submit error message-->
                                    <!---->
                                    <!-- This is what your users will see when there is-->
                                    <!-- an error submitting the form
                                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Erro ao enviar o cadastro!</div></div>
                                     Submit Button-->
                                    
                                    <div class="d-grid"><button class="btn btn-primary btn-lg" id="cadastrar" type="submit">CADASTRAR</button></div>
                            </div></form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-white py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0">Powered by Gustavo S. Fernandes and Guilherme Sargeiro</div></div>
                    
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>