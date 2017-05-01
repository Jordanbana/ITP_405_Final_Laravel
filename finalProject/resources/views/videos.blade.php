<!DOCTYPE html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<html>
  <head>
    <meta charset="utf-8">
    <title>Video</title>
  </head>
  <body>



<!--  Displaying Videos   ------------->
    <div class="row">
           <div class="col-xs-12">
             <table class="table table-striped">
               <thead>
                 <tr>
                   <th>Video</th>
                 </tr>
               </thead>
               <tbody>
             @foreach ($videos as $video)
               <tr>
                 <td><iframe width="420" height="236.25" src="{{$video->videoURL}}" frameborder="0" allowfullscreen></iframe></td>
               </tr>
                  @foreach($comments as $comment)
                    <tr>
                      <td>{{$comment->user_comment}}</td>
                    </tr>
                  @endforeach

             @endforeach

             </table>

             <div class = "container">
               <h1>Add a comment</h1>
               <form action="/videos/comments/{{$video->id}}" method="post">
                 {{ csrf_field() }}
                 <div class="form-group">
                   <label for="title">Comment</label>
                   <!-- <label for="video_number">{{$video->id}}</label> -->
                   <input type="text" name="title" id="title" class="form-control">
                 </div>
                 <button type="submit" class="btn btn-primary">Add!</button>
               </form>
              </div>



           </div>
    </div>
  </body>
</html>
