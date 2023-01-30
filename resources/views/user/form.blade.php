<x-layout>
    <x-slot:title>
	{{$title}}
    </x-slot>
    
   <form action="" method="POST">
    @csrf
    <input name="name" value="name"><br>
    <input name="age" value="age"><br>
    <input name="salary" value="salary"><br>
    <select name="city">
        <option value="1" selected>Moscow</option>
        <option value="2">Berlin</option>
        <option value="3">St.Petersburg</option>
    </select>
    <input type="submit" name="submit">
   </form>
    
    <p><a href="/users">Back</a></p>
</x-layout>