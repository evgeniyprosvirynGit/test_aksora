<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добавление ученика</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div style="display: flex;justify-content: center;align-items: center;height: 100vh;flex-direction: column">

    <h3 style="margin-bottom: 30px">Добавить ученика</h3>

    <form method="post" action="/add/add_student">

        <div class="form-group">
            <input type="text" name="last_name" class="form-control" placeholder="Фамилия" required>
        </div>

        <div class="form-group">
            <input type="text" name="first_name" class="form-control" placeholder="Имя" required>
        </div>

        <div class="form-group">
            <input type="text" name="middle_name" class="form-control" placeholder="Отчество" required>
        </div>

        <div class="form-group">
            <input type="text" name="birthday" class="form-control" placeholder="День рождения" required>
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
        <button type="reset" class="btn btn-light" onclick="location.href = '/';">Отменить</button>

    </form>

</div>

</body>
</html>