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
                                        <th>Persetujuan Sebelumnya</th>
                                        <td>{{ $approval->previousApproval ? "Persetujuan Dari UserID : {$approval->previousApproval->approved_by}" : '-' }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Persetujuan Selanjutnya</th>
                                        <td>{{ $approval->nextApproval ? "Persetujuan Dari UserID : {$approval->nextApproval->approved_by}" : '-' }}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            {{-- if manager id == approval->approved_by then has access to this --}}

                            @if ($user->id == $approval->approved_by && $approval->status !== 'Disetujui')
                                <div class="bg-white shadow-md py-2 my-2 flex justify-between px-6">
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('approval.update') }}">
                                        @csrf
                                        @method('patch')
                                        <div>
                                            <input class="hidden" type="text" value={{ $booking->id }}
                                                id="booking_id" name="booking_id">
                                            <input class="hidden" type="text" value={{ $approval->id }}
                                                id="approval_id" name="approval_id">
                                            <input class="hidden" type="text" value={{ 'Disetujui' }}
                                                id="status" name="status">
                                        </div>
                                        <x-primary-button class="">
                                            Approve
                                        </x-primary-button>
                                    </form>
                                    <form class="form-horizontal" method="POST"
                                        action="{{ route('approval.update') }}">
                                        @csrf
                                        @method('patch')
                                        <div>
                                            <input class="hidden" type="text" value={{ $booking->id }}
                                                id="booking_id" name="booking_id">
                                            <input class="hidden" type="text" value={{ $approval->id }}
                                                id="approval_id" name="approval_id">
                                            <input class="hidden" type="text" value={{ 'Ditolak' }}
                                                id="status" name="status">
                                        </div>
                                        <x-secondary-button class="">
                                            Reject
                                        </x-secondary-button>
                                    </form>

                                </div>
                                <p class="text-xs">
                                    after approving, the system will check if user has a superior. if he does, then
                                    create another approval and assign the superior to the approval
                                </p>
                            @endif
                            <div>
                                <p class="text-xs italic">can only be approved by assigned manager</p>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
