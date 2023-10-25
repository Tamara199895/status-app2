

<script>
 $(document).ready(function() {
  $(".title").on("click",function() {
    let element = document.getElementById(this.id)
    // console.log( element.getElementsByClassName("span1"))
    // console.log(element.getElementsByClassName("span1")[0].style.display)
    if(element.getElementsByClassName("span1")[0].style.display='none'){
      console.log('a')
      element.getElementsByClassName("span1")[0].style.display='block'
    }
    if(element.getElementsByClassName("span2")[0].style.display='block'){
      element.getElementsByClassName("span2")[0].style.display='none'
    }
    });
})
</script>