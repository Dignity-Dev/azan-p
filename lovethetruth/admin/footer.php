          <div class="ht-40"></div>


          <div class="az-footer mg-t-auto">
              <div class="container">
                  <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright &copy; <?php echo $web_row['webname']; ?> - <?php echo date("Y"); ?></span>
                  <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Made with love from <a href="https://dignitytechng.com" target="_blank">Dignity Technology</a> </span>
              </div><!-- container -->
          </div><!-- az-footer -->
          </div><!-- az-content-body -->
          </div><!-- container -->
          </div><!-- az-content -->


          <script src="../lib/jquery/jquery.min.js"></script>
          <script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="../lib/ionicons/ionicons.js"></script>
          <script src="../js/jquery.cookie.js" type="text/javascript"></script>

          <script src="../js/azia.js"></script>
          <?php include "swal.php";?>
          <script>
              $(function() {
                  'use strict'

              });
          </script>
          <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
          <script>
              $(document).ready(function() {
                  $('#myTable').DataTable();
              });
          </script>
          <script>
              CKEDITOR.replace('editor', {
                  filebrowserUploadUrl: 'ck_upload.php',
                  filebrowserUploadMethod: 'form'
              });
          </script>
          </body>

          </html>