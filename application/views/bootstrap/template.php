<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>CodeIgniter Bootstrap</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    </head>

    <body>
        <?php
        $this->load->view("bootstrap/navbar");
        ?>
        <div class="container">
            <br><br><br><br>
            <div class="row row-offcanvas row-offcanvas-right">
                <?php
                $this->load->view("bootstrap/sidebar");
                ?>
                <?php
                $this->load->view($view);
                ?>
      
            </div><!--/row-->

            <hr>

          <?php 
          $this->load->view("bootstrap/footer");
          ?>

        </div><!--/.container-->
        </body>
</html>
