<x-layout>
    <x-slot:title>
        All Posts
    </x-slot:title>
    <H1>ALL POSTS</H1>

    <a href="/">Go to Home Page</a>
    <a href="/create">Create a new Post</a>

    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
            <a href="/edit/{{$post->id}}">EDIT</a>
            <form method="POST" action="/posts/{{$post->id}}">
                @csrf
                @method('DELETE')
                <button type="submit">DELETE</button>
            </form>
        </li>
        @endforeach
    </ul>
</x-layout>