@extends('layouts.app')

@section('content')
    <div class="wrapper d-flex justify-content-center align-items-center p-3">
        <div class="loginBox">
            <div class="text-center pt-3">
                <h3>Zarejestruj się</h3>
            </div>
            <form class="form" method="post" action="{{ route('register') }}">
                @csrf
                <label>Email</label>
                <input id="email" type="text" name="email" text="Wpisz adres e-mail" additional="required" />
                <label>Password</label>
                <input id="password" type="text" name="password" text="Wpisz hasło" additional="required" />

                <div class="d-flex justify-content-between align-items-center mt-5">
                    <button type="submit" class="submit">Dalej</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let emailValue;
        let passwordValue;

        document.getElementById("email").addEventListener("change", (e) => {
            emailValue = e.target.value;
        });
        document.getElementById("password").addEventListener("change", (e) => {
            passwordValue = e.target.value;
        });
        document.querySelector("form").addEventListener("submit", (e) => {
            e.preventDefault();
            console.log(emailValue);
            console.log(passwordValue);
        });

    </script>

@endsection
