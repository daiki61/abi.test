<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
    <header class="header">
     <div class="header__inner">
      <a class="header__logo" href="/">
        FashionablyLate
      </a>
     </div>
    </header>

    <main>
    <div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Contact</h2>
      </div>
        <form class="form" action="/contacts/confirm" method="post">
          @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お名前</span>
            <span class="form__label--required">＊</span>
           </div>
           <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="name" placeholder="例：山田" value="{{ old('name') }}" />
            </div>
            <div class="form__group-content">
             <div class="form__input--text">
              <input type="text" name="name" placeholder="例：太郎" value="{{ old('name') }}" />
            </div>
            <div class="form__error">
              @error('name')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">性別</span>
            <span class="form__label--required">＊</span>
          </div>
          <div class="form__error">
              @error('choosegender')
              {{ $message }}
              @enderror
          

          <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
            <span class="form__label--required">＊</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form__error">
             @error('email')
             {{ $message }}
             @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">電話番号</span>
            <span class="form__label--required">＊</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="tel" name="tel" placeholder="080-1234-5678" value="{{ old('tel') }}" />
            </div>
            <div class="form__error">
              @error('tel')
              {{ $message }}
              @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">住所</span>
            <span class="form__label--required">＊</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}" />
            </div>
            <div class="form__error">
             @error('address')
             {{ $message }}
             @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">建物名</span>
            <span class="form__label--required">＊</span>
          </div>
          <class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}" />
            </div>
          </div>
        </div>
<div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせの種類</span>
            <span class="form__label--required">＊</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="text" name="choosekinds" placeholder="選択してください" />
            </div>
            <div class="form__error">
             @error('choosekinds')
             {{ $message }}
             @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">お問い合わせ内容</span>
            <span class="form__label--required">＊</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--textarea">
              <input type="text" name="content" placeholder="お問い合わせの内容をご記載ください" value="{{ old('content') }}" />
            </div>
            <div class="form__error">
             @error('content')
             {{ $message }}
             @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">送信</button>
        </div>
</form>
    </div>
  </main>
</body>
</html>