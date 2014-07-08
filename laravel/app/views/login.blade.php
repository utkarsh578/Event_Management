@extends('layout.layoutdef')
@section("formpage")
@if($errors->has())
  @foreach($errors->all() as $error)
    <p>{{ $error }}<br>
  @endforeach
@endif
@if(Session::has('message'))
    <p>{{Session::get('message')}}
  @endif
  <h1>Please Login</h1><br>
<form role="form" method="post" action="/validatelogin">
  <div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control"  placeholder="Email" name="email" value="">
  </div>
   <div class="form-group">
    <label >Password</label>
     <input type="password" class="form-control" placeholder="password" name="password" >
  </div>
   
  <button type="submit" class="btn btn-default" name="submit">Submit</button>
</form>
<a href="/loginfb">Login Via Facebook</a>
@endsection