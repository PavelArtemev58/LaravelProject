<x-layout>
    <x-slot:title>
	{{$title}}
    </x-slot>
    
   <form action="" method="POST">
    @csrf
    <input name="name" value="{{$user->name}}"><br>
    <input name="age" value="{{$user->age}}"><br>
    <input name="salary" value="{{$user->salary}}"><br>
    <select name="city">
        @if ($user->city_id == 1)
        <option value="1" selected>Moscow</option>
        <option value="2">Berlin</option>
        <option value="3">St.Petersburg</option>
        @elseif($user->city_id == 2)
        <option value="1">Moscow</option>
        <option value="2" selected>Berlin</option>
        <option value="3">St.Petersburg</option>
        @elseif($user->city_id == 3)
        <option value="1">Moscow</option>
        <option value="2">Berlin</option>
        <option value="3" selected>St.Petersburg</option>
        @endif
    </select>
    <input type="submit" name="submit">
   </form>
    
    <p><a href="/users">Back</a></p>
</x-layout>