<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">






    
</head>
<body>
    <form method="POST" action="{{ route('users_input_confirm') }}">
        @csrf

        <table>
            <tr>
                <td class="col2">
                    <p>名前</p>
                </td>
                <td class="col5">
                    <label>性</label><br>
                    <input name="lastname" value="{{ old('lastname') }}" type="text" placeholder="名字を記入してください。">
                    @if ($errors->has('lastname'))
                        <p class="error-message">{{ $errors->first('lastname') }}</p>
                    @endif
                </td>
                <td class="col5">
                    <label>名</label><br>
                    <input name="firstname" value="{{ old('firstname') }}" type="text" placeholder="名前を記入してください">
                    @if ($errors->has('firstname'))
                        <p class="error-message">{{ $errors->first('firstname') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>名前(カナ)</p>
                </td>
                <td class="col5">
                    <label>性(カナ)</label><br>
                    <input name="lastname_kana" value="{{ old('lastname_kana') }}" type="text" placeholder="名字(カナ)を記入してください。">
                    @if ($errors->has('lastname_kana'))
                        <p class="error-message">{{ $errors->first('lastname_kana') }}</p>
                    @endif
                </td>
                <td class="col5">
                    <label>名(カナ)</label><br>
                    <input name="firstname_kana" value="{{ old('firstname_kana') }}" type="text" placeholder="名前(カナ)を記入してください">
                    @if ($errors->has('firstname_kana'))
                        <p class="error-message">{{ $errors->first('firstname_kana') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>性別</p>
                </td>
                <td colspan="2" class="col10">
                    <label><input type="radio" name="sex" value="男性">男性</label>
                    <label><input type="radio" name="sex" value="女性">女性</label>
                    <label><input type="radio" name="sex" value="その他" checked>その他</label>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>生年月日</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="birth_date" value="{{ old('birth_date') }}" type="date">
                    @if ($errors->has('birth_date'))
                        <p class="error-message">{{ $errors->first('birth_date') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>メールアドレス</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="email" value="{{ old('email') }}" type="text">
                    @if ($errors->has('email'))
                        <p class="error-message">{{ $errors->first('email') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>電話番号</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="phone_number" value="{{ old('phone_number') }}" type="text">
                    @if ($errors->has('phone_number'))
                        <p class="error-message">{{ $errors->first('phone_number') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>住所(郵便番号)</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="postcode" value="{{ old('postcode') }}" type="text">
                    @if ($errors->has('postcode'))
                        <p class="error-message">{{ $errors->first('postcode') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>住所(都道府県)</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="prefecture" value="{{ old('prefecture') }}" type="text">
                    @if ($errors->has('prefecture'))
                        <p class="error-message">{{ $errors->first('prefecture') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>住所(市区町村)</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="city" value="{{ old('city') }}" type="text">
                    @if ($errors->has('city'))
                        <p class="error-message">{{ $errors->first('city') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>住所(番地・建物名・部屋番号)</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="block" value="{{ old('block') }}" type="text">
                    @if ($errors->has('block'))
                        <p class="error-message">{{ $errors->first('block') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>パスワード</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="password" value="{{ old('password') }}" type="password">
                    @if ($errors->has('password'))
                        <p class="error-message">{{ $errors->first('password') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>プロフィール画像</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="profile_img" value="{{ old('profile_img') }}" type="text">
                    @if ($errors->has('profile_img'))
                        <p class="error-message">{{ $errors->first('profile_img') }}</p>
                    @endif
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>プロフィール</p>
                </td>
                <td colspan="2" class="col10">
                    <input name="profile" value="{{ old('profile') }}" type="textarea">
                    @if ($errors->has('profile'))
                        <p class="error-message">{{ $errors->first('profile') }}</p>
                    @endif
                </td>
            </tr>
        </table>

        <button type="submit">
            入力内容確認
        </button>
    </form>
</body>
</html>
