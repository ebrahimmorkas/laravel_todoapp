<x-layout>
  <div class="container">
    <form>
        @csrf
      <div class="mb-3">
        <label for="firstname" class="form-label">First name</label>
        <input name="firstname" type="text" class="form-control" id="firstname" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="lasttname" class="form-label">Last name</label>
        <input name="lastname" type="text" class="form-control" id="lastname" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password" type="password" class="form-control" id="password">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
</x-layout>