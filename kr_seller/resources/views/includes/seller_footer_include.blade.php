        <!-- JAVASCRIPT -->
        
        <script src="{{ URL::asset('/libs/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{ URL::asset('/libs/metismenu/metismenu.min.js')}}"></script>
        <script src="{{ URL::asset('/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{ URL::asset('/libs/node-waves/node-waves.min.js')}}"></script>
        <script src="{{ URL::asset('/libs/prefixfree/prefixfree.min.js')}}"></script>
        <script src="{{ URL::asset('/libs/jquery/jquery.mCustomScrollbar.js')}}"></script>
        <script src="{{ URL::asset('/libs/slick/slick.min.js')}}"></script>
        <!-- Required datatable js -->
        <script src="{{ URL::asset('/libs/datatables/datatables.min.js')}}"></script>
        <script src="{{ URL::asset('/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js')}}"></script>
        <!-- Datatable init js -->
        <script src="{{ URL::asset('/libs/pages/datatables.init.js')}}"></script>
        <!-- Plugins js : 이미지 첨부파일 -->
        <script src="{{URL::asset('/libs/dropzone/dropzone.min.js')}}"></script>
        <!--tinymce js : 에디터 -->
        <script src="{{URL::asset('/libs/tinymce/tinymce.min.js')}}"></script>
        <!-- init js : 에디터 -->
        <script src="{{URL::asset('/libs/pages/form-editor.init.js')}}"></script>
        <!-- Summernote js : 에디터 -->
        <script src="{{URL::asset('/libs/summernote/summernote.min.js')}}"></script>

        @yield('script')

        <script src="{{ URL::asset('/js/common/app.min.js')}}"></script>
        <script src="{{ URL::asset('/js/common/main_header.js')}}"></script>
        <script src="{{ URL::asset('/js/myshop/seller.js')}}"></script>