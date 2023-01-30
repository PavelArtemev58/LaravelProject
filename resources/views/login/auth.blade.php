<x-layout>
    <x-slot:title>
       {{$title}}
    </x-slot>
    <p>Authorization</p>
    <form action="/authentificator" method="POST">
        @csrf
        <div>Email <input name="email"></div>
        <div>Password <input name="password" type="password"></div>
        <div><input type="submit"></div>
    </form>
    <p><a href="/reg">Registration</a></p>
</x-layoit>