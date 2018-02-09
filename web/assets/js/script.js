/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

(function(){
            console.log("hello");
    var firstEmpty = document.querySelector(".empty");
    
    document.addEventListener('scroll', function(){
        if(window.scrollY > (firstEmpty.offsetTop + firstEmpty.offsetHeight)){
            document.body.style.background = "url(\"/assets/images/Cannon_Screenshot.png\") no-repeat fixed center";
            document.body.style.backgroundSize = "cover";
        }
        else {
            document.body.style.background = "url(\"/assets/images/Labyrinth_Screenshot.png\") no-repeat fixed center";
            document.body.style.backgroundSize = "cover";
        }
    });
})();
