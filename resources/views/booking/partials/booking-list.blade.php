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
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 0;
            @endphp
            @foreach ($bookings as $booking)
                @php
                    $i++;
                @endphp
                <tr>
                    <td>{{ i }}</td>
                    <td>{{ $booking->vehicle }}</td>
                    <td>{{ $booking->driver }}</td>
                    <td>{{ $booking->bookedBy }}</td>
                    <td>{{ $booking->scheduled_date }}</td>
                    <td>{{ $booking->returned_date }}</td>
                    <td>{{ $booking->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>
