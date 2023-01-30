<div>
    <select name="city_id" class="{{$error}}">
        @foreach ($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
        @endforeach
    </select>
</div>