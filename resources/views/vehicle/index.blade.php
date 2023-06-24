<x-app-layout>
    <div class="p-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @include('vehicle.partials.vehicle-list')
                </div>
            </div>
        </div>
        <div class="">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-2">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class=""></div>
                        <div class="">
                            @include('vehicle.partials.new-vehicle')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
