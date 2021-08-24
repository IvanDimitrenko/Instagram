@extends("layouts.root")






@section("content")
<main>
    <div class="content">
        <div class="content__registration-block">
            <h1 class="logo"></h1>
            <h2>
                Зарегистрируйтесь, чтобы смотреть фото и видео ваших друзей.
            </h2>
            <div id="facebook-block" class="el-function">
                <button>
                    <span id="facebook-icon"></span>
                    <span>Войти через Facebook</span>
                </button>
            </div>
            @include('layouts.or-line')
            @include('layouts.report-submit')
            <form action="{{ route('registration_handler') }}" method="POST">
                @csrf
                <div class="el-function">
                    <input name="email" placeholder="Моб. телефон или эл. адрес" type="text">
                </div>
                <div class="el-function">
                    <input name="name" placeholder="Имя и фамилия" type="text">
                </div>
                <div class="el-function">
                    <input name="login" placeholder="Имя пользователя" type="text">
                </div>
                <div class="el-function">
                    <input name="password" placeholder="Пароль" type="password">
                </div>
                <div id="button-enter" class="el-function">
                    <button type="submit">
                        Войти
                    </button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection