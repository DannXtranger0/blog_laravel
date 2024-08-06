<x-layout>
    <x-slot:title>
        All Posts
    </x-slot:title>
    <H1>ALL POSTS</H1>

 @if (session('error'))
     {{session('error')}}
 @endif

    @auth
        <a href="/create">Create a new Post</a>
    @endauth

    <ul>
        @foreach ($posts as $post)
        <li>
            <a href="/posts/{{$post->id}}">{{$post->title}}</a>
           
        </li>
        @endforeach
    </ul>
</x-layout>