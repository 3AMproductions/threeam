/*
php-include lib.dom.js
php-include lib.domFunction.js
php-include prototype-1.4.0.js
*/

var formv = {
  enable : function(enable){
  	if(enable){
  		$('submit').disabled = false;
  		new Element.removeClassName($('submit'),'disabled');
  	}
  	else{
    	$('submit').disabled = true;
    	new Element.addClassName($('submit'),'disabled');
  	}
  	return;
  },
  
  init : function(){
  	// get validating elements by id
  	var inputs = $('name','email','subject','body');
  	// attach validating function to onblur event
  	for(var i=0; i<inputs.length; i++){inputs[i].onblur = formv.validate;}
  	formv.enable(false);
  },
  
  validate : function(e){
  	if (!e) var e = window.event;
  	// perform validation
  	var url = 'mail.php';
  	var pars = 'ajax=true&field='+this.id+'&value='+$F(this.id);
  	var ajax = new Ajax.Request(
  					url, 
  					{method: 'post', parameters: pars, onComplete: formv.response}
  					);
  },
  
  response : function(req){
  	var xml = req.responseXML.getElementsByTagName('form_validation')[0];
  	var fieldname = getNodeValue(xml,'fieldname');
  	var valid = getNodeValue(xml,'valid')=='true';
  	if(!valid) var err_msg = getNodeValue(xml,'message');
  	
  	// valid
  	if(valid){
    	var cur_err = $("label_"+fieldname);
    	if(cur_err){new Element.remove(cur_err);}
  	}
  	// invalid
  	else{
    	// prepare error message/label object
      var err = document.createElement('label');
      err.appendChild(document.createTextNode(err_msg));
      new Element.addClassName(err,'error');
      err.htmlFor = fieldname;
    	err.id = "label_"+fieldname;
     	var cur_err = $("label_"+fieldname);
  		var field = $(fieldname);
    	// replace current error message or add new one
     	if(cur_err){field.parentNode.parentNode.replaceChild(err,cur_err);}
  		else{field.parentNode.parentNode.insertBefore(err,field.parentNode);}
  	}
  	formv.enable(document.getElementsByClassName('error').length < 1);
  }
};

domFunction(formv.init);