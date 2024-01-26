<!-- CSS -->
<style>
#my_camera{
 width: 220px;
 height: 240px;
 
}
</style>
<center>
<!-- -->
<div id="my_camera"></div>
 
<div id="results" ></div>
 
<!-- Script -->
<script type="text/javascript" src="../../assets/dist/js/webcam.min.js"></script>

<!-- Code to handle taking the snapshot and displaying it locally -->
<script language="JavaScript">

 // Configure a few settings and attach camera
 Webcam.set({
  width: 220,
  height: 240,
  image_format: 'jpeg',
  jpeg_quality: 100
 });
 Webcam.attach( '#my_camera' );

 // preload shutter audio clip
 var shutter = new Audio();
 shutter.autoplay = true;
 shutter.src = navigator.userAgent.match(/Firefox/) ? 'shutter.ogg' : 'shutter.mp3';

function take_snapshot() {
 // play sound effect
 shutter.play();
 
 // take snapshot and get image data
 Webcam.snap( function(data_uri) {
 
  Webcam.upload( data_uri, 'saveimage.php', function(code, text,Name) {
                    document.getElementById('results').innerHTML = 
                    '' + 


 // display results in page
 //document.getElementById('results').innerHTML = 
 '<img src="'+data_uri+'"/>';
    
	
		
	
 } );
  
  
 } );
}

</script>