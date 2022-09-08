  <!-- Header-->

  @extends('master.app')
@section('content')
       
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>LISTE DES COLLABORATEURS</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li class="active"></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-10">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th scope="col">#</th>                                            
                                        <th scope="col">nom</th>      
                                            <th scope="col">prenom</th>
                                            <th scope="col">email</th>
                                            <th scope="col">telephone</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($enregistrement as $enregistrement) 
                                        <tr>
                                        <th scope="row">{{$enregistrement->id}} {{$loop->index + 1}}</th>
<td>{{$enregistrement->nom}}</td>
      <td>{{$enregistrement->prenom}}</td>
      <td>{{$enregistrement->email}}</td>
      <td>{{$enregistrement->telephone}}</td> 
      
      <td><a href="" class="btn btn-info">Editer</a></td>
      <td>  <a href="" class="btn btn-danger" onclick="">Suprimer</a></td>

     </tr>
    
              
    @empty
    Pas de collaborateurs pour le moment
    @endforelse          
                                        
                                    </tbody>
                                </table>
                            </div>

                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="vendors/jszip/dist/jszip.min.js"></script>
    <script src="vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="assets/js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
@endsection