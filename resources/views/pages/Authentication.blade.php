@extends("layouts.root")

@section("content")
<section id="l-main-section">
    <main id="main">
        <div id="right-block" class="article-main">
        </div>
        <div id="left-block" class="article-main">
            <div class="authentiocation-block">
                <h1 class="logo"></h1>

                <div class="input-block">
                    @include('layouts.report-submit')
                    <form id="form-block" action="{{ route('authentication_handler') }}" method="POST">
                        @csrf
                        <div id="login-block" class="el-function">
                            <input name="login" type="text" placeholder="Телефон, имя пользователя или эл. адрес">
                        </div>
                        <div id="password-block" class="el-function">
                            <input name="password" type="password" placeholder="Пароль">
                        </div>
                        <div id="button-enter" class="el-function">
                            <button type="submit">
                                Войти
                            </button>
                        </div>
                        <!-- @include('layouts.or-line')  -->
                        <!-- <OrLine></OrLine> -->
                        <example-componen></example-componen>

                        <div id="facebook-block" class="el-function">
                            <button>
                                <span id="facebook-icon"></span>
                                <span>Войти через Facebook</span>
                            </button>
                        </div>
                        <a href="#" class="marg-auto">Забыли пароль?</a>
                        <div class="support-block"></div>
                    </form>
                </div>
            </div>
            <div class="register-block authentiocation-block">
                <p class="">
                    У вас ещё нет аккаунта?
                    <a href="/registration" class="">
                        Зарегистрироваться
                    </a>
                </p>
            </div>
        </div>
    </main>
    <button type="button" class="btn btn-primary">Primary</button>
    <button type="button" class="btn btn-secondary">Secondary</button>
    <button type="button" class="btn btn-success">Success</button>
    <button type="button" class="btn btn-danger">Danger</button>
    <button type="button" class="btn btn-warning">Warning</button>
    <button type="button" class="btn btn-info">Info</button>
    <button type="button" class="btn btn-light">Light</button>
    <button type="button" class="btn btn-dark">Dark</button>
</section>

@endsection