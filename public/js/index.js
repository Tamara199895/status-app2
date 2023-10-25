 $(document).ready(function() {
  $(".title").on("click",function() {
    let element = document.getElementById(this.id)
    
    if(element.getElementsByClassName("span1")[0].style.display === 'none'){
      element.getElementsByClassName("span1")[0].style.display='block'
    } else {
      element.getElementsByClassName("span1")[0].style.display= "none";
    }
    if(element.getElementsByClassName("span2")[0].style.display === 'block'){
      element.getElementsByClassName("span2")[0].style.display='none'
    }else{
      element.getElementsByClassName("span2")[0].style.display='block'
    }
    });
})