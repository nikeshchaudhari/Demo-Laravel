<h1>ADD DETAILS</h1>


{{-- {{print_r($errors)}} --}}
{{-- @if($errors->any())
@foreach($errors->all() as $error)
<div>
    {{$error}}
</div>
@endforeach
@endif --}}
<form action="/adduser" method="post">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" placeholder="Enter your name " value="{{old('name')}}">
@error('name')
<p style="color: red">{{$message}}</p>
@enderror
    <br>
     <label for="email">Email:</label>
    <input type="email" name="email" placeholder="Enter your email ">
    @error('email')
    <p style="color: red">{{$message}}</p>
        
    @enderror<br>
     <label for="city">City:</label>
    <input type="text" name="city" placeholder="Enter your city ">
     @error('city')
    <p style="color: red">{{$message}}</p>
        
    @enderror<br>

   
    <button type="submit">Add New User</button>
</form>