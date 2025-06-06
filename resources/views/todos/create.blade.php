<x-layout>
    <div class="container">
        <form method="post", action="/store">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            if(@error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror)

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"
                    placeholder="Enter description"></textarea>
            </div>
            if(@error('description')
                <div style="color: red;">{{ $message }}</div>
            @enderror)

            <button type="submit" class="btn btn-primary">Add Todo</button>
        </form>

    </div>
</x-layout>