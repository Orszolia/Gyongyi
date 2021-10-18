gsap.registerPlugin(MotionPathPlugin);
gsap.registerPlugin(ScrollTrigger);


let landing = gsap.timeline();
landing.from('.landing_text_anim', { duration: 1, x: '-100', opacity: 0, delay: 1, stagger: 0.5 });


let tl = gsap.timeline({ paused: true });

tl.from(".engem_keresel li", { duration: 0.5, y: 50, opacity: 0, stagger: 0.5, delay: 0.5 })

document.getElementById('keressbutton').addEventListener('click', () => {
    tl.restart();
})

let salad = gsap.timeline({ repeat: -1 });


salad.from('#mandarin_fall2', { duration: 0.8, opacity: 0, y: -200, ease: 'bounce.out' });

salad.from('#mandarin_fall1', { duration: 0.5, opacity: 0, y: -200, ease: 'power1.in' });
salad.from('#grape_fall', { duration: 0.5, opacity: 0, y: -200, ease: 'power1.in' });
salad.from('#kiwi_fall', { duration: 0.5, opacity: 0, y: -200, ease: 'power1.in' });
salad.from('#blueberry_fall1', { duration: 0.5, opacity: 0, y: -200, ease: 'power1.in' });
salad.from('#strawberry_fall3', { duration: 0.5, opacity: 0, y: -200, ease: 'power1.in' });
salad.from('#blueberry_fall2', { duration: 0.5, opacity: 0, y: -200, ease: 'power1.in' });
salad.from('#strawberry_fall', { duration: 0.5, opacity: 0, y: -200, ease: 'power1.in' });
salad.from('#strawberry_fall2', { duration: 0.8, opacity: 0, y: -200, ease: 'bounce.out' });
salad.from('#blueberry_fall3', { duration: 0.8, opacity: 0, y: -200, ease: 'bounce.out' });


salad.to(['#mandarin_fall1', '#grape_fall', '#kiwi_fall', '#blueberry_fall1', '#strawberry_fall3',
    '#blueberry_fall2', '#strawberry_fall', '#strawberry_fall2', '#blueberry_fall3', '#apple_fall',
    '#mandarin_fall2'], { duration: 0.5, opacity: 0 });


ScrollTrigger.create({
    animation: salad,
    start: "20px 80%",
    trigger: "#Salad",
    toggleAction: "start pause start pause",
});

let magamrol = gsap.timeline();

magamrol.to([".circle.yellow", ".magamrol_section"], { backgroundColor: '#eb7f53' });


ScrollTrigger.create({
    animation: magamrol,
    start: "top 80%",
    end: "top top",
    trigger: ".magamrol_content",
    toggleAction: "start none reverse none",
    scrub: true,
});


let scroll_down = gsap.timeline();

scroll_down.from(".blog", { y: 200, opacity: 0, duration: 0.5 });

scroll_down.from(".blog_content .portfolio-item", { y: 200, opacity: 0, duration: 1, stagger: 0.5 });

ScrollTrigger.create({
    animation: scroll_down,
    start: "20px 80%",
    end: "bottom top",
    trigger: ".blog_content",
    toggleAction: "start reverse start reverse",
});

var repeat_scale = gsap.to(".irj_nekem", { duration: 0.3, scale: 0.9 });

repeat_scale.repeat(-1).yoyo(true);


