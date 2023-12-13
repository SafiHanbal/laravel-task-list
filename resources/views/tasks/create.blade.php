@extends('layouts.app')

@section('title', 'Add New Task')

@section('content')

    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf

        <div class="input-container">
            <label for="name" class="label">Name</label>
            <input type="text" name="name" id="name" class="input" value="{{ old('name') }}">
            @error('name')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-container">
            <label for="description" class="label">Description</label>
            <textarea name="description" id="description" class="input">{{ old('description') }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <button class="btn" type="submit">Add Task</button>
    </form>

@endsection
