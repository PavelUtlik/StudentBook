<div class="col-6">
    <form action="/student/add" method="POST">
        <h2 class="mb-4">Добавить нового студента</h2>
        <div class="form-group">
            <label for="first_name">Имя</label>
            <input name="first_name" type="text" class="form-control" id="first_name" placeholder="Имя" pattern="^[a-zA-ZА-Яа-я]{1,}$" required>
            <span class="form__error">Это поле должно содержать только буквы</span>
        </div>
        <div class="form-group">
            <label for="surname">Фамилия</label>
            <input name="surname" type="text" class="form-control" id="surname" placeholder="Фамилия" required pattern="^[a-zA-ZА-Яа-я]{1,}$">
            <span class="form__error">Это поле должно содержать только буквы</span>
        </div>
        <div class="form-group">
            <label for="middle_name">Отчество</label>
            <input name="middle_name" type="text" class="form-control" id="middle_name" placeholder="Отчество" required pattern="^[a-zA-ZА-Яа-я]{1,}$">
            <span class="form__error">Это поле должно содержать только буквы</span>
        </div>
        <div class="form-group">
            <label class="form-check-label" for="birthday">Дата рождения</label>
            <input name="birthday" type="date" class="form-control" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить студента</button>
            <a href="/" class="btn btn-secondary">Назад</a>
        </div>

    </form>
</div>