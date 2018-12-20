@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasks) > 0)
    <table class="table table-striped">
        <thead>
            <tr>
            <th class="text-center">id</th>
            <th class="text-center">ステータス</th>
            <th class="text-center">タスク</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($tasks as $task)
        <tr>
                <td class="text-center">{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!}</td>
                <td class="text-center">{{ $task->status }} </td>
                <td class="text-left">{{ $task->content }}</td>
        </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    
    {!! link_to_route('tasks.create', '新規作成', null, ['class' => 'btn btn-primary'] ) !!}

@endsection