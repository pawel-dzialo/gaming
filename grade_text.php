<!DOCTYPE html>
<html lang="en">
  <body>
  		<?php 
			  include 'grade_text_helper.php';
			  for($i=0;$i<count($users);$i++){
			   echo '<div id=\'review\'>';
			   echo "</br>";
			   $id = $users[$i];
			   include 'namn.php';
			   echo ": ";
			   echo ' grade = ';
			   echo $gradeint[$i];
			   echo "</br>";
			   echo ' comment: ';
			   echo $grade_tex[$i];
			   echo '</div>';
			  }
		?>
		
  </body>
</html>