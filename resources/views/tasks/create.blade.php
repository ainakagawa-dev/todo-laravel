<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録画面</title>
</head>
<body>
   <form method="POST" action="{{ route('tasks.store') }}">
    @csrf

        <input type="text" name="title">

        <select name="status">
            <option value="未着手">未着手</option>
            <option value="着手中">着手中</option>
            <option value="完了">完了</option>
        </select>

        <button type="submit">登録</button>
   </form> 
</body>
</html>