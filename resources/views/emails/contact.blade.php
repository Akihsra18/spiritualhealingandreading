<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Submission</title>
</head>
<body>
    <p>Hi Administrator,</p>
    <h1>A new message is received.</h1>

    <p>Name: {{ $details['fName'] }} {{ $details['lName'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Service: {{ $details['service'] }}</p>
    <p>Message: {{ $details['message'] }}</p>

</body>
</html>