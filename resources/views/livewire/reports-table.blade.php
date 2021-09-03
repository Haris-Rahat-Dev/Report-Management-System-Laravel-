<div>
    <div class="flex flex-row justify-center py-8">
        <div class="p-6">
            <input wire:model="search" type="search" placeholder="Search..." class="rounded-lg" style="width: 25rem">
        </div>
        <div class="p-6">
            <select wire:model="sortField" class="rounded-lg" >
                <option value="id">Sr.No.</option>
                <option value="title">Title</option>
                <option value="category">Category</option>
                <option value="created_at">Created At</option>
            </select>
        </div>
        <div class="p-6">
            <select wire:model="sortAsc" class="rounded-lg">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
        </div>
        <div class="p-6">
            <select wire:model="perPage" class="rounded-lg">
                <option>5</option>
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
            </select>
        </div>
        <div class="p-6">
            <input wire:model="search" class="rounded-lg" type="date">
        </div>
    </div>
    <div class="flex flex-col ">
        <div class="-my-2 overflow-x-auto">
            <div class="py-2 align-middle inline-block w-full sm:px-6 ">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="width: 10rem">
                                Sr.No.
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="width: 18rem">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="width: 18rem">
                                Category
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider" style="width: 18rem">
                                Created At
                            </th>
                            <th scope="col" class="relative px-6 py-3 text-center" style="width: 18rem">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($reports as $report)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{--{{ $loop->index + 1 }}--}}{{ $report->id }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    {{ $report->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap report">
                                    {{ $report->category }}{{--{{ $report->report }}--}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $report->created_at }} - {{ $report->created_at->diffForHumans() }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-center text-sm font-medium">
                                    <a href="{{ route('editReport', [ 'report' => $report ]) }}"><button class="rounded-lg px-6 py-4 text-white bg-indigo-500 hover:bg-indigo-600">Edit</button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="py-6">
                   {{-- Showing {{ $reports -> firstItem()  }} to {{ $reports -> lastItem() }} out of {{ $reports -> total()  }}--}}
                    {!! $reports -> links() !!}
                </div>
            </div>
        </div>
    </div>


</div>
