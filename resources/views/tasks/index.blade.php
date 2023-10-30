<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>localhost/tasks/index</title>
</head>

<body>
    <h1>タスク一覧</h1>
    @foreach ($tasks as $task)
        <a href="{{ route('tasks.show', $task) }}">{{ $task->title }}</a>
    @endforeach
    <hr>
    <h1>新規論文投稿</h1>
    <form action="{{ route('tasks.store', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p>
            <label for="title">タイトル</label><br>
            <input type="text" name="title" id="title">
        </p>
        <p>
            <label for="body">内容</label><br>
            <textarea name="body" class="body" id="body"></textarea>
        </p>

        <input type="submit" value="Create Task">
    </form>
</body>

</html>
