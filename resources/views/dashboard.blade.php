<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exam Marks</title>
    <link rel="stylesheet" type="text/css" href="css/style6.css">
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>jQuery TableHTMLExport Plugin Examples</title>
<link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/4.1.3/minty/bootstrap.min.css">
<link href="toast.css" rel="stylesheet">


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
    <h2>The  teacher list in this course:</h2>

      <h4>To LogOut</h4>
      <form class="btn8" action="/logout" method="post">
           @csrf
           <button type="submit" name="button">Log Out</button>
      </form>
      <br>
      <br> <br>
      <div>
        <br> <br>
        <a href="{{route('index')}}" class="btn4">Home</a>
      </div>

      <table id="">
        <tr>
            <th>Teacher Id</th>
          	<th>Teacher Name</th>

        </tr>

        @foreach ($users as $s)
        <tr>
          <td>{{ $s->id }}</td>
          <td>{{ $s->name }}</td>
          <td>

           @if($s->approved==0)
             <form action="/approve/{{$s->id}}">
               <button type="submit">Approve</button>
             </form>
           @endif

          </td>

        </tr>
        @endforeach


      </table>



  </body>
</html>
