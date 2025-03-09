<?php 
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>

<?php include_once './parts/header.php'?>
  

<div class="position-relative overflow-hidden p-3 p-md-1 m-md-1 text-center">
    <div class="col-md-5 p-lg-5 mx-auto">
      <img src="images/celebration.png" width="50%" height="50%" alt="">
      <h1 class="display-4 fw-normal">اربح مع حاتم</h1>
      <p class="lead fw-normal">باقي على التسجيل</p>
      <h4 id="count"></h4>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانيه من برنامج</p>

      <ul class="list-group list-group-flush">
    <h3>للدخول الى السحب يرجى اتباع ما يلي:</h3>
    <li class="list-group-item">تابع البث المباشر على صفحتي على يوتيوب </li>
    <li class="list-group-item">سأقوم بث مباشر لمدة ساعه عبارة عن أسئله وأجوبه حرة للجميع</li>
    <li class="list-group-item">خلال فترة الساعه سيتم فتح صفحة التسجيل اسمك وأيميلك</li>
    <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
    <li class="list-group-item">الرابح سيحصل على نسخة فيقاس برو الاصلية لمدة سنة</li>
  </ul>
  
      
    </div>
  </div>
 
  

<div class="container">

<div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto">
<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>الرجاء أدخل معلوماتك</h3>

  <div class="mb-3">
    <label for="FirstName" class="form-label">الاسم الاول</label>
    <input type="text" name="FirstName" class="form-control" id="FirstName" >
    <div  class="form-text error"><?php echo $errors['firstNameError']?>
  </div>
  </div>

  <div class="mb-3">
    <label for="LastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="LastName" class="form-control" id="LastName">
    <div  class="form-text error"><?php echo $errors['lastNameError']?>
    </div>
  </div>

    <div class="mb-3">
    <label for="Email" class="form-label">البريد الالكتروني</label>
    <input type="text" name="Email" class="form-control" id="Email">
    <div  name="submit" class="form-text error"><?php echo $errors['emailError']?>
    </div>
    
  
    <div class="d-grid gap-2 col-6 mx-auto ">
  <button name="submit" type="submit" class="btn btn-primary">ارسل المعلومات</button>
  </div>
</form>

<div class="loader-con">
<div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
  </div>

</div>


<div class="d-grid gap-2 col-10 mx-auto my-5">
<button id="winner" type="button" class="btn btn-primary">
اختيار الرابح
</button>
</div>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
     
        <h5 class="modal-title" id="modalLabel">الرابح</h5>
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $use): ?>
        <h1 class="display-4 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($use['FirstName']) . ' ' . htmlspecialchars($use['lastName']) . '<br> '; ?></h1>
        <?php endforeach; ?>
      </div>
      
      </div>
    </div>
  </div>
</div>
</div>

<?php include './parts/footer.php'?>




