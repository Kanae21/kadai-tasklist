@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} の編集ページ</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
            <div class="form-group">
                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::select('status', ['L' => 'Large','S' => 'Small'], 'S' , ['class' => 'form-control'] ) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content' ,null , ['class' => 'form-control']) !!}
            </div>
        
                {!! Form::submit('更新') !!}
        
            {!! Form::close() !!}
        </div>
    </div>

@endsection