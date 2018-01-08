@extends('layouts.dashboard')

@section('content')
  <div class="col_3">
	<div class="col-md-3 widget widget1">
		<div class="r3_counter_box">
            <i class="pull-left fa fa-users icon-rounded"></i>
            <div class="stats">
              <h5><strong>{{ $data['posts'] }}</strong></h5>
              <span>Total Posts</span>
            </div>
        </div>
	</div>
	<div class="col-md-3 widget widget1">
		<div class="r3_counter_box">
            <i class="pull-left fa fa-users user1 icon-rounded"></i>
            <div class="stats">
              <h5><strong>{{ $data['pages'] }}</strong></h5>
              <span>Total Pages</span>
            </div>
        </div>
	</div>
	<div class="col-md-3 widget widget1">
		<div class="r3_counter_box">
            <i class="pull-left fa fa-users user2 icon-rounded"></i>
            <div class="stats">
              <h5><strong>{{ $data['portfolios'] }}</strong></h5>
              <span>Total Portfolios</span>
            </div>
        </div>
	</div>
	<div class="col-md-3 widget">
		<div class="r3_counter_box">
            <i class="pull-left fa fa-users dollar1 icon-rounded"></i>
            <div class="stats">
              <h5><strong>{{ $data['teams'] }}</strong></h5>
              <span>Total team members</span>
            </div>
        </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<div class="clearfix"> </div>
</div>
<div class="content_bottom">
<div class="clearfix"> </div>
</div>
@endsection

