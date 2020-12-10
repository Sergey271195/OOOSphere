$('.slider').slick({
    infinite: true,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    arrows: true,
    slidesToShow: 1,
    prevArrow: `<svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none" class = "prev-arrow">
                    <path d="M4.8 15L8 15L3.2 7.5L8 0L4.8 -2.79753e-07L6.55671e-07 7.5L4.8 15Z" fill="#2B2962"/> 
                </svg>`,
    nextArrow: `<svg xmlns="http://www.w3.org/2000/svg" width="8" height="15" viewBox="0 0 8 15" fill="none" class = "next-arrow">
                    <path d="M3.2 0H0L4.8 7.5L0 15H3.2L8 7.5L3.2 0Z" fill="#2B2962"/>
                </svg>`,
  });

  

  
  var modal = document.getElementById("myModal");
  
  var btn = document.getElementById("myBtn");

  var span = document.getElementsByClassName("close")[0];

  btn.onclick = function() {
    modal.style.display = "block";
  }

  span.onclick = function() {
    modal.style.display = "none";
  }
  

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }