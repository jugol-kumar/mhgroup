
<script src="{{ asset('assets/frontend') }}/vendor/modernizr/modernizr.min.js"></script>
<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{ asset('assets/frontend') }}/vendor/plugins/js/plugins.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/theme.js"></script>
<script src="{{ asset('assets/frontend') }}/js/views/view.contact.js"></script>
<script src="{{ asset('assets/frontend') }}/js/theme.init.js"></script>
<script>
    var preeloader = document.getElementById("preeloader");
    window.addEventListener('load', function(){
        preeloader.style.display="none";
        preeloader.remove();
    });
</script>
@stack('js')
</body>
</html>
