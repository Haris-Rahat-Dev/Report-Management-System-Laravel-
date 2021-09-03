<x-app-layout>
        <div class="category-from-container">
            <form  action="{{route('storeCategory')}}"   method="post">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Category" name="category">
                    <x-jet-button>Add</x-jet-button>
                </div>
            </form>
        </div>
    <div class="container">
        <table class="table-bordered table-secondary mx-auto">
            <tr>
                <th class="p-3">Category</th>
                <th class="p-3">Actions</th>
            </tr>
            @foreach( $categories as $category )
                <tr>
                    <td class="p-3">{{ $category->category }}</td>
                    <td class="d-flex flex-row p-3">
                        <a href={{route('editCategory' , $category->id)}} ><button class="btn btn-primary btn-sm mr-2"><i class="bi bi-pen"></i></button></a>
                        <form action="{{route('deleteCategory' , $category->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</x-app-layout>
