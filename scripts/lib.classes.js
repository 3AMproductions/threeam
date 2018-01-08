/* http://www.onlinetools.org/articles/unobtrusivejavascript/cssjsseparation.html */

var classes = {
  has : function(o,c){
    return new RegExp('\\b'+c+'\\b').test(o.className)},
  
  swap : function(o,c1,c2){
    o.className=!classes.has(o,c1)?o.className.replace(c2,c1): o.className.replace(c1,c2);},
  
  add : function(o,c){
    if(!classes.has(o,c)){o.className+=o.className?' '+c:c;}},
  
  remove : function(o,c){
    var rep=o.className.match(' '+c)?' '+c:c;
    o.className=o.className.replace(rep,'');}
};
