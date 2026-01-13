<?php
include 'db.php';
if(isset($_POST['send'])){
    mysqli_query($conn,
    "INSERT INTO contact(name,email,message)
     VALUES('$_POST[name]','$_POST[email]','$_POST[message]')");
}
include 'header.php';
?>

<section class="section contact" style="padding:60px 10%; background:white; text-align:center;">

  <!-- Heading -->
  <h2 style="font-size:42px; margin-bottom:30px;">Contact <span style="color:orange;">Me</span></h2>

  <!-- Contact Info -->
  <div style="margin-bottom:40px;">
    <p style="font-size:18px; margin:10px 0;">
      <span style="margin-right:10px; font-size:22px;">📧</span>tanujalade7@gmail.com
    </p>
    <p style="font-size:18px; margin:10px 0;">
      <span style="margin-right:10px; font-size:22px;">📱</span> 8788764951
    </p>
  </div>

  <!-- Contact Form -->
  <form method="post" style="max-width:500px; margin:auto; text-align:left; display:flex; flex-direction:column; gap:15px;">

    <div style="position:relative;">
      <span style="position:absolute; left:10px; top:10px; font-size:18px; color:orange;">👤</span>
      <input type="text" name="name" placeholder="Name" required 
             style="width:100%; padding:12px 12px 12px 35px; border-radius:8px; border:1px solid #ccc; font-size:16px;">
    </div>

    <div style="position:relative;">
      <span style="position:absolute; left:10px; top:10px; font-size:18px; color:orange;">📧</span>
      <input type="email" name="email" placeholder="Email" required 
             style="width:100%; padding:12px 12px 12px 35px; border-radius:8px; border:1px solid #ccc; font-size:16px;">
    </div>

    <div style="position:relative;">
      <span style="position:absolute; left:10px; top:10px; font-size:18px; color:orange;">📝</span>
      <textarea name="message" placeholder="Message" rows="5" 
                style="width:100%; padding:12px 12px 12px 35px; border-radius:8px; border:1px solid #ccc; font-size:16px; resize:none;"></textarea>
    </div>

    <button name="send" type="submit" 
            style="padding:12px; background:orange; color:white; border:none; border-radius:8px; font-size:18px; cursor:pointer; transition:0.3s;">
      Send
    </button>

  </form>

</section>
