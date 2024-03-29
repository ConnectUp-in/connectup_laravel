@php
    if ($way == 'add') {
        $page['title'] = 'Add New Event | ConnectUp';
    } else {
        $page['title'] = 'Edit - ' . $event->title . ' | ConnectUp';
    }
@endphp
@extends('layouts.admin')

@section('styles')
    <link rel="stylesheet" href="/assets/admin/src/assets/css/light/apps/blog-create.css">
    <link rel="stylesheet" href="/assets/admin/src/assets/css/dark/apps/blog-create.css">
    <style>
        .question {
            padding: 2em;
            border: 1px solid #ccc3;
            border-radius: 5px;
            margin-bottom: 3em;
        }
    </style>
@endsection

@section('content')
    <div class="middle-content container-xxl p-0">

        <!-- BREADCRUMB -->
        <div class="page-meta">
            <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Event</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->
        <form method="POST" enctype="multipart/form-data"
            action="{{ $way == 'add' ? route('superadmin.event.create') : route('superadmin.event.update', $event->id) }}">
            <div class="row mb-4 layout-spacing layout-top-spacing">
                <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="widget-content widget-content-area blog-create-section">
                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="title" id="title"
                                    placeholder="Event Title" value="{{ $event->title ?? '' }}">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon3">{{ url('event/') . '/' }}</span>
                            <input type="text" class="form-control" name="slug" id="slug"
                                placeholder="Event Slug" value="{{ $event->slug ?? '' }}" aria-describedby="basic-addon3">
                        </div>
                        <div class="row mb-4">
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="link" id="link"
                                    placeholder="Event Link" value="{{ $event->link ?? '' }}">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <label class="form-label">Registration Date</label>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <input id="r_date_start"name="r_date_start" value="{{ $event->r_dates[0] ?? '' }}"
                                            class="form-control flatpickr flatpickr-input active" type="datetime-local"
                                            placeholder="Select Date..">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="r_date_end" name="r_date_end" value="{{ $event->r_dates[1] ?? '' }}"
                                            class="form-control flatpickr flatpickr-input active" type="datetime-local"
                                            placeholder="Select Date..">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Event Date</label>
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <input id="e_date_start"name="e_date_start" value="{{ $event->e_dates[0] ?? '' }}"
                                            class="form-control flatpickr flatpickr-input active" type="datetime-local"
                                            placeholder="Select Date..">
                                    </div>
                                    <div class="col-md-6">
                                        <input id="e_date_end" name="e_date_end" value="{{ $event->e_dates[1] ?? '' }}"
                                            class="form-control flatpickr flatpickr-input active" type="datetime-local"
                                            placeholder="Select Date..">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-tabs  mb-3 mt-3" id="simpletab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab"
                                    aria-controls="home" aria-selected="true">Content</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Additonal Fields</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="simpletabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">


                                <div class="row mb-4">
                                    <div class="col-sm-12">
                                        <label>Content</label>
                                        <textarea name="content" class="form-control w-100" id="editor" rows="30">{{ $event->content ?? '' }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <input type="hidden" name="additional_fields" id="additional_fields"
                                    value="{{ json_encode($event->additonal_fields ?? []) }}">
                                <div class="questions-body">

                                    <div class="p-2 question">
                                        <label class="form-label">Text Question</label>

                                        <div class="row ">
                                            <div class="col-sm-11">
                                                <input type="text" class="form-control" name="field_1" id="field_1"
                                                    placeholder="Field 1">
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" class="btn btn-secondary btn-sm delete-question">
                                                    <i class="fas fa-trash"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="button-container">
                                    <button type="button" onclick="addText()"
                                        class="btn btn-primary add-question">Text</button>
                                    <button type="button" onclick="addTextarea()"
                                        class="btn btn-primary add-question">Textarea</button>
                                    <button type="button" onclick="addCheckbox()"
                                        class="btn btn-primary add-question">Checkbox</button>
                                    <button type="button" onclick="addRadio()"
                                        class="btn btn-primary add-question">Radio</button>
                                    <button type="button" onclick="addSelect()"
                                        class="btn btn-primary add-question">Select</button>
                                </div>
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
                                        id="showPublicly" {{ $event->active ?? '' ? 'checked' : '' }}>
                                    <label class="switch-label" for="showPublicly">Active</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 mb-4">
                                <div class="switch form-switch-custom switch-inline form-switch-primary">
                                    <input name="suspended" class="switch-input" type="checkbox" role="switch"
                                        id="enableComment" {{ $event->suspended ?? '' ? 'checked' : '' }}>

                                    <label class="switch-label" for="enableComment">Suspended</label>
                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="tags">Tags</label>
                                <select id="objectives" class="tags" name="tags[]" multiple>
                                    @foreach ($event->tags ?? [] as $tag)
                                        <option value="{{ $tag }}" selected>{{ $tag }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="tags">Required Fields</label>
                                <select id="objectives" class="multiple" name="required_fields[]" multiple>
                                    <option value="academic_background"
                                        {{ in_array('academic_background', $event->required_fields ?? []) ? 'selected' : '' }}>
                                        Academic Background</option>
                                    <option value="college"
                                        {{ in_array('college', $event->required_fields ?? []) ? 'selected' : '' }}>College
                                    </option>
                                    <option value="country"
                                        {{ in_array('country', $event->required_fields ?? []) ? 'selected' : '' }}>Country
                                    </option>
                                    <option value="graduation_year"
                                        {{ in_array('graduation_year', $event->required_fields ?? []) ? 'selected' : '' }}>
                                        Graduation Year</option>
                                    <option value="interests"
                                        {{ in_array('interests', $event->required_fields ?? []) ? 'selected' : '' }}>
                                        Interests</option>
                                    <option value="birthday"
                                        {{ in_array('birthday', $event->required_fields ?? []) ? 'selected' : '' }}>
                                        Birthday</option>
                                    <option value="bio"
                                        {{ in_array('bio', $event->required_fields ?? []) ? 'selected' : '' }}>Bio</option>
                                    <option value="about"
                                        {{ in_array('about', $event->required_fields ?? []) ? 'selected' : '' }}>About
                                    </option>
                                    <option value="website"
                                        {{ in_array('website', $event->required_fields ?? []) ? 'selected' : '' }}>Website
                                    </option>


                                </select>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-4">
                                <div class="form-group mb-4">
                                    <label for="location">Event Location</label>
                                    <input type="text" class="form-control" name="location" id="location"
                                        placeholder="Event Location" value="{{ $event->location ?? '' }}">

                                </div>
                            </div>
                            <div class="col-xxl-12 col-md-12 mb-4">
                                <label for="product-images">Featured Image</label>
                                <div class="multiple-file-upload">
                                    <input type="file" name="image">
                                    <img src="{{ $event->image ?? '' }}" onerror="this.style.display == 'none'"
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
        $('.multiple').selectize({
            placeholder: "Search...",
            delimiter: ",",
            persist: false,
            plugins: ["remove_button", "restore_on_backspace"],
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
    <script>
        var dummy_additional_fields = JSON.parse(`{!! json_encode($event->additional_fields ?? []) !!}`);
        console.log(dummy_additional_fields);
        var questions = dummy_additional_fields;
        displayQuestions(questions);


        function deleteQuestion(index) {
            questions.splice(index, 1);
            displayQuestions(questions);
        }


        function addText() {
            updateQuestions();

            var question = {
                "title": "Untitled Question",
                "identifier": "field" + (questions.length + 1),
                "type": "text",
                "required": false
            };
            questions.push(question);
            displayQuestions(questions);
        }

        function addTextarea() {
            updateQuestions();
            var question = {
                "title": "Untitled Question",
                "identifier": "field" + (questions.length + 1),
                "type": "textarea",
                "required": false
            };
            questions.push(question);
            displayQuestions(questions);
        }





        function displayQuestions(questions) {

            $("#additional_fields").val(JSON.stringify(questions));
            var html = "";
            for (var i = 0; i < questions.length; i++) {
                var question = questions[i];
                var required = question.required ? "required" : "";
                var type = question.type;
                var identifier = question.identifier;
                var title = question.title;
                if (type == "text") {
                    html += `
                                    <div class="p-2 question">
                                        <label class="form-label">Text Question</label>

                                        <div class="row ">
                                            <div class="col-sm-11">
                                                <input type="text" value="${title}" class="form-control" placeholder="Enter your answer" ${required} name="question-${identifier}">
                                            </div>
                                            <div class="col-sm-1">
                                                <button type="button" onclick="deleteQuestion(${i})" class="btn btn-secondary btn-sm delete-question">
                                                    <i class="fas fa-trash"></i>
                                            </div>
                                        </div>
                                    </div>`;
                } else if (type == "textarea") {
                    html += `
                                    <div class="p-2 question">
                                        <label class="form-label">Text Area Question</label>

                                        <div class="row ">
                                            <div class="col-sm-11">
                                                <input type="text" value="${title}" class="form-control" placeholder="Enter your answer" ${required} name="question-${identifier}">
                                           </div>
                                            <div class="col-sm-1">
                                                <button type="button" onclick="deleteQuestion(${i})" class="btn btn-secondary btn-sm delete-question">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>`;
                }
            }
            $(".questions-body").html(html);
        }



        function updateQuestions() {
            var newquestions = [];
            questions.forEach(question => {
                var identifier = question.identifier;
                question.title = $(`input[name="question-${identifier}"]`).val();
                newquestions.push(question);
            });
            questions = newquestions;
        }
    </script>
@endsection
