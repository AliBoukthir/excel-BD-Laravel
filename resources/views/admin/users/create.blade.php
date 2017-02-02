<form action="/users" method="POST" >

{!! csrf_field() !!}

<input type="text" name="name">
<input type="email" name="email">
<input type="password" name="password">
<input type="submit" name="Create">


</form>

<form action="/members" method="POST" >

{{ csrf_field() }}
	
	<label for="">username</label>
	<input type="text" name="username">
	<label for="">email</label>
	<input type="email" name="email">
	<label for="">password</label>
	<input type="password" name="password">
	<label for="">fullname</label>
	<input type="text" name="fullname">
	<label for="">truststaus</label>
	<input type="text" name="truststaus">
	<label for="">regstatus</label>
	<input type="text" name="regstatus">
	<input type="submit" name="Create">


</form>