<x-layout>
    <x-slot:title>
        Edit Post
    </x-slot:title>
    <h1>EDIT THE POST {{$post->title}}</h1>
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method("PATCH")
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br>

        <label for="content">Post Content:</label>
        <textarea name="content" id="content" >{{$post->content}}</textarea>
        <br>

        <button type="submit">Edit Post</button>
    </form>
</x-layout>