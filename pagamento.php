<?php include("inc/header.inc.php"); ?>

<div class="container py-5">

    <div class="card shadow mx-auto" style="max-width: 760px;">
        
        <div class="card-body p-4">

            <h1 class="text-center mb-2">Pagamento</h1>

            <p class="text-center text-muted mb-5">
                Escolha a forma de pagamento
            </p>


            <!-- BOTÃO PIX -->
            <button 
                class="btn btn-success btn-lg w-100 mb-3"
                type="button"
                data-toggle="collapse"
                data-target="#pagamentoPix"
                aria-expanded="false"
                aria-controls="pagamentoPix">
                PIX
            </button>

            <!-- CONTEÚDO PIX -->
            <div class="collapse" id="pagamentoPix">

                <div class="card card-body mb-3">

                    <p class="text-center">
                        Escaneie o QR Code abaixo para realizar o pagamento.
                    </p>

                    <div class="bg-light p-5 text-center mb-3">
                        <strong>QR CODE PIX</strong>
                    </div>

                    <p class="text-center">
                        Ou copie a chave PIX:
                    </p>

                    <div class="input-group">
                        <input 
                            type="text" 
                            class="form-control"
                            value="boccato@exemplo.com"
                            id="chavePix"
                            readonly>

                        <button 
                            class="btn btn-outline-secondary"
                            type="button"
                            onclick="copiarPix()">
                            Copiar
                        </button>
                    </div>

                </div>

            </div>


            <!-- BOTÃO CARTÃO -->
            <button 
                class="btn btn-outline-secondary btn-lg w-100 mb-3"
                type="button"
                data-toggle="collapse"
                data-target="#pagamentoCartao"
                aria-expanded="false"
                aria-controls="pagamentoCartao">
                Cartão
            </button>


            <!-- CONTEÚDO CARTÃO -->
            <div class="collapse" id="pagamentoCartao">

                <div class="card card-body">

                    <h4 class="mb-4">Pagamento com cartão</h4>

                    <div class="form-group mb-3">
                        <label for="numeroCartao">
                            Número do cartão
                        </label>

                        <input 
                            type="text"
                            class="form-control"
                            id="numeroCartao"
                            placeholder="0000 0000 0000 0000">
                    </div>


                    <div class="form-group mb-3">
                        <label for="nomeCartao">
                            Nome no cartão
                        </label>

                        <input 
                            type="text"
                            class="form-control"
                            id="nomeCartao"
                            placeholder="Nome completo">
                    </div>


                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label for="validade">
                                Validade
                            </label>

                            <input 
                                type="text"
                                class="form-control"
                                id="validade"
                                placeholder="MM/AA">

                        </div>


                        <div class="col-md-6 mb-3">

                            <label for="cvv">
                                CVV
                            </label>

                            <input 
                                type="text"
                                class="form-control"
                                id="cvv"
                                placeholder="000">

                        </div>

                    </div>


                    <button 
                        type="button"
                        class="btn btn-success btn-lg w-100">
                        Finalizar pagamento
                    </button>

                </div>

            </div>


            <hr class="my-4">


            <div class="text-center">

                <a 
                    href="carrinho2.php"
                    class="btn btn-outline-secondary">
                    Voltar ao carrinho
                </a>

            </div>

        </div>

    </div>

</div>


<script>

function copiarPix() {

    const chave = document.getElementById("chavePix");

    navigator.clipboard.writeText(chave.value);

    alert("Chave PIX copiada!");

}

</script>


<?php include("inc/footer.inc.php"); ?>