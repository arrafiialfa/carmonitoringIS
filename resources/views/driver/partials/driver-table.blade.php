<section>

    @php
        $columns = [['label' => 'Nama', 'key' => 'name'], ['key' => 'age', 'label' => 'Umur'], ['key' => 'sex', 'label' => 'Jenis Kelamin'], ['key' => 'driving_hours', 'label' => 'Jam Terbang']];
    @endphp

    <x-show-list :data="$drivers" :columns="$columns" :label="'Daftar Driver'" />

</section>
