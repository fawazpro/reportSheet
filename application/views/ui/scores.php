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
                                <h5 class="card-title">Subject Based</h5>
                                <p>Update the scores based on a subject. With this, you can either edit a particular class or the whole students taking the subject</p>
                                <form action="<?= base_url('admin/editboard') ?>" method="post">
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
                                            <h5>Subjects</h5>
                                            <?php foreach ($subjects as $subject): ?>
                                            <p><label>
                                                    <input class="with-gap" name="subject" type="radio" value="<?= $subject['sub_code'] ?>" />
                                                    <span><?= $subject['subject'] ?></span>
                                                </label> </p>
                                            <?php endforeach; ?>
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
                    <!-- <div class="col s6">
                        <div class="card">
                            <div class="card-content">
                                <h5 class="card-title">Class Based</h5>
                                <p>Update the scores based on a class. With this, you can edit just three subjects at a time</p>
                                <form>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="class" type="radio" value="JS1" />
                                                    <span>JS1</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="class" type="radio" value="JS2" />
                                                    <span>JS2</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="class" type="radio" value="JS3" />
                                                    <span>JS3</span>
                                                </label>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <p>Subject 1</p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="class" type="radio" value="English" />
                                                    <span>English</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="class" type="radio" value="Ma" />
                                                    <span>JS2</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input class="with-gap" name="class" type="radio" value="JS3" />
                                                    <span>JS3</span>
                                                </label>
                                            </p>
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