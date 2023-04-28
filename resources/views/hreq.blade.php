<h1>User Login</h1>

<form action="hreq" method="POST">
    @csrf
    {{method_field('PUT')}}
   <div><input type="text" name="username" id=""></div>
   <div><input type="password" name="password" id=""></div>
   <div><button>Login</button></div>
</form>