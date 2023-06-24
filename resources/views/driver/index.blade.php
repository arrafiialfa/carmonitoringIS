<x-app-layout>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('driver.partials.driver-table')
                </div>
            </div>
        </div>
        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="">Tambah Supir Baru</div>
                        <div class="">
                            @include('driver.partials.new-driver')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
