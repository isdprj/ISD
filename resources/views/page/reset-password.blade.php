@extends('base')
@section('content')
<div class="space50">&nbsp;</div>
    <table role="presentation"
        style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation"
                    style="width:600px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr style="border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;">
                        <td align="left" style="padding:10px 25px;background:#fff; display: flex; align-items: center;">
                             <span style="font-weight: bold; padding-top: 10px;"> Programming Fields </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <td style="padding:0 0 36px 0;color:#153643;">
                                        <p style="font-weight:bold;margin:0 0 20px 0;font-family:Arial,sans-serif;">
                                            Hello {{ $user ? $user['name'] : '' }},</h1>
                                        <p
                                            style="margin:0 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                            We've received a request to reset the password.
                                            </p>
                                        <p
                                            style="margin:10px 0 12px 0;font-size:14px;line-height:24px;font-family:Arial,sans-serif;">
                                            You can reset your password by clicking the button below:
                                        </p>

                                        <p style="text-align: center;">
                                            <a href="{{'http://localhost:8000/forgot-password/'.$user['token']}}" class="btn">Reset your password</a>
                                        </p>


                                        <p style="margin:100px 0 12px 0;font-size:14px;font-family:Arial,sans-serif;">
                                            Thank
                                            you, </p>
                                        <p style="margin:0 0 12px 0;font-size:14px;font-family:Arial,sans-serif;">
                                            Programming Fields </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <div class="space50">&nbsp;</div>
@endsection