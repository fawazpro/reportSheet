<!-- ============================================================== -->
<!-- Page wrapper scss in scafholding.scss -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Title and breadcrumb -->
    <!-- ============================================================== -->
    <div class="page-titles">
        <div class="d-flex align-items-center">
            <h5 class="font-medium m-b-0">Dashboard</h5>
            <div class="custom-breadcrumb ml-auto">
                <a href="#!" class="breadcrumb">Home</a>
                <a href="#!" class="breadcrumb">Dashboard</a>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Container fluid scss in scafholding.scss -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Earnings -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col s12 l3">
                <div class="card">
                    <div class="card-content">
                        <h3 class="font-medium"><?php echo date('l'); ?></h3>
                        <h5 class="card-subtitle m-b-0"><?= date('F') ?>, <?= date('jS') ?> <?= date('Y') ?></h5>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <div class="col s12 l9">
                <div class="card">
                    <div class="card-action">
                        <div class="row m-t-10">
                            <!-- col -->
                            <div class="col m4 s12 b-r">
                                <div class="d-flex no-block">
                                    <div><span>Number of Students</span>
                                        <h4 class="font-medium m-b-0"><?= $nos ?></h4>
                                    </div>
                                    <div class="m-l-10"></div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col m4 s12 b-r">
                                <div class="d-flex no-block">
                                    <div><span>Number of Users</span>
                                        <h4 class="font-medium m-b-0"><?= $nou ?></h4>
                                    </div>
                                    <div class="m-l-10"><span class="indigo-text text-lighten-1 display-5"><i class="material-icons">account_box</i></span></div>
                                </div>
                            </div>
                            <!-- col -->
                            <!-- col -->
                            <div class="col m4 s12">
                                <div class="d-flex no-block">
                                    <div><span>Number of Classes</span>
                                        <h4 class="font-medium m-b-0"><?= $noc ?></h4>
                                    </div>
                                    <div class="m-l-10"></div>
                                </div>
                            </div>
                            <!-- col -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Orders -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col s12 l8">
                <div class="card">
                    <div class="card-content">
                        <!-- title -->
                        <div class="d-flex align-items-center">
                            <div>
                                <h5 class="card-title">Constants Updates</h5>
                                <h6 class="card-subtitle">Values that needs to be updated once in a while</h6>
                            </div>
                        </div>
                        <!-- title -->
                        <div class="p-o" style="height:400px;">
                            <form action="<?= base_url('admin/varupdate') ?>" method="post">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <select name="id" id="" class="validate" required>
                                            <option value="">Select a Variable to be updated</option>
                                            <?php foreach ($vars as $var) : ?>
                                                <option value="<?= $var['id'] ?>"><?= $var['name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="input-field col s12">
                                        <input id="name" type="text" name="value" class="validate" required>
                                        <label for="name">New Value</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s12 l4">
                <div class="card">
                    <div class="card-content">
                        <h5 class="card-title">Add new user</h5>
                        <h6 class="card-subtitle">You can add as many users but only this user can generate reportsheet</h6>
                        <div class="m-t-30" id="visitor" style="height:280px; width:100%"></div>
                    </div>
                </div>
            </div>
            
        <a href="<?= base_url('admin/reportS') ?>" class="blue accent-4 btn-large">Report Sheet</a>
        <a href="<?= base_url('admin/studUpdate') ?>" class="blue accent-4 btn-large">Principal's Comment</a>
        </div>

        <!-- ============================================================== -->
        <!-- Container fluid scss in scafholding.scss -->
        <!-- ============================================================== -->
        <footer class="center-align m-b-30 m-l-15 m-r-15">Designed and Developed by <a href="https://rayyan.com">RayyanTech</a>.</footer>
    </div>
    <!-- ============================================================== -->
    <!-- Page wrapper scss in scafholding.scss -->
    <!-- ============================================================== -->