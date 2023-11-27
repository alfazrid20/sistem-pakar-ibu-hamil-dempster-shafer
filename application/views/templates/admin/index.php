<?php $this->load->view('templates/admin/header') ?>
<?php $this->load->view('templates/admin/navbar') ?>


        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
         <?php $this->load->view($content) ?>
        </div>
        <!-- /page content -->

<?php $this->load->view('templates/admin/footer') ?>
