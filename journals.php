<?php include 'includes/connection.php'; ?>
<?php include 'includes/menu.php'; ?>

            <!-- Main Container -->
            <main id="main-container">
                <!-- Hero -->
                <div class="bg-body-light">
                    <div class="content content-full">
                        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                            <h1 class="flex-sm-fill font-size-h2 font-w400 mt-2 mb-0 mb-sm-2">Journal Publications</h1>
                            <!--<nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Tables</li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTables</li>
                                </ol>
                            </nav>-->
                        </div>
                    </div>
                </div>
                <!-- END Hero -->

                <!-- Page Content -->
                <div class="content">
                    <!-- Dynamic Table Full Pagination -->
                    <div class="block block-rounded">
                        <!---<div class="block-header block-header-default">
                            <h3 class="block-title">Dynamic Table <small>Full pagination</small></h3>
                        </div>-->
                        <div class="block-content block-content-full">
                            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
                            <table class="table table-striped table-vcenter js-dataTable-full-pagination">
                                <thead>
                                    <tr>
                                        <th>Publication</th>
                                        <th>Citation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        $sql = "SELECT * FROM journal";
                                        //echo $sql;
                                        $result = mysqli_query($con,$sql);
                                        if (mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                     ?>
                                    <tr>
                                        <td>
                                            <h4 class="h5 mt-3 mb-1">
                                                <a target="_blank" href="<?php echo $row['link']; ?>"><?php echo $row['title']; ?></a>
                                            </h4>
                                            <p class="d-none d-sm-block text-muted">
                                                <?php echo $row['authors']; ?>
                                            </p>
                                            <p class="d-none d-sm-block text-muted">
                                                <?php echo $row['publication']; ?>
                                            </p>
                                        </td>
                                        <td class="d-none d-sm-table-cell">
                                            <button type="button" class="btn btn-primary push" data-toggle="modal" data-target="<?php echo '#modal-block-large'.$row['id']; ?>">Cite</button>
                                        </td>
                                        <!-- Large Block Modal -->
                                        <div class="modal" id="<?php echo 'modal-block-large'.$row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-block-large" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="block block-themed block-transparent mb-0">
                                                        <div class="block-header bg-primary-dark">
                                                            <h3 class="block-title">Cite</h3>
                                                            <div class="block-options">
                                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                                    <i class="fa fa-fw fa-times"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="block-content">
                                                            <h3 class="h4">Plain Text</h3>
                                                            <p><?php echo $row['plaintext']; ?></p>
                                                            <h3 class="h4">BibText</h3>
                                                            <p><pre><?php echo $row['bibtext']; ?></pre></p>
                                                        </div>
                                                        <div class="block-content block-content-full text-right bg-light">
                                                            <button type="button" class="btn btn-sm btn-light" data-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Done</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END Large Block Modal -->
                                    </tr>
                                    <?php
                                            }
                                        }
                                     ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END Dynamic Table Full Pagination -->

                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

            <?php include 'includes/footer.php'; ?>
        </div>
        <!-- END Page Container -->

        <!--
            Dashmix JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_js/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/dashmix.core.min.js"></script>

        <!--
            Dashmix JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_js/main/app.js
        -->
        <script src="assets/js/dashmix.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/js/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/js/plugins/datatables/buttons/dataTables.buttons.min.js"></script>
        <script src="assets/js/plugins/datatables/buttons/buttons.print.min.js"></script>
        <script src="assets/js/plugins/datatables/buttons/buttons.html5.min.js"></script>
        <script src="assets/js/plugins/datatables/buttons/buttons.flash.min.js"></script>
        <script src="assets/js/plugins/datatables/buttons/buttons.colVis.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_tables_datatables.min.js"></script>
    </body>
</html>
