
<?php 

include("../../conexion.php");


$stm=$conex->prepare("SELECT * FROM usuarios");
$stm->execute();
$usuarios=$stm->fetchall(PDO::FETCH_ASSOC);



?>



<?php include("../../template/header.php")?>


<div class="table-responsive">
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th scope="col">Identificacion</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Direccion</th>
                <th scope="col">Contacto</th>
                <th scope="col">Email</th>
                <th scope="col">Contraseña</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
            <tr class="">   
                <td scope="row"><?php echo $usuarios['id_usuario']; ?></td>
                <td><?php echo $usuarios['Nombre']; ?></td>
                <td><?php echo $usuarios['Apellido']; ?></td>
                <td><?php echo $usuarios['Direccion']; ?></td>
                <td><?php echo $usuarios['Contacto']; ?></td>
                <td><?php echo $usuarios['Email']; ?></td>
                <td><?php echo $usuarios['Contrasena']; ?></td>
                <td>editar7eliminar</td>

            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>




<?php include("../../template/footer.php")?>

