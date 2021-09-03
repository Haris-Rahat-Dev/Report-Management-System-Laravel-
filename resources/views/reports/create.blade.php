@section('links')
    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
@endsection
<x-app-layout>
    <div class="container mx-auto">
        <form action="{{route('saveReport')}}" method="post">
            @csrf
            <div class="mb-4 mt-6">
                <select name="category"  class="rounded-lg ">
                    <option value="" selected>Select Category</option>
                    @foreach( $categories as $category )
                        <option value="{{ $category->category }}">{{$category->category}}</option>
                    @endforeach
                </select>
                <div class="mt-3">
                    <label for="floatingInput">New Category</label>
                    <br>
                    <input type="text" class="rounded-lg mt-4" id="floatingInput" placeholder="New Category" name="newCategory">
                </div>
            </div>
            <div class="mb-3">
                <label for="floatingInput">Title</label>
                <br><br>
                <input type="text" class="w-full rounded-lg direction" id="floatingInput" placeholder="Title" name="title">
            </div>
            <div class="mb-3 w-full">
                <textarea class="rounded-lg w-full direction" style="height: 400px" placeholder="Write Here" name="report"></textarea>
            </div>
            <x-jet-button>Complete</x-jet-button>
        </form>
        <div class="flex justify-end">
            <a href="{{ route('viewReports') }}"><button class="rounded-lg bg-indigo-500 text-white px-6 py-4 hover:bg-indigo-600">View Reports</button></a>
        </div>
        @if($success == "submitted")
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Report Submitted Successfully!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @else
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                Report not Submitted!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>
</x-app-layout>
