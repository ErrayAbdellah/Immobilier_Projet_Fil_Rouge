@extends('admin.layout.master')


@section('title')
    Posts
@endsection


@section('content')
{{-- @dd($posts) --}}
	<!--Container-->
	<div class="container w-full ">

		<!--Title-->
		<h1 class="flex items-center font-sans font-bold break-normal text-indigo-500 px-2 py-8 text-xl md:text-2xl">
			posts
		</h1>

		<!--Card-->
		<div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">


			<table id="dataTabelA" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
				<thead>
					<tr>
						<th data-priority="1">post</th>
						<th data-priority="2">Costumer</th>
						<th data-priority="3">post</th>
						<th data-priority="4"></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($posts as $post)
						<tr>
							<td><a href="{{route('buyPage',['id'=>$post->id])}}">Show post</a></td>
							<td>{{ $post->user->name }}</td>
							<td>{{ $post->title }}</td>
							<td>
								<form action="{{ route('post.destroy', $post->id) }}" method="POST">
									@csrf
									@method('DELETE')
									<input type="submit" class="bg-red-500 rounded-xl text-white p-2 hover:bg-red-600" value="Delete">
								</form>
							</td>
						</tr>
					@endforeach
				</tbody>

			</table>


		</div>
		<!--/Card-->


	</div>
	<!--/container-->





	<!-- jQuery -->
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<!--Datatables -->
	{{-- <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>--}}
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
