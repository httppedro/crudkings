<!-- FORMULARIO (licitacao) -->
<title> Formulario de cadastro </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" href="/form.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Righteous&family=Roboto+Slab:wght@500&display=swap"
    rel="stylesheet">

<div class="divacesso">
    <a class="btn btn-lg btn-warning" href="/admin">
        <i class="fa fa-times"></i> Cancelar
    </a>
</div>

<div class="corpo">
    <H1 class="title">Preencha o fomulário ao lado para participar: </H1>


    <form action="cadastrar-nota" method="POST">
        @csrf
        <div class="row form" style="padding:10px 0;">

            <div class="row">
                <div class="form-group col-lg-5">
                    <label for="Nome" class="control-label">Nome *</label>
                    <input type="text" class="form-control validate[required]" name="nome">
                </div>

                <div class="form-group col-lg-3">
                    <label for="Idade" class="control-label">Idade *</label>
                    <input class="form-control validate[required]" name="idade" id="Idade">
                </div>

                <div class="form-group col-lg-2">
                    <label for="data_da_compra" class="control-label">Data de compra *</label>
                    <input type="date" class="form-control mask_data bootstrap_datepicker" name="data_da_compra">
                </div>

                <div class="form-group col-lg-2">
                    <label for="nome_produto" class="control-label">Nome do produto *</label>
                    <input type="text" class="form-control validate[required]" name="nome_produto" id="nome_produto">
                </div>

            </div>

            <div class="row">
                <div class="form-group col-lg-12">
                    <label for="objeto" class="control-label">Endereço *</label>
                    <input type="text" id="objeto" name="endereco" class="form-control validate[required]">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="datapublicacao" class="control-label">Cep *</label>
                    <input type="text" class="form-control validate[required]"name="cep">
                </div>

                <div class="form-group col-lg-3">
                    <label for="dataabertura" class="control-label">Bairro *</label>
                    <input type="text" class="form-control validate[required]" name="bairro">
                </div>

                <div class="form-group col-lg-3">
                    <label for="horaabertura" class="control-label">Cidade *</label>
                    <input type="text" class="form-control validate[required]" name="cidade">
                </div>

                <div class="form-group col-lg-3">
                    <label for="processo" class="control-label">Estado *</label>
                    <input type="text" class="form-control" name="estado">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-lg-3">
                    <label for="responsavel" class="control-label">Pais *</label>
                    <input type="text" class="form-control" name="pais" maxlength="200">
                </div>

                <div class="form-group col-lg-3">
                    <label for="local" class="control-label">Nota *</label>
                    <input type="text" class="form-control" name="nota" maxlength="200">
                </div>

                <div class="form-group col-lg-2">
                    <label for="email" class="control-label">Observação *</label>
                    <textarea type="texta" class="form-control" name="observacao" maxlength="100"> </textarea>
                </div>

                <div class="form-group col-lg-2">
                    <label for="status" class="control-label">Email *</label>
                    <select class="form-control validate[required]" name="email" id="status">
                    </select>
                </div>
            </div>

            <!-- BOTÕES (ações) -->
            <div class="row col-lg-12">
                <div class="well">
                    <button type="submit" class="btn btn-lg btn-primary">
                        <i class="fa fa-check-circle"></i> Cadastrar
                    </button>

                    <a class="btn btn-lg btn-danger" href="/">
                        <i class="fa fa-times"></i> Cancelar
                    </a>

                </div>
            </div>
            <!-- /BOTÕES -->

    </form> <!-- /FORMULARIO -->
</div>
