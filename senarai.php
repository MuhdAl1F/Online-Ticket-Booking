<h1>Senarai Tiket</h1>
<table border="1">
    <tr>
        <th>Bil</th>
        <th>Nama Movie</th>
        <th>Jenis Movie</th>
        <th>Tindakan</th>
    </tr>
    <?php
    
    $bil = 1;
    $sql = " SELECT * FROM ticket ORDER BY Ticket_Type";
    $result = $conn->query($sql);
    while ($row = $result->fetch_object()) {
        ?>
        <tr>
            <td><?php echo $bil++; ?></td>
            <td><?php echo $row->Movie_Tittle; ?></td>
            <td><?php echo $row->Ticket_Type; ?></td>
            <td>
                <a href="index.php?menu=edit&idTicket=<?php echo $row->idTicket; ?>">Edit</a>
                |
                <a href="padam.php?idTicket=<?php echo $row->idTicket; ?>">Padam</a>
            </td>
        </tr>
        <?php
    }
    ?>
	
</table>