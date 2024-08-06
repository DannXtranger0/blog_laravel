<x-layout>
    <x-slot:title>
        {{$post->title}}
    </x-slot:title>
<h1>{{$post->title}}</h1>

<p>{{$post->content}}</p>

<h4>Post created by: {{$post->user->name}}</h4>

@can('update-post', $post)
    <a href="/edit/{{$post->id}}">EDIT</a>
@endcan

@can('delete-post', $post)
<form method="POST" action="/posts/{{$post->id}}">
    @csrf
    @method('DELETE')
    <button type="submit">DELETE</button>
</form>
@endcan

@auth    
<h2>Comments</h2>
<form action="/posts/comment/{{$post->id}}"  method="POST">
    @csrf
    <textarea name="content" id="content" cols="30" rows="10" required></textarea>
    <button type="submit">Comment</button>
</form>
@endauth


<h2>All Comments</h2>
<div>
    @foreach ($comments as $comment)
        <h5>{{$comment->user->name}}</h5>
        <p>{{$comment->content}}</p>
    @endforeach
</div>
</x-layout>