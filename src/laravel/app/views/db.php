
<html>
    <body>
        <h1>Laravel Quickstart</h1>
		<?php
		$results = DB::table('member')->get();

		foreach ($results as $result)
		{
			echo "$result->firstname"; 
			echo "<br>";
		}
		?>
    </body>
</html>