<!doctype html>
<html lang="en">
<!-- monish added on 21-10-21 -->
<head>

    <?= $this->load->view('partials/title-meta', ['title' => 'Dashboard']) ?>

    <?= $this->load->view('partials/head-css') ?>

</head>

<?= $this->load->view('partials/body') ?>

<!-- <body data-layout="horizontal"> -->

<!-- Begin page -->
<div id="layout-wrapper">

    <?= $this->load->view('partials/menu') ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <?= $this->load->view('partials/page-title', $page_title) ?>
                <!-- end page title -->

                <!-- start page title -->
                <?= $this->load->view($page) ?>
                <!-- end page title -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <?= $this->load->view('partials/footer') ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->


<?= $this->load->view('partials/right-sidebar') ?>

<!-- JAVASCRIPT -->
<?= $this->load->view('partials/vendor-scripts') ?>

<script src="<?php bs('public/assets/js/app.js') ?>" ></script>

</body>

</html>