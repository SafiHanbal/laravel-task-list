@extends('layouts.app')

@section('title', $task->name)

@section('content')

    <div class="mb-3">
        <p>{{ $task->description }}</p>

        <p>{{ $task->completed ? 'Completed' : 'Not Completed' }}</p>
    </div>

    <div>
        <a href="{{ route('tasks.edit', ['task' => $task]) }}" class="btn">Edit Task</a>
        <a href="{{ route('tasks.update-completed', ['task' => $task]) }}" class="btn">Mark as Completed</a>
        <form action="{{ route('tasks.destroy', ['task' => $task]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Delete Task</button>
        </form>
    </div>

@endsection
