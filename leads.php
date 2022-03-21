<?php
$title ='Leads';
require_once 'includes/header.php';
require_once 'db/conn.php';

$results = $leadController -> getLeads();
?>


<h4 class="text-center m-5 text-success"><u>Lista de leads</u></h4>

<table class="table table-hover">
    <tr>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Day of birth</th>
        <th>Email Adress</th>
        <th>Celular</th>
        <th>Ocupación</th>
    </tr>

    <tr>
        <?php while($r = $results-> fetch(PDO::FETCH_ASSOC)) {?>
    <tr>
        <td><?php echo $r['lead_id'] ?></td>
        <td><?php echo $r['firstname'] ?></td>
        <td><?php echo $r['lastname'] ?></td>
        <td><?php echo $r['dateofbirth'] ?></td>
        <td><?php echo $r['emaillead'] ?></td>
        <td><?php echo $r['contactnumber'] ?></td>
        <td><?php echo $r['name'] ?></td>
    </tr>
    <?php }?>

    </tr>
</table>



<?php require_once 'includes/footer.php';
?>