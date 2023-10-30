<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>localhost/tasks/1/edit</title>
</head>
<body>
    <form action="{{ route('tasks.update', $task) }}" method="post">
    <h1>投稿論文編集</h1>
    @csrf
    @method('PATCH')
    <p>
        <label for="title">論文タイトル</label>
        <input type="text" name="title" id="title" value="{{ $task->title }}">
    </p>
    <p>
        <label for="body">本文</label>
        <textarea name="body" class="body" id="body">{{ $task->body }}</textarea>
    </p>

    <input type="submit" value="更新">
    </form>
    <form action="{{ route('tasks.show', $task) }}">
    <input type="submit" value="詳細に戻る">
    </form>
</body>
</html>
