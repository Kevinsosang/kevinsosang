@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Artikel</div>
                <div class="card-body">
       
                    <table class="table table-bordered">
                    	<thead class="bg-success">
							<tr>
								<th scope="col">ID</th>
								<th scope="col">Judul</th>
								<th scope="col">Isi</th>
								<th scope="col">Kategori Id</th>
								<th scope="col">User_id</th>
								<th scope="col">Create</th>
								<th scope="col">Details</th>
							</tr>
						</thead>
							@foreach($listArtikel as $item)
								<tr>
									<td>{!! $item->id !!}</td>
									<td>{!! $item->judul !!}</td>
									<td>{!! $item->isi !!}</td>
									<td>{!! $item->kategori_artikel_id !!}</td>
									<td>{!! $item->users_id !!}</td>
									<td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
									<td>
										<a href="{!! route('artikel.show',[$item->id]) !!}"class="btn btn-sm btn-primary" > Lihat </a>
									</td>
								</tr>
							@endforeach
					</table>

					 <a href="{!! route('artikel.create') !!}" class="btn btn-primary">
           				 Tambah
        			</a> 

                </div>
            </div>
        </div>
    </div>
</div>
@endsection