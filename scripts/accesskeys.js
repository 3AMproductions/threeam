/* Following lines used to dynamically include dependent javascript files. Do not alter
hp-include lib.classes.js
php-include lib.event.js
php-include prototype-1.4.0.js
*/

var accesskeys = {
  id : 'accesskeys',
  live : false,
  akeys : '',
  classname : '',
  // requires lib.classes.js; lib.event.js
  init : function(){
    accesskeys.akeys = document.getElementsByClassName('akey','em');
    var tmp = event.add(document,'keydown',accesskeys.show,false);
    tmp = event.add(document,'keyup',accesskeys.hide,false);
  },
  // requires lib.classes.js
  show : function(e){
    if (!e) e = window.event;
		window.status = accesskeys.akeys.length;
  	if((e.shiftKey || e.ctrlKey || e.altKey || e.modifiers > 0) && !accesskeys.live){
  		if($(accesskeys.id)){
				new Element.removeClassName($(accesskeys.id),'invisible');
				new Element.addClassName($(accesskeys.id),'visible');}
        //classes.swap($(accesskeys.id),'invisible','visible');
  		for(var i = 0; i < accesskeys.akeys.length; i++){
  			new Element.addClassName(accesskeys.akeys[i],'highlight_akey');}
				//classes.add(accesskeys.akeys[i],'highlight_akey');}
  		accesskeys.live = true;}
    return;
  
  },
  // requires lib.classes.js
  hide : function(e){
    if(accesskeys.live){
  		if($(accesskeys.id)){
				new Element.removeClassName($(accesskeys.id),'visible');
				new Element.addClassName($(accesskeys.id),'invisible');}
        //classes.swap($(accesskeys.id),'visible','invisible');
  		for(var i=0; i<accesskeys.akeys.length; i++){
  			new Element.removeClassName(accesskeys.akeys[i],'highlight_akey');}
				//classes.remove(accesskeys.akeys[i],'highlight_akey');}
  		accesskeys.live = false;}
  }
};
event.add(window,'load',accesskeys.init,false);

