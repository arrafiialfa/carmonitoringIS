<section>
    <section>
        <table class="table-fixed w-full">
            <caption class="caption-top my-2">
                Daftar Kendaraan
            </caption>
            <thead class="">
                <tr class="bg-slate-100 text-sm shadow-md rounded-md">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor Polisi</th>
                    <th>Tipe</th>
                    <th>Terakhir Diservis</th>
                    <th>Pemakaian Bensin (Rupiah)</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @php
                    $i = 0;
                @endphp
                @foreach ($vehicles as $vehicle)
                    @php
                        $i++;
                        $bg = $i % 2 == 0 ? 'bg-slate-200' : '';
                    @endphp
                    <tr class="{{ $bg }}">
                        <td>{{ $i }}</td>
                        <td>{{ $vehicle->name }}</td>
                        <td>{{ $vehicle->plate_number }}</td>
                        <td>{{ $vehicle->type }}</td>
                        <td>{{ $vehicle->service_schedule }}</td>
                        <td>Rp. {{ $vehicle->fuel_consumptions ?? 0 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</section>
