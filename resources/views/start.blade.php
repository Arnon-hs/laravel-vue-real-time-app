@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<h2>Vuejs / Laravel</h2>
				<br>
				<!-- Nav tabs -->
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#prop">prop-component</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#ajax">ajax-component</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#chartline">chartline-component</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#chartpie">chartpie-component</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#chartrandom">chartrandom-component</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#socket">socket-component</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div id="prop" class="container tab-pane active">
						<prop-component :urldata="{{ json_encode($url_data) }}"></prop-component>
					</div>
					<div id="ajax" class="container tab-pane fade">
						<ajax-component></ajax-component>
					</div>
					<div id="chartline" class="container tab-pane fade">
						<chartline-component></chartline-component>
					</div>
					<div id="chartpie" class="container tab-pane fade">
						<chartpie-component></chartpie-component>
					</div>
					<div id="chartrandom" class="container tab-pane fade">
						<chartrandom-component></chartrandom-component>
					</div>
					<div id="socket" class="container tab-pane fade">
						<socket-component></socket-component>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
