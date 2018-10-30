var $form = $('form#amoghform'),
    url = 'https://script.google.com/macros/s/AKfycbxb6F5-trio3P9LDlf5YDkVEPZsAogKZ5lZDLplYxNwEszn_14/exec'

$('#submit').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})