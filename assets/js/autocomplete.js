$(document).ready(function() {
  // Autocomplete functionality
  $('#keyword').keyup(function() {
      var keyword = $(this).val();
      if (keyword !== '') {
          $.ajax({
              url: "<?php echo base_url();?>guest/search_autocomplete",
              method: "POST",
              data: {keyword: keyword},
              success: function(data) {
                  $('#autocomplete-results').fadeIn();
                  $('#autocomplete-results').html(data);
              }
          });
      } else {
          $('#autocomplete-results').fadeOut();
      }
  });

  // Update the search form action on autocomplete selection
  $(document).on('click', '.autocomplete-item', function() {
      var closestKeyword = $(this).text(); // Use the closest keyword instead of the entered keyword
      $('#keyword').val(closestKeyword);
      $('#autocomplete-results').fadeOut();

      // Update the search form action
      $('.search-form').attr('action', "<?php echo base_url();?>guest/search?keyword=" + closestKeyword);
  });
});