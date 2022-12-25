
    <!--   Core JS Files   -->
    <script src="{{ asset('admins') }}/assets/js/core/popper.min.js"></script>
    <script src="{{ asset('admins') }}/assets/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('admins') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('admins') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <script src="{{ asset('admins') }}/assets/js/material-dashboard.min.js?v=3.0.4"></script>
</body>

</html>
