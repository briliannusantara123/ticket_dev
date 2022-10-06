@extends('layouts.master')
@section('content')
 
<div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <section class="section">
                  <div class="section-header">
                    <h2>Data Request Header</h2>
                  </div>
                </section>
                @if( $message = Session::get('success'))
                  <div class="alert alert-success">
                    <strong>{{$message}}</strong>
                  </div>
                @endif
                @if( $message = Session::get('error'))
                  <div class="alert alert-danger">
                    <strong>{{$message}}</strong>
                  </div>
                @endif
                <div class="col-md-3">
                <div class="panel-body">
									<a href="/ticket/requestheader/creates" class="btn fa fa-plus btn-primary"><i class="for "></i>Tambahkan Request</a> 
								</div>
								<br>
								<form class="row g-3" method="GET">
                    <h5 class="form-label">Filter Data</h5>

                    <table>
                    	<tr>
                    		<td>
                    			
                    			<select name="status" class="form-control">

                      <?php if ($st == ""): ?>
                        <option value="" selected>All</option>
                        <option value="1">Request</option>
                        <option value="2">Progress</option>
                        <option value="3">Done</option>
                        <option value="4">Cancel By Client</option>
                        <option value="5">Cancel By Admin</option>
                        <option value="13">Cancel By Consultant</option>
                        <option value="6">Close</option>
                      <?php elseif ($st == 1) : ?>
                        <option value="" >All</option>
                        <option value="1" selected>Request</option>
                        <option value="2">Progress</option>
                        <option value="3">Done</option>
                        <option value="4">Cancel By Client</option>
                        <option value="5">Cancel By Admin</option>
                        <option value="13">Cancel By Consultant</option>
                        <option value="6">Close</option>
                      <?php elseif ($st == 2) : ?>
                        <option value="" >All</option>
                        <option value="1">Request</option>
                        <option value="2" selected>Progress</option>
                        <option value="3">Done</option>
                        <option value="4">Cancel By Client</option>
                        <option value="5">Cancel By Admin</option>
                        <option value="13">Cancel By Consultant</option>
                        <option value="6">Close</option>
                      <?php elseif ($st == 3) : ?>
                        <option value="" >All</option>
                        <option value="1">Request</option>
                        <option value="2" >Progress</option>
                        <option value="3"selected>Done</option>
                        <option value="4">Cancel By Client</option>
                        <option value="5">Cancel By Admin</option>
                        <option value="13">Cancel By Consultant</option>
                        <option value="6">Close</option>
                      <?php elseif ($st == 4) : ?>
                        <option value="" >All</option>
                        <option value="1">Request</option>
                        <option value="2">Progress</option>
                        <option value="3">Done</option>
                        <option value="4" selected>Cancel By Client</option>
                        <option value="5">Cancel By Admin</option>
                        <option value="13">Cancel By Consultant</option>
                        <option value="6">Close</option>
                      <?php elseif ($st == 5) : ?>
                        <option value="" >All</option>
                        <option value="1">Request</option>
                        <option value="2" >Progress</option>
                        <option value="3">Done</option>
                        <option value="4">Cancel By Client</option>
                        <option value="5" selected>Cancel By Admin</option>
                        <option value="13">Cancel By Consultant</option>
                        <option value="6">Close</option>
                      <?php elseif ($st == 13) : ?>
                        <option value="" >All</option>
                        <option value="1">Request</option>
                        <option value="2">Progress</option>
                        <option value="3">Done</option>
                        <option value="4">Cancel By Client</option>
                        <option value="5">Cancel By Admin</option>
                        <option value="13" selected>Cancel By Consultant</option>
                        <option value="6">Close</option>
                      <?php elseif ($st == 6) : ?>
                        <option value="" >All</option>
                        <option value="1">Request</option>
                        <option value="2">Progress</option>
                        <option value="3">Done</option>
                        <option value="4">Cancel By Client</option>
                        <option value="5">Cancel By Admin</option>
                        <option value="13">Cancel By Consultant</option>
                        <option value="6" selected>Close</option>
                      <?php endif ?>
                     </select>
                    		</td>
                    		<td>
                    			
                    			<select name="priority" class="form-control">
                      <?php if ($pr == ""): ?>
                        <option value="" selected>All</option>
                        <option value="low">Low</option>
                        <option value="middle">Middle</option>
                        <option value="high">High</option>
                        <option value="critical">Critical</option>
                      <?php elseif ($pr == "low") : ?>
                        <option value="" >All</option>
                        <option value="low" selected>Low</option>
                        <option value="middle">Middle</option>
                        <option value="high">High</option>
                        <option value="critical">Critical</option>
                      <?php elseif ($pr == "middle") : ?>
                        <option value="" >All</option>
                        <option value="low">Low</option>
                        <option value="middle" selected>Middle</option>
                        <option value="high">High</option>
                        <option value="critical">Critical</option>
                      <?php elseif ($pr == "high") : ?>
                        <option value="">All</option>
                        <option value="low">Low</option>
                        <option value="middle">Middle</option>
                        <option value="high" selected>High</option>
                        <option value="critical">Critical</option>
                      <?php elseif ($pr == "critical") : ?>
                        <option value="">All</option>
                        <option value="low">Low</option>
                        <option value="middle">Middle</option>
                        <option value="high">High</option>
                        <option value="critical" selected>Critical</option>
                      <?php endif ?>
                     </select>
                    		</td>
                    		<td></td>
                    		<td>

                    			<button type="submit" class="btn btn-primary md-12">Search</button>
                    		</td>
                    	</tr>
                    </table>
                     
                      
                  </form>           
              					</div>
								<br>
									<table class="table table-hover" id="">
										<thead>
										<tr>
                      					<th>Nomer Ticket</th>
															  <th>Company</th>
															  <th>Project</th>
					                      <th>Description</th>
					                      <th>Consultant</th>
					                      <th>Status</th>
					                      <th>Ticket</th>
					                      <th>Priority</th>
					                      <th>Deadline</th>
					                      <th>Message Client</th>
					                      <th>Message Admin</th>
										  <th>Action</th>
										</tr>
										</thead>
									
										<tbody>
											@foreach( $rh as $rh )
											<tr>
												@if($rh->status == 13 || $rh->status == 4)
												<td>{{$rh->code}}</a></td>
												@else
												<td><a href="/ticket/requestheader/{{$rh->id}}/requestlines">{{$rh->code}}</a></td>
												@endif
                       						 	
												<td>{{$rh->nama}}</td>
												<td>{{$rh->nama_projects}}</td>
						                        <td>{{$rh->description}}</td>
						                        <td>{{$rh->username}}</td>
						                        @if($rh->status == 1)
						                          <td><p style="background-color: yellow; border-radius: 50px;text-align:center;">Request</p></td>
						                        @endif
						                        @if($rh->status == 2)
						                          <td><p style="background-color: lightblue; border-radius: 50px;text-align:center;">Progress</p></td>
						                        @endif
						                        @if($rh->status == 3)
						                          <td><p style="background-color: lightgreen; border-radius: 50px;text-align:center;">Done</p></td>
						                        @endif
						                        @if($rh->status == 4)
						                          <td><p style="background-color: red; border-radius: 50px;text-align:center;color: white;">Cancel By Client</p></td>
						                        @endif
						                        @if($rh->status == 5)
						                          <td><p style="background-color: red; border-radius: 50px;text-align:center;color: white;">Cancel By Admin</p></td>
						                        @endif
						                        @if($rh->status == 13)
						                          <td><p style="background-color: red; border-radius: 50px;text-align:center;color: white;">Cancel By Consultant</p></td>
						                        @endif
						                        
						                        @if($rh->status == 6)
						                          <td><p style="background-color: black; border-radius: 50px;text-align:center; color: white;">Close</p></td>
						                        @endif
						                        <td>{{$rh->ticket}}</td>
						                        <td>@if($rh->priority == 'low')
						                        	<p style="background-color: lightgreen; text-align: center; border-radius: 50px;">{{$rh->priority}}</p>
						                        	@elseif($rh->priority == 'middle')
						                        	<p style="background-color: lightblue; text-align: center; border-radius: 50px;">{{$rh->priority}}</p>
						                        	@elseif($rh->priority == 'high')
						                        	<p style="background-color: red; text-align: center; border-radius: 50px;color: white;">{{$rh->priority}}</p>
						                        	@elseif($rh->priority == 'critical')
						                        	<p style="background-color: black;color: white; text-align: center; border-radius: 50px;">{{$rh->priority}}</p>
						                        	@endif
						                        	</td>
						                        <td>{{ date('d F Y',strtotime($rh->dead_line)) }}</td>
						                        <td>{{$rh->message_client}}</td>
						                        <td>{{$rh->message_admin}}</td>
												<td>
                          
													@if($rh->status == 1)
													<a href="/ticket/requestheader/{{$rh->id}}/edit" class="btn btn-warning mt-3">View</a>
													<a href="/ticket/requestheader/{{$rh->id}}/delete" class="btn btn-danger mt-3" onclick="return confirm('Yakin Akan Mengcancel Data Request Tersebut?');">Cancel</a>
													@endif
													@if($rh->status == 3)
													<a href="/ticket/requestheader/{{$rh->id}}/close" class="btn btn-dark mt-3" onclick="return confirm('Yakin Akan Mengclose Data Request Tersebut?');">Closing Header</a>
													@endif
                        
												</td>
											</tr>
											@endforeach
										</tbody>
									
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop