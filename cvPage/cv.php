<!DOCTYPE html>
<html lang="en">
<head>
    <title>CV-ja e Krijuar</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Resume/CV Template for Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/orbit-1.css">
</head> 

<body>
    
    <div class="wrapper mt-lg-4">
    <div id="capture">
        <div class="sidebar-wrapper">
            <div class="profile-container">
                <h1 class="name"><?php echo $_POST['emriMbiemri']?></h1>
                <h3 class="tagline"><?php echo $_POST['profesioni'] ?></h3>
            </div><!--//profile-container-->
            
            <div class="contact-container container-block">
                <ul class="list-unstyled contact-list">
                    <li class="email"><i class="fa-solid fa-envelope"></i><a href="mailto: yourname@email.com"><?php echo $_POST['email'] ?></a></li>
                    <li class="phone"><i class="fa-solid fa-phone"></i><?php echo $_POST['telefoni'] ?></a></li>
                    <li class="website"><i class="fa-solid fa-globe"></i><?php echo $_POST['komuna'] ?></a></li>
                    <li class="linkedin"><i class="fa-solid fa-cake-candles"></i></i><a href="#" target="_blank"><?php echo $_POST['vitiIlindjes'] ?></a></li>
                </ul>
            </div><!--//contact-container-->
            <div class="education-container container-block">
                <h2 class="container-block-title">Edukimi</h2>
                <div class="item">
                    <h4 class="degree"><?php echo $_POST['llojiEdukimit'] ?></h4>
                    <h5 class="meta"><?php echo $_POST['fakullteti'] ?></h5>
	                    <!-- <div class="time">2016 - 2018</div> -->
                </div><!--//item-->
            </div><!--//education-container-->
            
            <div class="languages-container container-block">
                <h2 class="container-block-title">Gjuhet</h2>
                <ul class="list-unstyled interests-list">
                    <li><?php echo $_POST['gjuhet'] ?></li>
                </ul>
            </div><!--//interests-->
            
            
        </div><!--//sidebar-wrapper-->
        
        <div class="main-wrapper">
            
            <section class="section summary-section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-user"></i></span>Profili i Karrieres</h2>
                <div class="summary">
                    <p><?php echo $_POST['profiliKarrieres'] ?></p>
                </div><!--//summary-->
            </section><!--//section-->
            
            
            
            <section class="skills-section section">
                <h2 class="section-title"><span class="icon-holder"><i class="fa-solid fa-rocket"></i></span>Skills &amp; Proficiency</h2>  
                <div class="summary">
                    <p><?php echo $_POST['skills'] ?></p>
                </div>
            </section><!--//skills-section-->
            </div>
        </div><!--//main-body-->
        
    
</div>
<button class="btn" style="background-color:#2d7788;color:white;margin-top:20px;margin-left:270px" onclick="save()">Shkarkoje CV</button>



 
    <footer class="footer">
        <div class="text-center">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright"> Designed by <a href="http://themes.3rdwavemedia.com" target="_blank">Ilir Koliqi</a></small>
        </div><!--//container-->
    </footer><!--//footer-->

    <script src="html2canvas.min.js"></script>

    <script>
        function save(){
        html2canvas(document.querySelector("#capture")).then(canvas => {
            
    saveAs(canvas.toDataURL(), '<?php echo $_POST['emriMbiemri']?>CV.png');
});
        }
        function saveAs(uri, filename) {

var link = document.createElement('a');

if (typeof link.download === 'string') {

    link.href = uri;
    link.download = filename;

    //Firefox requires the link to be in the body
    document.body.appendChild(link);

    //simulate click
    link.click();

    //remove the link when done
    document.body.removeChild(link);

} else {

    window.open(uri);

}
}
    </script>
        
</body>
</html> 

