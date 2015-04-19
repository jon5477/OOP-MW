<ul>
    <li>Country name: {{ $info[0]['name'] }}</li>
    <li>Capital: {{ $info[0]['capital'] }}</li>
	<li>Spellings:</li>
        <ul>
            @foreach ($info[0]['altSpellings'] as $spell)
                <li>{{ $spell }}</li>
            @endforeach
        </ul>
    <li>Region: {{ $info[0]['region'] }}</li>
    <li>Population: {{ $info[0]['population'] }}</li>
    <li>Area: {{ $info[0]['area'] }}</li>
    <li>Borders:</li>
        <ul>
            @foreach ($info[0]['borders'] as $border)
                <li>{{ $border }}</li>
            @endforeach
        </ul>
    <li>Native Name: {{ $info[0]['nativeName'] }}</li>
    <li>Top Level Domain:</li>
    <ul>
        @foreach ($info[0]['topLevelDomain'] as $domain)
            <li>{{ $domain }}</li>
        @endforeach
    </ul>
    <li>Currencies:</li>
    <ul>
        @foreach ($info[0]['currencies'] as $curr)
            <li>{{ $curr }}</li>
        @endforeach
    </ul>
    <li>Languages:</li>
    <ul>
        @foreach ($info[0]['languages'] as $lang)
            <li>{{ $lang }}</li>
        @endforeach
    </ul>
</ul>