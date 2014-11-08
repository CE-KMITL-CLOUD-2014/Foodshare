<!DOCTYPE html>
<html lang="en">
  <head>
   
  </head>

  <body>
  
<?php
	
echo 'Test';

$users = DB::table('auth')->get();

foreach ($users as $user)
{
    var_dump($user->Email);
}

	
?>
	</body>
</html>