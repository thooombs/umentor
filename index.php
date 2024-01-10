


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
        <label for="user_id_" class="form-label">id</label>
        <input type="text" class="form-control" name="user_id_">

      </div>
      <div class="mb-3">
        <label for="nome" class="form-label">nome</label>
        <input type="text" class="form-control" name="nome">

      </div>
      <div class="mb-3">
        <label for="email" class="form-label">email</label>
        <input type="text" class="form-control" name="email">

      </div>
      <div class="mb-3">
        <label for="data_admissao" class="form-label">data-admissao</label>
        <input type="datetime-local" class="form-control" name="data_admissao">

      </div>
      <div class="mb-3">
        <label for="data_insercao" class="form-label">data-insercao</label>
        <input type="datetime-local" class="form-control" name="data_insercao">

      </div>
      <div class="mb-3">
        <label for="data_atualizacao" class="form-label">data-atualizacao</label>
        <input type="datetime-local" class="form-control" name="data_atualizacao">

      </div>
    

      <button type="submit" id="submitButton" onclick="" value="Insert User" class="btn btn-primary">Inserir</button>

    </form>


    <h2 class="mt-4">Usuários</h2>

    <ul id="result"></ul>

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
            listItem.textContent = `Id: ${user.user_id_}, Nome: ${user.nome}, Email: ${user.email}, data_admissao: ${user.data_admissao}, data_insercao : ${user.data_insercao}, data_atualizacao  : ${user.data_atualizacao}`;
           
       

            userList.appendChild(listItem);
          });
        })
        .catch(error => console.error('Error:', error));




    }
  </script>

</body>



</html>