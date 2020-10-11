@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>進捗状況</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>

    {{-- メッセージ編集ページへのリンク --}}
    {!! link_to_route('tasks.edit', 'タスクを編集', ['task' => $task->id], ['class' => 'btn btn-success']) !!}

    {{-- メッセージ削除フォーム --}}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('タスクを削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection