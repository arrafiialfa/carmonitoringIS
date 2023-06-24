<section>
    <section>
        <table class="table-fixed w-full">
            <caption class="caption-top my-2">
                Daftar Pemesanan Kendaraan
            </caption>
            <thead class="">
                <tr class="bg-slate-100 text-sm shadow-md rounded-md">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Jenis Kelamin</th>
                    <th>Jam Terbang</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 0;
                @endphp
                @foreach ($drivers as $driver)
                    @php
                        $i++;
                    @endphp
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $driver->name }}</td>
                        <td>{{ $driver->age }}</td>
                        <td>{{ $driver->sex }}</td>
                        <td>{{ $driver->driving_hours }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

</section>
