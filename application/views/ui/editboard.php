        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0">Update Scores</h5>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Editing Scores for <?=$class?> <?=$subject?></h5>
                                <p>Double click on the scores to edit and always remember to use the <b>ENTER</b> to effect the change</p>
                                <div class=" table-responsive">
                                    <table id="editscore" class="table striped editable-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th><?=$subject?> CAT</th>
                                                <th><?=$subject?> Exam</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($list as $row): ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['class'] ?></td>
                                                <td><?= $row[$subj.'_cat'] ?></td>
                                                <td><?= $row[$subj.'_exam'] ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <footer class="center-align m-b-30 m-l-15 m-r-15">Designed and Developed by <a href="https://rayyan.com">RayyanTech</a>.</footer>
        </div>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->