<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Create Course</h3>
    </div>
    <div class="panel-body">
        <form class="" name="create_course" role="form" action="admin/system/createCourse" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="course_name">course Name</label>
              <input type="text" name="course_name" class="form-control" id="course_name" placeholder="course name">
            </div>
            <div class="form-group">
              <label for="course_code">course Code</label>
              <input type="number" name="course_code" class="form-control" min="100" max="700" id="course_code" placeholder="course code">
            </div>


                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <input type="reset" class="form-control" value="Reset">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <input type="submit" class="form-control" value="Create Course">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
