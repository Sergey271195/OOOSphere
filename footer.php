<!-- footer -->

<footer class = 'footer'>
    <div class="mycontainer" id = 'footer-container' >
        <a href = '<?php bloginfo("template_url");?>/docs/Politika-konfidencialnosti.pdf' target = '_blank' class = 'footer-content'>
            Политика конфиденциальности
        </a>
        <a href = 'https://illuminator3000.ru/' target = '_blank'  class = 'footer-content'>Создание сайта Иллюминатор</a>
    </div>
    <?php wp_footer(); ?>
</footer>

<div class = 'circle-1 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 10.png'>
</div>
<div class = 'circle-2 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 11.png'>
</div>
<div class = 'circle-3 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 12.png'>
</div>
<div class = 'circle-4 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 25.png'>
</div>
<div class = 'circle-5 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 17.png'>
</div>
<div class = 'circle-6 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 19.png'>
</div>
<div class = 'circle-7 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Group 18.png'>
</div>
<div class = 'circle-8 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 8.png'>
</div>
<div class = 'circle-9 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 21.png'>
</div>
<div class = 'circle-10 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 20.png'>
</div>
<div class = 'circle-11 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 22.png'>
</div>
<div class = 'circle-12 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 23.png'>
</div>
<div class = 'circle-13 background-element'>
    <img src = '<?php bloginfo('template_url');?>/images/Frame 24.png'>
</div>

<script>

        window.onload = function() {
        
        var modal = document.getElementById("myModal");
        
        var btn1 = document.getElementById("signupbtn1");
        var btn2 = document.getElementById("signupbtn2");
        var btn3 = document.getElementById("signupbtn3");
        var btn4 = document.getElementById("signupbtn4");

        btn1.onclick = function() {
            modal.style.display = "block";
        }
        btn2.onclick = function() {
            modal.style.display = "block";
        }
        btn3.onclick = function() {
            modal.style.display = "block";
        }
        btn4.onclick = function() {
            modal.style.display = "block";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
            modal.style.display = "none";
            }
        }

        var confid = document.getElementById("confidence");
        confid.href= '<?php bloginfo("template_url");?>/docs/Politika-konfidencialnosti.pdf';
        console.log("Loaded");

        }

</script>


<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/slick.css"/>
<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/slick-theme.css"/>
<script defer src="<?php bloginfo('template_url');?>/js/jquery-3.4.1.min.js"></script>
<script defer src="<?php bloginfo('template_url');?>/js/popper.min.js"></script>
<script defer src="<?php bloginfo('template_url');?>/js/slick.min.js"></script>
<script defer src="<?php bloginfo('template_url');?>/js/script.js"></script>

<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <div class = 'modal-title'>запись на пробное занятие</div>
        <div class = 'form-container'>
            <?php echo do_shortcode('[contact-form-7 id="47" title="Форма записи на занятие"]'); ?>
        </div>
    </div>
    
</div>

</body>

</html>