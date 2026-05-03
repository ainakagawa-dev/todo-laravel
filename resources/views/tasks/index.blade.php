<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク一覧</title>
</head>
<body>
    <h1>タスク一覧</h1>
    <p>ここにタスクを表示します</p>
        <h2>未着手</h2>
        <ul>        
            @foreach ($todo as $task)
                <li>{{ $task['title'] }}</li>
            @endforeach
        </ul>
        <h2>着手中</h2>
        <ul>
            @foreach ($doing as $task)
                <li>{{ $task['title'] }}</li>
            @endforeach
        </ul>
        <h2>完了</h2>
        <ul>
            @foreach ($done as $task)
              <li>{{ $task['title'] }}</li>  
            @endforeach
        </ul>   

</body>
</html>