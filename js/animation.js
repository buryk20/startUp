export let animation = function() {
    new WOW(
        {
          boxClass: 'wow',      // default
          animateClass: 'animated', // default
          offset: 0,          // default
          mobile: true,       // default
          live: true        // default
        }
      ).init();
    
    const animationWrp = document.querySelector('[data-animation-wrp]');
    if(animationWrp != null) {
        const animationLeft = animationWrp.querySelectorAll('[data-left]');
        const animationRight = animationWrp.querySelectorAll('[data-right]');
        const a = animationWrp.querySelectorAll('[data-wow-offset]');
        if(document.documentElement.clientWidth > 680) {
            animationLeft.forEach(el => {
                addClass(el, "animate__fadeInLeft");
            });
            animationRight.forEach(el => {
                addClass(el, "animate__fadeInRight");
            })
        } else {
            animationRight.forEach(el => {
                addClass(el, "animate__fadeInUp");
            });
            animationLeft.forEach(el => {
                addClass(el, "animate__fadeInLeft");
            });
        }
    }

    function addClass(item, className) {
        item.classList.add(className);
    }
}