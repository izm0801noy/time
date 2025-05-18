<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録 - COACHTECH</title>
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__logo">
            <h1 class="header__logo-text">COACHTECH</h1>
        </div>
    </header>

    <main class="register">
        <div class="register__container">
            <h2 class="register__title">会員登録</h2>
            
            <form method="POST" action="{{ route('register') }}" class="register__form">
                @csrf
                
                <div class="register__form-group">
                    <label for="name" class="register__label">名前</label>
                    <input id="name" type="text" name="name" class="register__input" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="register__error">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="register__form-group">
                    <label for="email" class="register__label">メールアドレス</label>
                    <input id="email" type="email" name="email" class="register__input" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="register__error">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="register__form-group">
                    <label for="password" class="register__label">パスワード</label>
                    <input id="password" type="password" name="password" class="register__input" required>
                    @error('password')
                        <span class="register__error">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="register__form-group">
                    <label for="password-confirm" class="register__label">パスワード確認</label>
                    <input id="password-confirm" type="password" name="password_confirmation" class="register__input" required>
                </div>
                
                <div class="register__form-group">
                    <button type="submit" class="register__button">登録する</button>
                </div>
            </form>
            
            <div class="register__link">
                <a href="{{ route('login') }}" class="register__login-link">ログインはこちら</a>
            </div>
        </div>
    </main>
</body>
</html>
