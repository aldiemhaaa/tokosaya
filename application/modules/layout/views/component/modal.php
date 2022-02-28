<?php 

function modal($form,$title,$content){
    echo '
    <div class="modal fade" id="'.$form.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="'.ucfirst($form).'">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">'.$title.'</h5>
            <button type="button" class="btn btn-transparent" data-dismiss="modal" aria-label="Close">
                <i class="mdi mdi-close"></i>
            </button>
          </div>
          <div class="modal-body">
          '.$content.'
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </form>
    </div>';
}

function typeText($name){
  echo '<div class="form-group">
  <label for="exampleInputUsername1">'.ucfirst($name).'</label>
  <input type="text" class="form-control" name="'.$name.'" placeholder="'.ucfirst($name).'...'.'">
</div>';
}

?>