 <div class="col-md-4 offset-md-8" align="right">
 	<button class="btn btn-info" data-toggle="modal" data-target="#searchFilter">Search</button>
 </div>


 <!-- Modal -->
 <div class="modal fade" id="searchFilter" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 	<div class="modal-dialog" role="document">
 		<div class="modal-content">
 			<div class="modal-header">
 				<h5 class="modal-title" id="exampleModalLabel">Search Filter</h5>
 				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</button>
 			</div>
 			<div class="modal-body">
 				<form action="{{ url('/') }}/search" id="search">
 					<b>Input Item Name:</b> <input type="text" name="keyword" class="form-control"><br><br>
 					<b>Category:</b> 
 					<div class="form-check">
 						@foreach($cat as $c)
 						<label class="form-check-label">
 							<input class="form-check-input" name="cat" type="radio" value="{{$c->CatId}}"> {{$c->Name}} 
 						</label><br>
 						@endforeach
 					</div>
 				</form>
 			</div>
 			<div class="modal-footer">
 				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 				<button type="submit" form="search" class="btn btn-primary">Search</button>
 			</div>
 		</div>
 	</div>
 </div>