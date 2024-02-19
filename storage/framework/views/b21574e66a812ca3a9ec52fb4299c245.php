
<?php $__env->startSection('content'); ?>
    <div class="d-sm-flex align-items-center justify-content-between mb-5">
        <h1 class="h3 mb-0 text-gray-800">LABORATORY SERVICES INFORMATION MANAGEMENT SYSTEM</h1>
</div>
            <div class="row column graph">

                <!-- tab style 1 -->
                <div class="col-md-10">
                    <div class="white_shd full margin_bottom_30">
                        <div class="half graph_head">
                            <div class="heading1 margin_0">
                                <h2>Enter Client Info</h2>
                            </div>
                        </div>
                        <div class="full graph_head">
                            <div class="heading1 margin_0">
                                <?php if(count($errors) > 0): ?>
                                    <div class="alert alert-danger">
                                        <ul>
                                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <li><?php echo e($error); ?></li>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                        </div>
                        <div class="table_section padding_infor_info">
                            <div class="full inner_elements">
                                <form method="GET" action="/save/client">
                                    <?php echo csrf_field(); ?>
                                    <div class="row pl-5">
                                        <div class="col-6">
                                            <input type="hidden" name="userid">
                                            <div class="form-group">
                                                <label for="FirstName">FirstName</label>
                                                <input type="text" class="form-control" name="FirstName" placeholder="Enter your firstname">
                                            </div>
                                            <div class="form-group">
                                                <label for="LastName">LastName</label>
                                                <input type="text" class="form-control" name="LastName" placeholder="Enter your lastname">
                                            </div>
                                            <div class="form-group">
                                                <label for="MiddleName">MiddleName</label>
                                                <input type="text" class="form-control" name="MiddleName" placeholder="Enter your middlename">
                                            </div>
                                            <div class="form-group">
                                                <label for="ContactNo">ContactNo.</label>
                                                <input type="text" class="form-control" name="ContactNo" placeholder="Contact No.">
                                            </div>
                                            <div class="form-group">
                                                <label for="Company/Agency">Company/Agency</label>
                                                <input type="text" class="form-control" name="Company/Agency" placeholder="Enter your Company/Agency">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="Suffix">Suffix</label>
                                                <select class="form-control" name="Suffix">
                                                    <option selected></option>
                                                    <option value="Jr.">Jr.</option>
                                                    <option value="Sr.">Sr.</option>
                                                    <option value="I">I</option>
                                                    <option value="II">II</option>
                                                    <option value="III">III</option>
                                                    <option value="IV">IV</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="Gender">Gender</label>
                                                <select class="form-control" name="Gender">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="BirthDate">BirthDate</label>
                                                <input type="date" class="form-control" name="BirthDate" placeholder="BirthDate">
                                            </div>
                                            <div class="form-group">
                                                <label for="CivilStatus">CivilStatus</label>
                                                <select class="form-control" name="CivilStatus">
                                                    <option value="single">Single</option>
                                                    <option value="married">Married</option>
                                                    <option value="divorce">Divorce</option>
                                                    <option value="widowed">Widowed</option>
                                                    <option value="separated">Separated</option>
                                                    <option value="live-in">Live-in</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="StaffRepresentative">Staff Representative</label>
                                                <input type="text" class="form-control" name="StaffReprentative" placeholder="StaffRepresentative">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Laboratory\resources\views/add-client.blade.php ENDPATH**/ ?>