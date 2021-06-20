#instructions

Make a folder named 'CovidTracker' in C:/xampp/htdocs/
go to the folder and paste the project in there for the PHP files to work with the database on phpmyadmin. 

#Code for debugging PHP

function debug_to_console($data) {
	$output = $data;
	if (is_array($output))
		$output = implode(',', $output);
		echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
	}
}

debug _to_console("some data");



	<!-- <?php
    if(!empty($_POST['checkbox'])){
        // Loop to store and display values of individual checked checkbox.
        foreach($_POST['checkbox'] as $selected){
            echo $selected."</br>";
        }
    }
	?> -->

## database queries:
