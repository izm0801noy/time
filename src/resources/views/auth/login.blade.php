<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン | COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
</head>
<body>
    <header class="login-header">
        <div class="login-header__container">
            <h1 class="login-header__logo">COACHTECH</h1>
        </div>
    </header>

    <main class="login">
        <div class="login__container">
            <h2 class="login__title">ログイン</h2>
            
            <form method="POST" action="{{ route('login') }}" class="login__form">
                @csrf
                
                <div class="login__form-group">
                    <label for="email" class="login__label">メールアドレス</label>
                    <input id="email" type="email" class="login__input @error('email') login__input--invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="login__error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="login__form-group">
                    <label for="password" class="login__label">パスワード</label>
                    <input id="password" type="password" class="login__input @error('password') login__input--invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="login__error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="login__form-group">
                    <button type="submit" class="login__button">
                        ログインする
                    </button>
                </div>
                
                <div class="login__link">
                    <a href="{{ route('register') }}" class="login__register-link">会員登録はこちら</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>
