
// sticky navbar
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('.header-main').addClass('sticky')
  } else {
    $('.header-main').removeClass('sticky')
  }
})

$('[data-background').each(function () {
  $(this).css(
    'background-image',
    'url( ' + $(this).attr('data-background') + '  )',
  )
})

$(document).ready(function() {
  var owl = $('#carousel1');

  owl.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoplay: true,
    autoplayTimeout: 2500,
    autoplayHoverPause: false,
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      1000: {
        items: 1,
      },
    },
  });

  // Pause the carousel on mouseenter
  owl.on('mouseenter', function() {
    owl.trigger('stop.owl.autoplay');
  });

  // Resume the carousel on mouseleave
  owl.on('mouseleave', function() {
    owl.trigger('play.owl.autoplay');
  });
});

// new WOW().init()


jQuery(document).ready(function ($) {
  //Form Validation Home Page Form

  $('#contactForm').on('submit', function (e) {
    e.preventDefault()
    const h_email = $('#h_email').val()

    var regex = ''
    var valid

  
    regex = '^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$'
    valid = validateInputs(h_email, regex)

    if (!valid || h_email == '') {
      alert('Please enter valid email address')
      return false
    }



    if ($('#h_submit').hasClass('process')) {
      alert('Please wait while processing...')
    } else {
      $('#h_submit').addClass('process')
      $.ajax({
        url: 'contactmail.php',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
          var obj1 = $.parseJSON(data)
          if (obj1[0] === 'success') {
            $('#contactForm')[0].reset()
            $('#h_submit').removeClass('process')
            location.assign('subscribtion.php')
          } else if (obj1[0] === 'validation') {
            alert('Fill all mandatory fields')
            $('#h_submit').removeClass('process')
          }  else if (obj1[0] === 'tryagain') {
            alert('Please try again.')
            $('#h_submit').removeClass('process')
          }
        },
      })
      // $("#send_message_form").submit();
    }
  })

  function validateInputs(value, pattern) {
    var regexppattern
    regexppattern = new RegExp(pattern)
    var valid = regexppattern.test(value)
    return valid
  }
});


// Application form

jQuery(document).ready(function ($) {
  //Form Validation Home Page Form

  $('#contactusForm').on('submit', function (e) {
    e.preventDefault()
    const h_name = $('#h_name').val()
    const h_email = $('#h_email').val()
    const h_phone = $('#h_phone').val()
    const h_subject = $('#h_subject').val()
    const h_productid = $('#h_productid').val()
    const h_quantity = $('#h_quantity').val()
    const h_message = $('#h_message').val()

    var regex = ''
    var valid

    regex = '^[a-zA-Z][a-zA-Z. ]{2,40}$'
    valid = validateInputs(h_name, regex)

    if (!valid || h_name == '') {
      alert('Please enter valid name')
      return false
    }

  
    regex = '^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,4}$'
    valid = validateInputs(h_email, regex)

    if (!valid || h_email == '') {
      alert('Please enter valid email address')
      return false
    }


    regex = '^[0-9 -]{10,20}$'
    valid = validateInputs(h_phone, regex)

    if (!valid || h_phone == '') {
      alert('Please enter valid phone number')
      return false
    }

    if (h_subject === '' || h_subject === null) {
      alert('Pleae enter valid subject')
      return false
    }

    if (h_productid === '' || h_productid === null) {
      alert('Pleae enter product')
      return false
    }

    regex = '^[0-9 -]{0,10}$'
    valid = validateInputs(h_quantity, regex)

    if (!valid || h_quantity == '') {
      alert('Please enter the quantity')
      return false
    }


    if (h_message === '' || h_message === null) {
      alert('Pleae enter valid message')
      return false
    }


    if ($('#h_submit').hasClass('process')) {
      alert('Please wait while processing...')
    } else {
      $('#h_submit').addClass('process')
      $.ajax({
        url: 'contactusmail.php',
        type: 'POST',
        data: new FormData(this),
        processData: false,
        contentType: false,
        cache: false,
        success: function (data) {
          var obj1 = $.parseJSON(data)
          if (obj1[0] === 'success') {
            $('#contactusForm')[0].reset()
            $('#h_submit').removeClass('process')
            location.assign('thank-you.php')
          } else if (obj1[0] === 'validation') {
            alert('Fill all mandatory fields')
            $('#h_submit').removeClass('process')
          } else if (obj1[0] === 'message') {
            alert('Please enter message.')
            $('#h_submit').removeClass('process')
          } else if (obj1[0] === 'tryagain') {
            alert('Please try again.')
            $('#h_submit').removeClass('process')
          }
        },
      })
      // $("#send_message_form").submit();
    }
  })

  function validateInputs(value, pattern) {
    var regexppattern
    regexppattern = new RegExp(pattern)
    var valid = regexppattern.test(value)
    return valid
  }
});