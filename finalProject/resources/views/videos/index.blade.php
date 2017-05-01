<html>

  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>

    <div class = "container">

      <!-- Alert -->
      @if (session('successStatus'))
        <div class = "alart alert-success" role="alert">
          {{ session('successStatus') }}
        </div>
      @endif


      <a href="/videos/new" class="btn"> Add a Video </a>


      <div class="row">
          <div class="col-xs-12">
              <table class="table table-striped">
                <thead>
                   <tr>
                     <th>Video</th>
                     <th>Account</th>
                     <th>Number of Up Votes</th>
                   </tr>
                 </thead>
                <tbody>
                  @foreach ($videos as $video)
                    <tr>
                      <td><iframe width="420" height="236.25" src="{{$video->videoURL}}" frameborder="0" allowfullscreen></iframe></td>
                      <td> Submitted by: {{$video->userSubmission}}</td>
                      <td> Up Votes: {{$video->votes}}</td>
                      <td><a href="" class = "btn btn-primary"> Vote Up </a></td>
                      <td><a href="/videos/{{ $video->id }}" class = "btn btn-primary"> View </a></td>

                    </tr>
                  @endforeach
                </tbody>
              </table>
          </div>
      </div>
    </div>

  </body>

</html>
