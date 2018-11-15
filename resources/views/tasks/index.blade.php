<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>タスク管理アプリ</title>

        <link rel="stylesheet" href="{{asset('/css/common.css')}}">
    </head>
    <body>
        <table class="taskList">
            <tr>
                <th>id</th>
                <th>タイトル</th>
                <th>コンテンツ</th>
                <th>ステータス</th>
            </tr>
            @foreach ($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->contents }}</td>
                    <td>{{ $task->status }}</td>
                </tr>
            @endforeach
        </table>
        </div>
    </body>
</html>

