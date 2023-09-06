<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <label for="">名前</label>
    <p>{{ $planet->name_ja }}</p>
    <label for="">名前(英語)</label>
    <p>{{ $planet->name_en }}</p>
    <label for="">半径</label>
    <p>{{ $planet->radius }}</p>
    <label for="">重量</label>
    <p>{{ $planet->weight }}</p>
    <a href="/planets">戻る</a>
</body>

</html>
