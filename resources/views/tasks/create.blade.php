@extends('layouts.app')

@section('content')

    <h1>新規作成ページ</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
            <div class="form-group">
                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::select('status', ['L' => 'Large','S' => 'Small'], 'S' , ['class' => 'form-control'] ) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content',null , ['class' => 'form-control']) !!}
            </div>
        
                {!! Form::submit('投稿') !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection