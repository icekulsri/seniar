<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="Home.css" rel="stylesheet">
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
    <head>

    </head>
    <body>
    <header>
    <span>โครงการพี่สอนน้อง</span>
        <!-- <form>
          <tr>
              <td><input type="submit" value="เข้าสู่ระบบ"</td>
          </tr>
        </form> -->
    </header>
    <div id="main-wrapper">
        <div class="new-regis">
            <!-- <a href="http://localhost/seniar/login.php">ลงทะเบียน</a>    -->
           <a href="newregister.php"><input type="button" id="register_btn" value="ลงทะเบียน"/></a>
        </div>
        <div class="new-reserve">
            <input type="submit" id="reserve_btn" value="จองที่นั่ง">
        </div>
        <div class ="figure">
            <img src="Logo-chula.jpg" width="100" height="100">
        </div>

        <div class="go-login">
            <form>
                <input type="text" name="uid" placeholder="Username">
                <input type="password" name="pwd" placeholder="password">
                <button type="submit" name="submit">Login</button>
            </form>
    <!-- <a href="http://localhost/seniar/login.php">เข้าสู่ระบบ</a> -->
        </div>
    </div>
    
    
    </body>
</html>