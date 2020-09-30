<?php
include __DIR__.'/partials/template/header.php';
include __DIR__.'/partials/update/server.php';
 ?>


<div class="container">
    <form class="" action="partials/update/server-edit.php" method="post">
        <div class="form-group">
            <label for="roomNumber">Numero della Stanza</label>
            <input type="text" class="form-control" name="roomNumber" value="<?php echo $row['room_number'] ?>" id='roomNumber'>
        </div>
        <div class="form-group">
            <label for="floor">Floor</label>
            <input type="text" class="form-control" name="floor" value="<?php echo $row['floor'] ?>" id='floor'>
        </div>
        <div class="form-group">
            <label for="beds">Numero dei letti</label>
            <input type="text" class="form-control" name="beds" value="<?php echo $row['beds'] ?>" id='beds'>
        </div>
        <div class="form-group">
            <input type="hidden" class="form-control" name="id" value="<?php echo $row['id'] ?>" id='id'>
        </div>
        <div class="form-group">
            <input type="submit" class="form-control bg-warning" value="Modifica">
        </div>
    </form>
</div>


 <?php
 include __DIR__.'/partials/template/footer.php';
 ?>
