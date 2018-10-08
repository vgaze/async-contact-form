$(function() {
  $.validator.setDefaults({
    errorClass: 'alert3',
    highlight: function(element) {
      $(element)
        .closest('name')
        .addClass('alert3');
    },
    unhighlight: function(element) {
      $(element)
        .closest('.name')
        .removeClass('alert3');
    }
  });

  //contact
    $("#con").validate({
    rules: {
      to: {
        required: true,
      },
      name: {
        required: true,
        lettersonly: true
      },
      email: {
        required: true,
        email: true,
      },  
      subject: {
        required: true,
      },
      msg: {
        required: true, 
      },
      human: {
        required: true,
      },
    },
    messages: {
      to: 'Please select a recipient.',
      name: 'Please enter name.',
      subject: 'Please enter subject.',
      msg: 'Please enter message.',
      email: {
        required: 'Please enter an email address.',
        email: 'Please enter a <em>valid</em> email address.'
      }
    }
  });
});

  
