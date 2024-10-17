<?php
include_once("connectdb.php");
$sql1 = "SELECT * FROM food WHERE f_id='{$_GET['fid']}' " ;
$rs1 = mysqli_query($conn, $sql1);
$data1 = mysqli_fetch_array($rs1);
?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title> ครัว5สหาย(5Friends Kitchen)</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

    

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bs-btn-color:  #d3d3d3;
        --bs-btn-active-color: #d3d3d3;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
	  body{
		  
 background-color: #D3D3D3
	; /* เปลี่ยนสีพื้นหลังของทั้งหน้า */
    background-repeat: no-repeat;
  }
  .col-lg-4 {
    background-color: #808080; /* สีเทา */
  }
		 .navbar, .bg-dark {
        background-color: #808080 !important; /*  navbar และพื้นหลัง */
      }
 .navbar-brand, .nav-link, .text-white {
        color: #000000 !important; /* ตัวอักษรใน navbar  */
      }
		.btn-secondary {
        background-color: #808080; /* ปุ่ม */
        border-color:#808080;
      }
		.text-muted {
        color: #000000 !important; /* ข้อความตัวเล็ก */
      }
		 .lead {
        color: #000000 !important; /* ข้อความหลัก */
      }
 .featurette-divider {
        border-top: 5px solid #000000; /* เส้นแบ่ง */
      }

      .col-lg-4 {
        background-color: #000000; /* พื้นหลังคอลัมน์ */
      }
		h1, h2 {
        color: #000000; /* สำหรับ h1 และ h2 */
      }

      .featurette-heading {
        color: #000000 !important; /* สำหรับข้อความภายใน featurette */
      }
		 footer {
        background-color: #808080;
        color: #808080;
      }
		.heading{color:#ec407a !important;  }
    </style>

    
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>
<div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle" >
          </button>
        </li>
      </ul>
    </div>

    
<header data-bs-theme="dark">
  <div class="collapse text-bg-dark" id="navbarHeader">
    <div class="container" >
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4>About</h4>
          <p class="text-body-secondary">"ครัว 5 สหาย” คือที่ที่ความสุขและรสชาติอร่อยมาบรรจบกันร้านอาหารที่เต็มไปด้วยความอบอุ่นและความสุขจากการร่วมกันของเพื่อนฝูง! พร้อมเสิร์ฟเมนูอาหารที่คัดสรรวัตถุดิบสดใหม่และปรุงด้วยความรักจากทีมเชฟที่มีประสบการณ์</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4>ผู้ดูแลระบบ</h4>
          <ul class="list-unstyled">
            <li><a href="#" style="color: white; font-size: 15px;"><?=$_SESSION['aname'];?></a></li>
            <li><a href="logout.php" style="color: white; font-size: 15px;">ออกจากระบบ</a></li>
           
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/>
        </svg>
        <strong>ครัว5สหาย(5Friends Kitchen)</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  </div>
</header>

<main>

  <section class="py-5 text-center container">
    <div class="album py-5" style="">
        <h1 class="fw-light">ครัว5สหาย(5Friends Kitchen)</h1>
        <p class="lead text-body-secondary">เมนูอาหารของร้าน</p>
         <img class="mb-4" src="../album/00.jpg" alt="" width="250" height="250">
        <p>
          <a href="insert.php" class="btn btn-primary my-2">เพิ่มสินค้าใหม่</a>
           <a href="view_order.php" class="btn btn-danger">View Order</a>
          <a href="index.php" class="btn btn-secondary">Home</a>
          <a href="type.php" class="btn btn-success">type</a>
        </p>
        <form method="post" action="">
                ค้นหา <input type="text" name="search" autofocus>
                <button type="submit" name="Submit">OK</button>
    </div>
  </section>
  </form>
  
  <form method="post" action="" enctype="multipart/form-data"  align = "center">
	ชื่อสินค้า <input type="text" name="fname" required autofocus value="<?=$data1['f_name'];?>"><br>
    รายละเอียดสินค้า<br>
	<textarea name="fdetail" rows="5" cols="50"><?=$data1['f_detail'];?></textarea><br><br>
    ราคา <input type="text" name="fprice" required value="<?=$data1['f_price'];?>"><br>
    รูปภาพ <input type="file" name="fimg"><br>
    ประเภทสินค้า 
    <select name="fcat">
    <?php	
	
	$sql2 = "SELECT * FROM `category` ORDER BY c_name ASC ";
	$rs2 = mysqli_query($conn, $sql2) ;
	while ($data2 = mysqli_fetch_array($rs2) ){
	?>
    	<option value="<?=$data2['c_id'];?>" <?=($data1['c_id']==$data2['c_id'])?"selected":"";?> ><?=$data2['c_name'];?></option>
    <?php } ?>
    </select>
    <br><br>
    <button type="submit" name="Submit"> บันทึก </button> 
</form> 

<?php
if(isset($_POST['Submit'])){
	
    if(empty($_FILES['fimg']['name'])) {
        $sql = "UPDATE `food` SET `f_name` = '{$_POST['fname']}', `f_detail` = '{$_POST['fdetail']}', `f_price` = '{$_POST['fprice']}', `c_id` = '{$_POST['fcat']}' WHERE `food`.`f_id` = '{$_GET['fid']}';";

    } else {
        $file_name = $_FILES['fimg']['name'] ;
        $ext = substr( $file_name , strpos( $file_name , '.' )+1 ) ;
        $sql = "UPDATE `food` SET `f_name` = '{$_POST['fname']}', `f_detail` = '{$_POST['fdetail']}', `f_price` = '{$_POST['fprice']}', `f_id` = '{$_POST['fcat']}', f_ext='{$ext}' WHERE `food`.`f_id` = '{$_GET['fid']}';";
        copy($_FILES['fimg']['tmp_name'], "images/".$_GET['fid'].".".$ext) ;
    }
    
   	mysqli_query($conn, $sql)  or die ("แก้ไขข้อมูลสินค้าไม่ได้");
 
	echo "<script>";
	echo "alert('แก้ไขข้อมูลสินค้าสำเร็จ');";
	echo "window.location='../album/index.php';";
	echo "</script>";
}
?>



<?php	
	mysqli_close($conn);
?>
<br>
</main>
<footer class="text-body-secondary py-5"style="color: #000000; padding: 20px;">
  <div class="container" style="">
  
    <p class="float-end mb-1">
      <a href="index.php"style="color: white; font-size: 20px;">กลับ</a>
   <p class="mb-1" style="color: white; font-size: 30px;">ย้อนกลับ</h3></p>
     </p>
  </div>
</footer>
<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

