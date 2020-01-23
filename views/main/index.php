<div class="col-10">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">ФИО</th>
            <th scope="col">Дата рождения</th>
            <th scope="col">Возраст</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>

        <?php foreach ($pageData['students'] as $student): ?>

            <tr>
                <td><?= $student['surname'] . ' ' . $student['name'] . ' ' . $student['middlename']; ?></td>
                <td><?= implode(".", array_reverse(explode('-', $student['birthday']))); ?></td>
                <td><?= $student['age']; ?></td>
                <td>
                    <a class="btn btn-primary" href="/student/edit?id=<?= $student['id']; ?>" role="button">Изменить</a>
                    <a class="btn btn-danger" href="/student/delete?id=<?= $student['id']; ?>" role="button">Удалить</a>
                </td>
            </tr>

        <?php endforeach; ?>
        </tbody>
    </table>
</div>