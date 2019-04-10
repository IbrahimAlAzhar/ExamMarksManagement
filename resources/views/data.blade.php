<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exam Marks</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="css/style0.css">
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/minty/bootstrap.min.css">
<link href="toast.css" rel="stylesheet">
<style>
body { background-color: #fafafa; }
.container { margin: 150px auto; }
</style>
</head>


    <style>
    table{
      font-family: arial,sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    td,th{
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    tr:nth-child(even){
      background-color: #dddddd;
    }
    </style>

  </head>

  <body>
      <h3>Your Marks is in this course:</h2>
      <h5>To LogOut</h5>
      <form class="btn8" action="/logout" method="post">
           @csrf
           <button type="submit" name="button">Log Out</button>
      </form>
      <br>
      <div>
        <br> <br>
        <a href="{{route('index')}}" class="btn4">Home</a>
      </div>


      <table class="table" id="example">
   <thead class="thead-dark">
     <tr>
       <th>Student Id</th>
       <th>Student Name</th>
       <th>Subject Code</th>
       <th>First TT marks</th>
       <th>Second TT marks</th>
       <th>First Part Marks</th>
       <th>Second Part Marks</th>
       <th>Attendence Marks</th>
       <th>Comments</th>
     </tr>
   </thead>

   <tbody>
     @foreach ($students as $s)
     <tr>
       <td>{{ $s->id }}</td>
       <td>{{ $s->Student_name }}</td>
       <td>{{ $s->Subject_code }}</td>
       <td>{{ $s->first_tt_marks }}</td>
       <td>{{ $s->second_tt_marks }}</td>
       <td>{{ $s->first_part_marks }}</td>
       <td>{{ $s->second_part_marks }}</td>
       <td>{{ $s->attendence_marks }}</td>
       <td>{{ $s->Comments }}</td>

     </tr>
     @endforeach


   </tbody>
 </table>


    <p class="lead"><button id="json" class="btn btn-primary">TO JSON</button> <button id="csv" class="btn btn-info">TO CSV</button>  <button id="pdf" class="btn btn-danger">TO PDF</button></p>
  </div>
  <script src="{{asset('js/app.js')}}" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/2.3.5/jspdf.plugin.autotable.min.js"></script>
<script src="/tableHTMLExport.js"></script>
<script>
  $('#json').on('click',function(){
    $("#example").tableHTMLExport({type:'json',filename:'sample.json'});
  })
  $('#csv').on('click',function(){
    $("#example").tableHTMLExport({type:'csv',filename:'sample.csv'});
  })
  $('#pdf').on('click',function(){
    $("#example").tableHTMLExport({type:'pdf',filename:'sample.pdf'});
  })
  </script>
  </body>
</html>
