/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


function langRedirect(lang) {
    
    
    
    if(lang != "se")
        lang = lang+"/";
    else
        lang = "";
    //alert(lang);
    window.location = document.URL.replace(getBaseURL(),getBaseURL().+lang);
}

function getBaseURL () {
   return location.protocol + "//" + location.hostname + 
      (location.port && ":" + location.port) + "/";
}