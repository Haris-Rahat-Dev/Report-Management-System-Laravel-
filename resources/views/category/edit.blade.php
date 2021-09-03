<x-app-layout>
    <div class="category-from-container">
        <form  action={{route('updateCategory', $category->id)}}  method="post">
            @csrf
            @method('PUT')
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Category" value="{{$category->category}}" name="category">
                <x-jet-button>Update</x-jet-button>
            </div>
        </form>
    </div>
</x-app-layout>
