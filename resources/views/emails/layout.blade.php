<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>ConnectUp | Connect the Dots...</title>
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body style="margin:0;padding:50px 0; background:#ddd">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ddd;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation"
                    style="width:602px;border-collapse:collapse;border:0px solid #fff;background:#fff;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="">
                            <img src="{{ url('/assets/defaults/metaimage.png') }}" alt="ConnectUp"
                                style="width:100%;max-width:602px;height:auto;">
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                            @yield('content')
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:30px;background:#0d1117;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <p
                                            style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;">
                                            Copyright @ 2022 | <a href="http://connectup.in"
                                                style="color:#ffffff;text-decoration:underline;">ConnectUp</a>
                                        </p>
                                    </td>
                                    <td style="padding:0;width:50%;" align="right">
                                        <table role="presentation"
                                            style="border-collapse:collapse;border:0;border-spacing:0;">
                                            <tr>
                                                <td style="padding:0 0 0 10px;width:38px;">
                                                    <a href="http://instagram.com/connectup.in" style="color:#ffffff;"
                                                        target="_blank"><img
                                                            src="https://www.iconsdb.com/icons/preview/white/instagram-6-xxl.png"
                                                            alt="ConnectUp Instagram" width="38"
                                                            style="height:auto;display:block;border:0;" /></a>
                                                </td>
                                                <td style="padding:0 0 0 10px;width:38px;">
                                                    <a href="http://linkedin.com/company/connectupin"
                                                        style="color:#ffffff;" target="_blank"><img
                                                            src="https://www.iconsdb.com/icons/preview/white/linkedin-4-xxl.png"
                                                            alt="ConnectUp LinkedIn" width="38"
                                                            style="height:auto;display:block;border:0;" /></a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
