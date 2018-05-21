const controller = new ScrollMagic.Controller()

// tweens backgrounds
const tween_bg_2 = new TimelineMax()
                    .add([
                      TweenMax.to("#body-app", 0.5, { backgroundColor: '#343233', backgroundImage: 'linear-gradient(#343233, #007496)' })
                    ])                      
const tween_bg_3 = new TimelineMax()
                    .add([
                      TweenMax.to("#body-app", 0.5, { backgroundColor: '#343233', backgroundImage: 'linear-gradient(#343233, #673330)' })
                    ])     

// backgounds scenes
const bg_2 = new ScrollMagic.Scene({ triggerElement: "#judges", duration: 300})
                             .setTween(tween_bg_2)
                             .addTo(controller)
                             .addIndicators()   
const bg_3 = new ScrollMagic.Scene({ triggerElement: "#trainers", duration: 300})
                             .setTween(tween_bg_3)
                             .addTo(controller)
                             .addIndicators()   

if (window.innerWidth > 993) {
    // tweens
    const tween_1 = new TimelineMax()
                        .add([
                          TweenMax.to("#home", 0.5, { backgroundPositionX: 'calc(50% + 1350px)', backgroundPositionY: 'center' }),
                          TweenMax.staggerFromTo(".box-register", 2, {right: 0}, {right: '120%', ease: Back.ease}, 0),
                          TweenMax.staggerFromTo(".container-console", 2, {left: 0}, {left: '120%', ease: Back.ease}, 0)
                        ])

    const tween_2 = new TimelineMax()
                        .add([
                          TweenMax.to("#title-section-two", 0.5, { opacity: 1.75 }),
                          TweenMax.to(".judge", 0.2, { opacity: 1 }),
                          TweenMax.to("#open-menu-icon", 0.5, { fill: '#ffd152' }),
                          TweenMax.staggerFromTo(".judge", 0.5, {top: 200}, {top: -81, ease: Back.ease}, 0),
                          TweenMax.to("#judges", 0.5, { backgroundPositionX: 'calc(50% - 53px)', backgroundPositionY: 'center' })
                        ])

    const tween_3 = new TimelineMax()
                        .add([
                          TweenMax.to("#title-section-three", 0.5, { opacity: 1.75 }),
                          TweenMax.to(".trainer", 0.2, { opacity: 1 }),
                    ])
    // scenes
    const scene_1 = new ScrollMagic.Scene({ offset: -1, duration: document.getElementById('home').offsetHeight})
                                .setTween(tween_1)
                                .addTo(controller)
                                .addIndicators()

    const scene_2 = new ScrollMagic.Scene({ triggerElement: "#judges", duration: document.getElementById('judges').offsetHeight})
                                 .setTween(tween_2)
                                 .addTo(controller)
                                 .addIndicators()

    const scene_3 = new ScrollMagic.Scene({ triggerElement: "#trainers", duration: document.getElementById('judges').offsetHeight})
                                 .setTween(tween_3)
                                 .addTo(controller)
                                 .addIndicators()

    // nav items activate
    const nav_0 = new ScrollMagic.Scene({ triggerElement: "#home", duration: document.getElementById('home').offsetHeight})
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#home-item", 'active')
    const nav_0_1 = new ScrollMagic.Scene({ triggerElement: "#info", duration: document.getElementById('info').offsetHeight})
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#home-item", 'active')                                 

    const nav_1 = new ScrollMagic.Scene({ triggerElement: "#judges", duration: document.getElementById('judges').offsetHeight})
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#judge-item", 'active')

    const nav_3 = new ScrollMagic.Scene({ triggerElement: "#trainers", duration: document.getElementById('trainers').offsetHeight})
                                 //.setTween(tween_3)
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#trainer-item", 'active')

    const nav_4 = new ScrollMagic.Scene({ triggerElement: "#project-route", duration: document.getElementById('project-route').offsetHeight})
                                 //.setTween(tween_3)
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#project-route-item", 'active')

    const nav_5 = new ScrollMagic.Scene({ triggerElement: "#places", duration: document.getElementById('places').offsetHeight})
                                 //.setTween(tween_3)
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#place-item", 'active')

    const nav_6 = new ScrollMagic.Scene({ triggerElement: "#how-to-get", duration: document.getElementById('how-to-get').offsetHeight})
                                 //.setTween(tween_3)
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#how-to-get-item", 'active')

    const nav_7 = new ScrollMagic.Scene({ triggerElement: "#quotas", duration: document.getElementById('quotas').offsetHeight})
                                 //.setTween(tween_3)
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#quota-item", 'active')     

    const nav_8 = new ScrollMagic.Scene({ triggerElement: "#inscriptions", duration: document.getElementById('inscriptions').offsetHeight})
                                 //.setTween(tween_3)
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#inscription-item", 'active')

    const nav_9 = new ScrollMagic.Scene({ triggerElement: "#challenges", duration: document.getElementById('challenges').offsetHeight})
                                 //.setTween(tween_3)
                                 .addTo(controller)
                                 .addIndicators()
                                 .setClassToggle("#challenge-item", 'active')
}                             