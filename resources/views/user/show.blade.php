<x-layout>
    <x-slot:title>
	{{$title}}
    </x-slot>
    
    <ul>
        <li>{{$user['id']}}</li>
        <li>{{$user['email']}}</li>
    </ul>
    
    <p><a href="/logout">Logout</a></p>
</x-layout>