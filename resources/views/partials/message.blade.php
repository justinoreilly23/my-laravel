<script >

  const message = "#flash-message";
  const time    = 1000;
  const wait    = 3000;

  $(document).ready(function() {
    $(message).ready(function() {
      $(message).slideDown(time, function() {
        $(message).delay(wait).slideToggle(time);
      });
    });
  });
</script >

@if(session('message'))
  <div id="flash-message" class="flash-message has-background-success text-white" >
    {{ session('message') }}
  </div >
@endif