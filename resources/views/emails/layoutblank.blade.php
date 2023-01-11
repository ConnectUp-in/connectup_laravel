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

        td {
            font-size: 0
        }

        td>img {
            margin: 0;
            padding: 0;
            display: block;
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
                        <td>
                            @yield('content')
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
