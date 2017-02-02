<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Create Faculty</h3>
    </div>
    <div class="panel-body">
        <form class="" role="form" name="create_faculty" action="admin/system/createFaculty" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="faculty_name">Faculty Name</label>
              <input type="text" name="faculty_name" class="form-control" id="faculty_name" placeholder="faculty name">
            </div>

            <div class="form-group">
              <label for="faculty_email">Email Address</label>
              <input type="text" name="faculty_email" class="form-control" id="faculty_email" placeholder="email address">
              <p class="help-block">Enter faculty email address. This will be used as the username.</p>
            </div>

            <div class="form-group">
              <label for="faculty_phone">Phone Number</label>
              <input type="text" name="faculty_phone" class="form-control" id="faculty_phone" placeholder="phone number">
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="reset" class="form-control" value="Reset">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="submit" class="form-control" value="Create Faculty">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
