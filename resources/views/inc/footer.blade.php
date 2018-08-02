<!-- END Page Container -->
<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->

<script src="{{asset('CustomerBoard')}}/js/core/jquery.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/core/bootstrap.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/core/jquery.slimscroll.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/core/jquery.scrollLock.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/core/jquery.appear.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/core/jquery.countTo.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/core/jquery.placeholder.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/core/js.cookie.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/app.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script> -->
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script> -->
<script src="{{asset('CustomerBoard')}}/js/plugins/chartjs/Chart.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/pages/base_pages_dashboard.js"></script>
<!-- Page JS Plugins -->
<script src="{{asset('CustomerBoard')}}/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/plugins/easy-pie-chart/jquery.easypiechart.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/plugins/slick/slick.min.js"></script>
<!-- Page JS Code -->
<script src="{{asset('CustomerBoard')}}/js/pages/base_ui_widgets.js"></script>
<!-- Pages Plugins -->
<script src="{{asset('CustomerBoard')}}/js/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/plugins/select2/select2.full.min.js"></script>
<!--  <script src="{{asset('CustomerBoard')}}/js/plugins/select2/select2.js"></script>
   <script src="{{asset('CustomerBoard')}}/js/plugins/select2/select2.min.js"></script> -->
<script src="{{asset('CustomerBoard')}}/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/plugins/dropzonejs/dropzone.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
<script src="{{asset('CustomerBoard')}}/js/plugins/magnific-popup/magnific-popup.min.js"></script>
<!-- <script src="{{asset('CustomerBoard')}}/js/popup.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script> -->
<!-- Page JS Plugins -->
<!-- <script src="//maps.google.com/maps/api/js?sensor=true"></script> -->
<script src="{{asset('CustomerBoard')}}/js/plugins/gmapsjs/gmaps.min.js"></script>
<!-- Page JS Code -->
<script src="{{asset('CustomerBoard')}}/js/pages/base_comp_maps.js"></script>
<!-- Page JS Plugins -->
<!-- Page JS Code -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
<script src="{{asset('CustomerBoard/js')}}/plugins/gmapsjs/gmaps.min.js"></script>
<!-- Page JS Code -->
<script src="{{asset('CustomerBoard/js')}}/pages/base_comp_maps.js"></script>
<!-- Page JS Plugins -->
<script src="{{asset('CustomerBoard/js')}}/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- Page JS Code -->
<script src="{{asset('CustomerBoard/js')}}/pages/base_ui_widgets.js"></script>
<script src="{{asset('CustomerBoard')}}/js/pages/base_tables_datatables.js"></script>
<script src="{{asset('CustomerBoard')}}/js/bootstrap-datetimepicker.min.js"></script>
<script>
   // This example requires the Places library. Include the libraries=places
   // parameter when you first load the API. For example:
   // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
   var lat=  -33.8688 ;
   var lng= 151.2195 ;
   var myLatLng = {lat: lat, lng: lng};
 var marker;
   var manualLat;
   var manualLng;
   function initMap() {
     var map = new google.maps.Map(document.getElementById('map'), {
       center: myLatLng,
       zoom: 13
     });
    marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
  google.maps.event.addListener(map, 'click', function(event) {
     
    placeMarker(event.latLng);
  
  });


function placeMarker(location) {

  
 marker = new google.maps.Marker({
    position: location,
    map: map,
  });
  var infowindow = new google.maps.InfoWindow({
    content: "I'm here.." 
       // content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
  });

manualLat =location.lat();
manualLng = location.lng();
 document.getElementById("val-input").value = "(" + manualLat + ","  + manualLng  + ")";
     et = document.getElementById("val-input").value;
         console.log("latlog",et);
  infowindow.open(map,marker);
}
       
     var card = document.getElementById('pac-card');
     var input = document.getElementById('pac-input');
     var types = document.getElementById('type-selector');
     var strictBounds = document.getElementById('strict-bounds-selector');
   
     map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
   
     var autocomplete = new google.maps.places.Autocomplete(input);
   
     // Bind the map's bounds (viewport) property to the autocomplete object,
     // so that the autocomplete requests use the current map bounds for the
     // bounds option in the request.
     autocomplete.bindTo('bounds', map);
   
     var infowindow = new google.maps.InfoWindow();
     var infowindowContent = document.getElementById('infowindow-content');
     infowindow.setContent(infowindowContent);
     var marker = new google.maps.Marker({
       map: map,
       anchorPoint: new google.maps.Point(0, -29)
     });
   
     autocomplete.addListener('place_changed', function() {
       infowindow.close();
       marker.setVisible(false);
       var place = autocomplete.getPlace();
       if (!place.geometry) {
         // User entered the name of a Place that was not suggested and
         // pressed the Enter key, or the Place Details request failed.
         window.alert("No details available for input: '" +place.name+ "'");
         return;
       }
   // console.log("place.name", place.name);
       // If the place has a geometry, then present it on a map.
       if (place.geometry.viewport) {
         map.fitBounds(place.geometry.viewport);
       } else {
         map.setCenter(place.geometry.location);
         map.setZoom(17);  // Why 17? Because it looks good.
       }
       marker.setPosition(place.geometry.location);
       marker.setVisible(true);
       // console.log("yyyyyyy",place.geometry.location);
   debugger;
       var address = '';
       if (place.address_components) {
         address = [
           (place.address_components[0] && place.address_components[0].short_name || ''),
           (place.address_components[1] && place.address_components[1].short_name || ''),
           (place.address_components[2] && place.address_components[2].short_name || '')
         ].join(' ');
       }
   var lol = infowindowContent.children['place-address'].textContent;
       infowindowContent.children['place-icon'].src = place.icon;
       infowindowContent.children['place-name'].textContent = place.name;
       infowindowContent.children['place-address'].textContent = address;
       infowindow.open(map, marker);
           var xx=place.geometry.location;
            // console.log("center", lol);
          
     });
   
     // Sets a listener on a radio button to change the filter type on Places
     // Autocomplete.
     function setupClickListener(id, types) {
       var radioButton = document.getElementById(id);
       radioButton.addEventListener('click', function() {
         autocomplete.setTypes(types);
       });
     }
   
     setupClickListener('changetype-all', []);
     setupClickListener('changetype-address', ['address']);
     setupClickListener('changetype-establishment', ['establishment']);
     setupClickListener('changetype-geocode', ['geocode']);
   
     document.getElementById('use-strict-bounds')
         .addEventListener('click', function() {
           // console.log('Checkbox clicked! New state=' + this.checked);
           autocomplete.setOptions({strictBounds: this.checked});
         });
     
   

   }
</script>
<!--  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDyHMFSb0PBw4Yr_3IdBCNflmVdedYjY0w=places&callback=initMap" ></script> 
   documentation
    1- get script from here 
    https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete
    2- get free api from here
    https://developers.google.com/places/web-service/get-api-key
  -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAnOwIYRrSJB2orXX3brDjEijyZzm5hnUE&libraries=places&callback=initMap"
        async defer></script>


<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/place/autocomplete/xml?input=Amoeba&types=establishment&location=37.76999,-122.44696&radius=500&key=AIzaSyCxWrYV1T1NvRlaYYaggC7CUzubuU1SZAs"></script>
 -->
 
  <!-- <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> -->

 <script type="text/javascript">
  function emptyGlry(){
    $('#preview').empty();
    $('#deleted_index').val("");
  allDeletedImgIndx=[];
// alert("jjjooo");
  }
   function emptyrrry(){
 
    $('#deleted_index').val("");
  allDeletedImgIndx=[];
  
  $('.eDITcontainerDiv').remove();
 // alert("jjjooo");
  }
     // console.log("fkdsjlnkljisng");
     var $preview;
    /// array of all deleted image index in gallery
     var allDeletedImgIndx=[];

      function previewImages() {

  // $preview = $('#preview').empty();
    $preview = $('#preview');

  if (this.files) $.each(this.files, readAndPreview);

  function readAndPreview(i, file) {
    
    if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
      return alert(file.name +" is not an image");
    } // else...
    
    var reader = new FileReader();

    $(reader).on("load", function() {
       $preview.append($('<div class="containerDiv col-xs-6 eDITcontainerDiv"   > </div>'));
                     $(".containerDiv:last").append($('<span class="btnBVImg"> X</span>'));

      $(".containerDiv:last").append($("<img />", {src:this.result, height:100, class: "responsive-image img-thumbnail alertDetails specialGim" , hover:hhh()}));

////in edit pages

           //  $preview.append($('<button class="btnBVImg"> X</button>'));
   //        $( '<button class="btnBVImg"> X</button>' ).insertBefore( ".alertDetails" );
        //   $( '<button class="btnBVImg"> X</button>' ).insertBefore( ".alertDetails" );

    //       $(".btnBVImg:first-child").remove();



    });

    reader.readAsDataURL(file);
    
  }

}


$('#file-input').on("change", previewImages);
     $("#gallery").change(function(e) {
 
    for (var i = 0; i < e.originalEvent.srcElement.files.length; i++) {
        
        var file = e.originalEvent.srcElement.files[i];

        var img = document.createElement("img");
        ///   $( '<button class="btnBVImg"> X</button>' ).insertBefore( ".alertDetails" );

        var reader = new FileReader();
        reader.onloadend = function() {
             img.src = reader.result;
        }

                           //   $preview.append($('<button class="btnBVImg"> X</button>'));

        reader.readAsDataURL(file);
     //   $("#gallery").after(img);
     
    }
});
      $(document).on('click','.btnBVImg',function(){
        $('#deleted_index').val("");
           //   alert("hamada tat7");
        var lenGTHimg = $(this).parent().index();
        var files = $('#file-input').prop("files");
    var names = $.map(files, function(val){
        return val.name;
        console.log(names[3]); 

    });
    var nameDeleted = names[lenGTHimg];
    console.log("files",files);   

      allDeletedImgIndx.push(lenGTHimg);
  //  var newFiles = files[0].slice(lenGTHimg,1);
$('#deleted_index').val(allDeletedImgIndx);
 
$(this).next().css('display' ,' none');
$(this).parent().css('display' ,' none');

$(this).remove();


   console.log("allDeletedImgIndx", allDeletedImgIndx);
});
      function hhh(){
     //  $preview.append($('<button class="btnBVImg"> X</button>'));
      //  $(this).remove();
      }
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                   $("#projectLogoInDiv").css("display", "none");
    $("#projectLogoIMGDiv").css("display", "initial");
                    $("#projectLogo").css("display", "initial");

                    $('#projectLogo')
                        .attr('src', e.target.result)
                        .width(156.354)
                        .height(118);
                        $('.fullImage')
                        
                        .width(600);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        readURLicon
         function readURLicon(){
         // alert("yy");
              $(".mainIco").click();

         }
        function readURLICON(input) {
            $("this").attr("name", "logo");
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                   $("#projectLogoInDiv").css("display", "none");
    $("#projectLogoIMGDiv").css("display", "initial");
                    $("#projectLogo").css("display", "initial");

                    $('#projectLogo')
                        .attr('src', e.target.result)
                        .width(156.354)
                        .height(118);
                        $('.fullImage')
                        
                        .width(600);
                };

                reader.readAsDataURL(input.files[0]);
            }
                         $("this").attr("name", "logo");
// var name4 = this.attr(name);
// console.log ("name4" ,name4);
        }
     function cancelLogo(){
   $("#projectLogoInDiv").css("display", "block");
     $("#projectLogoIMGDiv").css("display", "none");
          $("#projectLogo").css("display", "none");
  }
</script>
<!-- 
<script>
  ///in edite mode gallery

  $(document).ready(function(){
   /* $("#btn1").click(function(){
        $("p").append(" <b>Appended text</b>.");
    });*/
      var imagesSrc=[];
        var logosSrc="";
      var  editGallery ;
        var  editLogo ;
var  cardImg;
if(editGallery=="yes"){
    $preview.append($('<div class="containerDiv col-xs-6"> </div>'));
   $(".containerDiv:last").append($('<span class="btnBVImg"> X</span>'));
  for (i = 0; i < imagesSrc.length; i++) {

     cardImg = document.createElement('img');
        $(cardImg).attr("class",  "responsive-image img-thumbnail alertDetails specialGim");

            $(cardImg).attr('src', imagesSrc[i]);

    (".containerDiv:last").append(cardImg);

  }
}
else{

}

  //// edit logo
  if(editGallery=="yes"){
 //  logoImg = document.createElement('img');
      //  $(logoImg).attr("id", "id_" + i);

             $("#projectLogo").attr('src', logosSrc);
              $("#projectLogoInDiv").css("display", "none");
    $("#projectLogoIMGDiv").css("display", "initial");
                    $("#projectLogo").css("display", "initial");
          //      $(logoImg).addClass('responsive-image img-circle img-thumbnail');

 //   ("#projectLogo").append(logoImg);
}
else{}
});
</script> -->
<script type="text/javascript">

   //  $('.form_datetime').datetimepicker();
     $('.js-example-basic-multiple').select2();
</script>
<script>
   $(function () {
       // Init page helpers (Appear + CountTo plugins)
       App.initHelpers(['appear', 'appear-countTo']);
   });
</script>
<!-- OneUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock, Appear, CountTo, Placeholder, Cookie and App.js -->
<!-- Page Plugins -->
<!-- Page JS Code -->
<script>
   $(function () {
       // Init page helpers (Slick Slider plugin)
       App.initHelpers('slick');
   });
</script>
<script>
   $(function () {
       // Init page helpers (Slick Slider plugin)
       App.initHelpers('slick');
   });
</script>
<script>
   $(function () {
       // Init page helpers (Magnific Popup plugin)
       App.initHelpers('magnific-popup');
   });
</script>
<script type="text/javascript">
   $(function () {
       // Init page helpers (BS Datepicker + BS Colorpicker + Select2 + Masked Input + Tags Inputs plugins)
       App.initHelpers(['datepicker', 'colorpicker', 'select2', 'masked-inputs', 'tags-inputs']);
   });
</script>
<script>
   $(function () {
       // Init page helpers (Slick Slider + Easy Pie Chart plugins)
       App.initHelpers(['slick', 'easy-pie-chart']);
   });
</script>
@yield('script')
</body>
</html>