<?php

namespace App;

class Consts
{
    // For delete some data
    const STATUS_DELETE = 'delete';

    // Status for users
    const USER_STATUS = [
        'pending' => 'pending',
        'active' => 'active',
        'deactive' => 'deactive',
        'delete' => 'delete'
    ];

    // Status for general
    const STATUS = [
        'active' => 'active',
        'deactive' => 'deactive'
    ];

    // Array taxonomy status
    const TAXONOMY_STATUS = [
        'active' => 'active',
        'deactive' => 'deactive'
    ];
    // Thể loại taxonomy
    const TAXONOMY = [
        'post' => 'post',
        'service' => 'service',
        'product' => 'product',
      // 'resource' => 'resource'
        'cms_video' => 'cms_video'
    ];
    // Loại bài đăng
    const POST_TYPE = [
        'post' => 'post',
        'product' => 'product',
        'service' => 'service',
        // 'resource' => 'resource'
        'cms_video'=>'cms_video',
    ];
    // Mảng lưu trạng thái bài viết
    const POST_STATUS = [
        'pending' => 'pending',
        'active' => 'active',
        'deactive' => 'deactive'
    ];
    const ROUTE_TAXONOMY = [
        'post' => 'frontend.cms.post',
        'service' => 'frontend.cms.service',
        'product' => 'frontend.cms.product',
        // 'resource' => 'frontend.cms.resource',
        // 'tags' => 'frontend.cms.tags'
    ];
    const ROUTE_POST = [
        'post' => 'frontend.cms.post.detail',
        'service' => 'frontend.cms.service.detail',
        'product' => 'frontend.cms.product.detail',
        // 'resource' => 'frontend.cms.resource.detail'
    ];
    const ROUTE_CUSTOM_PAGE = 'frontend.page';

    const DEFAULT_PAGINATE_LIMIT = 20;
    const POST_PAGINATE_LIMIT = 6;
    const SERVICES_PAGINATE_LIMIT = 6;
    const RESOURCE_PAGINATE_LIMIT = 6;
    const DEFAULT_OTHER_LIMIT = 6;
    const DEFAULT_RELATED_LIMIT = 6;
    const DEFAULT_SIDEBAR_LIMIT = 5;
    const PRODUCT_PAGINATE_LIMIT = 9;

    const TITLE_BOOLEAN = [
        '1' => 'true',
        '0' => 'false'
    ];

    const MENU_TYPE = [
        'header' => 'header',
        'header_right' => 'header_right',
        'footer' => 'footer'
    ];

    const URI_TYPE = [
        'route' => 'Route name',
        'path' => 'Path',
        'url' => 'Url Customize',
    ];

    // Loại liên hệ
    const CONTACT_TYPE = [
        'contact' => 'contact',
        'faq' => 'faq',
        'newsletter' => 'newsletter',
        'advise' => 'advise',
        'call_request' => 'call_request'
    ];
    const CONTACT_STATUS = [
        'new' => 'new',
        'processing' => 'processing',
        'processed' => 'processed',
        'cancel' => 'cancel'
    ];
    // Type for order
    const ORDER_TYPE = [
        'product' => 'product',
        'service' => 'service',
    ];
    const ORDER_STATUS = [
        'new' => 'new',
        'processing' => 'processing',
        'processed' => 'processed',
        'cancel' => 'cancel'
    ];

    // Tạo danh sách chức năng định tuyến để gọi khi tạo trang trong admin -> người dùng có thể tùy chọn
    const ROUTE_NAME = [
        [
            "title" => "Trang chủ",
            "name" => "frontend.home",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "home.primary"
                ]
            ],
            "show_route" => true
        ],
        [
            "title" => "Chi tiết bài viết",
            "name" => "frontend.cms.post.detail",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "post.detail"
                ]
            ]
        ],
        [
            "title" => "Danh mục bài viết",
            "name" => "frontend.cms.post",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "post.default"
                ]
            ],
            "show_route" => true
        ],
        [
            "title" => "Danh mục dịch vụ",
            "name" => "frontend.cms.service",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "service.default"
                ]
            ],
            "show_route" => true
        ],
        [
            "title" => "Chi tiết dịch vụ",
            "name" => "frontend.cms.service.detail",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "service.detail"
                ]
            ]
        ],
        [
            "title" => "Danh mục sản phẩm",
            "name" => "frontend.cms.product",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "product.default"
                ]
            ],
            "show_route" => true
        ],
        [
            "title" => "Chi tiết sản phẩm",
            "name" => "frontend.cms.product.detail",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "product.detail"
                ]
            ]
        ],
        [
            "title" => "Liên hệ",
            "name" => "frontend.contact",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "contact.default"
                ]
            ],
            "show_route" => true
        ],
        // [
        //     "title" => "Tags Page",
        //     "name" => "frontend.cms.tags",
        //     "template" => [
        //         [
        //             "title" => "Default",
        //             "name" => "tags.default"
        //         ]
        //     ]
        // ],
        [
            "title" => "Tìm kiếm",
            "name" => "frontend.search",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "search.default"
                ]
            ]
        ],
        [
            "title" => "Giỏ hàng",
            "name" => "frontend.order.cart",
            "template" => [
                [
                    "title" => "Mặc định",
                    "name" => "cart.default"
                ]
            ],
            "show_route" => true
        ],
        // [
        //     "title" => "Danh mục tư liệu - tài nguyên",
        //     "name" => "frontend.cms.resource",
        //     "template" => [
        //         [
        //             "title" => "Mặc định",
        //             "name" => "resource.default"
        //         ]
        //     ]
        // ],
        // [
        //     "title" => "Chi tiết tư liệu - tài nguyên",
        //     "name" => "frontend.cms.resource.detail",
        //     "template" => [
        //         [
        //             "title" => "Mặc định",
        //             "name" => "resource.detail"
        //         ]
        //     ]
        // ]
        // [
        //     "title" => "Custom Page",
        //     "name" => "frontend.page",
        //     "template" => [
        //         [
        //             "title" => "Custom Ads Page",
        //             "name" => "page.ads"
        //         ],
        //         [
        //             "title" => "Custom Marketing Page",
        //             "name" => "page.mkt"
        //         ],
        //         [
        //             "title" => "Custom Website Page",
        //             "name" => "page.website"
        //         ],
        //         [
        //             "title" => "Custom Content Page",
        //             "name" => "page.content"
        //         ],
        //         [
        //             "title" => "Custom SEO Page",
        //             "name" => "page.seo"
        //         ],
        //         [
        //             "title" => "Custom Media Page",
        //             "name" => "page.media"
        //         ],
        //         [
        //             "title" => "Custom About Page",
        //             "name" => "page.about"
        //         ]
        //     ]
        // ]
    ];
}
