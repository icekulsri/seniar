<html>


<head>
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

<h1>แบบฟอร์มลงทะเบียน</h1>


<div class="body-content">


  <form class="form" action="newregister.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"></div>
      <div class=checkbox>
            <input type="radio" id="male" name="gender"><label for="male">นิสิต </label>
            <input type="radio" id="female" name="gender"><label for="female">บุคลากร</label></br>
      </div>
      </br>
      <label>UserName</label></br>
      <input type="text" placeholder="UserName" name="username" required />
      <label>Email</label></br>
      <input type="email" placeholder="Email" name="email" required />
      <!--<input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
      <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required /> -->
      <label>ชื่อ</label></br>
      <input type="text" placeholder="ชื่อ" name="ชื่อ"  required />
      <label>นามสกุล</label></br>
      <input type="text" placeholder="นามสกุล" name="นามสกุล"  required />
      <label>Faculty</label></br>
      <input type="text" placeholder="Faculty" name="Faculty"  required />
      <label>Mobile Phone</label></br>
      <input type="text" placeholder="Mobile Phone" name="Mobile Phone"  required />
      <label>Line Id</label></br>
      <input type="text" placeholder="Line ID" name="Line ID"  required />
      <label>รายวิชาที่ต้องการสอน</label></br>
      </br>
      <input type="checkbox" name="คณิตศาสตร์"/>&nbsp;คณิตศาสตร์&emsp;
      <input type="checkbox" name="ฟิสิกส์"/>&nbsp;ฟิสิกส์&emsp;
      <input type="checkbox" name="เคมี"/>&nbsp;เคมี&emsp;
      <input type="checkbox" name="ชีวะ"/>&nbsp;ชีวะ&emsp;
      <input type="checkbox" name="สังคม"/>&nbsp;สังคม&emsp;
      </br>
      </br>
      <input type="checkbox" name="ภาษาไทย"/>&nbsp;ภาษาไทย&emsp;
      <input type="checkbox" name="ภาษาอังกฤษ"/>&nbsp;ภาษาอังกฤษ&emsp;
      <input type="checkbox" name="ภาษาจีน"/>&nbsp;ภาษาจีน&emsp;
      <input type="checkbox" name="ภาษาญี่ปุ่น"/>&nbsp;ภาษาญี่ปุ่น&emsp;
      <input type="checkbox" name="ศิลปะ"/>&nbsp;ศิลปะ&emsp;
       </br>
        </br>
      <input type="checkbox" name="อื่นๆ(โปรดระบุ)"/>&nbsp;อื่นๆ(โปรดระบุ) 
      <input type="text" placeholder="กรุณาระบุ" name="กรุณาระบุ"/>
      <label>ช่วงชั้นที่ต้องการสอน</label></br>
      </br>
      <input type="checkbox" name="อนุบาล"/>&nbsp;อนุบาล&emsp;
      <input type="checkbox" name="ประถมศึกษาตอนต้น"/>&nbsp;ประถมศึกษาตอนต้น&emsp;
      <input type="checkbox" name="ประถมศึกษาตอนปลาย"/>&nbsp;ประถมศึกษาตอนปลาย&emsp;
      </br>
      </br>
      <input type="checkbox" name="มัธยมศึกษาตอนต้น"/>&nbsp;มัธยมศึกษาตอนต้น&emsp;
      <input type="checkbox" name="มัธยมศึกษาตอนปลาย"/>&nbsp;มัธยมศึกษาตอนปลาย&emsp;
      <input type="checkbox" name="อื่นๆ"/>&nbsp;อื่นๆ(โปรดระบุ)&emsp;
      <input type="text" placeholder="กรุณาระบุ" name="กรุณาระบุ"/>
       
      <input type="submit" value="ตกลง" name="register" class="btn btn-block btn-primary" />
    </form>
  </div>    
</div>
</body>


</html>