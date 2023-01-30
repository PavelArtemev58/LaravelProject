<div>
    @foreach ($users as $user)
    </p><a href="/user/{{$user->id}}">{{$user->name}}</a></p>
    @endforeach
</div>