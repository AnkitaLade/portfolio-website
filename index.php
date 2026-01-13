<?php include 'header.php'; ?>

<section class="home" style="display:flex; align-items:center; justify-content:center; flex-wrap:wrap; padding:80px 10%; background:white;">
<!-- Image Left -->
<div class="home-img" style="flex:1 1 300px; text-align:center; min-width:250px; margin-bottom:20px;">
    <img src="images/about.jpg" alt="Ankita Lade" 
         style="width:100%; max-width:300px; height:300px; border-radius:50%; object-fit:cover; box-shadow:0 0 25px rgba(255,165,0,0.3); transition:0.3s;"
         onmouseover="this.style.transform='scale(1.05)';" 
         onmouseout="this.style.transform='scale(1)';">
</div>


    <!-- Text Right -->
    <div class="home-text" style="flex:1 1 400px; min-width:300px; text-align:left; padding:0 20px;">
        <p class="hello" style="font-size:22px; color:orange; font-weight:bold; margin-bottom:10px; animation:fadeIn 1s ease;">Hello, It's Me</p>
        <h2 style="font-size:42px; margin-bottom:15px; color:#333; animation:fadeIn 1.2s ease;">Ankita Lade</h2>
        <p style="font-size:18px; margin-bottom:25px; color:#555; line-height:1.6; animation:fadeIn 1.4s ease;">
            Aspiring Full Stack Developer with a strong interest in web development.
        </p>

        <div class="buttons" style="display:flex; gap:20px; flex-wrap:wrap;">
            <a href="about.php" class="btn" 
               style="padding:12px 25px; background:orange; color:white; border-radius:8px; text-decoration:none; font-weight:bold; transition:0.3s;"
               onmouseover="this.style.background='#ffb74d';" 
               onmouseout="this.style.background='orange';">
               About Me
            </a>
            <a href="contact.php" class="btn outline" 
               style="padding:12px 25px; border:2px solid orange; color:orange; border-radius:8px; text-decoration:none; font-weight:bold; transition:0.3s;"
               onmouseover="this.style.background='orange'; this.style.color='white';" 
               onmouseout="this.style.background='white'; this.style.color='orange';">
               Contact
            </a>
        </div>
    </div>

</section>

<!-- Optional simple fadeIn animation -->
<style>
@keyframes fadeIn {
  0% { opacity:0; transform:translateY(20px);}
  100% { opacity:1; transform:translateY(0);}
}
</style>
