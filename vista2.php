<?php

    $filepath = "images/vidrio-peltre/";
    
    $array = preg_grep('~\.(png)$~', scandir($filepath));

    $num = count($array);

	$i = 0;
    


?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>
</head>
<body>

<h2>Image Modal</h2>
<p>In this example, we use CSS to create a modal (dialog box) that is hidden by default.</p>
<p>We use JavaScript to trigger the modal and to display the current image inside the modal when it is clicked on. Also note that we use the value from the image's "alt" attribute as an image caption text inside the modal.</p>


<table>
    <?php foreach ($array as $x):?>
        
        

        <?php 
            $i++;
            $mod = $i%2; 
        
        ?>

        <?php if($mod == 1):?>
            <tr>
            <td style='text-align: center'>
            
            <div class="container1">
                <img src="<?php echo $filepath.$x?>" style="max-width:100%;cursor:pointer"
                onclick="onClick(this)" class="modal-hover-opacity">
            </div>
            </td>
            
        <?php else:?>
            <td style='text-align: center'>
            
            <div class="container1">
                <img src="<?php echo $filepath.$x?>" style="max-width:100%;cursor:pointer"
                onclick="onClick(this)" class="modal-hover-opacity">
            </div>
            </td>
            </tr>
        <?php endif;?>
        
    <?php endforeach;?> 
    
</table> 

<!-- The Modal -->
<div id="modal01" class="modal" onclick="this.style.display='none'">
  <span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
  <div class="modal-content">
    <img id="img01" style="max-width:100%">
  </div>
</div>

<script>
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
}
</script>

</body>
</html>