<x-layout>
    <x-slot:title>
        {{$title}}
    </x-slot>
    
    <form action="/user/store" method="POST">
        @csrf
        <div><input name="name" value="name"></div>
        <div><input name="age" value="age"></div>
        <div><input name="salary" value="salary"></div>
        <x-add-user.input-city/>
        <div><input type="submit"></div>    
    </form>
    
    <p><a href="/users">Back</a></p>
</x-layout>