Sure, thank you:

<!DOCTYPE html>
<html>
<head>
    <title>Prospector theater</title>

</head>

<body>
<h3>Hello,</h3>

<p>This email serves as a ticket for a free . <br />
    Please bring a printed version of this email with you in order to redeem it on-site.</p>

<br />
<br />
<br />
{{-- <img src="data:image/png;base64, {{ base64_encode($qr) }} "> --}}
{{--{!! $qr !!}--}}
{{-- <img src="{!!$message->embedData($qr, 'QrCode.png', 'image/png')!!}"> --}}
<img src="{{  $src1 }}" alt="src1">
<img src="{{ asset('images/qr1.png') }} "  >
<img src="{{ $message->embed(public_path().'/images/qr1.png') }}">
<img src="{{ $message->embed(public_path().'/images/qr1.png', 'QrCode.png', 'image/png')}}">
<p>Thank you,</p>
<br />
<p>Prospector theater</p>
</body>
</html>