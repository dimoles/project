<!-- Showing content from livesearch container -->
<html>
  <head>
    <script>
      function showResult(str) 
        {
          if (str.length==0) 
            { 
              document.getElementById("livesearch").innerHTML="";
              document.getElementById("livesearch").style.border="0px";
              return;
            }
          if (window.XMLHttpRequest) 
            {
              // code for IE7+, Firefox, Chrome, Opera, Safari
              xmlhttp=new XMLHttpRequest();
            }
          else 
            {  // code for IE6, IE5
              xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
          xmlhttp.onreadystatechange=function() 
            {
              if (this.readyState==4 && this.status==200) 
                {
                  document.getElementById("livesearch").innerHTML=this.responseText;
                  document.getElementById("livesearch").style.border="1px solid #A5ACB2";
                }
             }
          xmlhttp.open("GET","livesearch.php?q="+str,true);
          xmlhttp.send();
        }
    </script>
  </head> 

  <body>
    <div class="row">
    
      <div class="col-3" style="	margin-left:30px;">
        <input type="text" size="30" placeholder ="search by author" style="color: black" onkeyup="showResult(this.value)">
      </div>
      
      <div class="col-9" 	style='width: 500px; margin-right: 80px; ' >
        <div id="livesearch"></div>
      </div>
    </div>
  </body>

</html>