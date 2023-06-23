@props(['disabled' => false])
@props(['options' => []])


<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm',
]) !!}>

    @foreach ($options as $option)
        <option value={{ $option['value'] }}>{{ $option['label'] }}</option>
    @endforeach

</select>
