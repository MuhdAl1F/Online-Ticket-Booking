<?php
require 'conn.php';


$Movie_Tittle = $_POST['Movie_Tittle'];
$Ticket_Type = $_POST['Ticket_Type'];

$sql = "INSERT INTO ticket VALUES (null, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param('ss', $Movie_Tittle, $Ticket_Type);
$stmt->execute();
echo 'Data sudah disimpan. ' . $stmt->error;
if ($conn->errno == 1062) { # jika duplicate pada field yang unique
    ?>
    <script>
        alert('Maaf, username ini telah wujud.');
        window.location = 'index.php?menu=daftar';
    </script>
    <?php
} else {
    header('location: index.php?menu=senarai');
}