<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.css') }}">
    <title>Edit Project</title>
</head>
<body>
    <h1 class="container-fluid p-5 bg-dark text-white" style="text-align:center">Project Monitoring Sederhana<h1>
    <h3 style="text-align:center;">Merubah Data Project</h3>
    <div class="container-fluid p-5 bg-light" style="padding:15px;">
    
    <form action="/edit" method="post" enctype="multipart/form-data" id="formdata">
        {{ csrf_field() }}
        <table style="padding: left 10px;">
            @foreach($project as $a)
            <tr>
                <td><input type="hidden" name="id" value="{{ $a->id }}"></td>    
            </tr>
            <tr>
                <td>Project Name :</td><td><input type="text" id="judul" style="width: 350px;" name="judul" class="form-control" value="{{ $a -> judul }}"></td>
            </tr>
            <tr>
                <td>Project Leader :</td><td><input type="text" id="ketua" style="width: 350px;" name="ketua"  class="form-control" value="{{ $a -> ketua }}"></td>
            </tr>
            <tr>
                <td>Start Date :</td><td><input type="text" id="date_start" style="width: 350px;" name="date_start"  class="form-control" value="{{ $a -> date_start }}"></td>
            </tr>
            <tr>
                <td>End Date :</td><td><input type="text" id="date_end" style="width: 350px;" name="date_end" class="form-control" value="{{ $a -> date_end }}"></td>
            </tr>
            <tr>
                <td>Client :</td><td><input type="text" id="nama" style="width: 350px;" name="nama"  class="form-control" value="{{ $a -> nama }}"></td>
            </tr>
            <tr>
                <td>Progress :</td><td><input type="text" id="progress" style="width: 350px;" name="progress"  class="form-control" value="{{ $a -> progress }}"></td>
            </tr>   
        </table>
        <br><br>
        <input type="submit" class="btn btn-danger" value="Edit">
    </form>
    @endforeach
</body>
</html>
