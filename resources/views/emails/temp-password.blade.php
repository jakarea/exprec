<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }} - Temporary Password </title>
</head>
<body>
    <p>Dear {{ $name }},</p>

    <p> We're thrilled to welcome you to <strong> {{ config('app.name') }}!</strong>! Your account has been created, and here are your login details:</p>

    <p>Your email is: <strong>{{ $email }}</strong></p>

    <p>To log in to your account for the first time, please use the following temporary password:</p>

    <p>Password: <strong>{{ $password }}</strong></p>

    <p>We recommend that you change your password as soon as possible after logging in for the first time.</p>

    <p>If you have any questions or issues, don't hesitate to reach out to our support team at <strong>contact@experec.com</strong></p>

    <p>Thank you for choosing {{ config('app.name') }}!</p>

    <p>Best regards,</p>

    <strong>The Experec Team</strong>
</body>
</html>