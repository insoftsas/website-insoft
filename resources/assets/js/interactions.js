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
    start() {
      let wipeAnimation = new TimelineMax()
  			.fromTo(".nav-container-mobile", 1, {backgroundColor: "#3c3e8d"}, {backgroundColor: "#38a1b6", ease: Linear.easeNone})


      let scene_bg_mobile = new ScrollMagic.Scene({ offset: -1, duration: document.getElementById('home').offsetHeight })
                           .addTo(controller)
                           .setTween(wipeAnimation)

      let tween_info_2 = new TimelineMax().fromTo(".fade-info", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })
      let scene_info_2 = new ScrollMagic.Scene({ triggerElement: ".more-info", duration: 100 })
                                   .addTo(controller)
                                   .setTween(tween_info_2)

      let tween_participate_2 = new TimelineMax().fromTo(".fade-participate", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })
      let scene_participate_2 = new ScrollMagic.Scene({ triggerElement: ".trigger-for-participate", duration: 300 })
                                   .addTo(controller)
                                   .setTween(tween_participate_2)

       let tween_search_1_1 = new TimelineMax().fromTo(".first-fade-search", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })

       let tween_search_2 = new TimelineMax().fromTo(".fade-search", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })
       let scene_search_1_1 = new ScrollMagic.Scene({ triggerElement: "#we-search", duration: 100 })
                           .addTo(controller)
                           .setTween(tween_search_1_1)
       let scene_search_2 = new ScrollMagic.Scene({ triggerElement: ".trigger-fade-search", duration: 100 })
                           .addTo(controller)
                           .setTween(tween_search_2)

       let tween_schedule_2 = new TimelineMax().fromTo(".fade-schedule", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })

       let tween_schedule_3_1 = new TimelineMax().fromTo(".fade-schedule-1", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })

       let tween_schedule_3_2 = new TimelineMax().fromTo(".fade-schedule-2", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })

       let tween_schedule_3_3 = new TimelineMax().fromTo(".fade-schedule-3", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })

       let tween_schedule_3_4 = new TimelineMax().fromTo(".fade-schedule-4", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })

       let tween_schedule_3_5 = new TimelineMax().fromTo(".fade-schedule-5", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })

       let tween_schedule_3_6 = new TimelineMax().fromTo(".fade-schedule-6", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })


       let scene_schedule_2 = new ScrollMagic.Scene({ triggerElement: "#schedule", duration: 100 })
                           .addTo(controller)
                           .setTween(tween_schedule_2)

       let scene_schedule_3_1 = new ScrollMagic.Scene({ triggerElement: ".trigger-first-schedule", duration: 50 })
                           .addTo(controller)
                           .setTween(tween_schedule_3_1)
       let scene_schedule_3_2 = new ScrollMagic.Scene({ triggerElement: ".fade-schedule-1", duration: 50 })
                           .addTo(controller)
                           .setTween(tween_schedule_3_2)
       let scene_schedule_3_3 = new ScrollMagic.Scene({ triggerElement: ".fade-schedule-2", duration: 50 })
                           .addTo(controller)
                           .setTween(tween_schedule_3_3)
       let scene_schedule_3_4 = new ScrollMagic.Scene({ triggerElement: ".fade-schedule-3", duration: 50 })
                           .addTo(controller)
                           .setTween(tween_schedule_3_4)
       let scene_schedule_3_5 = new ScrollMagic.Scene({ triggerElement: ".fade-schedule-4", duration: 50 })
                           .addTo(controller)
                           .setTween(tween_schedule_3_5)
       let scene_schedule_3_6 = new ScrollMagic.Scene({ triggerElement: ".fade-schedule-5", duration: 50 })
                           .addTo(controller)
                           .setTween(tween_schedule_3_6)

       let tween_phase_2 = new TimelineMax().fromTo(".phase-fade", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })
       let scene_phase_2 = new ScrollMagic.Scene({ triggerElement: "#phase", duration: 100 })
                           .addTo(controller)
                           .setTween(tween_phase_2)

       let scene_phase_2_1 = new ScrollMagic.Scene({ triggerElement: ".title-fade" })
                           .addTo(controller)
                           .setClassToggle('.container-challenge', 'active')

       let tween_award_2 = new TimelineMax().fromTo(".award-fade", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })
       let scene_award_2 = new ScrollMagic.Scene({ triggerElement: "#awards", duration: 100 })
                           .addTo(controller)
                           .setTween(tween_award_2)

       let tween_contact_2 = new TimelineMax().fromTo(".sponsor", 1, { opacity: 0 }, { opacity: 1, ease: Linear.easeNone })
       let scene_contact_2 = new ScrollMagic.Scene({ triggerElement: ".trigger-for-contact", duration: 200 })
                           .addTo(controller)
                           .setTween(tween_contact_2)


      if (window.innerWidth > 993) {
        let wipe = new TimelineMax()
    			.fromTo(".navbar-items", 1, {backgroundColor: "#3c4d96"}, {backgroundColor: "#38a2b8", ease: Linear.easeNone})

        let scene_bg_mobile = new ScrollMagic.Scene({ offset: -1, duration: document.getElementById('home').offsetHeight })
                             .addTo(controller)
                             .setTween(wipe)

        let nav_0 = new ScrollMagic.Scene({ triggerElement: "#home", duration: document.getElementById('home').offsetHeight })
                                     .addTo(controller)
                                     .setClassToggle("#home-item", 'active')

        let nav_1 = new ScrollMagic.Scene({ triggerElement: "#info", duration: document.getElementById('info').offsetHeight })
                                     .addTo(controller)
                                     .setClassToggle("#info-item", 'active')

        let nav_2 = new ScrollMagic.Scene({ triggerElement: "#we-search", duration: document.getElementById('we-search').offsetHeight })
                                     .addTo(controller)
                                     .setClassToggle("#search-item", 'active')

        let nav_3 = new ScrollMagic.Scene({ triggerElement: "#participate", duration: document.getElementById('participate').offsetHeight})
                                     .addTo(controller)
                                     .setClassToggle("#participate-item", 'active')

        let nav_4 = new ScrollMagic.Scene({ triggerElement: "#schedule", duration: document.getElementById('schedule').offsetHeight})
                                     .addTo(controller)
                                     .setClassToggle("#schedule-item", 'active')

        let nav_6 = new ScrollMagic.Scene({ triggerElement: "#awards", duration: document.getElementById('awards').offsetHeight})
                                     .addTo(controller)
                                     .setClassToggle("#award-item", 'active')

        let nav_8 = new ScrollMagic.Scene({ triggerElement: "#phase", duration: document.getElementById('phase').offsetHeight})
                                     .addTo(controller)
                                     .setClassToggle("#phase-item", 'active')

        let tween_info_1 = new TimelineMax().fromTo(".container-objects", 1, { top: 300 }, { top: 0, ease: Linear.easeNone })

        let tween_info_3 = new TimelineMax().fromTo("#info", 1, { top: 300 }, { top: 0, ease: Linear.easeNone })

        let scene_info_1 = new ScrollMagic.Scene({ triggerElement: ".content-transdigital", duration: 250 })
                            .addTo(controller)
                            .setTween(tween_info_1)

        let scene_info_3 = new ScrollMagic.Scene({ triggerElement: ".write-mode", duration: 200 })
                            .addTo(controller)
                            .setTween(tween_info_3)

        let tween_participate_1 = new TimelineMax().fromTo("#participate", 1, { top: 300 }, { top: 0, ease: Linear.easeNone })

        let tween_participate_3 = new TimelineMax().fromTo(".container-participate", 1, { top: 300 }, { top: 0, ease: Linear.easeNone })

        let scene_participate_1 = new ScrollMagic.Scene({ triggerElement: ".trigger-for-participate", duration: 200 })
                            .addTo(controller)
                            .setTween(tween_participate_1)

        let scene_participate_3 = new ScrollMagic.Scene({ triggerElement: ".fade-participate", duration: 250 })
                            .addTo(controller)
                            .setTween(tween_participate_3)

        let tween_search_1 = new TimelineMax().fromTo("#we-search", 1, { top: 300 }, { top: 0, ease: Linear.easeNone })


        let scene_search_1 = new ScrollMagic.Scene({ triggerElement: ".trigger-for-search", duration: 200 })
                            .addTo(controller)
                            .setTween(tween_search_1)
        let tween_schedule_1 = new TimelineMax().fromTo("#schedule", 1, { top: 300 }, { top: 0, ease: Linear.easeNone })
        let scene_schedule_1 = new ScrollMagic.Scene({ triggerElement: ".trigger-for-schedule", duration: 200 })
                                    .addTo(controller)
                                    .setTween(tween_schedule_1)

        let tween_phase_1 = new TimelineMax().fromTo("#phase", 1, { top: 300 }, { top: 0, ease: Linear.easeNone })
        let scene_phase_1 = new ScrollMagic.Scene({ triggerElement: ".end-schedule", duration: 200 })
                                    .addTo(controller)
                                    .setTween(tween_phase_1)

        let tween_award_1 = new TimelineMax().fromTo("#awards", 1, { top: 300 }, { top: 0, ease: Linear.easeNone })
        let scene_award_1 = new ScrollMagic.Scene({ triggerElement: ".trigger-for-award", duration: 200 })
                                    .addTo(controller)
                                    .setTween(tween_award_1)
        let tween_main_1 = new TimelineMax().add([
            TweenMax.fromTo(".container-image-transdigital", 1, { left: 0 }, { left: -700, ease: Linear.easeNone }),
            TweenMax.fromTo(".write-mode", 1, { left: 0 }, { left: 700, ease: Linear.easeNone }),
            TweenMax.fromTo(".trigger-main", 0.5, { top: 0 }, { top: -150, ease: Linear.easeNone })
        ])

        let scene_main_1 = new ScrollMagic.Scene({ offset: -1, duration: document.getElementById('info').offsetHeight })
                                     .addTo(controller)
                                     .setTween(tween_main_1)

         let tween_award_1_1 = new TimelineMax().add([
             TweenMax.fromTo(".move-awards", 1, { top: 300 }, { top: 0, ease: Linear.easeNone })
         ])
         let scene_award_1_1 = new ScrollMagic.Scene({ triggerElement: '#awards', duration: 200 })
                                      .addTo(controller)
                                      .setTween(tween_award_1_1)
      }
    }
  }
export default scrollIndex;
