@extends('layouts.app')

@section('title', 'Update Task')

@section('content')
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="input-container">
            <label for="name" class="label">Name</label>
            <input type="text" name="name" id="name" class="input" value="{{ $task->name }}">
            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-container">
            <label for="description" class="label">Description</label>
            <textarea name="description" id="description" class="input">{{ $task->description }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn" type="submit">Update Task</button>
    </form>
@endsection
