@extends('front-end.layouts.master')
@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<!-- start: page -->
						<section class="card">
							<header class="card-header">
								<div class="card-actions">
									<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
									<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
								</div>
						
								<h2 class="card-title">Admins</h2>
							</header>
							<div class="card-body">
								<table class="table table-bordered table-striped" >
									<thead>
										<tr>
											<th width="20%">Name</th>
											<th width="25%">Email</th>
											<th width="25%">created_at</th>
											<th width="15%">Action</th>
											
										</tr>
									</thead>
									<tbody>
									</tbody>
								</table>
							</div>
						</section>
					<!-- end: page -->

<script type="text/javascript">
    $(function () {
    
    var table = $('.table-striped').DataTable({
        processing: true,
        serverSide: true,
        ajax: usersListurl,

        columns: [
            
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'created_at', name: 'created_at'},   
            
        ]
    });
    
  });
</script>
<script>
    var usersListurl="{{ route('userdAjax.show') }}";
</script>
@endsection