<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Add a Video</title>
  </head>
  <body>

    <div class="container">
      @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
      @endif

        <h1>Add a Video</h1>
        <form action="/videos" method="post">
          {{ csrf_field() }}
          <div class="form-group">
            <label for="title">URL</label>
            <input type="text" name="title" id="title" class="form-control">
          </div>
          <button type="submit" class="btn btn-primary">Add!</button>
        </form>
    </div>


  </body>
</html>
