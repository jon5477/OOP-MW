<select name="city" size="20">
@foreach ($citylist as $city)
    <option value="{{ $city }}">{{ $city }}</option>
@endforeach
</select>