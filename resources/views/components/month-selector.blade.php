<select {{ $attributes->merge(['class' => 'form-select btn btn-light text-left']) }}>
    @foreach (getAllMonthLabels() as $i => $monthLabel)
    <option value="{{$i+1}}" {{ $slot == ($i+1).'' ? 'selected' : '' }}>{{$monthLabel}}</option>
    @endforeach
</select>