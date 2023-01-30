<x-layout>
    <x-slot:title>
	{{$title}}
    </x-slot>
    
   <form action="/store" method="POST">
    @csrf
    <input name="name" value="{{old('name')??'name'}}" class="@error('name') is-invalid @enderror"><br>
    @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input name="age" value="{{old('age')??'age'}}" class="@error('age') is-invalid @enderror"><br>
    @error('age')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input name="salary" value="{{old('salary')??'salary'}}" class="@error('salary') is-invalid @enderror"><br>
    @error('salary')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <x-add-user.input-city>
        <x-slot:error>
            @error('city') is-invalid @enderror
        </x-slot>
    </x-add-user.input-city>
    @error('city')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <input type="submit" name="submit">
   </form>
    
    <p><a href="/users">Back</a></p>
</x-layout>