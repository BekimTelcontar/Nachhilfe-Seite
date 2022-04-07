<?php
$sql = "SELECT * FROM orders WHERE customer_id = :id";
$statement = $conn->prepare($sql);

$params = [
':id' => $id
];

$statement->execute($params);

$result = $statement->fetchAll();

foreach ($result as $row) {
?>
<tr>
<td><?= $row['ship_name']; ?></td>
<td><?= $row['shipping_fee']; ?></td>
<td><a href="delete.php?id=<?= $row['id'] ?>">Bestellung löschen</a></td>
</tr>
<?php
}
?>
</table>