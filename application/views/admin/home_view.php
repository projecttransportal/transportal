<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>PTP - Dashboard</title>

  <link href="<?php echo base_url(); ?>assets/css/adminstyle.css" rel="stylesheet">

  </head>

  <body>
  		<a href="<?php echo base_url(); ?>admin/home/logout">logout</a>
	<table border="1px">
		<tr>
			<td>
				Project Name
			</td>
			<td>
				Status
			</td>
			<td>
				Action
			</td>
		</tr>
	<?php
		if(count($project_data) > 0){
			foreach($project_data AS $val):
	?>
			<tr>
				<td>
					<?php echo $val['award_title']; ?>
				</td>
				<td>
					<?php
					
					
						
						//if current date > contract enddate = 
					
						echo $val['status'];
						
						
					?>
				</td>
				<td>
					<a href="#<?php echo $val['award_id']; ?>">Edit</a>
				</td>
			</tr>
	<?php
			endforeach;
		}
		else{
		
		}
	?>
  </body>
</html>
