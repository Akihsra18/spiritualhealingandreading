<!DOCTYPE html>
<html>
<body>
    <p>Hi Hannah,</p>
    <p>You have received a new message from your website.</p>
    <hr><hr>
    <p>Name: {{ $details['fName'] }} {{ $details['lName'] }}</p>
    <hr>
    <p>Email: {{ $details['email'] }}</p>
    <hr>
    <p>Service: {{ $details['service'] }}</p>
    <hr>
    <p>Message: {{ $details['message'] }}</p>
    <hr><hr>
</body>
</html>
