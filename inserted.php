<?php

try {
    $conn = new PDO("mysql:host=localhost;dbname=genero;port=3306","root","");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conn->beginTransaction();
    $conn->exec("INSERT INTO volunteers values(id,'{$_POST['name']}','{$_POST['admission_no']}','{$_POST['email']}','{$_POST['course']}','{$_POST['year']}','{$_POST['branch']}','{$_POST['department']}')");
 
    
    $conn->commit();?>
<br><br><br><br><br><br><br>

	<div class="strip">
				<h1 class=""><span class="hue"></span></h1>
				<h3 class="center about_strip">
					<center><h1>Thanks</h1><center>	
				</h3>
			</div>
	<?php }
catch(PDOException $e)
    {

    $conn->rollback();
    echo "Error: " . $e->getMessage();
    }

$conn = null;
?>