<select {{ $attributes->merge(['class' => 'form-select btn btn-light text-left']) }}>
    @foreach ([
        [ 'id' => 1, 'name' => 'Salary' ],    
        [ 'id' => 2, 'name' => 'Bonus' ],    
        [ 'id' => 3, 'name' => 'Miscellaneous' ],
    ] as $benefitType)
    <option value="{{$benefitType['id']}}" {{ $slot == (string) $benefitType['id'] ? 'selected' : '' }}>{{$benefitType['name']}}</option>
    @endforeach
</select>