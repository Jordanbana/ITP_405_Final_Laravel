<html>

  <head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>

  <body>
    <table>
      <tbody>
        @foreach ($videos as $video)
          <tr>
            <td>{{ $video->title }}</td>
          </tr>
          @endforeach
      </tbody>
    </table>

  </body>

</html>
