
<?php require "../includes/header.php";   ?>


<br><br><br>
<p class="aleatorio"><em>Sem conteúdo por enquanto...</em></p>
<br><br><br>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Canto III</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <em>"ABANDONAI TODA ESPERANÇA, VÓS QUE AQUI ENTRAIS!"</em>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"><a class="link-do-btn" href="https://www.google.com.br">Sair do site</a></button>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Permanecer no site</button>
      </div>
    </div>
  </div>
</div>




<?php 
    $msg = "speranza";
    if ($msg == "speranza"){  ?>
        <script>
            $(document).ready(function(){
                $('#myModal').modal('show');
                              });
        </script>
    <?php } ?>


<?php require "../includes/footer.php";  ?>