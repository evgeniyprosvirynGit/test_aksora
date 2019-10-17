<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактировать ученика</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div style="display: flex;justify-content: center;align-items: center;height: 100vh;flex-direction: column">

    <h3 style="margin-bottom: 30px">Редактировать ученика</h3>
    <h3 style="margin-bottom: 30px"><?=$data['name']?></h3>

    <form method="post" action="/edit/edit_student">

        <input type="hidden" name="id" value="<?=$data['id']?>">

        <div class="form-group">
            <input type="text" name="last_name" class="form-control" placeholder="Фамилия" value="<?=$data['last_name']?>">
        </div>

        <div class="form-group">
            <input type="text" name="first_name" class="form-control" placeholder="Имя" value="<?=$data['first_name']?>">
        </div>

        <div class="form-group">
            <input type="text" name="middle_name" class="form-control" placeholder="Отчество" value="<?=$data['middle_name']?>">
        </div>

        <div class="form-group">
            <input type="text" name="birthday" class="form-control" placeholder="День рождения" value="<?=$data['birthday']?>">
        </div>

        <button type="submit" class="btn btn-primary">Сохранить</button>
        <button type="reset" class="btn btn-light" onclick="location.href = '/';">Отменить</button>

    </form>

</div>

</body>
</html>