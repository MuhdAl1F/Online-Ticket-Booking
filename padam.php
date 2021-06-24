<?php
require 'conn.php';

$idTicket = $_GET['idTicket'];
$sql = "DELETE FROM ticket WHERE idTicket = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idTicket);
$stmt->execute();
$stmt->close();

header('location: index.php?menu=senarai');