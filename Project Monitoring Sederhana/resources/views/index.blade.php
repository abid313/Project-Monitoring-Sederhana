<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Project</title>
</head>
<body>
<table border="1" class="table table-hover">
        <tr>
            <th>PROJECT NAME</th>
            <th>CLIENT</th>
            <th>PROJECT LEADER</th>
            <th>START DATE</th>
            <th>END DATE</th>
            <th>PROGRESS</th>
            <th>Action</th>

        </tr>
        @foreach($project as $a)
        <tr>
            <td>{{ $a->judul }}</td>
            <td>{{ $a->nama }}</td>
            <td>{{ $a->ketua }}</td>
            <td>{{ $a->date_start }}</td>
            <td>{{ $a->date_end }}</td>
            <td>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?= $a->progress ?>%"><?= $a->progress ?>%</div>
                </div>
            </td>
            <td>
                <a href="/hapus/{{$a->id}}"> <button type="button" class="btn btn-danger btn" >Delete</button> </a>
                <a href="/show/{{$a->id}}"> <button type="button" class="btn btn-success btn" >Edit</button> </a>
            </td>
        </tr>
        @endforeach
</table>
    
</body>
</html>
