@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>

    @include('commons.error_messages')


    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'タイトル:') !!}
        {!! Form::text('content') !!}

        {!! Form::label('status', 'ステータス:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection