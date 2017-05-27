<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>New Contact Request</title>
</head>
<body>

    <p><b>From:</b> {{ $contact['name'] }}</p>
    <p><b>E-mail:</b> {{ $contact['email'] }}</p>

    <hr>
    <p><b>Re:</b> {{ $contact['subject'] }}</p>

    <br>

    <p>{{ $contact['message'] }}</p>

</body>
</html>