<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認画面</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <form action="{{ route('users_input_store') }}" method="post">
        @csrf
        <table>
            <tr>
                <td class="col2">
                    <p>名前</p>
                </td>
                <td class="col5">
                    <label>性</label><br>
                    <p>{{ $data['lastname'] }}</p>
                </td>
                <td class="col5">
                    <label>名</label><br>
                    <p>{{ $data['firstname'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>名前(カナ)</p>
                </td>
                <td class="col5">
                    <label>性(カナ)</label><br>
                    <p>{{ $data['lastname_kana'] }}</p>
                </td>
                <td class="col5">
                    <label>名(カナ)</label><br>
                    <p>{{ $data['firstname_kana'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>性別</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['sex'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>生年月日</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['birth_date'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>メールアドレス</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['email'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>電話番号</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['phone_number'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>住所(郵便番号)</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['postcode'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>住所(都道府県)</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['prefecture'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>住所(市区町村)</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['city'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>住所(番地・建物名・部屋番号)</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['block'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>パスワード</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['password'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>プロフィール画像</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['profile_img'] }}</p>
                </td>
            </tr>
            <tr>
                <td class="col2">
                    <p>プロフィール</p>
                </td>
                <td colspan="2" class="col10">
                    <p>{{ $data['profile'] }}</p>
                </td>
            </tr>
        </table>

        <button onclick="history.back()">戻る</button>
        <button type="submit">登録</button>
    </form>
</body>
</html>