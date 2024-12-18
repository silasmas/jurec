</div>
<div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>

<!--=================================
 jquery -->

<!-- jquery -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }} "></script>

<!-- plugins-jquery -->
<script src="{{ asset('assets/js/plugins-jquery.js') }} "></script>

<!-- plugin_path -->
<script>
    var plugin_path = '../assets/js/';
</script>

<!-- REVOLUTION JS FILES -->
<script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }} "></script>
<script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }} "></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }} "></script>
<script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }} "></script>
<!-- revolution custom -->
<script src="{{ asset('assets/revolution/js/revolution-custom.js') }} "></script>

<!-- custom -->
<script src="{{ asset('assets/js/custom.js') }} "></script>

<script src="{{ asset('assets/custom/sweetalert2/dist/sweetalert2.all.min.js') }}"></script>


<script>
    function add(form, mothode, url) {
        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        var f = form;
        var u = url;
        Swal.fire({
            title: 'Merci de patienter...',
            icon: 'info'
        })
        $.ajax({
            url: u,
            method: mothode,
            data: $(f).serialize(),
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            success: function (data) {

                if (!data.reponse) {
                    Swal.fire({
                        title: data.msg,
                        icon: 'error'
                    })
                } else {
                    Swal.fire({
                        title: data.msg,
                        icon: 'success'
                    })
                    $(f)[0].reset();
                    // actualiser();
                }

            },
            error: function(xhr) {
                console.log(xhr)
            var errors = xhr.responseJSON.errors;
            var errorMessage = '';
            $.each(errors, function(key, value) {
                errorMessage += value + '\n';
            });
            Swal.fire({
                title: 'Erreur de validation',
                text:errorMessage,
                icon: 'error'
                    })
             }
        });
    }
function actualiser() {
        location.reload();
    }
</script>
</body>

</html>
