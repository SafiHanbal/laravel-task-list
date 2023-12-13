@extends('layouts.app')

@section('title', 'Tasks')

@section('content')

    <a href="{{ route('tasks.create') }}" class="btn">Add New Task</a>

    @foreach ($tasks as $task)
        <a href="{{ route('tasks.show', ['task' => $task]) }}" class="link">
            {{ $task->completed ? '✔' : '❌' }} {{ $task->name }}
        </a>
    @endforeach


@endsection
