<x-layout>
    <x-slot:title>
        Login
    </x-slot:title>
    <h1>Login Form</h1>
    
    <form method="POST" action="/login">
        @csrf

        <label for="email">Email</label>
        <input type="text" name="email" id="email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <button type="submit">Log In</button>
 
    </form>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>

         @endforeach
        
    @endif
</x-layout>