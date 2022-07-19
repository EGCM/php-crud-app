<?php
function insertTask(){
    if (!empty($_GET['items'])) {
        $insert = new insert($_GET['items']);
        if ($insert->insertTask()) {
          echo '<div class="col-md-9 alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You have inserted task successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        } else {
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> Insert task error.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    }
}
?>
