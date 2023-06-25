<section>
    @php
        $columns = [['label' => 'Nama', 'key' => 'name'], ['key' => 'email', 'label' => 'Email'], ['key' => 'role', 'label' => 'Role']];
    @endphp

    <x-show-list :data="$user->hasSubordinates" :columns="$columns" :label="'Daftar Bawahan'" />
</section>
