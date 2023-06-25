<section>
    <div class="text-sm">
        Bawahan yang dapat ditambahkan adalah User yang memiliki management level 1 tingkat dibawah dan belum mempunyai
        atasan
    </div>
    <div>
        <form class="form-horizontal" method="POST" action="{{ route('vehicle.store') }}">
            @csrf
            <table class="table-fixed w-full">
                <caption class="caption-top my-2">
                    Daftar User
                </caption>
                <thead class="">
                    <tr class="bg-slate-100 text-sm shadow-md rounded-md">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($potential_subordinates as $potential_sub)
                        @php
                            $i++;
                            $bg = $i % 2 == 0 ? 'bg-slate-200' : '';
                        @endphp
                        <tr class="text-center {{ $bg }}">
                            <td class=" overflow-x-hidden">{{ $i }}</td>
                            <td class=" overflow-x-hidden">{{ $potential_sub->name }}</td>
                            <td class=" overflow-x-hidden">{{ $potential_sub->email }}</td>
                            <td class=" overflow-x-hidden">{{ $potential_sub->hasRole->name }}</td>
                            <td class=" overflow-x-hidden">
                                <a class="bg-blue-500 text-sm px-2 py-0.5 text-white rounded-md shadow-md hover:text-slate-300"
                                    href="{{ route('subordinates.store', $potential_sub->id) }}">
                                    Tambah +
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>

</section>
