$(function () {
	$("#tarif-anime1").css({"top":"30%"});
	$("#tarif-anime2").css({"top":"60%"});
	$("#tarif-anime3").css({"top":"90%"});
	var controller = new ScrollMagic.Controller();
	var tarif1 = new TimelineMax()
		.to("#tarif1", 1, {x: "0%"}, {x: "-100%", ease: Linear.easeIn})
		.fromTo("#tarif2", 1, {x: "100%"}, {x: "0%", ease: Linear.easeIn});
	var tarif2 = new TimelineMax()
		.to("#tarif2", 1, {x: "100%"}, {x: "-100%", ease: Linear.easeIn})
		.fromTo("#tarif3", 1, {x: "100%"}, {x: "0%", ease: Linear.easeIn});
	new ScrollMagic.Scene({triggerElement: "#tarif",triggerHook: 0.0,duration: "300%"})
		.setPin("#tarif-fon")
		.addIndicators()
		.addTo(controller);//fixed fon
	new ScrollMagic.Scene({triggerElement: "#tarif",triggerHook: 0.2,duration: "300%"})
		.setPin("#tarif1")
		.addIndicators()
		.addTo(controller);//fixed tarif1
	new ScrollMagic.Scene({triggerElement: "#tarif-anime1",triggerHook: "onLeave",duration: "200%"})
		.setTween("#tarif2")
		.addIndicators()
		.addTo(controller);//fixed tarif2
	new ScrollMagic.Scene({triggerElement: "#tarif-anime1",triggerHook: "onLeave",duration: 0})
		.setTween(tarif1)
		.addIndicators()
		.addTo(controller);//animate to tarif2
	new ScrollMagic.Scene({triggerElement: "#tarif-anime2",triggerHook: "onLeave",duration: "100%"})
		.setTween("#tarif3")
		.addIndicators()
		.addTo(controller);//fixed tarif3
	new ScrollMagic.Scene({triggerElement: "#tarif-anime2",triggerHook: "onLeave",duration: 0})
		.setTween(tarif2)
		.addIndicators()
		.addTo(controller);//animate to tarif3
});