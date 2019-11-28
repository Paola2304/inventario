<script src="<?php echo base_url('props/validaciones/marca.js') ?>"></script>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php $this->load->view('navbar'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php $this->load->view('navbar2'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <h1>Editar Marca</h1>
              <br>
              <?php foreach($marcas as $ma){ ?>
                <form action="<?php echo base_url().'marca_controller/actualizar' ?>" method="POST" class="form-horizontal" onsubmit=" return validarFormulario()">
                  <div class="row my-3">
                    <div class="col-md-6">
                      <div class="input-group">
                        <label class="input-group-text">Marca</label>
                        <input type="hidden" name="id" value="<?= $ma->id_marca?>">
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="marca" id="marca" value="<?= $ma->marca?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <input type="submit" value="Actualizar" class="btn btn-primary">
                      <button type="button" class="btn btn-secondary" onclick="javascript:window.history.back();" autofocus >Regresar</button>
                    </div>
                  </div>
                </form>
              <?php } ?>
            </div>
          </div>
          
          <?php if (isset($mensaje)){ echo $mensaje; } ?>
        </div>
        <?php $this->load->view('utils/alertsMarca') ?>
        <!-- /.container-fluid -->
      </div>

      
      
