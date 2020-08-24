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
                    <h5 class="font-medium m-b-0">Report Sheet Generator</h5>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Single Report Sheet</h5>
                                <p></p>
                                <form action="<?= base_url('admin/reportsingle') ?>" method="post">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <select name="id" id="" class="validate" required>
                                                <option value="">Select a Student</option>
                                                <?php foreach ($studs as $stud): ?>
                                                <option value="<?= $stud['id']?>"><?= $stud['name']?></option>
                                                <?php endforeach;?>
                                            </select>
                                            <!-- <input id="name" type="text" name="name" class="validate" required> -->
                                            <label for="name">Student Fullname</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Search
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Class Based Report Sheet</h5>
                                <p> </p>
                                <form action="<?= base_url('admin/reportclass') ?>" method="post">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <p><label>
                                                    <input class="with-gap" name="class" type="radio" value="JS1" />
                                                    <span>JS1</span>
                                                </label> </p>
                                            <p><label>
                                                    <input class="with-gap" name="class" type="radio" value="JS2" />
                                                    <span>JS2</span>
                                                </label></p>
                                            <p><label>
                                                    <input class="with-gap" name="class" type="radio" value="JS3" />
                                                    <span>JS3</span>
                                                </label></p>
                                            <p><label>
                                                    <input class="with-gap" name="class" type="radio" value="All" disabled="disabled" />
                                                    <span>All</span>
                                                </label></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Generate
                                            </button>
                                        </div>
                                    </div>
                                </form>
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