<html>
    <head><title>Embedded PHP Demo</title></head>
    <body>
    	<h1>Employees</h1>
        <?php 
        	$associativeEmployeeArray = array(
                 'Tom' => 'Web Developer', 
                 'Jerry' => 'Project Manager', 
                 'Jack' => 'Designer',
                 'Sally' => 'Software Engineer'
            ); 
        ?>
        <table border="1" cellpadding="3" cellspacing="0">
            <thead><tr><td>Name</td><td>Job Title</td></tr></thead>
            <tbody>
            	<?php
	                foreach ($associativeEmployeeArray as
	                  $employee => $title){
	                    echo "<tr><td>$employee</td>
	                            <td>$title</td></tr>"; //Double quotes allow inline variables
	                }
	        	?>
        	</tbody>
        </table>
    </body>
</html>