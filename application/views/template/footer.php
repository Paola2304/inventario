<script src="<?php echo base_url('props/validaciones/clave.js') ?>"></script>
<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Inventario USAM 2019</span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>

<!-- LogModal-->
<div class="modal fade" id="logModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form action="<?php echo base_url('welcome/cambiar'); ?>" method="POST" class="mx-auto" onsubmit="return validarClave()">
        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col">
            <div class="input-group">
              <span class="input-group-text" >Antigua contraseña</span>
              <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="oldClave" id="oldclave" placeholder="Ingrese antigua contraseña">
            </div>
          </div><br>

          <div class="col">
            <div class="input-group">
              <span class="input-group-text" >Nueva contraseña</span>
              <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="newClave" id="newClave" placeholder="Ingrese nueva contraseña">
            </div>
          </div><br>

          <div class="col">
            <div class="input-group">
              <span class="input-group-text" >Confirmar contraseña</span>
              <input type="password" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" name="clave" id="clave" placeholder="Confirmar contraseña">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <input type="submit" value="Cambiar" class="btn btn-primary">
        </div>
      </form>
    </div>
  </div>
</div>

<script type="text/javascript">
  window.onload= function(){
    document.getElementById('newClave').onchange = verificar;
    document.getElementById('clave').onchange = verificar;
  }

  function verificar(){
    var newClave = document.getElementById('newClave').value;
    var clave = document.getElementById('clave').value;

    if(newClave!=clave){
      document.getElementById('newClave').setCustomValidity('las claves no coinciden');
    }else{
      document.getElementById('newClave').setCustomValidity('');
    }

  }

</script>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Seleccione "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
        <a class="btn btn-primary" href="<?php echo base_url().'login_controller/cerrar';?>">Cerrar sesión</a>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap core JavaScript-->

<script src="<?php echo base_url('props/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('props/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>


<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('props/js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('props/vendor/chart.js/Chart.min.js') ?>"></script>
<script src="<?php echo base_url('props/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?php echo base_url('props/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>


<!-- Page level custom scripts -->
<script src="<?php echo base_url('props/js/demo/chart-area-demo.js') ?>"></script>
<script src="<?php echo base_url('props/js/demo/chart-pie-demo.js') ?>"></script>
<script src="<?php echo base_url('props/js/demo/datatables-demo.js') ?>"></script>



</body>

</html>