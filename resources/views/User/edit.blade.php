<form method='POST' action="{{ route('user.update',$user->id) }}">
    @csrf
@method('PUT')

<label for="name">name</label>
<input id= "name" type="name" name="name" > 

<label for="phone">phone</label>
<input id= "phone" type="phone" name="phone"> 

<label for="password">password</label>
<input id= "password" type="password" name="password">

<label for="role">role</label>
<input id= "role" type="role" name="role">

<button type="submit">submit</button>
</form>

