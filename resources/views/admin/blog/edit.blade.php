@php
    if ($way == 'add') {
        $page['title'] = 'Add New Blog | ConnectUp';
    } else {
        $page['title'] = 'Registrations - ' . $blog->title . ' | ConnectUp';
    }
@endphp
@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="/assets/admin/src/assets/css/light/apps/blog-create.css">
    <link rel="stylesheet" href="/assets/admin/src/assets/css/dark/apps/blog-create.css">
@endsection

@section('content')
    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->
        <form method="POST" enctype="multipart/form-data"
            action="{{ $way == 'add' ? route('superadmin.blog.create') : route('superadmin.blog.update', $blog->id) }}">
            <div class="row mb-4 layout-spacing layout-top-spacing">

                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                    <div class="widget-content widget-content-area blog-create-section">

                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="Blog Title" value="{{ $blog->title ?? '' }}">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">{{ url('blogs/') . '/' }}</span>
                            <input type="text" class="form-control" name="slug" id="slug" placeholder="Blog Slug"
                                value="{{ $blog->slug ?? '' }}" aria-describedby="basic-addon3">
                        </div>

                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <label>Content</label>
                                <textarea name="content" class="form-control w-100" id="editor" rows="30">{{ $blog->content ?? '' }}</textarea>
                            </div>
                        </div>

                    </div>

                    {{-- <div class="widget-content widget-content-area blog-create-section mt-4">

                    <h5 class="mb-4">SEO Settings</h5>

                    <div class="row mb-4">
                        <div class="col-xxl-12 mb-4">
                            <input type="text" class="form-control" id="post-meta-title" placeholder="Post Title"
                                value="Elegant and useful Admin Templates">
                        </div>
                        <div class="col-xxl-12">
                            <label for="post-meta-description">Meta Description</label>
                            <textarea name="post-meta-description" class="form-control" id="post-meta-description" cols="10" rows="5">Perspiciatis maxime facilis velit tenetur, iste expedita in dignissimos iure aut excepturi sapiente eligendi repellat. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut blanditiis assumenda doloremque fugiat minima tempora!</textarea>
                        </div>
                    </div>

                </div> --}}

                </div>

                <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                    <div class="widget-content widget-content-area blog-create-section">
                        <div class="row">
                            <div class="col-xxl-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-primary">
                                    <input name="active" class="switch-input" type="checkbox" role="switch"
                                        id="showPublicly" checked>
                                    <label class="switch-label" for="showPublicly">Active</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-primary">
                                    <input name="suspended" class="switch-input" type="checkbox" role="switch"
                                        id="enableComment" checked>
                                    <label class="switch-label" for="enableComment">Suspended</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="tags">Tags</label>
                                <select id="objectives" class="tags" name="tags[]" multiple>
                                    @foreach ($blog->tags ?? [] as $tag)
                                        <option value="{{ $tag }}" selected>{{ $tag }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-4">
                                <div class="form-group mb-4">
                                    <label for="category">Select Category</label>
                                    <select class="form-select " name="category" id="category">
                                        @foreach (getCategories() as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $blog->category ?? '' == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="product-images">Featured Image</label>
                                <div class="multiple-file-upload">
                                    <input type="file" name="image">
                                    <img src="{{ $blog->image ?? '' }}" onerror="this.style.display == 'none'"
                                        class="w-100" alt="">
                                </div>
                            </div>
                            <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                                <button class="btn btn-success w-100">Update Post</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>

    </div>
@endsection

@section('scripts')
    <script>
        $('.tags').selectize({
            placeholder: "Enter Tags",
            delimiter: ",",
            persist: false,
            plugins: ["remove_button", "restore_on_backspace"],
            create: function(input) {
                return {
                    value: input,
                    text: input,
                };
            },
        });

        $(document).ready(function() {
            $('#title').keyup(function() {
                $('#slug').val($(this).val().toLowerCase().split(',').join('').replace(/\s/g, "-"));
            });
        });
    </script>




    <script src="https://cdn.tiny.cloud/1/voorcxwhei9xokxcfmqg0v2pjebx0ztaskdrc2b61gicmxgy/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        var useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
        tinymce.init({
            selector: '#editor',
            plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
            codesample_languages: [{
                    text: 'Plain Text',
                    value: 'plain'
                },
                {
                    text: 'HTML/XML',
                    value: 'markup'
                },
                {
                    text: 'JavaScript',
                    value: 'javascript'
                },
                {
                    text: 'CSS',
                    value: 'css'
                },
                {
                    text: 'PHP',
                    value: 'php'
                },
                {
                    text: 'Ruby',
                    value: 'ruby'
                },
                {
                    text: 'Python',
                    value: 'python'
                },
                {
                    text: 'Java',
                    value: 'java'
                },
                {
                    text: 'C',
                    value: 'c'
                },
                {
                    text: 'C#',
                    value: 'csharp'
                },
                {
                    text: 'C++',
                    value: 'cpp'
                },
                {
                    text: 'Bash/Shell',
                    value: 'bash'
                },
                {
                    text: 'Nginx',
                    value: 'nginx'
                },
                {
                    text: 'SQL',
                    value: 'sql'
                },
                {
                    text: 'Dart/Flutter',
                    value: 'dart'
                },
                {
                    text: 'Yaml',
                    value: 'yaml'
                },
                {
                    text: 'XML',
                    value: 'xml'
                },
                {
                    text: 'JSON',
                    value: 'json'
                },
                {
                    text: 'Django/Jinja',
                    value: 'django'
                },
                {
                    text: 'Docker',
                    value: 'docker'
                },
                {
                    text: 'Git',
                    value: 'git'
                },
                {
                    text: 'Kotlin',
                    value: 'kotlin'
                },
                {
                    text: 'TypeScript',
                    value: 'typescript'
                },
                {
                    text: 'PowerShell',
                    value: 'powershell'
                },
                {
                    text: 'React JSX',
                    value: 'jsx'
                },
                {
                    text: 'Markdown',
                    value: 'markdown'
                },
            ],
            imagetools_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: 'undo redo | bold italic underline strikethrough | fontselect fontsizeselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
            toolbar_sticky: true,
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [{
                    title: 'My page 1',
                    value: 'https://www.tiny.cloud'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.moxiecode.com'
                }
            ],
            image_list: [{
                    title: 'My page 1',
                    value: 'https://www.tiny.cloud'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.moxiecode.com'
                }
            ],
            image_class_list: [{
                    title: 'None',
                    value: ''
                },
                {
                    title: 'Some class',
                    value: 'class-name'
                }
            ],
            importcss_append: true,
            file_picker_callback: function(callback, value, meta) {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {
                        text: 'My text'
                    });
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {
                        alt: 'My alt text'
                    });
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {
                        source2: 'alt.ogg',
                        poster: 'https://www.google.com/logos/google.jpg'
                    });
                }
            },
            templates: [{
                    title: 'New Table',
                    description: 'creates a new table',
                    content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
                },
                {
                    title: 'Starting my story',
                    description: 'A cure for writers block',
                    content: 'Once upon a time...'
                },
                {
                    title: 'New list with dates',
                    description: 'New List with dates',
                    content: '<div class="mceTmpl"><span class="cdate">cdate</span><br /><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
                }
            ],
            template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
            template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image imagetools table',
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'

        });

        // ClassicEditor
        //     .create( document.querySelector( '#editor' ) )
        //     .catch( error => {
        //         console.error( error );
        //     } );
        // $('#editor').summernote({
        //     height: 350, //set editable area's height
        //     codemirror: { // codemirror options
        //         theme: 'monokai'
        //     }
        // });
    </script>
@endsection
