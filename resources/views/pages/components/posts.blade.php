{{-- <div class="posts-container"></div> --}}

@forelse ($posts as $post)
    @import('post', ['post' => $post])
@empty
@endforelse

@push('scripts')
    <script>
        function getPostHTMLbyJSON(post) {
            var tags, ytlink, meta, html = '';

            if (post.meta) {
                meta = `<div class="widget-box-status-content">
                            <a class="video-status-link" href="${post.meta.url}">
                                <img class="video-status-image" src="${post.meta.image_url}" alt="${post.meta.title}" onerror="this.style.display='none'">
                                <div class="video-status-info">
                                    <p class="video-status-meta">${post.meta.url}</p>
                                    <p class="video-status-title">
                                        <span class="bold">${post.meta.title}</span>
                                    </p>
                                    <p class="video-status-text">${post.meta.body}</p>
                                </div>
                            </a>
                        </div>`;
            }

            if (post.ytlink) {
                ytlink = `<div class="widget-box-status-content">
                    <div class="iframe-wrap">
                        <iframe src="https://www.youtube.com/embed/$" allowfullscreen></iframe>
                        </div>
                        </div>`;
            }
            if (post.tags) {
                tags = `<div class="widget-box-status-content">
                                    <div class="tag-list">
                                        ${post.tags.map(tag => {
                                            return `<a class="tag-item secondary" href="#">${tag}</a>`
                                        }).join('')}
                                    </div>
                                </div>`;
            }


            var postoptions = `
            
        <div class="post-options">
            <div class="post-option-wrap">
                <div class="post-option reaction-options-dropdown-trigger">
                    <svg class="post-option-icon icon-thumbs-up">
                        <use xlink:href="#svg-thumbs-up"></use>
                    </svg>
                    <p class="post-option-text">React!</p>
                </div>
                <div class="reaction-options reaction-options-dropdown"
                    style="height: auto;color:white;padding:5px initial">
                    Feature on way..
                </div>
            </div>
            <div class="post-option reaction-options-dropdown-trigger">
                <svg class="post-option-icon icon-comment">
                    <use xlink:href="#svg-comment"></use>
                </svg>
                <p class="post-option-text">Comment</p>
            </div>

            <div class="post-option-wrap">
                <div class="post-option share-options-dropdown-trigger">
                    <svg class="post-option-icon icon-share">
                        <use xlink:href="#svg-share"></use>
                    </svg>
                    <p class="post-option-text">Share</p>
                </div>
                <div class="share-options-dropdown share-options ">

                    <div class="reaction-option text-tooltip-tft" data-title="Whatsapp">

                        <a href="whatsapp://send?text=https://connectup.in/post/${post.id }">
                            <img class="reaction-option-image"
                                src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-whatsapp-circle-512.png"
                                alt="reaction-like">
                        </a>
                    </div>

                    <div class="reaction-option text-tooltip-tft" data-title="Linkedin">
                        <a
                            href="https://www.linkedin.com/shareArticle?mini=true&url=https://connectup.in/post/${post.id }&title=${post.caption }&source=https://connectup.in">
                            <img class="reaction-option-image"
                                src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-linkedin-circle-512.png"
                                alt="reaction-like">
                        </a>
                    </div>

                    <div class="reaction-option text-tooltip-tft" data-title="Twitter">
                        <a
                            href="https://twitter.com/intent/tweet?text=https://connectup.in/post/${post.id }&via=connectup">
                            <img class="reaction-option-image"
                                src="https://cdn2.iconfinder.com/data/icons/social-messaging-ui-color-shapes-2-free/128/social-twitter-circle-512.png"
                                alt="reaction-like">
                        </a>
                    </div>

                    <div class="reaction-option text-tooltip-tft" data-title="Copy Link">
                        <a onclick="navigator.clipboard.writeText('https://connectup.in/post/${post.id }'')">
                            <img class="reaction-option-image"
                                src="https://cdn3.iconfinder.com/data/icons/text-editing-2/100/Artboard_12-512.png"
                                alt="reaction-like">
                        </a>
                    </div>

                </div>
            </div>
        </div>`


            html = `<div class="widget-box no-padding">
        <div class="widget-box-settings">
            <div class="post-settings-wrap">
                <div class="post-settings widget-box-post-settings-dropdown-trigger">
                    <svg class="post-settings-icon icon-more-dots">
                        <use xlink:href="#svg-more-dots"></use>
                    </svg>
                </div>
                <div class="simple-dropdown widget-box-post-settings-dropdown">
                    <a href="${post.id}" class="simple-dropdown-link">View Post</a>
                </div>
            </div>
        </div>
        <div class="widget-box-status">
            <div class="widget-box-status-content">
                <div class="user-status">
                    <a class="user-status-avatar" href="${ post.user.username}">
                        <div class="user-avatar small no-outline">
                            <div class="user-avatar-content">
                                <div class="hexagon-image-30-32" data-src="${post.user.profile_photo_path}">
                                </div>
                            </div>
                            <div class="user-avatar-progress">
                                <div class="hexagon-progress-40-44"></div>
                            </div>
                            <div class="user-avatar-progress-border">
                                <div class="hexagon-border-40-44"></div>
                            </div>

                        </div>
                    </a>
                    <p class="user-status-title medium"><a class="bold"
                            href="${post.user.username}">${ post.user.name }</a> shared a
                        <span class="bold">post</span>
                    </p>
                    <p class="user-status-text small">
                        ${post.created_at}
                    </p>
                </div>
                <p class="widget-box-status-text">${post.caption }</p>
            </div>

            ${meta}
            ${ytlink}



                ${tags}
        </div>
    </div>`

            return html;





        }
        // $(document).ready(function() {
        //     console.log('sending request');
        //     $.get('{{ route('getposts') }}', function(data) {
        //         console.log(data);
        //         $.each(data, function(index, value) {
        //             console.log(value);
        //             $('.posts-container').append(getPostHTMLbyJSON(value));
        //         });
        //     });
        // });
    </script>
@endpush
