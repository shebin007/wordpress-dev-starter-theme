import $ from "jquery";
import JSAlert from 'js-alert';
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";

$(document).ready(function(){
    gsap.registerPlugin(ScrollTrigger);
    var isMobile = Math.min(window.screen.width, window.screen.height) < 768 || navigator.userAgent.indexOf("Mobi") > -1;
    
    

    ScrollTrigger.create({
        trigger:"header",
        start: () => {
            let startmenuAnim = "=+80px";
            if(isMobile == true){
                startmenuAnim = "=+30px"
            }
            
            return  startmenuAnim;
        },
        end: () => { 
            console.log($('header').innerHeight());
            return $('.home').innerHeight(); 
        },
        pin: true,
        pinSpacing: false,
        scrub: 1,
        onEnter: () => {
            $('header').addClass("stickyheader")
        },
        onLeaveBack: () => {
            $('header').removeClass("stickyheader")
        },
        // markers:true,
    })



    let maxh = $(window).height() - $('header').height() ; 
    console.log('maxh',$(window).height() - $('header').height() );
    let t = maxh + 'px';
  
    $('.interior-section-image').css("max-height",t);
        
  

 
    $(".hamburger-menu ").click(function (){
        $(this).toggleClass("active");
        $(".navbar").toggleClass("active");
    })
    /**
     * 
     */
    
    if(isMobile == false){
        let tlinteriorsec = gsap.timeline({
            scrollTrigger :{
                trigger:".interior-section-image",
                scrub: 3,
                start: (() => {
                    let hedaerHeight = parseInt($('header').height()) - 20;
                    let result = "top " + hedaerHeight;
                    return result;
                }),
                pin : true,
                
                // pinSpacing: false,
                // onEnter: () => {
                //     $('.interior-section-image').addClass("active");
                //     // element.classList.add("");
                // },
                // markers:true,
            }
        })

        tlinteriorsec.to(".interior-section-image" , {
            borderRadius :  10,
            scale: 1,
            duration: 1,
        })
    }


 
 


    setTimeout( function () {
        let sections = document.querySelectorAll("section");

        sections.forEach( (element) => {
            console.log(element);
            ScrollTrigger.create({
                trigger:element,
                // scrub: 1,
                start: "top 50%",
                // end: '=+100%',
                onEnter: () => {
                    element.classList.add("active");
                },
                // markers:true,
            })
        });
    } , 500);
  
    
    let sectionscontents = document.querySelectorAll(".logo-para-container");
    
    sectionscontents.forEach( (element) => {
        console.log(element);
        ScrollTrigger.create({
            trigger:element,
            // scrub: 1,
            start: "top 85%",
            // end: '=+100%',
            onEnter: () => {
                element.classList.add("active");
            },
            // markers:true,
        })
    });

    let sectiontitles = document.querySelectorAll(".section-title");

    sectiontitles.forEach( (element) => {
        console.log(element);
        ScrollTrigger.create({
            trigger:element,
            // scrub: 1,
            start: "top 50%",
            // end: '=+100%',
            onEnter: () => {
                element.classList.add("active");
            },
            // markers:true,
        })
    });


    ScrollTrigger.create({
        trigger: ".banner-quote-line-section",
        // scrub: 1,
        start: "top 80%",
        // end: '=+100%',
        onEnter: () => {
            $('.banner-quote-line-section').addClass("active")
        },
        // markers:true,
    })
})