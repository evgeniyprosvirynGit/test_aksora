<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Школьный журнал</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <div class="row">

        <div style="display: flex;justify-content: space-between;width: 100%;margin: 10px">

            <h4>Школьный журнал</h4>
            <div><a href="/add/"><button type="button" class="btn btn-success">Добавить ученика</button></a></div>

        </div>

        <div class="col-lg-12">

            <?=$data['table']?>

        </div>

    </div>

</div>

<script>

    deleteStudent = function (ths) {

        var xhr = new XMLHttpRequest();

        xhr.open('POST', '/index/delete', true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

        var data_id = ths.getAttribute('data-id');

        xhr.onload = function () {

            if (xhr.readyState === xhr.DONE) {

                if (xhr.status === 200) {

                    location.href = '/';

                }

            }

        };

        xhr.send('delete_id='+parseInt(data_id));

        return false;

    }

</script>

</body>
</html>

