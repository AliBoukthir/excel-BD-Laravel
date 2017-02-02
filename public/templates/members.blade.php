<h1><center> List of members </center> </h1>

        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>



@verbatim
		{{2+3}}
@endverbatim


    @foreach ($data as $user)
        <p>This is user {{ $user->id }}</p>
    @endforeach

<form action="/members/create" method="POST" >

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
<script src="/js/app.js"></script>