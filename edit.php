<?php
$idTicket = $_GET['idTicket'];
$sql = "SELECT Movie_Tittle, Ticket_Type FROM ticket WHERE idTicket = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $idTicket);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($Movie_Tittle, $Ticket_Type);
$stmt->fetch();
$stmt->close();
?>
<h1>Daftar Tiket Baru</h1>

<form action="edit-simpan.php" method="post">
    <input type="hidden" name="idTicket" value="<?php echo $idTicket; ?>">
    <table>
        <tr>
            <td>Nama Tiket</td>
            <td><input type="text" name="Movie_Tittle" value="<?php echo $Movie_Tittle ?>"></td>
        </tr>
        <tr>
            <td>Jenis Tiket</td>
            <td><input type="text" name="Ticket_Type" value="<?php echo $Ticket_Type; ?>"></td>
        </tr>
        <tr>
            <td><button type="submit">Simpan</button></td>
        </tr>
    </table>
</form>