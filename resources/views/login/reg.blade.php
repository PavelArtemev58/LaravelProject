<x-layout>
    <x-slot:title>
       {{$title}}
    </x-slot>
    <p>Registration</p>
    <form action="/register" method="POST">
        @csrf
        <div>Email <input name="email"></div>
        <div>Password <input name="password" type="password"></div>
        <div><input type="submit"></div>
    </form>
    <p><a href="/auth">Authorization</a></p>
</x-layoit>