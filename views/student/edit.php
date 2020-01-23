<div class="col-6">
    <form action="/student/edit" method="POST">
        <h2 class="mb-4">Editing the student - <?= $pageData['student']['name']; ?></h2>
        <input type="hidden" value="<?= $pageData['student']['id']; ?>" name="id">
        <div class="form-group">
            <label for="first_name">Имя</label>
            <input name="first_name" type="text" class="form-control" id="first_name" placeholder="Имя" pattern="^[a-zA-ZА-Яа-я]{1,}$" required value="<?= $pageData['student']['name']; ?>">
            <span class="form__error">Это поле должно содержать только буквы</span>
        </div>
        <div class="form-group">
            <label for="surname">Фамилия</label>
            <input name="surname" type="text" class="form-control" id="surname" placeholder="Фамилия" required pattern="^[a-zA-ZА-Яа-я]{1,}$" value="<?= $pageData['student']['surname']; ?>">
            <span class="form__error">Это поле должно содержать только буквы</span>
        </div>
        <div class="form-group">
            <label for="middle_name">Отчество</label>
            <input name="middle_name" type="text" class="form-control" id="middle_name" placeholder="Отчество" required pattern="^[a-zA-ZА-Яа-я]{1,}$" value="<?= $pageData['student']['middlename']; ?>">
            <span class="form__error">Это поле должно содержать только буквы</span>
        </div>
        <div class="form-group">
            <label class="form-check-label" for="exampleCheck1">Дата рождения</label>
            <input name="birthday" type="date" class="form-control" value="<?= $pageData['student']['birthday']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
        <a href="/" class="btn btn-secondary">Отмена</a>
    </form>
</div>