<!-- insert_user_form.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert User</title>
</head>
<body>
    <h2>Insert User</h2>
    <form action="insert_user.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="curso">Curso:</label>
        <input type="text" name="curso" required><br>

        <label for="cor">Cor:</label>
        <input type="text" name="cor" required><br>

        <label for="comida">Comida:</label>
        <input type="text" name="comida" required><br>

        <input type="submit" value="Insert User">
    </form>
</body>
</html>