<?php
include 'inc/header.inc.php';
?>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<div class="pagina-cadastro">

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card shadow-sm border-0 rounded-3 p-4">

                    <h2 class="fw-bold mb-4">
                        Criar cadastro
                    </h2>

                    <p class="text-muted mb-4">
                        Preencha seus dados para continuar sua compra.
                    </p>


                    <!-- DADOS PESSOAIS -->

                    <h5 class="fw-bold mb-3">
                        Dados pessoais
                    </h5>

                    <div class="row g-3">

                        <!-- NOME -->

                        <div class="col-12">

                            <label class="form-label">
                                Nome completo
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="nome"
                                   placeholder="Digite seu nome completo"
                                   required>

                        </div>


                        <!-- EMAIL -->

                        <div class="col-md-6">

                            <label class="form-label">
                                E-mail
                            </label>

                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   placeholder="seuemail@email.com"
                                   required>

                        </div>


                        <!-- TELEFONE -->

                        <div class="col-md-6">

                            <label class="form-label">
                                Telefone
                            </label>

                            <input type="tel"
                                   class="form-control"
                                   name="telefone"
                                   placeholder="(00) 00000-0000"
                                   required>

                        </div>


                        <!-- CPF -->

                        <div class="col-md-6">

                            <label class="form-label">
                                CPF
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="cpf"
                                   placeholder="000.000.000-00"
                                   required>

                        </div>

                    </div>


                    <hr class="my-4">


                    <!-- SENHA -->

                    <h5 class="fw-bold mb-3">
                        Dados de acesso
                    </h5>

                    <div class="row g-3">

                        <div class="col-md-6">

                            <label class="form-label">
                                Senha
                            </label>

                            <input type="password"
                                   class="form-control"
                                   name="senha"
                                   placeholder="Digite sua senha"
                                   required>

                        </div>


                        <div class="col-md-6">

                            <label class="form-label">
                                Confirmar senha
                            </label>

                            <input type="password"
                                   class="form-control"
                                   name="confirmar_senha"
                                   placeholder="Digite a senha novamente"
                                   required>

                        </div>

                    </div>


                    <hr class="my-4">


                    <!-- ENDEREÇO -->

                    <h5 class="fw-bold mb-3">
                        Endereço de entrega
                    </h5>

                    <div class="row g-3">


                        <!-- CEP -->

                        <div class="col-md-4">

                            <label class="form-label">
                                CEP
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="cep"
                                   placeholder="00000-000"
                                   required>

                        </div>


                        <!-- ESTADO -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Estado
                            </label>

                            <input type="text"
                                    name="estado"
                                    placeholder="Ex: Paraná"
                                    required>
                        </div>


                        <!-- CIDADE -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Cidade
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="cidade"
                                   placeholder="Sua cidade"
                                   required>

                        </div>


                        <!-- RUA -->

                        <div class="col-md-8">

                            <label class="form-label">
                                Rua / Avenida
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="rua"
                                   placeholder="Nome da rua ou avenida"
                                   required>

                        </div>


                        <!-- NUMERO -->

                        <div class="col-md-4">

                            <label class="form-label">
                                Número
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="numero"
                                   placeholder="Ex: 123"
                                   required>

                        </div>


                        <!-- BAIRRO -->

                        <div class="col-md-6">

                            <label class="form-label">
                                Bairro
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="bairro"
                                   placeholder="Seu bairro"
                                   required>

                        </div>


                        <!-- COMPLEMENTO -->

                        <div class="col-md-6">

                            <label class="form-label">
                                Complemento
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="complemento"
                                   placeholder="Apto, bloco, casa..."
                                   >

                        </div>


                        <!-- PONTO DE REFERÊNCIA -->

                        <div class="col-12">

                            <label class="form-label">
                                Ponto de referência
                            </label>

                            <input type="text"
                                   class="form-control"
                                   name="referencia"
                                   placeholder="Ex: Próximo ao mercado">

                        </div>

                    </div>


                    <hr class="my-4">


                    <!-- BOTÃO -->

                    <div class="d-flex justify-content-between align-items-center">

                        <a href="index.php"
                           class="btn btn-outline-secondary">

                            Voltar

                        </a>


                        <button type="submit"
                                class="btn btn-success px-4">

                            Continuar

                            <i class="bi bi-arrow-right ms-2"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>


<?php
include 'inc/footer.inc.php';
?>