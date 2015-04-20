<select id="cityselect" name="city" size="20">
@foreach ($citylist as $city)
    <option value="{{ $city }}" onclick="fetchCityData(this.value)">{{ $city }}</option>
@endforeach
</select>