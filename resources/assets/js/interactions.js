window.ScrollMagic = require('ScrollMagic');
require('animation.gsap');
window.TweenMax = require('TweenMax');
require('debug.addIndicators')

let scrollIndex = class scroll {

    constructor() {
        if (window.innerWidth > 993) {
            this.destroy()
            window.controller = new ScrollMagic.Controller()
            this.start()
        }
    }
    destroy(){
        if(window.controller != undefined){
            window.controller.destroy()
            delete window.controller
        }
    }
    start(){
            let tween_1 = new TimelineMax()
                                .add([
                                  TweenMax.to("#home", 0.5, { backgroundPositionX: 'calc(50% + 1350px)', backgroundPositionY: 'center' }),
                                  TweenMax.staggerFromTo(".box-register", 2, {right: 0, boxShadow: '0 3px 8px rgba(0, 0, 0, 0.25)'}, {right: '120%', boxShadow: '0 15px 70px rgba(0, 0, 0, 0.7)', ease: Back.ease}, 0),
                                  TweenMax.staggerFromTo(".console", 2, {left: 0, boxShadow: '0 3px 8px rgba(0, 0, 0, 0.25)'}, {left: '120%', boxShadow: '0 15px 70px rgba(0, 0, 0, 0.7)', ease: Back.ease}, 0)
                                ])
            let tween_2 = new TimelineMax()
                                .add([
                                  TweenMax.to("#info", 0.2, { opacity: 1 }),
                                  TweenMax.to("#info", 0.5, { backgroundPositionX: 'calc(50% + 800px)', backgroundPositionY: 'center' })
                            ])

            let tween_3 = new TimelineMax()
                                .add([
                                  TweenMax.to("#title-section-two", 0.5, { opacity: 1.75 }),
                                  TweenMax.to(".judge", 0.2, { opacity: 1 }),
                                  TweenMax.to("#open-menu-icon", 0.5, { fill: '#ffd152' }),
                                  TweenMax.staggerFromTo(".judge", 0.5, {top: 200}, {top: -60, ease: Back.ease}, 0),
                                  TweenMax.to("#judges", 0.5, { backgroundPositionX: 'calc(50% - 53px)', backgroundPositionY: 'center' })
                                ])

            let tween_4 = new TimelineMax()
                                .add([
                                  TweenMax.to("#we-search", 0.2, { opacity: 1 }),
                                  TweenMax.to("#we-search", 0.5, { backgroundPositionX: 'calc(50% + 20px)', backgroundPositionY: 'center' })
                            ])
            let tween_5 = new TimelineMax()
                                .add([
                                  TweenMax.to("#participate", 0.2, { opacity: 1 }),
                                  TweenMax.to("#participate", 0.5, { backgroundPositionX: 'calc(50% - 964px)', backgroundPositionY: 'center' }),
                            ])
            let tween_6 = new TimelineMax()
                                .add([
                                    TweenMax.staggerFromTo(".enterprise", 2, {right: '120%'}, {right: 0, ease: Back.ease}, 0),
                                    TweenMax.staggerFromTo(".developer", 2, {left: '120%'}, {left: 0, ease: Back.ease}, 0)
                            ])

            let scene_1 = new ScrollMagic.Scene({ offset: -1, duration: document.getElementById('home').offsetHeight })
                                        .setTween(tween_1)
                                        .addTo(controller)
                                        .addIndicators()

            let scene_2 = new ScrollMagic.Scene({ triggerElement: "#info", duration: document.getElementById('home').offsetHeight })
                                         .setTween(tween_2)
                                         .addTo(controller)
                                         .addIndicators()

            let scene_3 = new ScrollMagic.Scene({ triggerElement: "#judges", duration: document.getElementById('judges').offsetHeight})
                                         .setTween(tween_3)
                                         .addTo(controller)
                                         .addIndicators()
            let scene_4 = new ScrollMagic.Scene({ triggerElement: "#we-search", duration: document.getElementById('we-search').offsetHeight})
                                         .setTween(tween_4)
                                         .addTo(controller)
                                         .addIndicators()   

            let scene_5 = new ScrollMagic.Scene({ triggerElement: "#participate", duration: document.getElementById('participate').offsetHeight})
                                         .setTween(tween_5)
                                         .addTo(controller)
                                         .addIndicators()

            let scene_6 = new ScrollMagic.Scene({ triggerElement: "#participate", duration: (document.getElementById('participate').offsetHeight - 300) })
                                         .setTween(tween_6)
                                         .addTo(controller)
                                         .addIndicators()                                   

            // nav items activate
            let nav_0 = new ScrollMagic.Scene({ triggerElement: "#home", duration: document.getElementById('home').offsetHeight})
                                         .addTo(controller)
                                         .addIndicators()
                                         .setClassToggle("#home-item", 'active')

            let nav_1 = new ScrollMagic.Scene({ triggerElement: "#info", duration: document.getElementById('info').offsetHeight})
                                         .addTo(controller)
                                         .addIndicators()
                                         .setClassToggle("#info-item", 'active')                                 

            let nav_2 = new ScrollMagic.Scene({ triggerElement: "#we-search", duration: document.getElementById('we-search').offsetHeight})
                                         .addTo(controller)
                                         .addIndicators()
                                         .setClassToggle("#search-item", 'active')

            

            let nav_3 = new ScrollMagic.Scene({ triggerElement: "#participate", duration: document.getElementById('participate').offsetHeight})
                                         .addTo(controller)
                                         .addIndicators()
                                         .setClassToggle("#participate-item", 'active')

            let nav_4 = new ScrollMagic.Scene({ triggerElement: "#schedule", duration: document.getElementById('schedule').offsetHeight})
                                         .addTo(controller)
                                         .addIndicators()
                                         .setClassToggle("#schedule-item", 'active')                                                                                                   

            let nav_5 = new ScrollMagic.Scene({ triggerElement: "#judges", duration: document.getElementById('judges').offsetHeight})
                                         .addTo(controller)
                                         .addIndicators()
                                         .setClassToggle("#judge-item", 'active')

            

            let nav_6 = new ScrollMagic.Scene({ triggerElement: "#awards", duration: document.getElementById('awards').offsetHeight})
                                         .addTo(controller)
                                         .addIndicators()
                                         .setClassToggle("#award-item", 'active')

            let nav_7 = new ScrollMagic.Scene({ triggerElement: "#inscriptions", duration: document.getElementById('inscriptions').offsetHeight})
                                         .addTo(controller)
                                         .addIndicators()
                                         .setClassToggle("#inscription-item", 'active')                                 

            let nav_8 = new ScrollMagic.Scene({ triggerElement: "#conctact", duration: document.getElementById('conctact').offsetHeight})
                                         .addTo(controller)
                                         .addIndicators()
                                         .setClassToggle("#conctact-item", 'active')
    }
}
export default scrollIndex;
