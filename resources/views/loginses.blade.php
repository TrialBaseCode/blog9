<style>
    div{
     padding-bottom: 10px;
    }
 </style>
 
 
 <h1>User Session Login</h1>
 
 <form action="/usersesslogin" method="POST">
     @csrf
     <div>
         <input type="text" name="username" placeholder="Enter the name">
     </div>
     <div>
         <input type="password" name="password"   placeholder="Enter the password">
     </div>
     <button type="submit">Add User</button>
 </form>