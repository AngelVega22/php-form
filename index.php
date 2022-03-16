<?php
$title ='Inicio';
require_once 'includes/header.php';
require_once 'db/conn.php'
?>

<h1 class="text-center">Registro para curso</h1>
<form method="POST" action="success.php" enctype="multipart/form-data" class="p-5 ">
    <div class="form-group">
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div>
    <div class="form-group">
        <label for="ocupacion">¿A que te dedicas?</label>
        <select class="form-control" id="ocupacion" name="ocupacion">
            <option value="1">Estudiante</option>
            <option>Profesional tecnico</option>
            <option>Profesional</option>
            <option>Profesor</option>

            <option>Otro</option>

        </select>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-groupform-group">
        <label for="phone">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>
    <br />
    <div class="custom-file">
        <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar">
        <label class="custom-file-label" for="avatar">Choose File</label>
        <small id="avatar" class="form-text text-danger">File Upload is Optional</small>

    </div>


    <button type="submit" name="submit" class="btn btn-primary btn-block w-100 mt-3">Submit</button>
</form>
<?php require_once 'includes/footer.php';
?>