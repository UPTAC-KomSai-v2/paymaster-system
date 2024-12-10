<select {{ $attributes->merge(['class' => 'form-select btn btn-light text-left border py-2']) }}>
    @foreach (getSelectableYears() as $year)
    <option value="{{$year}}" {{ $slot == (string) $year ? 'selected' : '' }}>{{$year}}</option>
    @endforeach
</select>