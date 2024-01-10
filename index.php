<!doctype html>
<html lang="pt-br">

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.min.css">

  <!-- Include SweetAlert JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Include SweetAlert CSS -->
  <link rel="stylesheet" href="path/to/sweetalert2.min.css">


</head>

<body>
  <div class="bg-dark">
    <div class="container p-3 mb-2 bg-dark text-white"> navbar

    </div>

  </div>
  <div class=" mt-4 container">
    <h2>Inserir Novo Usuário</h2>
    <form action="insert_user.php" id="myForm" method="post">

      <div class="mb-3">
        <label for="nome" class="form-label">nome</label>
        <input type="text" class="form-control" name="nome">

      </div>
      <div class="mb-3">
        <label for="curso" class="form-label">curso</label>
        <input type="text" class="form-control" name="curso">

      </div>
      <div class="mb-3">
        <label for="cor" class="form-label">cor</label>
        <input type="text" class="form-control" name="cor">

      </div>
      <div class="mb-3">
        <label for="comida" class="form-label">comida</label>
        <input type="text" class="form-control" name="comida">

      </div>

      <button type="submit" id="submitButton" onclick="" value="Insert User" class="btn btn-primary">Inserir</button>

    </form>


    <h2 class="mt-4">Usuários</h2>

    <div id="result"></div>

  </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>\
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Include SweetAlert JavaScript -->
  <script src="myscript.js"></script>
  <!-- Include jQuery -->

  <script>
    getUsers()

    function getUsers(users) {
      // AJAX request using Fetch API
      fetch('get_users.php')
        .then(response => response.json())
        .then(data => {
          // Handle the data
          const userList = document.getElementById('result');

          // Clear existing content
          userList.innerHTML = '';

          // Iterate over the users and create list items
          data.users.forEach(user => {
            const listItem = document.createElement('li');
            listItem.textContent = `Nome: ${user.nome}, Curso: ${user.curso}, Cor: ${user.cor}, Comida: ${user.comida}`;
            userList.appendChild(listItem);
          });
        })
        .catch(error => console.error('Error:', error));




    }
  </script>

</body>



</html>