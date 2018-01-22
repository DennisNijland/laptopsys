<?=$header?>

<table border="1">
<thead>
    <th>ID</th>
    <th>Laptopnaam</th>
    <th>Status</th>
</thead>
<tbody>
<?php foreach($laptop as $_key => $_value): ?>
<tr>
    <td><?=$_value->id?></td>
    <td><?=$_value->naam?></td>
    <td>
    	<?php
    	if ($_value->status == 1) {
    		echo "Beschikbaar";
    	}
    	elseif ($_value->status == 0) {
    		echo "Bezet";
    	}
    	?>
    </td>
</tr>
<?php endforeach;?>
</tbody>
</table>

<?php
	echo"Hallo";
?>

<?=$footer?>