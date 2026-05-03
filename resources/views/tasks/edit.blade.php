<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク編集</title>
</head>
<body>
    <form method="POST" action="{{ route('tasks.update', $task) }}">
        @csrf
        @method('PUT')

        <input type="text" name="title" value="{{ $task->title }}">
        <select name="status">
            <option value="未着手" @selected($task->status === '未着手')>未着手</option>
            <option value="着手中" @selected($task->status === '着手中')>着手中</option>
            <option value="完了" @selected($task->status === '完了')>完了</option>
        </select>
        <button type="submit">更新</button>

    </form>
</body>
</html>