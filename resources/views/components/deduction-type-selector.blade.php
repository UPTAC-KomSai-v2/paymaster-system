<select {{ $attributes->merge(['class' => 'form-select btn btn-light text-left']) }}>
    @foreach ([
        [ 'id' => 1, 'name' => 'Expenses' ],    
        [ 'id' => 2, 'name' => 'Lates' ],    
    ] as $deductionType)
    <option value="{{$deductionType['id']}}" {{ $slot == (string) $deductionType['id'] ? 'selected' : '' }}>{{$deductionType['name']}}</option>
    @endforeach
</select>