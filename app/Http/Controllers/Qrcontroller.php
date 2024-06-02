<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use QrCode;
//use BaconQrCode\Renderer\Image\Png;
class Qrcontroller extends Controller
{
    public function generate()
    {
        return view('qrcode');
    }
    public function qrcode()
    {
        $image =  QrCode::format('png')->size(300)->generate('www.irctc.co.in',public_path('images/qr1.png')) ;

        $imageData =  base64_encode(file_get_contents(public_path('images/qr1.png'))) ;
        //$imageData = base64_encode(file_get_contents($image));
        //$src = 'data: '. mime_content_type($image) . ';base64,'. $imageData;
        $variable1 = 'var 1';
        $src1 = 'data:image/png;base64,'. $imageData;
        Mail::send(
            'emails.product_redeem',
            [
                'account' => 'a',
                'product' => 'b',
                'src1' => $src1
            ],
            function ($message) use ($src1) {
                $message->to('szb202324@gmail.com', 'S Badri')
                    ->subject('Prospector theater - Redeem product')
                    ->from('no-reply@prospectortheater.org', 'Prospector theater');

            }
        );
        return view('qrcode1',compact('variable1','src1','imageData'));
        //echo '<img src="'. $src . '"/>';
    }
    public function email()
    {
        $qr = QrCode::format('png')->size(200)->generate('http://google.com');
            Mail::send(
                'emails.product_redeem',
                [
                    'account' => 'a',
                    'product' => 'b',
                    'qr' => $qr
                ],
                function ($message) use ($qr) {
                    $message->to('szb202324@gmail.com', 'S Badri')
                        ->subject('Prospector theater - Redeem product')
                        ->from('no-reply@prospectortheater.org', 'Prospector theater');

                }
            ); 
    }
    public function proton()
    {
        
    }
}
