@php echo '<?xml version="1.0" encoding="UTF-8"?>'; @endphp
<urlset 
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
    xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">

    <!-- Homepage -->
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <priority>1</priority>
    </url>

    <!-- Dynamic Posts -->
    @foreach ($menus as $menu)
    <?php 
    
    $pageParam = null;
        if($menu->page_type == 'blog'){ 
            
        } elseif($menu->page_type == 'about'){
            
        } elseif($menu->page_type == 'product'){
            
        }  elseif($menu->page_type == 'project'){
            $pageParam = getUrl('project_url') . '/';
        } elseif($menu->page_type == 'page'){
            $pageParam = null;
        }
       
    ?>
    <?php if($menu->page_type != 'blog' && $menu->page_type != 'product' && 
            $menu->page_type != 'product_category'  && $menu->page_type != 'project' && $menu->page_type != 'club'){ ?>
        <url>
            <loc>{{ url('/' . $pageParam . $menu->seo_url) }}</loc>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
            <priority>1</priority>
        </url>
    <?php } ?>
    @endforeach
 
    <!-- Dynamic Blogs -->
    @foreach ($blogs as $blog)
        <?php if($blog->news == 1){
                $pageParam = getUrl('news_url') . '/';
        }else{
                $pageParam = getUrl('blog_url') . '/';
        }
        ?>
        
        <url>
            <loc>{{ url('/' . $pageParam . $blog->seo_url) }}</loc>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
            <priority>1</priority>
        </url>
    @endforeach

    <!-- Dynamic Projects -->
    @foreach ($projects as $project)
         <url>
            <loc>{{ url('/' . getUrl('project_url') . '/' . $project->seo_url) }}</loc>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
            <priority>1</priority>
        </url>
    @endforeach

    <!-- Dynamic Products -->
    @foreach ($products as $product)
         <url>
            <loc>{{ url('/' . $product->category->seo_url . '/' . $product->seo_url) }}</loc>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
            <priority>1</priority>
        </url>
    @endforeach

    <!-- Dynamic Clubs -->
    @foreach ($clubs as $club)
         <url>
            <loc>{{ url('/' . getUrl('club_url') . '/' . $club->seo_url) }}</loc>
            <lastmod>{{ date('Y-m-d') }}</lastmod>
            <priority>1</priority>
        </url>
    @endforeach

</urlset>
