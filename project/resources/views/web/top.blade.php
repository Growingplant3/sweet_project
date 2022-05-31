@include("web.common.head")
@include("web.common.nav")
@include("web.common.header")

{{ link_to(route("upload_image.create"), '画像アップロード') }}
@include("web.common.top.section2")
@include("web.common.top.section3")
@include("web.common.top.section4")

@include("web.common.footer")