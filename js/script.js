$('.slider').slick({
    infinite: true,
    speed: 300,
    fade: true,
    cssEase: 'linear',
    arrows: true,
    slidesToShow: 1,
    slidesToScroll: 1
  });

  

  
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