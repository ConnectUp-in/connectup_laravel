@php
    
    $menuitems = [
        'Super Admin' => [
            [
                'name' => 'PageViews',
                'icon' => 'feather-calendar',
                'type' => 'link',
                'url' => route('superadmin.views'),
            ],
            [
                'name' => 'Members',
                'icon' => 'feather-calendar',
                'type' => 'link',
                'url' => route('superadmin.community.members'),
            ],
            [
                'name' => 'Events',
                'icon' => 'feather-dollar-sign',
                'type' => 'collapse',
                'url' => '#',
                'links' => [
                    [
                        'name' => 'All Events',
                        'icon' => 'feather-list',
                        'type' => 'link',
                        'url' => route('superadmin.events'),
                    ],
                ],
            ],
            [
                'name' => 'Blog',
                'icon' => 'feather-dollar-sign',
                'type' => 'collapse',
                'url' => '#',
                'links' => [
                    [
                        'name' => 'All Blogs',
                        'icon' => 'feather-list',
                        'type' => 'link',
                        'url' => route('superadmin.blogs'),
                    ],
                    [
                        'name' => 'Add Blog',
                        'icon' => 'feather-file-text',
                        'type' => 'link',
                        'url' => route('superadmin.blog.add'),
                    ],
                ],
            ],
        ],
    ];
    
@endphp
<ul class="list-unstyled menu-categories" id="accordionExample">
    <li class="menu active">
        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
            <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-home">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                </svg>
                <span>Dashboard</span>
            </div>
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-chevron-right">
                    <polyline points="9 18 15 12 9 6"></polyline>
                </svg>
            </div>
        </a>
        <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">

        </ul>
    </li>

    @foreach ($menuitems as $title => $items)
        <li class="menu menu-heading">
            <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round" class="feather feather-minus">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                </svg><span>{{ $title }}</span></div>
        </li>


        @foreach ($items as $item)
            @if ($item['type'] == 'link')
                <li class="menu">
                    <a href="{{ $item['url'] }}" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-calendr">
                                <rect x="3" y="4" width="18" height="18" rx="2"
                                    ry="2">
                                </rect>
                                <line x1="16" y1="2" x2="16" y2="6"></line>
                                <line x1="8" y1="2" x2="8" y2="6"></line>
                                <line x1="3" y1="10" x2="21" y2="10"></line>
                            </svg>
                            <span>{{ $item['name'] }}</span>
                        </div>
                    </a>
                </li>
            @else
                <li class="menu">
                    <a href="#toggle-{{ $loop->iteration }}" data-bs-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">
                        <div class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-dollar-sign">
                                <line x1="12" y1="1" x2="12" y2="23"></line>
                                <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                            </svg>
                            <span>{{ $item['name'] }}</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="toggle-{{ $loop->iteration }}"
                        data-bs-parent="#accordionExample">
                        @foreach ($item['links'] as $link)
                            <li>
                                <a href="{{ $link['url'] }}"> {{ $link['name'] }} </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endif
        @endforeach
    @endforeach






</ul>
