<?php include 'header.php'; ?>

<section class="about-section" style="
    display:flex; 
    align-items:center; 
    justify-content:center;
    gap:50px; 
    flex-wrap:wrap; 
    padding:60px 10%; 
    background:white; 
    color:#333;  /* dark text for white background */
">

    <!-- Left side: text + boxes -->
    <div class="about-text" style="flex:1 1 400px; min-width:300px; max-width:700px;">

        <!-- Heading -->
        <h2 style="text-align:center; font-size:42px; margin-bottom:20px; color:#000;">
            About <span style="color:orange;">Me</span>
        </h2>

        <!-- Line-by-line text -->
        <div class="about-lines" style="margin-bottom:30px;">
            <p>I am <strong>Ankita Lade</strong>, currently pursuing <strong>B.E. in Information Technology</strong> at <strong>SVPM College of Engineering, Malegaon (BK)</strong>.</p>
            <p>I have a strong passion for <span style="color:orange;">Full Stack Web Development</span> and problem solving, and I enjoy working with modern web technologies.</p>
            <p>I have experience with <strong>HTML, CSS, JavaScript</strong> and basic backend concepts, and I am always eager to learn new technologies.</p>
            <p>I am motivated to solve real-world problems and continuously grow as a developer.</p>
        </div>

        <!-- Info Boxes -->
        <div style="display:flex; flex-wrap:wrap; gap:20px; justify-content:flex-start;">

            <!-- Education Box -->
            <div style="
                background:linear-gradient(145deg,#f9f9f9,#e6e6e6);
                border-radius:18px;
                padding:25px;
                width:200px;
                text-align:center;
                border:1px solid #ccc;
                box-shadow:0 0 15px rgba(255,165,0,0.25);
                transition:0.3s;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 0 25px rgba(255,165,0,0.6)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0 15px rgba(255,165,0,0.25)'"
            >

                <div style="
                    font-size:32px;
                    background:orange;
                    color:white;
                    width:70px;
                    height:70px;
                    border-radius:50%;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    margin:0 auto 10px;
                ">🎓</div>

                <h3 style="color:#000; margin-bottom:8px;">Education</h3>
                <p style="color:#555;">B.E. Information Technology</p>
				<br>
				<p style="color:#555;">Savitribai phule university</p>
            </div>

            <!-- Experience Box -->
            <div style="
                background:linear-gradient(145deg,#f9f9f9,#e6e6e6);
                border-radius:18px;
                padding:25px;
                width:200px;
                text-align:center;
                border:1px solid #ccc;
                box-shadow:0 0 15px rgba(0,255,255,0.25);
                transition:0.3s;
            "
            onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 0 25px rgba(0,255,255,0.6)'"
            onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 0 15px rgba(0,255,255,0.25)'"
            >

                <div style="
                    font-size:32px;
                    background:cyan;
                    color:white;
                    width:70px;
                    height:70px;
                    border-radius:50%;
                    display:flex;
                    align-items:center;
                    justify-content:center;
                    margin:0 auto 10px;
                ">💼</div>

                <h3 style="color:#000; margin-bottom:8px;">Experience</h3>
                <p style="color:#555;">Fresher</p>
				<br>
				<p>1Month industrial training</p>
				<br>
				<p>Dream Techology solapur</p>
            </div>

        </div>
    </div>

   <!-- Right side: Clean Circular Image -->
<div class="about-img" style="flex:1 1 250px; text-align:center; min-width:250px;">
    <img src="images/about.jpg" alt="About Ankita" 
         style="width:100%; max-width:250px; height:250px; border-radius:50%; object-fit:cover;">
</div>



		

</section>
