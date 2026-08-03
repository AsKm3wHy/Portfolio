<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Portfolio Contact Message</title>
</head>

<body>
    <h2>New contact message from your portfolio</h2>
    <p><strong>Name:</strong> {{ $data['name'] ?? ($data['fullName'] ?? '') }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? '' }}</p>
    <p><strong>Message:</strong></p>
    <p>{{ $data['message'] ?? '' }}</p>
</body>

</html>
