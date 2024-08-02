<x-layout>
    <x-slot:title>
        New Post
    </x-slot:title>
    <h1>CREATE A NEW POST</h1>
    <form action="/posts" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}">
        <br>

        <label for="content">Post Content:</label>
        <textarea name="content" id="content">{{ old('content') }}</textarea>
        <br>

        <button type="submit">Create Post</button>
    </form>
</x-layout>