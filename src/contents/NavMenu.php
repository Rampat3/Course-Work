<div class="NavMenu">
    <div class="NavMenu__icons">
        <img src="../src/icons/icon.png" alt="">
        <a href="#">Academy</a>
    </div>
    <div class="NavMenu__categories">
        <a href="#categories">Категории</a>
    </div>
    <div class="NavMenu__search">
        <form>
            <input type="text" placeholder="Ищите что угодно">
            <button type="submit">Поиск</button>
        </form>
    </div>
    <div class="NavMenu__authorization">
        <div class="NavMenu__authorization-login">
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Войти
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Войти</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email адрес</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer" style="display: flex; justify-content: center;">
                            <button type="button" class="btn btn-dark">Авторизоваться</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="NavMenu__authorization-register">
            <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                Регистрация
            </button>
            <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Регистрация</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Имя</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Номер телефона</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email адрес</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer" style="display: flex; justify-content: center;">
                            <button type="button" class="btn btn-dark">Зарегистрироваться</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>