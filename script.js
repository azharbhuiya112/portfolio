var typed = new Typed(".typing",
{
  strings:["","","web designer","web developer","graphic designer"],
  typespeed:100,
  BackSpeed:60,
  loop:true
})





let sections=document.querySelectorAll('section');
let navlinks=document.querySelectorAll('header .nav a');

window.onscroll=()=>{
  sections.forEach(sec=>{
    let top=window.scrollY;
    let offset = sec.offsetTop-150;
    let height=sec.offsetHeight;
    let id = sec.getAttribute('id');
    if(top>= offset && top<offset+height)
    {
      navlinks.forEach(links=>
        {
          links.classList.remove('active');
          document.querySelector('header .nav a[href*=' + id + ']').classList.add('active');
        });
    };
  });
};

// const navLinkEls=document.querySelectorAll('.navlink');
// navLinkEls.forEach(navLinkEl =>
//   {
//     navLinkEls.addEventListener('click',function()
//     {
//       document.querySelector('.active')?.classList.remove('active');
//       this.classList.add('active');
//     });
//   });

let valueDisplayss=document.querySelectorAll("progress-bar");
let intervall = 5000;

valueDisplayss.forEach((valueDisplaye)=>{
  let startValuee=0;
  let endValuee=parseInt(valueDisplaye.getAttribute("data-val"));
  let durationn = Math.floor(intervall/endValuee);
  let counterr=setInterval(function(){
    startValuee+=1;
    valueDisplaye.textContent = startValuee;
    if(startValuee==endValuee)
    {
      clearInterval(counterr);
    }
  },durationn);
});


  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let portfolioContainer = select('.portfolio-container');
    if (portfolioContainer) {
      let portfolioIsotope = new Isotope(portfolioContainer, {
        itemSelector: '.portfolio-item'
      });

      let portfolioFilters = select('#portfolio-flters li', true);

      on('click', '#portfolio-flters li', function(e) {
        e.preventDefault();
        portfolioFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        portfolioIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });


    /**
   * Initiate portfolio lightbox 
   */
    const portfolioLightbox = GLightbox({
      selector: '.portfolio-lightbox'
    });
  
    /**
     * Portfolio details slider
     */
    new Swiper('.portfolio-details-slider', {
      speed: 400,
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: '.swiper-pagination',
        type: 'bullets',
        clickable: true
      }
    });