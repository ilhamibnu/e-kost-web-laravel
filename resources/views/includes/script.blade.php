    <!-- JavaScript Libraries -->
    <script>
        AOS.init();
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets-home/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets-home/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets-home/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets-home/lib/counterup/counterup.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Contact Javascript File -->
    <script src="{{ asset('assets-home/mail/jqBootstrapValidation.min.js') }}"></script>
    <script src="{{ asset('assets-home/mail/contact.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets-home/js/main.js') }}"></script>
    <script src="{{ asset('assets-home/js/vue/vue.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <!-- Template Javascript -->
    <script>
        AOS.init();
    </script>
    <script>
        var gallery = new Vue({
            el: "#gallery",
            mounted() {
                AOS.init();
            },
            data: {
                activePhoto: 0,
                photos: [{
                    id: 1,
                    url: "{{ asset('assets-home/img/blog-1.jpg') }}",
                }, {
                    id: 2,
                    url: "{{ asset('assets-home/img/blog-1.jpg') }}",
                }, {
                    id: 3,
                    url: "{{ asset('assets-home/img/blog-1.jpg') }}",
                }, {
                    id: 4,
                    url: "{{ asset('assets-home/img/blog-1.jpg') }}",
                }, ],
            },
            methods: {
                changeActive(id) {
                    this.activePhoto = id;
                },
            },
        });
    </script>
