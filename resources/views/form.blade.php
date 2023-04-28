<h1>My data</h1>
<form action="form" method="POSt">
    @csrf
    <div>
        <input type="text" name="username" placeholder="Enter the Username" id="" />
        <span>@error('username'){{$message}} @enderror</span>
    </div>
    <div>
        <input type="password" name="password" placeholder="Enter the password" />
        <span>@error('password'){{$message}} @enderror</span>
    </div>
    <div>
        <button type="submin">Login</button>
    </div>
</form>