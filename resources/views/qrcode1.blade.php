<!--<img src="data:image/png;base64,C:\qrcode_1716020593.png" />-->
<div>
   <h4>Hostinger successfull</h4>
   <h4>Test</h4>
   VALUE of var 1 :  {{ $variable1 }}
   <img src="{{ $src1 }}" alt="src1">
   <img src="data:image/png;base64,". {{   $imageData  }}  >
</div>
<!--
$image =  QrCode::format('png')->size(300)->generate('www.its52.com',public_path('images/qr1.png')) ;

$imageData = base64_encode(file_get_contents(public_path('images/qr1.png')));
-->