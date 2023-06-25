<section>
    <table class="table-fixed w-full">
        <caption class="caption-top my-2">
            Daftar Pemesanan Kendaraan
        </caption>
        <thead class="">
            <tr class="bg-slate-100 text-sm shadow-md rounded-md">
                <th>No</th>
                <th>Kendaraan</th>
                <th>Supir</th>
                <th>Pemesan</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Pemakaian Bensin (Rp)</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($bookings as $booking)
                @php
                    $i++;
                    $bg = $i % 2 == 0 ? 'bg-slate-200' : '';
                @endphp
                <tr class="text-center {{ $bg }}">
                    <td>{{ $i }}</td>
                    <td>{{ $booking->vehicle->name }}</td>
                    <td>{{ $booking->driver->name }}</td>
                    <td>{{ $booking->bookedBy }}</td>
                    <td>{{ $booking->scheduled_date }}</td>
                    <td>{{ $booking->returned_date }}</td>
                    <td>Rp. {{ $booking->fuel_consumptions ?? '-' }}</td>
                    <td>{{ $booking->status }}</td>
                    <td>
                        <a class="bg-blue-500 text-sm px-2 py-0.5 text-white rounded-md shadow-md hover:text-slate-300"
                            href="{{ route('booking.edit', $booking->id) }}">
                            Update
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
