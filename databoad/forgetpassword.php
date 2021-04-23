<html>

<head>
  <title>แจ้งลืมรหัสผ่าน</title>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>

</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-7">
        <h3> แจ้งลืมรหัสผ่าน </h3>
        คุณลืมรหัสผ่าน? (กรุณากรอก Username หรือ Email)<br><br>
        <form method="post" action="SendPassword.php" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-3 control-label">
            &nbsp;Username :
            </div>
            <div class="col-sm-9">
              <input name="txtUsername" type="text" id="txtUsername" ></input>
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-3 control-label">
            &nbsp;Email :
            </div>
            <div class="col-sm-9">
              <input name="txtEmail" type="text" id="txtEmail" ></input>
            </div>
          </div>

          <div class="form-group">
          <br>
          <div class="col-sm-4">
              <button type="submit" class="btn btn-primary" >Send Password</button>
          </div>
          </div>
          

        </form>
      </div>
    </div>
  </div>
</body>

</html>