<script >

  const message = "#flash-message";
  const time    = 800;
  const wait    = 2000;

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