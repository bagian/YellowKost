<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yellow Kost</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Theme initialization script to prevent FOUC -->
    <script src="{{ asset('js/components/themeInit.js') }}"></script>

    <!-- Dark Mode Script -->
    <script src="{{ asset('js/components/darkMode.js') }}"></script>

    {{-- jQuery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- Styles / Scripts -->
    {{-- @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot'))) --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @stack('style')

</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <!-- Main application script -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Modal Handler Script -->
    <script src="{{ asset('js/components/modalHandler.js') }}"></script>

    {{-- topbar / navbar top --}}
    @include('partials._topbar')

    {{-- sidebar --}}
    @include('partials._sidebar')

    <!-- Main Content -->
    <div class="p-4 sm:ml-64">
        <div class="p-4 rounded-lg dark:border-gray-700 mt-14">
            @yield('content')
        </div>
    </div>
    <!-- End Main Content -->

    <form action="{{ route('logout') }}" method="post" id="formLogout">
        @csrf
    </form>
    <script>
        $('#logout').on('click', function() {
            $('#formLogout').submit();
        });
    </script>

    {{-- image handler --}}
    <script id="deletedImage" type="text/template">
        <input type="hidden" name="deleted[]" value="">
    </script>
    <script>
        function initImagePreview({
            input,
            hidden,
            target,
            template,
            swiper,
            templateDelete = "#deletedImage",
            targetDelete = "form",
            callback = "",
        }) {
            const $input = $(input);
            const $hidden = $(hidden);
            const $target = $(target);
            const $template = $(template);
            const $templateDelete = $(templateDelete);
            const $targetDelete = $(targetDelete);

            let virtualFiles = [];

            $input.on('change', function() {
                const files = Array.from(this.files);
                imageHandler(files);
                this.value = "";
            });

            function preview(data) {
                const html = $template.html();
                const $clone = $(html);

                $clone.find('img').attr({
                    src: data.byte,
                    alt: data.name
                });

                $clone.find('button.delete-image').attr('data-tempid', data.tempid);

                swiper.appendSlide($clone[0]);
            }

            function imageHandler(files) {
                files.forEach(file => {
                    if (!file.type.startsWith('image/')) return;

                    if (virtualFiles.some(v => v.file.name === file.name && v.file.size === file.size)) return;

                    const tempid = Date.now() + Math.random();
                    virtualFiles.push({
                        tempid,
                        file
                    });

                    const reader = new FileReader();
                    reader.onload = function(e) {
                        preview({
                            tempid,
                            byte: e.target.result,
                            name: file.name
                        });
                        updateInputFiles();
                    };
                    reader.readAsDataURL(file);
                });
            }

            $target.on('click', '.delete-image', function() {
                const tempid = $(this).data('tempid');
                const slideIndex = $(this).closest('.swiper-slide').index();
                if (tempid != "") {
                    virtualFiles = virtualFiles.filter(f => f.tempid !== tempid);
                    updateInputFiles();
                } else {
                    const id = $(this).data('id');
                    const deleteHtml = $templateDelete.html();
                    const $delete = $(deleteHtml);
                    $delete.val(id);
                    console.log($delete);
                    $targetDelete.append($delete);
                    // console.log($('form').serialize());
                }
                swiper.removeSlide(slideIndex);
            });

            function updateInputFiles() {
                const dt = new DataTransfer();
                virtualFiles.forEach(f => dt.items.add(f.file));
                $hidden[0].files = dt.files;
                callback();
            }
        }
    </script>
    {{-- end image handler --}}

    @stack('scripts')
</body>

</html>