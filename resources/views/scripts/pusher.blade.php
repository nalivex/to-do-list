<script>
  // Pusher.logToConsole = true;

  const APP_KEY = "{{ env('PUSHER_APP_KEY') }}";
  const cluster = "{{ env('PUSHER_APP_CLUSTER') }}";

  const pusher = new Pusher(APP_KEY, {
    cluster,
    encrypted: true,
    authEndpoint: '/broadcast/auth',
  });
</script>
