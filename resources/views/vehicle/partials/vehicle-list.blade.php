<section>

    @php
        $columns = [['label' => 'Nama', 'key' => 'name'], ['key' => 'plate_number', 'label' => 'Nomor Polisi'], ['key' => 'type', 'label' => 'Tipe'], ['key' => 'last_serviced', 'label' => 'Terakhir Diservis']];
    @endphp

    <x-show-list :data="$vehicles" :columns="$columns" :label="'List Kendaraan'" />

</section>
