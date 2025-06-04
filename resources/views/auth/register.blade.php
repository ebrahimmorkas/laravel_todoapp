<x-layout>
  <div class="container my-5">
    <form method="POST", action="/register">
        @csrf
      <div class="mb-3">
        <label for="firstname" class="form-label">First name</label>
        <input name="firstname" type="text" class="form-control" id="firstname" aria-describedby="emailHelp" value="{{ old('firstname') }}">
        @error('firstname')
          <div style="color: red;">{{ $message }}</div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="lasttname" class="form-label">Last name</label>
        <input name="lastname" type="text" class="form-control" id="lastname" aria-describedby="emailHelp" value="{{ old('lastname') }}">
      </div>
      @error('lastname')
          <div style="color: red;">{{ $message }}</div>
        @enderror
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      @error('email')
          <div style="color: red;">{{ $message }}</div>
        @enderror
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password">
      </div>
      @error('password')
          <div style="color: red;">{{ $message }}</div>
        @enderror
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      @error('password-confirmation')
          <div style="color: red;">{{ $message }}</div>
        @enderror
      <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    </div>
</x-layout>