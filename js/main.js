function openForm() {
    var x = document.getElementById("myForm");
    x.style.display = "flex";
  
    var y = document.getElementById("myForm2");
    y.style.display = "none";
    
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }
  
  function openForm2() {
    var p  = document.getElementById("myForm2");
    p.style.display = "flex";
  
    var q  = document.getElementById("myForm");
    q.style.display = "none";
  }
  
  function closeForm2() {
    document.getElementById("myForm2").style.display = "none";
  }