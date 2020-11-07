<table width="500px">
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Description</th>
</tr>
<?php foreach ($tasks as $task): ?>
<tr>
	<td><?php echo $task['id']; ?></td>
	<td><?php echo $task['name']; ?></td>
	<td><?php echo $task['description']; ?></td>
</tr>
<?php endforeach; ?>
</table>