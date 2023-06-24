<section>
    @php
        $columns = [['label' => 'Nama', 'key' => 'name'], ['key' => 'age', 'label' => 'Umur'], ['key' => 'sex', 'label' => 'Jenis Kelamin'], ['key' => 'driving_hours', 'label' => 'Jam Terbang']];
    @endphp

    <x-show-list :data="$subordinates" :columns="$columns" :label="'Daftar Bawahan'" />
</section>
