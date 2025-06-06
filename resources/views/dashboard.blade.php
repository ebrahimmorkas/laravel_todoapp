<x-layout>
    <x-navbar></x-navbar>
    <!-- If user is looged in -->
    @auth
        <div class="container mt-5">
    <h2 class="mb-4">Welcome, {{ Auth::user()->firstname }}!</h2>

    <div class="card mb-3">
        <div class="card-header">
            Your Todo List
        </div>
        <div class="card-body">
            @if ($todos->isEmpty())
                <p class="text-muted">No todos yet. Click the button below to add one.</p>
                <a href="/create" class="btn btn-primary">Add Todo</a>
            @else
                <ul class="list-group">
                    @foreach ($todos as $todo)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="/show/{{ $todo -> id }}">
                                {{ $todo->title }}
                            </a>
                            <div>
                                <a href="/edit/{{ $todo->id }}" class="btn btn-sm btn-warning">Edit</a>
                                <form action="/destroy/{{ $todo -> id }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-sm btn-danger">Delete</button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
        <center class="my-5">
            <a href="/create" class="btn btn-primary">+ Add More Todo's</a>
        </center>
</div>
    @endauth

    <!-- If user is not logged in -->
    @guest
    <div class="container mt-5 text-center">
        <h1 class="display-4">Welcome to SimpleTodo</h1>
        <p class="lead">Your personal task manager. Organize your day effortlessly!</p>
        <div class="mt-4">
            <a href="/login" class="btn btn-primary btn-lg">Login</a>
            <a href="/register" class="btn btn-outline-secondary btn-lg">Register</a>
        </div>
    </div>
    @endguest

</x-layout>


