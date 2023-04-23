@extends('admin.layout.master')


@section('title')
    Posts
@endsection


@section('content')

	<!--Container-->
	<div class="container w-full md:w-4/5 xl:w-3/5  mx-auto px-2">

		<!--Title-->
		<h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
			users
		</h1>

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


			<table id="dataTabelA" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">title</th>
						<th data-priority="2">Costumer</th>
						<th data-priority="3">post</th>
						<th data-priority="4"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Tiger Nixon</td>
						<td>System Architect</td>
						<td>Edinburgh</td>
						<td>
							<button class="bg-red-500 rounded-xl text-white p-2 hover:bg-red-600">delete</button>
						</td>

					<!-- Rest of your data (refer to https://datatables.net/examples/server_side/ for server side processing)-->

					<tr>
						<td>Donna Snider</td>
						<td>Customer Support</td>
						<td>New York</td>
						<td>
							<button class="bg-red-500 rounded-xl text-white p-2 hover:bg-red-600">delete</button>
						</td>
					</tr>
				</tbody>

			</table>


		</div>
		<!--/Card-->


	</div>
	<!--/container-->





	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
	<script>
		$(document).ready(function() {

			var table = $('#dataTabelA').DataTable({
					responsive: true
				})
				.columns.adjust()
				.responsive.recalc();
		});
	</script>
@endsection
