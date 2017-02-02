<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Create Student</h3>
    </div>
    <div class="panel-body">
        <form class="" name="create_student" role="form" action="/admin/system/createStudent" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="student_name">Student Name</label>
              <input type="text" name="student_name" class="form-control" id="student_name" placeholder="student name">
            </div>

            <div class="form-group">
              <label for="student_email">Email Address</label>
              <input type="text" name="student_email" class="form-control" id="student_email" placeholder="email address">
              <p class="help-block">Enter student email address. This will be used as the username.</p>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="reset" class="form-control" value="Reset">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="submit" class="form-control" value="Create Student">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
