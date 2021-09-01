<?php
//include("./control/chekstatuslogin.php");

	//BEGIN FUNCTION 
		
	function random_password($length,$validchars) {
	$numchars = mb_strlen ($validchars,'utf-8');
	$password = '';

	// each loop random 1 character
	for ($i = 0; $i < $length; $i++) {
		mt_srand();
		// random index of valid characters
		$index = mt_rand(0, $numchars - 1);
		// get character at index and append to password
		$password .= mb_substr($validchars, $index, 1,'utf-8');
		if(mb_strlen($password,'utf-8')==$length){
			break;	
		}
	}
	return $password;
}

?>


<div class="card mt-2 border border-primary shadow-lg">
  <div class="card-body">


  <center><img src="https://images.unsplash.com/photo-1618614944895-fc409a83ad80?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80" style="width:240px;height:240px;"> </center>

<form class="was-validated" action="" method="POST">

<div class="input-group mt-5">
        <div class="input-group-prepend">
          <div class="input-group-text border border-dark"><i class="fa fa-user" style="font-size:24px"></i></div>
        </div>

		<script>
	function checkuser()
	{
		var elem = document.getElementById('username').value;
		if(!elem.match(/^([a-z0-9])+$/i))
		{
			

			document.getElementById('username').value = "";
			
		}
	}
</script>

        <input type="text" class="form-control border border-dark" placeholder="Username" name="username" id="username" onblur="checkuser();" autocomplete="off" required>
      </div>


<div class="input-group mt-3">
        <div class="input-group-prepend">
          <div class="input-group-text border border-dark"><i class="fa fa-key" style="font-size:17px"></i></div>
        </div>

		<script>
	function checkpass()
	{
		var elem = document.getElementById('password').value;
		if(!elem.match(/^([a-z0-9])+$/i))
		{
			
			document.getElementById('password').value = "";
		}
	}
</script>


        <input type="password" class="form-control border border-dark" placeholder="Password" name="password" id="password" onblur="checkpass();" autocomplete="off" required>
      </div>





<div class="row mt-5">

    
    <div class="col">
      <button type="submit" name="login" class="btn btn-block btn-success">Login <i class="fa fa-sign-in"></i></button>
    <a href="./?app=home" class="btn btn-danger btn-lg btn-block" role="button" aria-pressed="true">Home</a></center><br>
    </div>
 
  <div class="row mt-15">

  </div>
</div>




</form>


</div>
</div>
