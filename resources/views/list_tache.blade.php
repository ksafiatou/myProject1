@extends('master.app')
@section('content')
       
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>LISTE DES TACHES</h1>
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




<div class="row"
style="width: 50px"
>
  <div class="col-md-1">
    <table class="table">
      <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">date_decheance</th>
      <th scope="col">categorie</th>
      <th scope="col">Tache</th>
      <th scope="col">note</th>
      <th scope="col">Action</th>
      <th scope="col">liste</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    @forelse($taches as $tache) 
    <tr>
      <th scope="row lg-10">{{$tache->id}}</th>
      <td>{{$tache->date_decheance}}</td>
      <td>{{$tache->categorie}}</td>
      <td>{{$tache->tache}}</td>
      <td>{{$tache->note}}</td>
      <td><a href="" class="btn btn-info">Editer</a></td>
      <td><a href="" class="btn btn-danger" onclick="">Suprimer</a></td>
      <td><a href="" class="btn btn-danger" onclick="">attribuer</a></td>
      <td>
        <select name="" id="">
          <option value="" selected>choisir</option>
          @foreach($enregistrements as $enregistrement)
          <option value="{{$enregistrement->email}}">{{$enregistrement->email}}</option>
          @endforeach
        </select>
      </td>
      
    </tr>
    @empty
    Pas de taches pour le moment
    @endforelse
  </tbody>
</table>
</div>
</div>




@endsection