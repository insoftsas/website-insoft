window.ScrollMagic = require('ScrollMagic');
require('animation.gsap');
window.TweenMax = require('TweenMax');
require('debug.addIndicators')

let scrollIndex = class scroll {

    constructor() {
      this.destroy()
      window.controller = new ScrollMagic.Controller()
      this.start()
    }
    destroy(){
        if(window.controller != undefined){
            window.controller.destroy()
            delete window.controller
        }
    }
    start(){
            let scene_bg_mobile = new ScrollMagic.Scene({ offset: (document.getElementById('home').offsetHeight + document.getElementById('trigger-nav-mobile').offsetHeight), duration: document.body.offsetHeight })
                                 .addTo(controller)
                                 .setClassToggle('.nav-container-mobile', 'addBg')
            if (window.innerHeight < 993) {
              let nav_0 = new ScrollMagic.Scene({ triggerElement: "#home", duration: document.getElementById('home').offsetHeight})
                                           .addTo(controller)
                                           .setClassToggle("#home-item", 'active')

              let nav_1 = new ScrollMagic.Scene({ triggerElement: "#info", duration: document.getElementById('info').offsetHeight})
                                           .addTo(controller)
                                           .setClassToggle("#info-item", 'active')

              let nav_2 = new ScrollMagic.Scene({ triggerElement: "#we-search", duration: document.getElementById('we-search').offsetHeight})
                                           .addTo(controller)
                                           .setClassToggle("#search-item", 'active')



              let nav_3 = new ScrollMagic.Scene({ triggerElement: "#participate", duration: document.getElementById('participate').offsetHeight})
                                           .addTo(controller)
                                           .setClassToggle("#participate-item", 'active')

              let nav_4 = new ScrollMagic.Scene({ triggerElement: "#schedule", duration: document.getElementById('schedule').offsetHeight})
                                           .addTo(controller)
                                           .setClassToggle("#schedule-item", 'active')

              /*let nav_5 = new ScrollMagic.Scene({ triggerElement: "#judges", duration: document.getElementById('judges').offsetHeight})
                                           .addTo(controller)
                                           .setClassToggle("#judge-item", 'active')


              let nav_6 = new ScrollMagic.Scene({ triggerElement: "#awards", duration: document.getElementById('awards').offsetHeight})
                                           .addTo(controller)
                                           .setClassToggle("#award-item", 'active')*/


              let nav_8 = new ScrollMagic.Scene({ triggerElement: "#conctact", duration: document.getElementById('conctact').offsetHeight})
                                           .addTo(controller)
                                           .setClassToggle("#conctact-item", 'active')
            }
    }
}
export default scrollIndex;
