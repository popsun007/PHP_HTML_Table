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

<table>
	<tr>
		<th>User#</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Full Name</th>
		<th>Full Name in upper case</th>
		<th>Length of full name(without spaces)</th>
	</tr>

		<?php
			for ($i=0; $i<count($users); $i++) {
		?>
	<tr <?php  if(($i+1) % 5 =='first_name') echo "style= \"background-color: lightgrey; color: grey\"" ?>>
		<td><b><?= $i + 1 ?></b></td>
		<td><?= $users[$i]['first_name']; ?></td>
		<td><?= $users[$i]['last_name']; ?></td>
		<td><?= $users[$i]['first_name'] . " " . $users[$i]['last_name']; ?></td>
		<td><?= strtoupper($users[$i]['first_name'] . " " . $users[$i]['last_name']) ?></td>
		<td><?= strlen(trim($users[$i]['first_name'] . $users[$i]['last_name']));?></td>
	</tr>
		<?php 
		}
	?>
</table>