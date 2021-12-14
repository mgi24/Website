(function (cjs, an) {

var p; // shortcut to reference prototypes
var lib={};var ss={};var img={};
lib.ssMetadata = [];


(lib.AnMovieClip = function(){
	this.actionFrames = [];
	this.ignorePause = false;
	this.gotoAndPlay = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndPlay.call(this,positionOrLabel);
	}
	this.play = function(){
		cjs.MovieClip.prototype.play.call(this);
	}
	this.gotoAndStop = function(positionOrLabel){
		cjs.MovieClip.prototype.gotoAndStop.call(this,positionOrLabel);
	}
	this.stop = function(){
		cjs.MovieClip.prototype.stop.call(this);
	}
}).prototype = p = new cjs.MovieClip();
// symbols:



(lib.imagefromrawpixelid2893281original_02 = function() {
	this.initialize(img.imagefromrawpixelid2893281original_02);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,317,252);


(lib.imagefromrawpixelid2893281original_03 = function() {
	this.initialize(img.imagefromrawpixelid2893281original_03);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,327,252);


(lib.imagefromrawpixelid2893281original_04 = function() {
	this.initialize(img.imagefromrawpixelid2893281original_04);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,357,275);


(lib.imagefromrawpixelid2893281original_06 = function() {
	this.initialize(img.imagefromrawpixelid2893281original_06);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,327,275);


(lib.imagefromrawpixelid2893281original_07 = function() {
	this.initialize(img.imagefromrawpixelid2893281original_07);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,357,264);


(lib.imagefromrawpixelid2893281original_08 = function() {
	this.initialize(img.imagefromrawpixelid2893281original_08);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,317,264);


(lib.img1 = function() {
	this.initialize(img.img1);
}).prototype = p = new cjs.Bitmap();
p.nominalBounds = new cjs.Rectangle(0,0,291,181);


// stage content:
(lib.praktikum2 = function(mode,startPosition,loop,reversed) {
if (loop == null) { loop = true; }
if (reversed == null) { reversed = false; }
	var props = new Object();
	props.mode = mode;
	props.startPosition = startPosition;
	props.labels = {};
	props.loop = loop;
	props.reversed = reversed;
	cjs.MovieClip.apply(this,[props]);

	// Layer_1
	this.instance = new lib.img1();
	this.instance.setTransform(16,43);

	this.instance_1 = new lib.imagefromrawpixelid2893281original_08();
	this.instance_1.setTransform(238,151);

	this.instance_2 = new lib.imagefromrawpixelid2893281original_07();
	this.instance_2.setTransform(474,347);

	this.instance_3 = new lib.imagefromrawpixelid2893281original_06();
	this.instance_3.setTransform(473,-17);

	this.instance_4 = new lib.imagefromrawpixelid2893281original_04();
	this.instance_4.setTransform(222,141);

	this.instance_5 = new lib.imagefromrawpixelid2893281original_03();
	this.instance_5.setTransform(-8,366);

	this.instance_6 = new lib.imagefromrawpixelid2893281original_02();
	this.instance_6.setTransform(360,104);

	this.timeline.addTween(cjs.Tween.get({}).to({state:[{t:this.instance}]}).to({state:[{t:this.instance_1}]},12).to({state:[{t:this.instance_2}]},12).to({state:[{t:this.instance_3,p:{x:473,y:-17}}]},12).to({state:[{t:this.instance_4}]},12).to({state:[{t:this.instance_5,p:{x:-8,y:366}}]},11).to({state:[{t:this.instance_5,p:{x:115,y:158}},{t:this.instance_6},{t:this.instance_3,p:{x:328,y:228}}]},13).wait(11));

	this._renderFirstFrame();

}).prototype = p = new lib.AnMovieClip();
p.nominalBounds = new cjs.Rectangle(392,283,439,335);
// library properties:
lib.properties = {
	id: '43DB0D572AA5F5449F1C9DB8016FE903',
	width: 800,
	height: 600,
	fps: 24,
	color: "#FFFFFF",
	opacity: 1.00,
	manifest: [
		{src:"images/imagefromrawpixelid2893281original_02.png", id:"imagefromrawpixelid2893281original_02"},
		{src:"images/imagefromrawpixelid2893281original_03.png", id:"imagefromrawpixelid2893281original_03"},
		{src:"images/imagefromrawpixelid2893281original_04.png", id:"imagefromrawpixelid2893281original_04"},
		{src:"images/imagefromrawpixelid2893281original_06.png", id:"imagefromrawpixelid2893281original_06"},
		{src:"images/imagefromrawpixelid2893281original_07.png", id:"imagefromrawpixelid2893281original_07"},
		{src:"images/imagefromrawpixelid2893281original_08.png", id:"imagefromrawpixelid2893281original_08"},
		{src:"images/img1.png", id:"img1"}
	],
	preloads: []
};



// bootstrap callback support:

(lib.Stage = function(canvas) {
	createjs.Stage.call(this, canvas);
}).prototype = p = new createjs.Stage();

p.setAutoPlay = function(autoPlay) {
	this.tickEnabled = autoPlay;
}
p.play = function() { this.tickEnabled = true; this.getChildAt(0).gotoAndPlay(this.getTimelinePosition()) }
p.stop = function(ms) { if(ms) this.seek(ms); this.tickEnabled = false; }
p.seek = function(ms) { this.tickEnabled = true; this.getChildAt(0).gotoAndStop(lib.properties.fps * ms / 1000); }
p.getDuration = function() { return this.getChildAt(0).totalFrames / lib.properties.fps * 1000; }

p.getTimelinePosition = function() { return this.getChildAt(0).currentFrame / lib.properties.fps * 1000; }

an.bootcompsLoaded = an.bootcompsLoaded || [];
if(!an.bootstrapListeners) {
	an.bootstrapListeners=[];
}

an.bootstrapCallback=function(fnCallback) {
	an.bootstrapListeners.push(fnCallback);
	if(an.bootcompsLoaded.length > 0) {
		for(var i=0; i<an.bootcompsLoaded.length; ++i) {
			fnCallback(an.bootcompsLoaded[i]);
		}
	}
};

an.compositions = an.compositions || {};
an.compositions['43DB0D572AA5F5449F1C9DB8016FE903'] = {
	getStage: function() { return exportRoot.stage; },
	getLibrary: function() { return lib; },
	getSpriteSheet: function() { return ss; },
	getImages: function() { return img; }
};

an.compositionLoaded = function(id) {
	an.bootcompsLoaded.push(id);
	for(var j=0; j<an.bootstrapListeners.length; j++) {
		an.bootstrapListeners[j](id);
	}
}

an.getComposition = function(id) {
	return an.compositions[id];
}


an.makeResponsive = function(isResp, respDim, isScale, scaleType, domContainers) {		
	var lastW, lastH, lastS=1;		
	window.addEventListener('resize', resizeCanvas);		
	resizeCanvas();		
	function resizeCanvas() {			
		var w = lib.properties.width, h = lib.properties.height;			
		var iw = window.innerWidth, ih=window.innerHeight;			
		var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;			
		if(isResp) {                
			if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {                    
				sRatio = lastS;                
			}				
			else if(!isScale) {					
				if(iw<w || ih<h)						
					sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==1) {					
				sRatio = Math.min(xRatio, yRatio);				
			}				
			else if(scaleType==2) {					
				sRatio = Math.max(xRatio, yRatio);				
			}			
		}
		domContainers[0].width = w * pRatio * sRatio;			
		domContainers[0].height = h * pRatio * sRatio;
		domContainers.forEach(function(container) {				
			container.style.width = w * sRatio + 'px';				
			container.style.height = h * sRatio + 'px';			
		});
		stage.scaleX = pRatio*sRatio;			
		stage.scaleY = pRatio*sRatio;
		lastW = iw; lastH = ih; lastS = sRatio;            
		stage.tickOnUpdate = false;            
		stage.update();            
		stage.tickOnUpdate = true;		
	}
}
an.handleSoundStreamOnTick = function(event) {
	if(!event.paused){
		var stageChild = stage.getChildAt(0);
		if(!stageChild.paused || stageChild.ignorePause){
			stageChild.syncStreamSounds();
		}
	}
}


})(createjs = createjs||{}, AdobeAn = AdobeAn||{});
var createjs, AdobeAn;