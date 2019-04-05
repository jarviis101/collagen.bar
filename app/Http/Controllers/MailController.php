<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request as HttpReq;
use Session;
use Request;

class MailController extends Controller
{
    public static function send(HttpReq $request)
    {
        $name = Request::get('name');
        $products = Request::get('products');
        $totalprice = Request::get('totalprice');
        $cart = Request::get('cart');
        $subject = 'Запрос на покупку';
        $to = 'jarviis101@gmail.com';

        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                    	<p></p>
                        
                        <p><strong>Имя:</strong> '.$name.'</p>
                        <p><strong>Телефон:</strong> '.$products.'</p>
                        <p><strong>Общая цена:</strong> '.$totalprice.'</p>
                        <p><strong>Заказ:</strong><br> '.$cart.'</p>';

        $message .= '</body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Запрос с вашего сайта <from@example.com>\r\n";
        mail($to, $subject, $message, $headers);
        
        Session::forget('cart');
        return redirect()->to("/");
    }
}
