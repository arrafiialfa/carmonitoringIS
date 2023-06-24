<section>
    <x-secondary-button class="shadow-md" x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'create-new-booking')">
        {{ __('Buat Pemesanan Baru') }}
    </x-secondary-button>
    <x-modal name="create-new-booking" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <div class="panel panel-default my-2 p-6">
            <div class="panel-heading">Klik plus untuk menambah pilihan baru</div>
            <div class="panel-body text-left">
                <form class="form-horizontal" method="POST" action="{{ route('booking.store') }}">
                    @csrf
                    <!-- Select Vehicle -->
                    <div class="mt-3">
                        <x-input-label for="vehicle_id" :value="__('Pilih Kendaraan')" />
                        <div class="flex justify-between gap-2 items-center">
                            <select name="vehicle_id" :value="old('vehicle_id')"
                                class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full'>
                                <option value="">Pilih Kendaraan</option>
                                @foreach ($vehicles as $vehicle)
                                    <option value="{{ $vehicle->id }}">{{ $vehicle->name }}</option>
                                @endforeach
                            </select>
                            <x-nav-link :href="route('vehicle')" :active="request()->routeIs('vehicle')"
                                class="text-blue-700 text-2xl font-bold no-underline">
                                +
                            </x-nav-link>
                        </div>
                        <x-input-error :messages="$errors->get('vehicle_id')" class="mt-2" />
                    </div>

                    <!-- Select Driver -->
                    <div class="mt-3">
                        <div class="grow">
                            <x-input-label for="driver_id" :value="__('Pilih Supir')" />
                            <div class="flex justify-between gap-2 items-center">
                                <select name="driver_id" :value="old('driver_id')"
                                    class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full'>
                                    <option value="">Pilih Supir</option>
                                    @foreach ($drivers as $driver)
                                        <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                                    @endforeach
                                </select>
                                <x-nav-link :href="route('driver')" :active="request()->routeIs('driver')"
                                    class="text-blue-700 text-2xl font-bold no-underline">
                                    +
                                </x-nav-link>
                            </div>
                            <x-input-error :messages="$errors->get('driver_id')" class="mt-2" />
                        </div>

                    </div>

                    <!-- Nama Pemesan -->
                    <div class="mt-3">
                        <x-input-label for="bookedBy" :value="__('Masukkan Nama Pemesan')" />
                        <x-text-input id="bookedBy" class="block mt-1 w-full" type="text" name="bookedBy"
                            :value="old('bookedBy')" required autocomplete="bookedBy" />
                        <x-input-error :messages="$errors->get('bookedBy')" class="mt-2" />
                    </div>

                    <!-- Tanngal Pemakaian -->
                    <div class="mt-3">
                        <x-input-label for="scheduled_date" :value="__('Tanggal Pemakaian')" />
                        <x-text-input id="scheduled_date" class="block mt-1 w-full" type="date" name="scheduled_date"
                            :value="old('scheduled_date')" required autocomplete="scheduled_date" />
                        <x-input-error :messages="$errors->get('scheduled_date')" class="mt-2" />
                    </div>

                    <!-- Tanngal Pengembalian -->
                    <div class="mt-3">
                        <x-input-label for="returned_date" :value="__('Tanggal Pengembalian')" />
                        <x-text-input id="returned_date" class="block mt-1 w-full" type="date" name="returned_date"
                            :value="old('returned_date')" required autocomplete="returned_date" />
                        <x-input-error :messages="$errors->get('returned_date')" class="mt-2" />
                    </div>

                    <!-- Select Driver -->
                    <div class="mt-3">
                        <div class="grow">
                            <x-input-label for="manager_id" :value="__('Pemberi Persetujuan')" />
                            <div class="flex justify-between gap-2 items-center">
                                <select name="manager_id" :value="old('manager_id')"
                                    class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full'>
                                    <option value="">Pilih ...</option>
                                    @foreach ($managers as $manager)
                                        <option value="{{ $manager->id }}">{{ $manager->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <x-input-error :messages="$errors->get('manager_id')" class="mt-2" />
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            Buat Pemesanan Baru
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </x-modal>
</section>
