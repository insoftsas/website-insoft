const controller = new ScrollMagic.Controller()

// tweens
const tween_1 = new TimelineMax()
                    .add([
                      TweenMax.to("#body-app", 0.5, { backgroundColor: '#4cc0e0', backgroundImage: 'linear-gradient(#343233, #007496)' }),
                      TweenMax.to("#title-section-two", 0.5, { opacity: 1 }),
                      TweenMax.to(".judge", 0.2, { opacity: 1 }),
                      TweenMax.to("#open-menu-icon", 0.5, { fill: '#ffd152' }),
                      TweenMax.staggerFromTo(".judge", 0.5, {top: '120%'}, {top: 0, ease: Back.ease}, 0),
                      TweenMax.to("#judges", 0.5, { backgroundPositionX: 'calc(50% - 53px)', backgroundPositionY: 'center' })
                    ])
const tween_2 = new TimelineMax()
                    .add([
                      TweenMax.to("#home", 0.5, { backgroundPositionX: 'calc(50% + 1350px)', backgroundPositionY: 'center' }),
                      TweenMax.staggerFromTo(".box-register", 2, {right: 0}, {right: '120%', ease: Back.ease}, 0),
                      TweenMax.staggerFromTo(".word-writing", 2, {left: 0}, {left: '120%', ease: Back.ease}, 0)
                    ])

// scenes
const scene_2 = new ScrollMagic.Scene({ offset: -1, duration: 300})
                            .setTween(tween_2)
                            .addTo(controller)
                            .addIndicators()
                            .setClassToggle("#home-item", 'active')

// menu activate
const scene_1 = new ScrollMagic.Scene({ triggerElement: "#judges", duration: 400})
                             .setTween(tween_1)
                             .addTo(controller)
                             .addIndicators()
                             .setClassToggle("#judge-item", 'active')

const scene_3 = new ScrollMagic.Scene({ triggerElement: "#trainers", duration: 400})
                             //.setTween(tween_3)
                             .addTo(controller)
                             .addIndicators()
                             .setClassToggle("#trainer-item", 'active')

const scene_4 = new ScrollMagic.Scene({ triggerElement: "#project-route", duration: 400})
                             //.setTween(tween_3)
                             .addTo(controller)
                             .addIndicators()
                             .setClassToggle("#project-route-item", 'active')

const scene_5 = new ScrollMagic.Scene({ triggerElement: "#places", duration: 400})
                             //.setTween(tween_3)
                             .addTo(controller)
                             .addIndicators()
                             .setClassToggle("#place-item", 'active')

const scene_6 = new ScrollMagic.Scene({ triggerElement: "#how-to-get", duration: 400})
                             //.setTween(tween_3)
                             .addTo(controller)
                             .addIndicators()
                             .setClassToggle("#how-to-get-item", 'active')

const scene_7 = new ScrollMagic.Scene({ triggerElement: "#quotas", duration: 400})
                             //.setTween(tween_3)
                             .addTo(controller)
                             .addIndicators()
                             .setClassToggle("#quota-item", 'active')     

const scene_8 = new ScrollMagic.Scene({ triggerElement: "#inscriptions", duration: 400})
                             //.setTween(tween_3)
                             .addTo(controller)
                             .addIndicators()
                             .setClassToggle("#inscription-item", 'active')

const scene_9 = new ScrollMagic.Scene({ triggerElement: "#challenges", duration: 400})
                             //.setTween(tween_3)
                             .addTo(controller)
                             .addIndicators()
                             .setClassToggle("#challenge-item", 'active')