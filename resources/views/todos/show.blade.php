<x-layout>
    <div class="container">
        <form>
            @method('PATCH')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $todo -> title }}" disabled>
            </div>
            @error('title')
                <div style="color: red;">{{ $message }}</div>
            @enderror

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"
                    placeholder="Enter description" disabled>{{ $todo -> description }}</textarea>
            </div>
            @error('description')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </form>

    </div>
</x-layout>