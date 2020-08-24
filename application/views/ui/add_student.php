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
                    <h5 class="font-medium m-b-0">Students</h5>
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
                                <h5 class="card-title">Add New Student</h5>
                                <p></p>
                                <form action="<?= base_url('admin/addStudent') ?>" method="post">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="name" type="text" name="name" class="validate" required>
                                            <label for="name">Student Fullname</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="name" type="text" name="dob" class="validate" required placeholder="dd/mm/yyyy">
                                            <label for="name">Date Of Birth</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <label>
                                                <input name="class" type="radio" value="JS1" required/>
                                                <span>JS1</span>
                                            </label>
                                        </div>
                                        <div class="input-field col s4">
                                            <label>
                                                <input name="class" type="radio" value="JS2"/>
                                                <span>JS2</span>
                                            </label>
                                        </div>
                                        <div class="input-field col s4">
                                            <label>
                                                <input name="class" type="radio" value="JS3"/>
                                                <span>JS3</span>
                                            </label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="phone" type="text" name="phone" class="validate" required>
                                            <label for="phone">Guardian Contact</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">

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
                    <div class="col s12 l6">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Students List</h5>
                                <p>This are all students inputted using this platform with their respective classes </p>
                                <table id="editscore" class="table striped editable-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($list as $row) : ?>
                                            <tr>
                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['name'] ?></td>
                                                <td><?= $row['class'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
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