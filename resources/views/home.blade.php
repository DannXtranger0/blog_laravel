<x-layout>
    <x-slot:title>
        Blog 2671692
    </x-slot:title>

    <h1>Welcome to the blog | 2671692</h1>
    <p>Here is the lastest Posts:</p>
    
    @foreach ($posts as $post)
        <a href="/posts/{{$post->id}}">{{$post->title}}</a>
        <p>{{\Illuminate\Support\Str::limit($post->content, 80)}}</p>
    @endforeach    
 
    <a href="/posts">ver todas las publicaciones</a>
    
</x-layout>