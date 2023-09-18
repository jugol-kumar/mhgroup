
<script src="{{ asset('assets/frontend') }}/vendor/modernizr/modernizr.min.js"></script>
<script src="{{ asset('assets/frontend') }}/vendor/plugins/js/plugins.min.js"></script>
<script src="{{ asset('assets/frontend') }}/js/theme.js"></script>
<script src="{{ asset('assets/frontend') }}/js/views/view.contact.js"></script>
<script src="{{ asset('assets/frontend') }}/js/theme.init.js"></script>
<script src="{{ asset('assets/frontend') }}/js/views/view.contact.js"></script>
<script src="{{ asset('assets/frontend') }}/js/frencybox.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    var myModal = new bootstrap.Modal(document.getElementById('myModal'))

    var preeloader = document.getElementById("preeloader");
    window.addEventListener('load', function(){
        preeloader.style.display="none";
        preeloader.remove();
        checkCookie()
    });




    function setCookie(cname, cvalue, exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires="+d.toUTCString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie() {
        var user = getCookie("username");
        if (user === "") {
            myModal.show();
            setCookie("username", "done", 1);
        }
    }

</script>
@stack('js')
</body>
</html>
