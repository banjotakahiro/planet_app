<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($errors->any())
        <p>
            <b>{{ count($errors) }}件のエラーがあります。</b>
        </p>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <h1>惑星情報登録</h1>
    <form action="/planets" method="post">
        @csrf
        <p>
            <label for="">名前</label>
            <input type="text" name="name_ja" value="{{ old('name_ja') }}">
        </p>
        <p>
            <label for="">名前(英語)</label>
            <input type="text" name="name_en" value="{{ old('name_en') }}">
        </p>
        <p>
            <label for="">半径</label>
            <input type="number" name="radius" value="{{ old('radius') }}">
        </p>
        <p>
            <label for="">重量</label>
            <input type="number" name="weight" value="{{ old('weight') }}">
        </p>
        <input type="submit" value="送信" ><br>
        <a href="/planets">戻る</a>
    </form>
</body>
</html>
