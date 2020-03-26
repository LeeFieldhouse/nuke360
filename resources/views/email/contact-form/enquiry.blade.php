<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>{{$name}}</title>
</head>
<body>
	<h3>Cadbury Kitchens</h3>
	<p>You received an enquiry from the contact us page!</p>
	
	<ul>
		<li>Date: {{now()->toTimeString() }} on {{now()->format('d-M-Y')}}</li>
		<li>
			Name: {{$name}}
		</li>
		<li>
			Email: {{$email_address}}
		</li>
		<li>
			Phone: {{$phone_number}}
		</li>
		<li>
			Enquiry: {!! nl2br($enquiry) !!}
		</li>
		@if($subscribed)
		<li>
			<br>
			<br>
			<br>
			Contact subscribed to your main newsletter while submitting your form. Well done!
		</li>
		@endif
	</ul>

	
	
</body>
</html>
