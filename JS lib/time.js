function greeting(field) {
    var d = new Date();
    var n = d.getHours();
   if (n < 10){
       document.getElementById('field').innerHTML= 'Good Morning'
   }
   else if (n >10 < 18){
       document.getElementById('field').innerHTML = 'Good Afternoon'
   }
   else {
       document.getElementById('field').innerHTML = 'Good Evening'
   }
}
function currentTime(field){
    var d = new Date()
    let  n= d.getDate()
    document.getElementById('field').innerHTML = n
}
export {greeting, currentTime}