<!DOCTYPE html>
<html>
<head>
<style>
body{margin-top:20px;
background:#eee;
}

.chat-widget{
    -webkit-box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
    box-shadow: 0 2px 2px 0 rgba(0,0,0,0.2),0 6px 10px 0 rgba(0,0,0,0.3);
}

.panel-default > .panel-heading {
    color: #333;
    background-color: #fcfcfc;
    border-color: #ddd;
    border-color: rgba(221,221,221,0.85);
}

/*Chat widget*/
.chat-widget .message {
    display:block;
	margin-bottom:20px;
    
}

.chat-widget .message .avatar {
	width:55px;
	float:left;
    
}

.chat-widget .message.message-right .avatar {
	width:55px;
	float:right;
}

.chat-widget .avatar img {
	height:40px;
	width:40px!important;
}

.chat-widget .message .message-text-wrapper {
	display:table-cell;
	width:1%;
}

.chat-widget .message .message-text {
	padding:15px;
	border-radius:4px;
	border:1px solid #ddd;
	border:1px solid rgba(221,221,221,0.68);
	position:relative;
	width:100%;
    -webkit-box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
    box-shadow: 0 1px 4px 0 rgba(0,0,0,0.37);
}

.chat-widget .message.message-right .message-text {
	background:#fbfbfb;
}

.chat-widget .message .message-text img {
	width:200px;
	height:150px;
}

.chat-widget .message .time-stamp {
	margin-left:55px;
}

.chat-widget .message.message-right .time-stamp {
	margin-left:0;
	margin-right:55px;
	display:block;
	text-align:right;
}

.chat-widget .message .message-text:before,.chat-widget .message .message-text:after {
	right:100%;
	top:30px;
	border:solid transparent;
	content:" ";
	height:0;
	width:0;
	position:absolute;
	pointer-events:none;
}

.chat-widget .message .message-text:before {
	border-color:rgba(0,0,0,0);
	border-right-color:#ddd;
	border-width:10px;
	margin-top:-19px;
}

.chat-widget .message .message-text:after {
	border-color:rgba(213,71,28,0);
	border-right-color:#fff;
	border-width:9px;
	margin-top:-18px;
}

.chat-widget .message.message-right .message-text:before,.chat-widget .message.message-right .message-text:after {
	left:100%;
	top:30px;
	border:solid transparent;
	content:" ";
	height:0;
	width:0;
	position:absolute;
	pointer-events:none;
}

.chat-widget .message.message-right .message-text:before {
	border-color:rgba(0,0,0,0);
	border-left-color:#ddd;
	border-width:10px;
	margin-top:-19px;
}

.chat-widget .message.message-right .message-text:after {
	border-left-color:#fbfbfb;
	border-width:9px;
	margin-top:-18px;
}

.chat-widget .panel-footer {
	border:none;
	background:transparent;
	margin-top:-20px;
}

.chat-widget .panel-footer .avatar {
	width:55px;
	float:left;
	margin-top:-2px;
}

@media (max-width:767px) {
	label.margin {
		margin-top:25px;
		margin-bottom:15px;
	}
}
</style>
</head>

<body>
	
<div class="col-md-6 col-lg-7 col-md-offset-3">
    <div class="panel panel-default chat-widget">
    <div class="panel-heading">
      <h3 class="panel-title"><i class="fa fa-comments"></i> Chat</h3>
    </div>
    <div class="panel-body">

	<?php $inboxes = App\Inbox::all();?>
		@foreach ($inboxes as $inbox)
			<div class="message">
			<div class="avatar">
			<img class="img-circle avatar" alt="chat avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
			</div>
			<div class="message-text-wrapper">
				<div class="message-text">
				@if ($inbox->formateur_id > 0)
					<strong>Formateur : {{$inbox->formateur['last_name']}} </strong>
				@endif
				@if ($inbox->admin_id > 0)
					<strong>Admin : {{$inbox->admin['name']}} </strong>
				@endif
					<br><br>
					{{$inbox->subject}}
					<br>
					{{$inbox->message}}
					<br><br>
					<hr>
				<strong> {{$inbox->created_at}} </strong>
				</div>
			</div><br><br><br>
			<p class="time-stamp"><i class="fa fa-check"></i>  </p>
		</div>
		@endforeach
	</div>
      <div class="panel-footer">
        <div class="avatar">
          <img class="img-circle avatar" alt="chat avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png">
        </div>
		<form method="post" action="{{ route('formateur.inbox.store') }}" enctype="multipart/form-data">
          @csrf
				<div class="form-group">
				<label for="subject">Subject</label>
				<input type="subject" class="form-control" id="subject"  placeholder="Enter subject" name='subject'>
						@error('subject')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
			</div>
			<div class="form-group">
				<label for="message">Message</label>
				<input type="text" class="form-control" id="message"  placeholder="Enter message" name='message'>
						@error('message')
											<span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
										@enderror
			</div>
			

			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" > </script>
		<script src="{{asset('public/js/inbox.js')}}" > </script>
		
      </div>
  </div>
</div>
</body>
</html>