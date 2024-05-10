<!DOCTYPE html>
<html lang="it">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Iscrizione</title>
  <!--CSS BootStrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <h1>Iscriviti al nostro sito</h1>
    <div>
      <form method="post" action="form_registra.php">
        <div class="mb-3">
          <label class="form-label">Nome*</label>
          <input type="text" class="form-control" name="nome" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Cognome*</label>
          <input type="text" class="form-control" name="cognome" required>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email*</label>
          <input type="email" class="form-control" name="email" required>
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password*</label>
          <input type="password" class="form-control" name="pwd" required>
        </div>

        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
    </div>
  </div>

  <!--JS BootStrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>