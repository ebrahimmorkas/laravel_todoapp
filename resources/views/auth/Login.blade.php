<x-layout>
    <div class="container my-5">
    <form method="post" action="/login">
        @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}" required>
    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  @error('email')
          <div style="color:red;">{{ $message }}</div>
        @enderror
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="password" required>
  </div>
  @error('password')
          <div style="color:red;">{{ $message }}</div>
        @enderror
  <button type="submit" class="btn btn-primary">Login</button>

  @if(session('error'))
      <div style="color:red;">{{ session('error') }}</div>
  @endif
</form>
    </div>
</x-layout>