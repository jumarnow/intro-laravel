@extends('app')
@section('content')
<table class="table table-bordered">
  <thead>                  
    <tr>
      <th style="width: 10px">#</th>
      <th>Judul</th>
      <th>Isi</th>
      <th style="width: 40px">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>1.</td>
        <td>Update software</td>
        <td>
            <div class="progress progress-xs">
            <div class="progress-bar progress-bar-warning" style="width: 55%"></div>
            </div>
        </td>
        <td>
            <span class="badge bg-warning">55%</span><span class="badge bg-danger">55%</span>
        </td>
    </tr>    
    </tr>
  </tbody>
</table>
@endsection