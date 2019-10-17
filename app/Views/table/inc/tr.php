<tr>
    <th scope="row"><?=$data['name']?></th>
    <td><?=$data['birthday']?></td>
    <td><?=$data['age']?></td>
    <td><a href="/edit/?id=<?=$data['id']?>"><button type="button" class="btn btn-warning">Редактировать</button></a></td>
    <td><a href=""><button type="button" class="btn btn-danger" data-id="<?=$data['id']?>" onclick="deleteStudent(this); return false;">Удалить</button></a></td>
</tr>