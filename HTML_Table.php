<?php
$users = array( 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'John', 'last_name' => 'Supsupin'),
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
   array('first_name' => 'KB', 'last_name' => 'Tonel'), 
   array('first_name' => 'Michael', 'last_name' => 'Choi'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen'),
   array('first_name' => 'Mark', 'last_name' => 'Guillen')
);
?>
<style type="text/css">
table , table td, table th{
	border: 1px solid lightgrey;
	border-collapse: collapse;
	font-family: Arial;
}

</style>

<table border=1>
	<tr>
		<th>User#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Full Name</th>
		<th>Full Name in upper case</th>
		<th>Length of full name(without spaces)</th>
	</tr>

		<?php
			foreach ($users as $index => $info) {
		?>
	<tr <?php  if(($index+1) % 5 ==0) echo "style= \"background-color: grey; color: white\"" ?>>
		<td><b><?= $index + 1 ?></b></td>
		<td><?= $info['first_name']; ?></td>
		<td><?= $info['last_name']; ?></td>
		<td><?= $info['first_name'] . " " . $info['last_name']; ?></td>
		<td><?= strtoupper($info['first_name'] . " " . $info['last_name']) ?></td>
		<td><?= strlen(trim($info['first_name'] . $info['last_name']));?></td>
	</tr>
		<?php 
		}
	?>
</table>





<?php



?>