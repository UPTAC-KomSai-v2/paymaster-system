<select {{ $attributes->merge(['class' => 'form-select btn btn-light text-left']) }}>
    @foreach (getSelectableYears() as $year)
    <option value="{{$year}}" {{ $slot == (string) $year ? 'selected' : '' }}>{{$year}}</option>
    @endforeach
</select>