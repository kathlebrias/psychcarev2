<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Question</title>
</head>
<body>

<br>
<H1>View Question</H1>

<div class="row">
    <div class="col-md-12">


    <table class ="tabel table-bordered">
    <tr align="center">  
    
        <th>Category Type</th>
        <th>Question Type</th>
        <th>Counselor</th>
        <th>Question</th>
        <th>Action<th>
    
    </tr>
    @foreach($question as $row)
    <tr>
        <td>{{$row->category_id}}</td>
        <td>{{$row->type}}</td>
        <td>{{$row->counselor_id}}</td>
        <td>{{$row->question}}</td>
    </tr>
    @endforeach
    </table>
    <br>
    <br>
    <br>


    </div>



</div>


</html>