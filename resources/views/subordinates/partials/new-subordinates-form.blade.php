<section>
    <div class="text-sm">
        Bawahan yang dapat ditambahkan adalah User yang memiliki management level 1 tingkat dibawah dan belum mempunyai
        atasan
    </div>
    <div>
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
                            <form class="form-horizontal" method="POST" action="{{ route('subordinates.update') }}">
                                @csrf
                                @method('patch')
                                <div>
                                    <input class="hidden" type="text" value={{ $potential_sub->id }}
                                        id="subordinate_id" name="subordinate_id">
                                </div>
                                <x-primary-button class="ml-4">
                                    Tambah +
                                </x-primary-button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </form>
    </div>

</section>
