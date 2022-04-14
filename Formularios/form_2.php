<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Formulario 1</title>
  </head>
  <body class="container mt-5 p-4 border border-light border-2 rounded">

    <h1> Formulário 1</h1>

    <form>
        <div class="row mb-3 mt-4">
            <div class="col-md-4">
              <label for="First name" class="label-control mb-2">
              First name
              </label>
              <input type="text" class="form-control" placeholder="Mark"
              id="firstname" name="firstname" required/>
            </div>
            <div class="col-md-4">
              <label for="last name" class="label-control mb-2">
              last name
              </label>
              <input type="text" class="form-control" placeholder="Mark"
              id="firstname" name="firstname" required/>
            </div>
            <div class="col-md-4">
            <label for="username" class="label-control mb-2">
              Username
            </label>
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1">@</span>
              <input type="text" class="form-control" placeholder="Username"
                id="username" name="username" required/>
            </div>
          </div>
      </div> 
      
    <div class="row mb-3">
          <div class="col-md-6">
            <label for="city" class="label-control mb-2">
              City
            </label>
            <input type="text" class="form-control" placeholder="City"
              id="city" name="city" required/>
          </div>

          <div class="col-md-4">
            <label for="state" class="label-control mb-2">
              State
            </label>
            <select class="form-select" id="state" required>
              <option selected disabled>Choose...</option>
              <option value="MG">Minas Gerais</option>
              <option value="RJ">Rio de Janeiro</option>
              <option value="SP">São Paulo</option>                         
            </select>
          </div>

          <div class="col-md-2">
            <label for="zip" class="label-control mb-2">
              Zip
            </label>
            <input type="text" class="form-control" placeholder="Zip"
              id="zip" name="zip" required/>
          </div>
      </div>

      <!--Checkbox & Submit-->
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="checkbox" required>
        <label class="form-check-label" for="checkbox">Agree to terms and conditions</label>
      </div>

      <button type="submit" class="btn btn-primary">Submit form</button>
    </form>

  </body>

</html>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>