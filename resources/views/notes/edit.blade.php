@extends('layout')

@section('content')
    <h1>Edit Note</h1>
    <form action="{{ route('notes.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Title:</label>
        <input type="text" name="title" value="{{ $note->title }}">
        <label>Content:</label>
        <textarea name="content">{{ $note->content }}</textarea>
        <button type="submit">Update</button>
    </form>
@endsection