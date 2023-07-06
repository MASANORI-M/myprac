@extends('layout.default')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto login-card">
        <h1>JOYJOY予約管理システム</h1>
        <h2>管理画面</h2>
        <input type="text" id="email" class="form-control" placeholder="メールアドレス" required>
        <input type="password" id="password" class="form-control" placeholder="パスワード" required>
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="#">パスワードを忘れた方はこちら</a>
      </div>
    </div>
  </div>
@endsection