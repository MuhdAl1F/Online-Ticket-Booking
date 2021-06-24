<?php
require 'conn.php';

$Movie_Tittle = $_POST['Movie_Tittle'];
$Ticket_Type = $_POST['Ticket_Type'];
$idTicket = $_POST['idTicket'];
$sql = "UPDATE ticket SET Movie_Tittle= ?, Ticket_Type = ? WHERE idTicket = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ssi', $Movie_Tittle, $Ticket_Type, $idTicket);
$stmt->execute();
if ($stmt->error) {
    echo 'Error dari database: ' . $stmt->error;
    exit;
}
$stmt->close();

header('location: index.php?menu=senarai');