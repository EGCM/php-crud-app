<?php
function waiter(){
    insertTask();
    deleteTask();
    editTask();
}

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

function deleteTask(){
    if (!empty($_GET['delete'])) {
        $delete = new delete($_GET['delete']);
        if ($delete->deleteTask()) {
          echo '<div class="col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You have deleted task successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        } else {
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> Delete task error.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    }
}

function editTask(){
    if (!empty($_GET['edit'])) {
        $edit= new edit($_GET['edit']);
        if ($edit->editTask()) {
          echo '<div class="col-md-9 alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You have completed task successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        } else {
            echo '<div class="col-md-9 alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> Complete task error.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
        }
    }
}

function viewTable(){
    $view = new view();
    $view->viewData();
    $view->viewCompletedData();
}

?>
