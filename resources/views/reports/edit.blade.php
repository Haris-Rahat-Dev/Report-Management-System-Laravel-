@section('links')
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@endsection
<x-app-layout>
    <div class="container mx-auto">
        <form action="{{ route('updateReport', $report->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="mb-4 mt-6">
                {{--<div class="mt-3">
                    <label for="floatingInput">Category</label>
                    <br>
                    <input type="text" class="rounded-lg mt-4" id="floatingInput" value="{{ $report->category }}" name="category">
                </div>--}}
                <select name="category"  class="rounded-lg ">
                    @foreach( $categories as $category )
                        @if($category->category == $report->category)
                            <option value="{{ $category->category }}" selected>{{$category->category}}</option>
                        @else
                            <option value="{{ $category->category }}">{{$category->category}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="floatingInput">Title</label>
                <br><br>
                <input type="text" class="w-full rounded-lg direction" id="floatingInput" value="{{ $report->title }}"  name="title">
            </div>
            <div class="mb-3 w-full">
                <textarea class="rounded-lg w-full direction" style="height: 400px" placeholder="Write Here" name="report">{{ $report->report }}</textarea>
            </div>
            <x-jet-button>Update</x-jet-button>
        </form>
        <div class="flex justify-end">
            <a href="{{ route('viewReports') }}"><button class="rounded-lg bg-indigo-500 text-white px-6 py-4 hover:bg-indigo-600">View Reports</button></a>
        </div>
    </div>
</x-app-layout>

