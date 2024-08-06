<x-layout>
    <x-slot:title>
        Register User
    </x-slot:title>
    <h1>Register Form</h1>
    
    <form method="POST" action="/register">
        @csrf
        <label for="name">Full Name</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">

        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="{{old('email')}}">

        <label for="password">Password</label>
        <input type="password" name="password" id="password">

        <label for="password_confirmation">Password Confirmation</label>
        <input type="password" name="password_confirmation" id="password_confirmation">
        
        <button type="submit">Create Account</button>
 
    </form>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{$error}}</p>

         @endforeach
        
    @endif
</x-layout>