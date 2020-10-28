@extends('layouts.app')

@section('title','Cobaaaa')

@section('content')
<div class="card">
<div class="cardbody">
<h3>Nama teman :{{ $friend['nama'] }} </h3>
<h3>No tlp :{{ $friend['no_tlp'] }} </h3>
<h3>Alamat teman :{{ $friend['alamat'] }} </h3>
 </div>
</div>
@endsection

    
