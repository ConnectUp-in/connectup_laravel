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
                    <li class="breadcrumb-item"><a href="#">App</a></li>
                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit</li>
                </ol>
            </nav>
        </div>
        <!-- /BREADCRUMB -->

        <div class="row mb-4 layout-spacing layout-top-spacing">

            <div class="col-xxl-9 col-xl-12 col-lg-12 col-md-12 col-sm-12">

                <div class="widget-content widget-content-area blog-create-section">

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="post-title" placeholder="Post Title"
                                value="Elegant and useful Admin Templates">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <label>Content</label>
                            <div id="blog-description">
                                Aliquam leo elit, semper sed diam non, efficitur semper mi. Sed pulvinar velit massa, nec
                                ornare arcu laoreet non. Quisque dignissim lectus eget lectus pulvinar imperdiet. Aliquam
                                dictum porttitor laoreet. Duis ac tortor non sem vestibulum interdum in quis dui.
                                Pellentesque nec augue eleifend, convallis tortor ac, posuere turpis. Nulla commodo euismod
                                felis vitae eleifend. Morbi cursus maximus mauris ac lacinia. Nullam tellus dolor, sodales
                                vitae nunc id, luctus lacinia leo. Sed id urna venenatis lacus lobortis ullamcorper nec
                                dignissim odio.
                            </div>
                        </div>
                    </div>

                </div>

                <div class="widget-content widget-content-area blog-create-section mt-4">

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

                </div>

            </div>

            <div class="col-xxl-3 col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-xxl-0 mt-4">
                <div class="widget-content widget-content-area blog-create-section">
                    <div class="row">
                        <div class="col-xxl-12 mb-4">
                            <div class="switch form-switch-custom switch-inline form-switch-primary">
                                <input class="switch-input" type="checkbox" role="switch" id="showPublicly" checked>
                                <label class="switch-label" for="showPublicly">Publish</label>
                            </div>
                        </div>
                        <div class="col-xxl-12 mb-4">
                            <div class="switch form-switch-custom switch-inline form-switch-primary">
                                <input class="switch-input" type="checkbox" role="switch" id="enableComment" checked>
                                <label class="switch-label" for="enableComment">Enable Comments</label>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-md-12 mb-4">
                            <label for="tags">Tags</label>
                            <input id="tags" class="blog-tags" value="Admin, Themeforest, Bootstrap">
                        </div>
                        <div class="col-xxl-12 col-md-12 mb-4">
                            <label for="category">Category</label>
                            <input id="category" name="category" value="Themeforest, Cork Admin, Dashboard, Vue, Laravel"
                                placeholder="Choose...">
                        </div>
                        <div class="col-xxl-12 col-md-12 mb-4">
                            <label for="product-images">Featured Image</label>
                            <div class="multiple-file-upload">
                                <input type="file" class="filepond file-upload-multiple" name="filepond"
                                    id="product-images" multiple data-allow-reorder="true" data-max-file-size="3MB"
                                    data-max-files="5">
                            </div>
                        </div>
                        <div class="col-xxl-12 col-sm-4 col-12 mx-auto">
                            <button class="btn btn-success w-100">Update Post</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
