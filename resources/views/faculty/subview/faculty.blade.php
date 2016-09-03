<div role="tabpanel" class="tab-pane fade in active" id="faculty">
    <h3 class="page-header">Faculty Page</h3>
    <div class="container">
        <div class="row">
            @foreach ($faculties as $faculty)
                <div class="col-md-6 col-sm-4">
                  <h5>{{ $faculty->name }}</h5>
                  <img class="img-circle profile-pic" src="/images/faculty/{{ $faculty->id }}.jpg" alt="Generic placeholder image" height="140" width="140">
                  <p> Email: {{ $faculty->email }}</p>
                  <p> Phone: {{ $faculty->phone }}</p>
                  <p><a class="btn btn-default" href="faculty/{{ $faculty->id }}" role="button">View details &raquo;</a></p>
                </div>
            @endforeach
        </div>
    </div>
</div>
