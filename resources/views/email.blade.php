<!DOCTYPE html>
<html>
<head>
    <title>Sample Email</title>
</head>
<body>
    <p>From: {{ $mailData['name'] }}</p>
    <p>Sender:{{ $mailData['email'] }}</p>
    <p>Subject:{{ $mailData['subject'] }}</p>
    <p>Body: {{ $mailData['body'] }}</p>
</body>
</html>
