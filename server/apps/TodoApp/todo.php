<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo App</title>
    <link rel="stylesheet" href="../../assets/todo.css">
</head>

<body>
    <div class="container">
        <h1>Todo App</h1>
        <form action="/apps/TodoApp/actions.php" method="post">
            <input type="text" name="todo" placeholder="Enter a new todo" required>
            <input type="submit" value="Add Todo">
        </form>

        <?php
        include "todoList.php";
        ?>
    </div>
</body>

</html>