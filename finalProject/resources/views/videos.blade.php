<!DOCTYPE html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<html>
  <head>
    <meta charset="utf-8">
    <title>Video</title>
  </head>
  <body>



<!--  Displaying Tweets   ------------->
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
             @endforeach
             </table>
           </div>
    </div>
  </body>
</html>
