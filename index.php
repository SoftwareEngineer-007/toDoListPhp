<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>To-Do list</title>
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="/add.php" method="post">
            <input type="text" name="task" id="task" placeholder="To Do" class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Send</button>
        </form>
    </div>
</body>
</html>