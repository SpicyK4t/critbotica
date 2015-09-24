
<div class="row">
    <div class="col s12 m5 offset-m3">
        <div class="card-panel green accent-2">
          <?php echo Form::open(); ?>
          <div class="row">
            <div class="input-field col s12">
              <?php echo Form::select('medicamento_id', $medicamentos); ?>
            </div>
          </div>
          <div class="row">
            <div class="s12">
              <?php echo Form::submit('btn_entrada', 'Entrada', array('class'=>'btn left red lighten-1')); ?>
              <?php echo Form::submit('btn_salida', 'Salida', array('class'=>'btn right red lighten-1')); ?>
            </div>
          </div>
          <?php echo Form::close(); ?>
        </div>
    </div>
</div>
