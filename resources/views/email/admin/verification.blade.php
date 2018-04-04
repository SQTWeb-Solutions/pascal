<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;">
<head>
  <meta name="viewport" content="width=device-width" />
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,800" rel="stylesheet">
</head>
<body style="font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6em; background-color: #f8f8f8; margin: 0;">

  <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; background-color: #f4f8fb; font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif; box-sizing: border-box; font-size: 15px;" bgcolor="#f8f8f8">

    <tr>
      <td>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="width:600; background-color: #ffffff; color: #514d6a; padding: 40px; margin-top: 40px; line-height: 28px;" bgcolor="#ffffff">
          <tr>
            <td style="text-align: center; vertical-align: top;">
              <img src="{{ $message->embed('img/logo-noral.png') }}" alt="PRSF" style="border:none; display:inline-block;" height="50" >
            </td>
          </tr>

          <tr>
            <td style="text-align: center; padding-top: 60px; font-weight: 300; line-height: 48px; font-size: 32px; font-family: 'Open Sans',Helvetica,Arial,sans-serif; color: #111; letter-spacing: -1px;">
              Registration Confirmation
            </td>
          </tr>

          <tr>
            <td style="text-align: center; padding-top: 20px; font-weight: 300; line-height: 36px; font-size: 20px; font-family: 'Open Sans',Helvetica,Arial,sans-serif; color: #999; letter-spacing: -1px;">
            Welcome to Pascal Rufi Sports Foundation, your  account has been set up successfully, but few more steps to go, we need to confirm your email address, click on the link below to confirm your email address now.
            </td>
          </tr>

          <tr>
            <td style="text-align: center; padding-top: 20px; vertical-align: top;">
              <img src="{{ $message->embed('img/icon-register.png') }}" alt="" style="border:none; display:inline-block;" height="128" width="128">
            </td>
          </tr>

          <tr>
            <td style="text-align: center; padding-top: 30px; padding-bottom: 40px;">
              <a href="{{ route('admin.verify', $token) }}" style="letter-spacing: -1px; font-family: 'Open Sans',Helvetica,Arial,sans-serif; text-decoration: none; display: inline-block; line-height: 70px; padding-left: 30px; padding-right: 30px; border-radius: 3px; font-size: 24px; color: #fff; background-color: #27cbcc;" target="_blank">
                Confirm Email Address
              </a>
            </td>
          </tr>
          <tr>
            <td style="text-align: center; padding-top: 30px; padding-bottom: 10px; font-size:14px; color:#000;">
              <p>Note: If you have confirmed your email address before, continue to login.</p>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border:none; width:600; margin-top: 20px; margin-bottom: 40px; text-align: center; color: #85868a;">
          <tr>
            <td style="padding-top: 20px;">
                &copy; Copyright {{date('Y')}}, Pascal Rufi Sports Foundation.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

</body>
</html>
