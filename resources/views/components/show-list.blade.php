@props(['data', 'columns', 'label'])

<section>
    <section>
        <table class="table-fixed w-full">
            <caption class="caption-top my-2">
                {{ $label }}
            </caption>
            <thead class="">
                <tr class="bg-slate-100 text-sm shadow-md rounded-md">
                    @foreach ($columns as $column)
                        <th>{{ $column->$label }}</th>
                    @endforeach
                </tr>
            </thead>
            <tbody class="text-center">
                @php $index = 0; @endphp
                @foreach ($data as $item)
                    @php
                        $index++;
                        $bg = $index % 2 == 0 ? 'bg-slate-200' : '';
                    @endphp
                    <tr class="{{ $bg }}">
                        <td>{{ $index }}</td>
                        @foreach ($columns as $column)
                            <td>{{ $item->{$column['key']} }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</section>
