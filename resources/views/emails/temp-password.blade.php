<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} - Temporary Password </title>
    <style>
        *{
            padding: 0;
            margin: 0;
            outline: 0;
        }
        body{
            background: #F4F8FC;
            font-family: Verdana;
        }
        .main-table{
            width: 100%;
            max-width: 560px;
            margin: 0 auto;
            display: block;
            background: #fff;
            padding: 1.5rem;
        }
        .main-table tr th p{
            font-size: 1rem;
            font-weight: 600;
            text-align: left;
            margin-bottom: 1rem;
        }
        .main-table tr td p{
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 1rem;
        }

        .main-table tr td h6{
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .top-table{
            width: 100%;
            max-width: 560px;
            margin: 0 auto;
            display: block;
        }
        .top-table tr td a{
            display: block;
            width: 100%;
            text-align: center;
            margin-bottom: 1.6rem;
            margin-top: 1rem;
        }
        .top-table tr td {
            text-align: center;
        }
    </style>
</head>
<body style="background: #F4F8FC; font-family: Verdana;">
    
    <table border="0" cellspacing="0" cellpadding="0" class="top-table" style="width: 100%;
            max-width: 560px;
            margin: 0 auto;
            display: block;">
        <tr>
            <td>
                <a href="#">
                <img src="https://app.experec.com/public/assets/images/site-main-logo.svg" alt="Experec Logo" class="img-fluid">
                </a>
            </td>
        </tr>
    </table>

    <table border="0" cellspacing="0" cellpadding="0" class="main-table" style="width: 100%;
            max-width: 560px;
            margin: 0 auto;
            display: block;
            background: #fff;
            padding: 1.5rem;">
        <tr>
            <th>
                <p>Dear {{ $name }},</p>
            </th>
        </tr>
        <tr>
            <td>
            <p> We're thrilled to welcome you to <strong> {{ config('app.name') }}!</strong>! Your account has been created, and here are your login details:</p>

            <p>Your email is: <strong>{{ $email }}</strong></p>

            <p>To log in to your account for the first time, please use the following temporary password:</p>

            <p>Password: <strong>{{ $password }}</strong></p>

            <p>We recommend that you change your password as soon as possible after logging in for the first time.</p>

            <p>If you have any questions or issues, don't hesitate to reach out to our support team at <strong>contact@experec.com</strong></p>

            <p>Thank you for choosing {{ config('app.name') }}!</p>

            <p>Best regards,</p>

            <h6>The Experec Team</h6>
            </td>
        </tr>
    </table>
    
</body>
</html>