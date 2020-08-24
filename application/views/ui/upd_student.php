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
                    <h5 class="font-medium m-b-0">Update Individual Data</h5>
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
                                <h5 class="card-title">New Individual Data</h5>
                                <p>Only use this form to add a new student</p>
                                <form action="<?= base_url('admin/updstudent') ?>" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="id" id="" class="validate" required>
                                                        <option value="">Select a Student</option>
                                                        <?php foreach ($studs as $stud) : ?>
                                                            <option value="<?= $stud['id'] ?>"><?= $stud['name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <label for="autoc-input">Student Full Name</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <div class="btn blue darken-1">
                                                    <span>Student Photo</span>
                                                    <input type="file" name="stud_photo">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="ntp" type="text" name="ntp" class="validate" required>
                                            <label for="ntp">Number of Times Present</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="textarea1" name="pcomment" class="materialize-textarea"></textarea>
                                            <label for="phone">Principal's Comment</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>

                                <hr>
                                <h5 class="card-title">Termly Update of Individual Data</h5>
                                <p>Use this to update the student termly data</p>
                                <form action="<?= base_url('admin/updstudentdata') ?>" method="post">
                                    <div class="row">
                                        <div class="col s12">
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <select name="id" id="" class="validate" required>
                                                        <option value="">Select a Student</option>
                                                        <?php foreach ($studs as $stud) : ?>
                                                            <option value="<?= $stud['id'] ?>"><?= $stud['name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                    <label for="autoc-input">Student Full Name</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="ntpu" type="text" name="ntp" class="validate" required>
                                            <label for="ntpu">Number of Times Present</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <textarea id="textarea1u" name="pcomment" class="materialize-textarea"></textarea>
                                            <label for="phone">Principal's Comment</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Class General Update</h5>
                                <p></p>
                                <form action="<?= base_url('admin/updClass') ?>" method="post">
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <label>
                                                <input name="class" type="radio" value="JS1" required />
                                                <span>JS1</span>
                                            </label>
                                        </div>
                                        <div class="input-field col s4">
                                            <label>
                                                <input name="class" type="radio" value="JS2" />
                                                <span>JS2</span>
                                            </label>
                                        </div>
                                        <div class="input-field col s4">
                                            <label>
                                                <input name="class" type="radio" value="JS3" />
                                                <span>JS3</span>
                                            </label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="nostud" type="text" name="nostud" class="validate" required>
                                            <label for="nostud">Number of Students in class</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="name" type="text" name="dsc" class="validate" required placeholder="dd/mm/yyyy">
                                            <label for="name">Date School Closes</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="name" type="text" name="dsr" class="validate" required placeholder="dd/mm/yyyy">
                                            <label for="name">Date School Resumes</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="noopen" type="text" name="noopen" class="validate" required>
                                            <label for="noopen">Number of times School Opened</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Submit
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div> -->
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