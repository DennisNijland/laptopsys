<?=$header?>

<h1>Laptops</h1>


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
    <td><!--<a href="<?=site_url("admin/delete_user/{$_value->user_id}")?>">-->Delete</a></td>
</tr>
<?php endforeach;?>
</tbody>
</table>

<?php

echo "Dit is laptop/laptops";

?>

<?=$footer?>