<!DOCTYPE html>
<html>
<body>

<h1>OTP Details</h1>
<p>Dear  {{ $details['customer_details']['user_name'] }}</p>
<br><br>
<p>This is your {{ $details['customer_details']['otp'] }} OTP for resetting the password.</p>

</body>
</html>