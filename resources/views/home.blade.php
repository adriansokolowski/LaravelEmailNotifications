@extends('layouts.app')

@section('content')
<div class="wrapper d-flex justify-content-center align-items-center p-3">
    <div class="loginBox">
      <div class="text-center pt-3">
        <h3>Dziękujemy za podtwierdzenie konta</h3>
      </div>
    <form class="form" method="post" action="{{ route('delete') }}">
        @csrf
        <div class="d-flex justify-content-between align-items-center mt-5">
          <button type="submit" class="delete">Usuń konto</button>
        </div>
      </form>
    </div>
  </div>
  <script>
    document.querySelector("form").addEventListener("submit", (e) => {
      e.preventDefault();
      console.log("deleted");
    });
  </script>
@endsection
