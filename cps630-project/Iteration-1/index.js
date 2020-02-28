$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
    }

    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass('show');
    });
  
    return false;
  });

$('.dropdown-submenu a.dropdown-toggle').on('click', function(e) {
      console.log("submenu click")
      var $subMenu = $(this).next('.dropdown-menu');
      $subMenu.toggleClass('show');
      console.log("ok interesting.")

      $('a.dropdown-item.attraction').on('click', function(e) {
        if ($(this).hasClass('taj-mahal')) {
          const city = document.querySelector(".taj-mahal");
          setMainImage(city.dataset.value);
          setBottomImages(city.dataset.value);
        } else if ($(this).hasClass('nile-river')) {
          const city = document.querySelector(".nile-river");
          setMainImage(city.dataset.value);
          setBottomImages(city.dataset.value);
        } else if ($(this).hasClass('nyc')) {
          const city = document.querySelector(".nyc");
          setMainImage(city.dataset.value);
          setBottomImages(city.dataset.value);
        } else if ($(this).hasClass('macchu-picchu')) {
          const city = document.querySelector(".macchu-picchu");
          setMainImage(city.dataset.value);
          setBottomImages(city.dataset.value);
        } else if ($(this).hasClass('opera-house')) {
          const city = document.querySelector(".opera-house");
          setMainImage(city.dataset.value);
          setBottomImages(city.dataset.value);
        } else if ($(this).hasClass('sagrada-familia')) {
          const city = document.querySelector(".sagrada-familia");
          setMainImage(city.dataset.value);
          setBottomImages(city.dataset.value);
        } else if ($(this).hasClass('snow')) {
          const city = document.querySelector(".snow");
          setMainImage(city.dataset.value);
          setBottomImages(city.dataset.value);
        }
      });
});

$('.dropdown-menu a.dropdown-item.popular-places').on('click', function(e) {
  if ($(this).hasClass('toronto')) {
    console.log("Toronto");
    const city = document.querySelector(".toronto");
    setMainImage(city.dataset.value);
    setBottomImages(city.dataset.value);
  } else if ($(this).hasClass('new-york')) {
    const city = document.querySelector(".new-york");
    setMainImage(city.dataset.value);
    setBottomImages(city.dataset.value);
  } else if ($(this).hasClass('madrid')) {
    const city = document.querySelector(".madrid");
    setMainImage(city.dataset.value);
    setBottomImages(city.dataset.value);
  } else if ($(this).hasClass('mumbai')) {
    const city = document.querySelector(".mumbai");
    setMainImage(city.dataset.value);
    setBottomImages(city.dataset.value);
  } else if ($(this).hasClass('singapore')) {
    const city = document.querySelector(".singapore");
    setMainImage(city.dataset.value);
    setBottomImages(city.dataset.value);
  }
});

$("#New_York").on("click", function() {
  $("#New-York-Form").toggle();
});
$("#Toronto").on("click", function() {
  $("#Toronto-Form").toggle();
});

$(".travelers").on("change",function() {
  var numNY = $("input[name='travelers']")[0].value;
  console.log(numNY);
  var numTO = $("input[name='travelers']")[1].value;
  console.log(numTO);
  var tableTO = $('#Toronto-Form');
  var tableNY = $('#New-York-Form');
  tableTO.find(".tage").remove();
  tableNY.find(".tage").remove();
  var grandTotal = (((numNY*1500)+(numTO*1000))*1.13).toFixed(2);
  for (i = 1; i <= numNY; i++) {
    $('<tr class="tage"><td class="label">Traveler #' + i + ' age</td><td> <input  name="NYage'+i+'" type="number" /> </td></tr>').insertBefore('#travelerAgeNY');
  }
  for (j = 1; j <= numTO; j++) {
    $('<tr class="tage"><td class="label">Traveler #' + j + ' age</td><td> <input name="TOage'+j+'" type="number" /> </td></tr>').insertBefore('#travelerAgeTO');
  }
  $( "#ny-trip-total" ).replaceWith( '<h5 id="ny-trip-total">$'+numNY*1500+'</h5>' );
  $( "#to-trip-total" ).replaceWith( '<h5 id="to-trip-total">$'+numTO*1000+'</h5>' );
  
  $( "#grand-total" ).replaceWith( '<h5 id="grand-total">Grand Total(w/ tax): $'+grandTotal+'</h5>' );
});


function setMainImage(imgID) {
  console.log(imgID);
  imageIDs = ['#main-img1', '#main-img2', '#main-img3', '#main-img4', '#main-img5', '#main-img6', '#main-img7',
  '#main-img8', '#main-img9', '#main-img10', '#main-img11', '#main-img12']
  imgID = "#" + imgID;

  for (var i = 0; i < imageIDs.length; i++) {
    if (imageIDs[i] === imgID) {
      $(imgID).css("display", "block");
    } else {
      $(imageIDs[i]).css("display", "none");
    }
  }
}

function setBottomImages(imgID) {
  imageIDs = ['#main-img1', '#main-img2', '#main-img3', '#main-img4', '#main-img5', '#main-img6', '#main-img7', 
  '#main-img8', '#main-img9', '#main-img10', '#main-img11', '#main-img12']
  imgID = "#" + imgID;

  var bottomImgID = imgID + "-";

  for (var i = 0; i < imageIDs.length; i++) {
    if (imageIDs[i] === imgID) {
      $(bottomImgID + 1).css("display", "inline-block");
      $(bottomImgID + 2).css("display", "inline-block");
      $(bottomImgID + 3).css("display", "inline-block");
    } else {
      $(imageIDs[i] + "-" + 1).css("display", "none");
      $(imageIDs[i] + "-" + 2).css("display", "none");
      $(imageIDs[i] + "-" + 3).css("display", "none");
    }
  }
}


