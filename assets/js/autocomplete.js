$(document).ready(function() {
    $('#keyword').on('input', function() {
      var keyword = $(this).val();
      if (keyword.length >= 2) { // Minimum 2 characters for autocomplete
        $.ajax({
          url: '<?php echo base_url(); ?>guest/searchAutocomplete',
          type: 'POST',
          dataType: 'json',
          data: {keyword: keyword},
          success: function(data) {
            var autocompleteResults = '';
            data.forEach(function(result) {
              autocompleteResults += '<li>' + result.judul + '</li>'; // Modify this based on your table structure
            });
            $('#autocomplete-results').html(autocompleteResults);
          }
        });
      } else {
        $('#autocomplete-results').empty();
      }
    });
  });