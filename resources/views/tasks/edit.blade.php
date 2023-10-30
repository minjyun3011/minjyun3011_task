<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>localhost/tasks/1/edit</title>
</head>

<body>
    <h1>投稿論文編集</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>【エラー内容】</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tasks.update', $task) }}" method="post">
        @csrf
        @method('PATCH')
        <p><label for="title">論文タイトル</label></p>
        <p><input type="text" name="title" id="title" value="{{ $task->title }}"></p>
        <p><label for="body">本文</label></p>
        <p>
            <textarea name="body" class="body" id="body">{{ $task->body }}</textarea>
        </p>
        <div class="button-group">
            <input type="submit" value="更新">
            <form action="{{ route('tasks.show', $task) }}">
                <input type="submit" value="詳細に戻る">
            </form>
        </div>
</body>

</html>
