<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('bootstrap-5.1.3-dist/css/bootstrap.css')}}">
    <script src="{{ asset('bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('jquery-3.6.0.min.js') }}"></script>
    <title>Project Monitoring Sederhana</title>
    <script type="text/javascript">
        function lihatpustaka(){
            $.ajax({
                type:"GET",
                url:"/tabel"
                }).done(function(data){
                $('#tabel').html(data);
                });
        }
        function caripustaka(){
            var id = document.getElementById("id").value;
            $.ajax({
                type:"GET",
                url:"/cari/"+id
                }).done(function(data){
                $('#tabel').html(data);
                });
        }
    </script>

</head>
<body onload="lihatpustaka();">

    <h1 class="container-fluid p-5 bg-dark text-white" style="text-align:center">Kandidat Peserta Magang<br>Muhammad Abid Fajar<h1>

    <div class="row">
        <h1 style="text-align: center;">Selamat Datang di Project Monitoring Sederhana</h1>
    </div>

    <label style="font-size: large;" for="id">Masukkan nama project yang ingin dicari</label>
    <table>
        <tr>    
            <td><input type="text" id="id" class="form-control form-control" style="width: 300px;"></td>
            <td><button type="button" id="submit" class="btn btn-success btn" style="width:100px;" onclick="caripustaka();">Search</button></td>
            <td><button type="button" id="all" class="btn btn-danger btn" style="width:125px;" onclick="lihatpustaka();">Lihat Semua</button></td>    
        </tr>
    </table>
    
    <button type="button" id="isi" class="btn btn-info btn" data-bs-toggle="modal" data-bs-target="#ModalInsert">Create New Project</button><br>
    
    <h2 class="font-weight-bold" style="text-align: center;">PROJECT MONITORING</h2>

    <div id="tabel">
    </div>

    <div class="modal" id="ModalInsert">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="/tambah" method="post" enctype="multipart/form-data" id="formdata">
                    {{ csrf_field() }}
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Create New Project</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <table>
                                <tr>
                                    <td>Project Name :</td><td><input type="text" style="width: 350px;" id="judul" name="judul" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Project Leader :</td><td><input type="text" style="width: 350px;" id="ketua" name="ketua"  class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Start Date :</td><td><input type="text" style="width: 350px;" id="date_start" name="date_start"  class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>End Date :</td><td><input type="text" style="width: 350px;" id="date_end" name="date_end" class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Client :</td><td><input type="text" style="width: 350px;" id="nama" name="nama"  class="form-control"></td>
                                </tr>
                                <tr>
                                    <td>Progress :</td><td><input type="text" id="progress" name="progress"  class="form-control"></td>
                                </tr>
                            </table>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-danger" value="submit" id="submit">
                        </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
