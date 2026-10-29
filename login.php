<?php
include 'inc/header.inc.php';
?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<div class="bg-light">

   <div class="container py-5">
        <div class="row justify-content-center">

            <div class="col-md-6 col-lg-5">

                <div class="card shadow-sm border-0 rounded-3 p-4">

                    <!-- TÍTULO -->

                    <div class="text-center mb-4">

                        <i class="bi bi-person-circle text-success"
                           style="font-size: 50px;">
                        </i>

                        <h2 class="fw-bold mt-3">
                            Entrar
                        </h2>

                        <p class="text-muted">
                            Entre na sua conta para continuar sua compra.
                        </p>

                    </div>


                    <!-- FORMULÁRIO -->

                    <form action="pagamento.php" method="get">

                        <!-- E-MAIL -->

                        <div class="mb-3">

                            <label for="email" class="form-label fw-semibold">
                                E-mail
                            </label>

                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-control"
                                   placeholder="Digite seu e-mail">

                        </div>


                        <!-- SENHA -->

                        <div class="mb-4">

                            <label for="senha" class="form-label fw-semibold">
                                Senha
                            </label>

                            <input type="password"
                                   id="senha"
                                   name="senha"
                                   class="form-control"
                                   placeholder="Digite sua senha">

                        </div>


                        <!-- ENTRAR -->

                        <button type="submit"
                                class="btn btn-success w-100 py-2 fw-bold rounded-pill">

                            Entrar

                            <i class="bi bi-arrow-right ms-2"></i>

                        </button>

                    </form>


                    <!-- CADASTRO -->

                    <div class="text-center mt-4">

                        <p class="text-muted mb-2">
                            Ainda não possui uma conta?
                        </p>

                        <a href="cadastro-form.php"
                           class="text-success text-decoration-none fw-bold">

                            Cadastrar agora

                        </a>

                    </div>


                    <hr class="my-4">


                    <!-- VOLTAR -->

                    <div class="text-center">

                        <a href="carrinho2.php"
                           class="btn btn-outline-secondary rounded-pill px-4">

                            <i class="bi bi-arrow-left me-2"></i>

                            Voltar ao carrinho

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<?php
include 'inc/footer.inc.php';
?>