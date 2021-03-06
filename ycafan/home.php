<!-- 获取头部 -->
<?php get_header();
?>

<div id="content-outer" class="content-outer clearfix fix-header-height">
<div id="content" class="content clearfix">
<div class="header-notice-wrap header-notice-wrap-for-home">
    <div class="fullwidth">
        <div class="header-notice hide J_Notice">
            <a class="notice J_NoticeLink" href="#">
                <i class="ifanr2015 ifanr2015-live">
                </i>
          <span class="J_NoticeTitle">
          </span>
            </a>
            <a class="J_Close close reverse-icon" title="关闭">
                <i class="icon-remove">
                </i>
            </a>
        </div>
    </div>
</div>
<div id="recommend-post" class="clearfix">
    <div id="recommend-post-slider" class="recommend-holder clearfix">
        <div class="recommend-post-content clearfix">
            <div class="slider">
                <ul>
                    <?php foreach([1,2,3,4,5] as $key => $val): ?>
                        <li class="ifanr-recommend-item">
                            <div class="post-mask post-mask-top">
                            </div>
                            <div class="post-mask post-mask-bottom">
                            </div>
                            <div itemprop="url" href="http://www.ifanr.com/628741" class="ifanr-recommend-items">
                                <div class="item-content">
                                    <div class="bg-img" data-cmpt-parallax-bg id="recommend" style="background-image:url('http://images.ifanr.cn/wp-content/uploads/2016/03/DIY-3.jpg')">
                                    </div>
                                    <div class="fullwidth">
                                        <div class="main recommend-post-wrapper row">
                                            <div class="post-item-container excerpt" itemscope itemtype="http://schema.org/Article">
                                                <div class="fullwidth">
                                                    <div class="main row">
                                                        <div class="post-item-container title">
                                                            <div class="post-item-addon">
                                                            </div>
                                                            <div class="post-item-content" itemscope itemtype="http://schema.org/Article">
                                                                <meta itemscope="thumbnailUrl" content="http://images.ifanr.cn/wp-content/uploads/2016/03/DIY-3.jpg"
                                                                    />
                                                                <div class="tag-label">
                                                                    <a class="tag" itemprop="keywords" href="http://www.ifanr.com/category/special/product">
                                                                        产品
                                                                    </a>
                                  <span class="seperator">
                                    |
                                  </span>
                                  <span class="author">
                                    <a href="http://www.ifanr.com/author/ifanrvideo" title="Posts by 爱范儿视频"
                                       rel="author">
                                        爱范儿视频
                                    </a>
                                  </span>
                                                                    <meta itemprop="author" content="爱范儿视频" />
                                                                </div>
                                                                <h2 itemprop="headline">
                                                                    <a rel="canonical" itemprop="url" href="http://www.ifanr.com/628741" class="js-multiline">
                                                                        <div class="title-part-container">
                                      <span class="title-part">
                                        【轮播图推荐位】这里放轮播图
                                      </span>
                                                                        </div>
                                                                        <div class="title-part-container">
                                      <span class="title-part">
                                        可以任意多个！
                                      </span>
                                                                        </div>
                                                                    </a>
                                                                </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-item-content post-item-excerpt">
                                                    <div itemprop="description" class="js-excerpt" data-clamp='3'>
                                                        <p>
                                                            看着这配置，再看看自己那台，我哭了。
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="clearfix">
                                                </div>
                                            </div>
                                            <!-- post-item-container -->
                                        </div>
                                    </div>
                                    <!-- recommend-post-wrapper -->
                                </div>
                                <!-- item-content -->
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
            <!-- slider -->
        </div>
        <!-- recommend-post-content -->
    </div>
    <!-- recommend-post-slider -->
    <div class="fullwidth">
        <!-- 广告 -->
        <!-- 广告 -->
        <!-- 文章合集 -->
        <div id="ifanr-post-collections" class="clearfix">
            <div class="accordion-border">
                <!-- 只能有三个-->
                <?php foreach([1,2,3] as $val): ?>
                    <a rel="canonical" class="accordion-item accordion-close" href="http://www.ifanr.com/621230">
                        轮播图右侧推荐位
                        <div class="img-bg" style="background-image:url('http://images.ifanr.cn/wp-content/uploads/2016/02/iphonepay.jpg!400');">
                        </div>
                    </a>
                <?php endforeach ?>
            </div>
        </div>
        <!-- 文章合集 -->
    </div>
</div>
<!-- recommend-post -->
<div id="index-part-one" data-cmpt-autofixed-container class="fullwidth row top  js-index-part-one">
<div class="main">
    <div class="index-content-normal posts-list">
        <!-- 第一个推荐位，只能有三个-->
        <?php
        $args = [
            'post_type' => 'post',
            'offset' => 0,
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby'=>'post_date',
        ];
        $query = new WP_Query($args);
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
                ?>
                <article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID() ?>"
                         class="row post-item-container">
                    <div class="new-post-item-content">
                        <a rel="canonical" class="news-pic" itemprop="thumbnailUrl" href="<?php the_permalink() ?>" target="_blank"
                           style="background-image:url('<?php echo $Tool->_get_img_from_html(get_the_content()) ?>')">
                        </a>
                        <h2>
                            <a rel="external" href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>">
                    <span itemprop="headline">
                      <?php echo $Tool->_str_cut(get_the_title(), 0, 20, false) ?>
                    </span>
                            </a>
                            <div class="comment-count new-comment-count">
                                <a rel="canonical" class="comment-count-container" href="http://www.ifanr.com/628698#comments"
                                   ga-track="event" ga-action="click" ga-event-category="button" ga-event-label="CommentCount">
                                    <i class="ifanr2015 ifanr2015-pinglun">
                                    </i>
                                    <?php comments_number() ?>
                                </a>
                                <meta itemprop="commentCount" content="0" />
                            </div>
                        </h2>
                        <p itemprop="description" class="js-excerpt" data-clamp="2">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <div class="tag-label">
                            <?php $cat = $Tool->_object_to_array(get_the_category()) ?>
                            <a class="tag" itemprop="keywords" href="<?php echo get_category_link($Tool->_value($cat[0]['term_id'], 0)); ?>" target="_blank">
                                <?php echo $Tool->_value($cat[0]['name']); ?>
                            </a>
                  <span class="seperator">
                    |
                  </span>
                  <span class="author">
                    <a href="javaScript:viod(0);" title="Posts by <?php the_author() ;?>"
                       rel="author">
                        <?php the_author() ;?>
                    </a>
                  </span>
                            <meta itemprop="author" content="<?php the_author() ;?>" />
                  <span class="date" itemprop="datePublished" datetime="<?php the_date('Y-m-d') ?>">
                    <?php echo $Tool->_get_diff_date(strtotime(get_the_time('Y-m-d H:i:s'))) ?>
                  </span>
                        </div>
                    </div>
                </article>
            <?php  } ?>
        <?php  } ?>
        <?php  wp_reset_postdata(); ?>
        <div class="dasheng-wrapper">
            <div class="fullwidth row">
            <span class="dasheng-icon">
              <i class="ifanr2015 ifanr2015-dasheng">
              </i>
            </span>
                <div class="main">
                    <div class="post-item-container">
                        <div class="comment-count">
                            <div class="row-dasheng-title">
                    <span class="entry-dasheng-title">
                      <a class="tag" href="http://www.ifanr.com/dasheng">
                          大声
                      </a>
                      | 7 小时前
                    </span>
                            </div>
                        </div>
                        <div class="post-item-content ">
                            <a class="dasheng-index entry-dasheng clearfix" href="http://www.ifanr.com/dasheng/628269">
                                <div class="entry-dasheng-inner clearfix">
                                    <div class="dasheng_content clearfix">
                        <span>
                          做深度学习的人工智能博士生，现在一毕业就能拿到 200 到 300 万美金的年收入的 offer，这是有史以来没有发生过的。
                        </span>
                                        <div class="dasheng_original text-right">
                          <span>
                            ― 李开复
                          </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 第二个推荐位，只能有三个-->
        <?php
        $args = [
            'post_type' => 'post',
            'offset' => 3,
            'posts_per_page' => 3,
            'post_status' => 'publish',
            'orderby'=>'post_date',
        ];
        $query = new WP_Query($args);
        if($query->have_posts()){
            while($query->have_posts()){
                $query->the_post();
                ?>
                <article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID() ?>"
                         class="row post-item-container">
                    <div class="new-post-item-content">
                        <a rel="canonical" class="news-pic" itemprop="thumbnailUrl" href="<?php the_permalink() ?>" target="_blank"
                           style="background-image:url('<?php echo $Tool->_get_img_from_html(get_the_content()) ?>')">
                        </a>
                        <h2>
                            <a rel="external" href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>">
                                <span itemprop="headline">
                                  <?php echo $Tool->_str_cut(get_the_title(), 0, 20, false) ?>
                                </span>
                            </a>
                            <div class="comment-count new-comment-count">
                                <a rel="canonical" class="comment-count-container" href="http://www.ifanr.com/628698#comments"
                                   ga-track="event" ga-action="click" ga-event-category="button" ga-event-label="CommentCount">
                                    <i class="ifanr2015 ifanr2015-pinglun">
                                    </i>
                                    <?php comments_number() ?>
                                </a>
                                <meta itemprop="commentCount" content="0" />
                            </div>
                        </h2>
                        <p itemprop="description" class="js-excerpt" data-clamp="2">
                            <?php echo get_the_excerpt(); ?>
                        </p>
                        <div class="tag-label">
                            <?php $cat = $Tool->_object_to_array(get_the_category()) ?>
                            <a class="tag" itemprop="keywords" href="<?php echo get_category_link($Tool->_value($cat[0]['term_id'], 0)); ?>" target="_blank">
                                <?php echo $Tool->_value($cat[0]['name']); ?>
                            </a>
                  <span class="seperator">
                    |
                  </span>
                  <span class="author">
                    <a href="javaScript:viod(0);" title="Posts by <?php the_author() ;?>"
                       rel="author">
                        <?php the_author() ;?>
                    </a>
                  </span>
                            <meta itemprop="author" content="<?php the_author() ;?>" />
                  <span class="date" itemprop="datePublished" datetime="<?php the_date('Y-m-d') ?>">
                    <?php echo $Tool->_get_diff_date(strtotime(get_the_time('Y-m-d H:i:s'))) ?>
                  </span>
                        </div>
                    </div>
                </article>
            <?php  } ?>
        <?php  } ?>
        <?php  wp_reset_postdata(); ?>
    </div>
</div>

<div class="sbl row">
    <div data-cmpt-autofixed data-autofixed-follow-to=".js-index-part-one">
        <div class="ifanr-sudu-border">
        </div>
        <div id="ifanr_side_jiong_widget-81" class="widget-container widget_ifanr_jiong_new clearfix">
            <div class="ifanr-text-content">
                <a id="video" rel="external" href="http://go.ifanr.cn/1S">
                    <img src="http://images.ifanr.cn/wp-content/uploads/2016/02/cebianlan.jpg"
                        />
                </a>
            </div>
        </div>
        <div id="ifanr_widget_buzz-2" class="widget-container widget_ifanr_widget_buzz clearfix">
            <div class="widget-buzz-container">
                <div class="title-container">
                    <i class="iconfont iconfont-buzz">
                    </i>
                    <h1 class="widget-buzz-title">
                        快讯
                    </h1>
                </div>
                <div class="nano buzz-list-container js-nano">
                    <ul class="buzz-list nano-content js-buzz-list">
                        <!-- buzz item -->
                        <?php foreach([1,2,3, 4,5,6,7,8,9,10] as $val): ?>
                            <li class="buzz-item">
                                <div class="buzz-item-container">
                                    <h2 class="buzz-item-title" ga-track="event" ga-action="click" ga-event-category="widget"
                                        ga-event-label="ifanr-buzz">
                                        <a target="_blank" href="http://www.ifanr.com/buzz/628668" data-source-url="http://tech.qq.com/a/20160304/057055.htm"
                                           itemprop="url" class="buzz-item-link">
                                            这里是10个快讯推荐位
                                        </a>
                                    </h2>
                                    <div class="buzz-item-footer">
                      <span class="buzz-item-date" itemprop="datePublished" datetime="2016-03-04T08:34:24+0000">
                        2 小时前
                      </span>
                      <span>
                        /
                      </span>
                      <span class="buzz-item-source">
                        Source:
                        <a target="_blank" itemprop="url" href="http://www.ifanr.com/buzz/628668"
                           data-source-url="http://tech.qq.com/a/20160304/057055.htm" class="buzz-item-link">
                            tech.qq.com
                        </a>
                      </span>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach ?>
                        <!-- buzz item -->
                        <li class="loading js-loading">
                            <img src="http://cdnzz.ifanr.com/wp-content/themes/ifanr-2.0/static/images/common/loader/loadingb.gif"
                                />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="ifanr_side_data_widget-4" class="widget-container widget-data clearfix">
            <div class="widget-data-content">
                <div class="widget-data-content-bg">
                </div>
                <h4>
                    <a href="http://www.ifanr.com/data/">
                        数读
                    </a>
                </h4>
                <a class="widget-body" rel="external" href="http://www.ifanr.com/data/628594">
              <span class="widget-data-num num font-luzsans">
                5.7
              </span>
              <span class="widget-data-percent yahei">
                %
              </span>
              <span class="widget-data-text">
                IDC：今年智能手机出货量将仅增长 5.7%
              </span>
                </a>
                <a id="widget-data-more" class="widget-data-more" href="http://www.ifanr.com/data/"
                   title="点击了解更多">
                    了解更多 &raquo;
                </a>
            </div>
        </div>
        <div id="recentcomments2" class="widget-container widget_recentcomments ifr-post-list-widget  clearfix">
            <div class="title">
                <img class="ifanr2015" src="http://cdnzz.ifanr.com/wp-content/themes/ifanr-2.0/static/images/desktop/latest-comments-icon.png"
                     alt="" />
                <h2>
                    最近评论
                </h2>
            </div>
            <ul>
                <li class="rc-navi clearfix">
              <span class="rc-loading">
                Loading...
              </span>
                </li>
                <li id="rc-comment-temp" class="rc-item rc-comment clearfix">
                    <div class="rc-excerpt">
                    </div>
                    <div class="rc-info">
                    </div>
                    <div class="rc-timestamp">
                    </div>
                </li>
            </ul>
        </div>
        <div id="mail-subscribe" class="widget-ifr ifr-subscribe widget-container clearfix">
            <div id="mc_embed_signup" class="clearfix">
                <form action="http://ifanr.us2.list-manage.com/subscribe/post?u=f770959951cdcc1bba7ab56cb&amp;id=258559241a"
                      method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form"
                      class="validate" target="_blank">
                    <div class="widget-header">
                        <label for="mce-EMAIL">
                            爱范消息 | Exploring Leading Tech
                        </label>
                    </div>
                    <div class="widget-contents clearfix">
                        <p>
                            轻量、专注的消息，关注移动互联网、创投、智能设备的新鲜资讯。需各种邀请码，也请加入列表。
                        </p>
                        <div class="ifr-input-group">
                            <input type="email" value="" name="EMAIL" class="ifr-input email-input"
                                   id="mce-EMAIL" placeholder="填写邮箱，订阅我们">
                            <input ga-track="event" ga-action="click" ga-event-category="button" ga-event-label="Subscribe"
                                   type="submit" value="订阅" name="subscribe" id="mc-embedded-subscribe" class="ifr-input email-submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<div class="video-wrapper">
    <div class="video-container">
        <div class="video-feature-container js-video-container" data-video-iframe="<iframe src='http://player.youku.com/embed/XMTQ4NTg0MzY4OA==' frameborder=0 allowfullscreen></iframe>"
             ga-track="event" ga-action="click" ga-event-category="video" ga-event-label="爱范视频">
            <div class="mask video-mask">
            </div>
            <div class="bg-img" style="background-image:url('http://images.ifanr.cn/wp-content/uploads/2016/02/80013.jpg')">
            </div>
            <div class="video-play-button js-play-btn">
                <i class="ifanr2015 ifanr2015-shipin">
                </i>
            </div>
            <div class="feature-item-container">
                <div class="tag-label">
                    <a class="tag" itemprop="keywords" href="http://www.ifanr.com/video">
                        少年中国视频
                    </a>
            <span class="seperator">
              |
            </span>
            <span class="time js-date">
              02月29日 17:44
            </span>
                </div>
                <h2 class="title">
                    【视频推荐位】这里放视频
                </h2>
                <p class="description">
                    今天的爱范儿大件事，我们就拿 Red Carpet Rampage 这款游戏来讲讲小李子的奥斯卡陪跑史。
                </p>
            </div>
        </div>
        <div class="video-list-container">
            <?php foreach([1,2,3,4,5,6,7,8,9,10] as $val): ?>
                <a class="list-item-container js-list-video" href="http://www.ifanr.com/video/626463"
                   data-video-iframe="<iframe src='http://player.youku.com/embed/XMTQ4NTg0MzY4OA==' frameborder=0 allowfullscreen></iframe>"
                   ga-track="event" ga-action="click" ga-event-category="video" ga-event-label="爱范视频">
                    <div class="mask video-mask-black">
                    </div>
                    <div class="mask video-play-mask">
                        <i class="ifanr2015 ifanr2015-bofang">
                        </i>
            <span class="play-text">
              播放中...
            </span>
                    </div>
                    <div class="bg-img" style="background-image:url('http://images.ifanr.cn/wp-content/uploads/2016/02/80013.jpg')">
                    </div>
                    <div class="video-info-container">
                        <div class="video-headline">
                            【视频推荐位】放10个视频
                        </div>
                        <div class="video-time">
                            时长: 01:33
                        </div>
                        <div class="video-date">
                            02-29
                        </div>
                    </div>
                </a>
            <?php endforeach ?>
        </div>
    </div>
    <div class="mask video-mask-left mask-bg-left">
    </div>
    <div class="mask video-list-mask mask-bg-right">
    </div>
</div>
<div id="index-part-two" data-cmpt-autofixed-container class="fullwidth row">
    <div class="main js-index-part-two">
        <div class="index-content-normal posts-list">
            <!-- 第三个推荐位，只能有六个-->
            <?php
            $args = [
                'post_type' => 'post',
                'offset' => 6,
                'posts_per_page' => 6,
                'post_status' => 'publish',
                'orderby'=>'post_date',
            ];
            $query = new WP_Query($args);
            if($query->have_posts()){
                while($query->have_posts()){
                    $query->the_post();
                    ?>
                    <article itemscope itemtype="http://schema.org/Article" id="post-<?php the_ID() ?>"
                             class="row post-item-container">
                        <div class="new-post-item-content">
                            <a rel="canonical" class="news-pic" itemprop="thumbnailUrl" href="<?php the_permalink() ?>" target="_blank"
                               style="background-image:url('<?php echo $Tool->_get_img_from_html(get_the_content()) ?>')">
                            </a>
                            <h2>
                                <a rel="external" href="<?php the_permalink() ?>" title="Permalink to <?php the_title() ?>">
                    <span itemprop="headline">
                      <?php echo $Tool->_str_cut(get_the_title(), 0, 20, false) ?>
                    </span>
                                </a>
                                <div class="comment-count new-comment-count">
                                    <a rel="canonical" class="comment-count-container" href="http://www.ifanr.com/628698#comments"
                                       ga-track="event" ga-action="click" ga-event-category="button" ga-event-label="CommentCount">
                                        <i class="ifanr2015 ifanr2015-pinglun">
                                        </i>
                                        <?php comments_number() ?>
                                    </a>
                                    <meta itemprop="commentCount" content="0" />
                                </div>
                            </h2>
                            <p itemprop="description" class="js-excerpt" data-clamp="2">
                                <?php echo get_the_excerpt(); ?>
                            </p>
                            <div class="tag-label">
                                <?php $cat = $Tool->_object_to_array(get_the_category()) ?>
                                <a class="tag" itemprop="keywords" href="<?php echo get_category_link($Tool->_value($cat[0]['term_id'], 0)); ?>" target="_blank">
                                    <?php echo $Tool->_value($cat[0]['name']); ?>
                                </a>
                  <span class="seperator">
                    |
                  </span>
                  <span class="author">
                    <a href="javaScript:viod(0);" title="Posts by <?php the_author() ;?>"
                       rel="author">
                        <?php the_author() ;?>
                    </a>
                  </span>
                                <meta itemprop="author" content="<?php the_author() ;?>" />
                  <span class="date" itemprop="datePublished" datetime="<?php the_date('Y-m-d') ?>">
                    <?php echo $Tool->_get_diff_date(strtotime(get_the_time('Y-m-d H:i:s'))) ?>
                  </span>
                            </div>
                        </div>
                    </article>
                <?php  } ?>
            <?php  } ?>
            <?php  wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="sbl row">
    </div>
    <div class="sbl row">
        <div data-cmpt-autofixed data-autofixed-follow-to=".js-index-part-two">
        </div>
    </div>
</div>
<div id="mindstore-container" class="mindstore-container">
    <div class="section-mindstore">
        <!--<i class="ifanr2015 ifanr2015-ms"></i>-->
      <span class="title">
        <img src="http://cdnzz.ifanr.com/wp-content/themes/ifanr-2.0/static/images/desktop/mindstore.png"
            />
      </span>
    </div>
    <div class="mindstore-articles-container">
        <div id="mindstore-wrapper" class="mindstore-wrapper banner js-mindstore"
             data-count="4">
            <div id="mindstore-articles-list" class="mindstore-articles-list row">
                <div class="no-ajax loading loading-gif js-loading">
                    <img src="http://cdnzz.ifanr.com/wp-content/themes/ifanr-2.0/static/images/common/loader/loadingb.gif"
                        />
                </div>
            </div>
        </div>
      <span class="unslider-arrow prev js-arrow">
        <i class="ifanr2015 ifanr2015-shangyihua">
        </i>
      </span>
      <span class="unslider-arrow next js-arrow">
        <i class="ifanr2015 ifanr2015-xiayihua">
        </i>
      </span>
        <div class="fullwidth">
            <a href="http://mindstore.io" class="guide">
                前往 MindStore.io &#8594;
            </a>
        </div>
    </div>
</div>
<div id="index-part-forth" data-cmpt-autofixed-container class="fullwidth row">
    <div class="main js-index-part-forth">
        <div class="index-content-normal posts-list js-loading-posts-wrapper">
            <!-- 第四个推荐位，只能有12个-->

        </div>
    </div>
    <div class="sbl row">
        <div data-cmpt-autofixed data-autofixed-follow-to=".js-index-part-forth">
        </div>
    </div>
</div>
<div class="fullwidth row">
    <div class="main">
        <div class="loading-posts" id="loading-more-container">
            <a id="JS_loadMore" class="no-ajax load-more-link" data-home="1" data-page="2"
               href="javascript:void(0);">
                加载更多
            </a>
            <a id="no-articles" class="no-ajax no-articles hide" href="javascript:void(0);">
                没有更多了
            </a>
            <div id="JS_loading" class="no-ajax loading loading-gif">
                <img src="http://cdnzz.ifanr.com/wp-content/themes/ifanr-2.0/static/images/common/loader/loadingb.gif"
                    />
            </div>
        </div>
    </div>
</div>
</div>
<!--end content-->
</div>
<!--end content-outer -->
<!-- 底部 -->
<?php get_footer(); ?>