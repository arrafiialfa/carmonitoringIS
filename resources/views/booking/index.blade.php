<x-app-layout>


    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <div>
                        <h2 class="bg-slate-100 shadow-md py-1 px-2 my-2 font-semibold">Booking Information</h2>
                        <table class="table-auto w-full text-left">
                            <tr>
                                <th>Kendaraan Yang Dipinjam</th>
                                <td>{{ $booking->vehicle->name }}</td>
                            </tr>
                            <tr>
                                <th>Supir</th>
                                <td>{{ $booking->driver->name }}</td>
                            </tr>
                            <tr>
                                <th>Pemohon</th>
                                <td>{{ $booking->bookedBy }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Peminjaman</th>
                                <td>{{ $booking->scheduled_date }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Pengembalian</th>
                                <td>{{ $booking->returned_date }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td class="text-blue-700 font-semibold italic">{{ $booking->status }}</td>
                            </tr>
                            <tr>
                                <th>Fuel Consumptions</th>
                                <td>Rp. {{ $booking->fuel_consumptions ?? '-' }}</td>
                            </tr>
                            <tr>
                                <th>Tanggal Permohonan Ini Dibuat</th>
                                <td>{{ $booking->created_at }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- only approving manager has access to this --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 mt-3">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl mx-auto">
                    <div>
                        <h2 class="bg-slate-100 shadow-md py-1 px-2 my-2 font-semibold">Informasi Persetujuan</h2>

                        @foreach ($booking->approvals as $approval)
                            <div class="bg-white shadow-md py-6 px-2 my-2">
                                <table class="table-auto w-full text-left">
                                    <tr>
                                        <th>Pemberi Persetujuan</th>
                                        <td>{{ $approval->user->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status Persetujuan</th>
                                        <td class="text-blue-700 font-semibold italic">{{ $approval->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Permohonan</th>
                                        <td>{{ $booking->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <th>Permohonan Selanjutnya</th>
                                        <td>{{ $approval->next_approval ?? '-' }}</td>
                                    </tr>
                                </table>
                            </div>
                            {{-- if manager id == approval->approved_by then has access to this --}}
                            <div class="bg-white shadow-md py-2 my-2 flex justify-between px-6">
                                <x-primary-button class="">
                                    Approve
                                </x-primary-button>
                                <x-secondary-button class="">
                                    Reject
                                </x-secondary-button>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
