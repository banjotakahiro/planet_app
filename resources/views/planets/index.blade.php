<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>惑星一覧</title>
</head>
<body>
    <h1>惑星一覧</h1>
    <table border="1">
        <tr>
            <th>名前</th>
            <th>名前(英語)</th>
            <th>半径</th>
            <th>重量</th>
        </tr>
        @foreach ($planets as $planet)
            <tr>
            @foreach ($planet->getAttributes() as $column => $value)
                @if ($loop->first)
                    {{-- 最初の行の場合、IDカラムを表示しない --}}
                @else
                    <th>{{ $value }}</th>
                @endif
            @endforeach
            </tr>
        @endforeach
    </table>
    <a href="/planets/create">新規登録</a>
</body>
</html>
