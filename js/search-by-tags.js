$(document).ready(function() {
  performSearch();
  $('.gametag').on('change', function() {
    performSearch();
  });

  function performSearch() {
    var gameTags = $('.gametag:checked').map(function() {
      return this.value;
    }).get();

    $.ajax({
      url: 'src/search.php',
      method: 'POST',
      data: {
        category: gameTags
      },
      success: function(response) {
        $('#search-results').html(response);
      }
    });
  }
});