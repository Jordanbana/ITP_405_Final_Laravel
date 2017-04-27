<html>

  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>

    <div class="row">
        <div class="col-xs-12">
            <table class="table table-striped">
              <tbody>
                @foreach ($videos as $video)
                  <tr>
                    <td><iframe width="420" height="236.25" src="{{$video->videoURL}}" frameborder="0" allowfullscreen></iframe></td>
                    <td> Number of Votes: {{$video->votes}}</td>
                    <td><a href="" class = "btn btn-primary"> Vote Up </a></td>
                  </tr>
                @endforeach
              </tbody>
            </table>
        </div>
    </div>

  </body>

</html>
