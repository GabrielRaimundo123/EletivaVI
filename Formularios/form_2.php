<!doctype html>
<html lang="pt-br">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Formulário 2</title>

    <style>
      label{font-weight:700}
    </style>
  </head>

  <body class="container mt-5 p-4 border border-light border-2 rounded">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <h1>Cadastros</h1>

    
    <!--PRIMEIRA 
        lINHA-->

    <!--Código-->
    <form class="">
      <div class="row mt-5">
        <div class="col-sm-1">
          <label class="label-control mb-2" for="codigo">
            Código
          </label>
          <input class="form-control" type="text" value="32" aria-label="32" disabled readonly>
        </div>

        <!--Nome-->
        <div class="col-md-6">
          <label class="label-control mb-2" for="nome">
            Nome
          </label>
          <input type="text" class="form-control" placeholder="Nome Completo do Cliente"
            id="nome" name="nome"/>
        </div>

         <!--Email--> 
        <div class="col-md-3">
          <label class="label-control mb-2" for="e-mail">
            E-mail
          </label>
          <input type="email" class="form-control" placeholder="cliente@dominio.com"
            id="e-mail" name="e-mail"/>
        </div>

        <!--CPF-->
        <div class="col-md-2">
          <label class="label-control mb-2" for="cpf">
            CPF
          </label>
          <input type="number" class="form-control" placeholder="Só números"
            id="cpf" name="cpf"/>
        </div>
      </div>



      <!--SEGUNDA 
          LINHA-->

        <!--Celular-->
      <div class="row mt-3">
        <div class="col-md-2">
          <label class="label-control mb-2" for="cel">
            N° Celular
          </label>
          <input type="tel" class="form-control" placeholder="N° do Celular"
            id="cel" name="cel"/>
        </div>

        <!--Telefone-->
        <div class="col-md-2">
          <label class="label-control mb-2" for="tel">
            N° Telefone fixo
          </label>
          <input type="tel" class="form-control" placeholder="N° Telefone fixo"
            id="tel" name="tel"/>
        </div>

        <!--CEP-->
        <div class="col-md-2">
          <label class="label-control mb-2" for="cep">
            CEP
          </label>
          <input type="number" class="form-control" placeholder="ex:88308070"
            id="cep" name="cep"/>
        </div>

        <!--Log-->
        <div class="col-md-2">
          <label class="label-control mb-2" for="log">
            Logradouro
          </label>
          <input type="text" class="form-control" placeholder="ex:Rua 1400,"
            id="log" name="log"/>
        </div>

        <!--Num-->
        <div class="col-md-1">
          <label class="label-control mb-2" for="num">
            N°
          </label>
          <input type="number" class="form-control" placeholder="N°"
            id="num" name="num"/>
        </div>

        <!--Bairro-->
        <div class="col-md-3">
          <label class="label-control mb-2" for="bairro">
            Bairro
          </label>
          <input type="text" class="form-control" placeholder="Bairro"
            id="bairro" name="bairro"/>
        </div>
      </div>



      <!--TERCEIRA 
          LINHA-->

        <!--Cidade-->
      <div class="row mt-3">
        <div class="col-md-3">
          <label class="label-control mb-2" for="cidade">
            Cidade
          </label>
          <input type="text" class="form-control" placeholder="Cidade"
            id="cidade" name="cidade"/>
        </div>

        <!--UF-->
        <div class="col-md-1">
          <label class="label-control mb-2" for="uf">
            UF
          </label>
          <input type="text" class="form-control" placeholder="UF"
            id="uf" name="uf"/>
        </div>

        <!--Status-->
        <div class="col-md-2">
          <label class="label-control mb-2" for="status">
            Status
          </label>
          <select class="form-select" id="status" required>
            <option selected disabled>Selecione</option>
            <option value="s">Solteiro(a)</option>
            <option value="c">Casado(a)</option>
            <option value="v">Divorciado(a)</option> 
            <option value="v">Viúvo(a)</option>                         
          </select>
        </div>        
      </div>
    


      <!--RESETAR 
          E PRÓXIMO-->
      <div class="mt-4 d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="reset" class="btn btn-danger">Resetar</button>
        <button type="submit" class="btn btn-success">Próximo</button>
      </div>
    </form>
  </body>
</html>