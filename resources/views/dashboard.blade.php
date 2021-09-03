<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg" style="height: 50vh">
                    <h5 class="text-center mt-8 mb-6">Welcome {{ auth()->user()->name }}</h5>
                <div class="flex flex-row justify-evenly items-center">
                    <div>
                        <div class="bg-gray-100 flex justify-evenly items-center">
                            <a href="{{ route('reportForm') }}">
                                <div class="rounded-md shadow-lg overflow-hidden hover:shadow-xl transform hover:scale-105 duration-500">
                                    <img src="{{ asset('images/pentopaper.jpg') }}" alt="" style=" height: 15rem;" />
                                    <div class="p-4 bg-white">
                                        <h2 class="mt-4 font-bold text-center">Create Report</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=" bg-gray-100 flex justify-center items-center">
                            <a href="{{ route('viewReports') }}">
                                <div class="rounded-md shadow-lg overflow-hidden hover:shadow-xl transform hover:scale-105 duration-500">
                                    <img src="{{ asset('images/viewReport.jpg') }}" alt="" style=" height: 15rem;" />
                                    <div class="p-4 bg-white">
                                        <h2 class="mt-4 font-bold text-center">View Reports</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
