<?php
/**
 * YCA functions and definitions
 *
 * @package WordPress
 * @subpackage YCA 2.0
 * @since YCA 1.0
 */

require_once dirname(__FILE__) .'/lib/tools.class.php';
require_once dirname(__FILE__) .'/lib/db.class.php';
require_once dirname(__FILE__) .'/lib/setting.php';
$Tool = new Tools();

?>
<?php

//获取分类文章
add_action('wp_ajax_nopriv_get_cate', 'ajax_get_cate');
add_action('wp_ajax_get_cate', 'ajax_get_cate');
function ajax_get_cate(){
    $Tool = new Tools();
    $limit = intval($Tool->_request('limit', 10));
    $slug = trim($Tool->_request('post_type', 'principle'));
    $excerpt_length = intval($Tool->_request('excerpt_length', 100));
    $category = get_category_by_slug($slug);
    $_posts = [];
    $args = [
        'post_type' => 'post',
        'posts_per_page' => $limit,
        'post_status' => 'publish',
        'orderby'=>'post_date',
        'tax_query' => [
            [
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $slug,
            ],
        ]
    ];
    $query = new WP_Query($args);
    $posts = $query->get_posts();
    foreach($posts as $p){
        setup_postdata($p);
        $_posts[] = [
            'ID' => $p->ID,
            'title' => $p->post_title,
            'author' => get_the_author(),
            'pubDate' => $p->post_date,
            'post_modified' => $p->post_modified,
            'image' => $Tool->_get_img_from_html($p->post_content),
            'cwb_image_url' => $Tool->_get_img_from_html($p->post_content),
            'excerpt' => $Tool->_str_cut($p->post_content, 0, $excerpt_length, false),
            'introduce' => $Tool->_str_cut($p->post_content, 0, $excerpt_length, false),
            'link' => get_page_link(),
            'comments' => $p->comment_count,
            'category' => $category->name,
            'category_link' => get_category_link($category->term_id),
            'post_type' => 'post',
            'content' => $p->post_content,
            'tags' => get_the_tag_list('', '|', ''),
            'like' => rand(10, 100),
            'is_ad' => 0,
        ];
    }
    echo $Tool->_json($_posts);
    unset($Tool);
    unset($query);
    die();
}

//获取最新文章
add_action('wp_ajax_nopriv_get_latest', 'ajax_get_latest');
add_action('wp_ajax_get_latest', 'ajax_get_latest');
function ajax_get_latest(){
    $Tool = new Tools();
    $page = intval($Tool->_request('page', 1));
    $posts_per_page = intval($Tool->_request('posts_per_page', 10));
    $excerpt_length = intval($Tool->_request('excerpt_length', 100));
    //分类页面，会传category_id参数
    $category_id = trim($Tool->_request('category_id', 0));

    $_posts = [];
    $args = [
        'post_type' => 'post',
        'offset' => $posts_per_page * ($page-1),
        'posts_per_page' => $posts_per_page,
        'post_status' => 'publish',
        'orderby'=>'post_date',
    ];
    if(!empty($category_id)){
        $args['tax_query'] = [
            [
                'taxonomy' => 'category',
                'field'    => 'slug',
                'terms'    => $category_id,
            ],
        ];
    }
    $query = new WP_Query($args);
    $posts = $query->get_posts();

    foreach($posts as $p){
        setup_postdata($p);
        $cat_id = $category_id ? $category_id : $Tool->_value(get_the_category($p->ID)[0]->term_id, 0) ;
        $_posts[] = [
            'ID' => $p->ID,
            'title' => $p->post_title,
            'author' => get_the_author(),
            'pubDate' => $p->post_date,
            'post_modified' => $p->post_modified,
            'image' => $Tool->_get_img_from_html($p->post_content),
            'cwb_image_url' => $Tool->_get_img_from_html($p->post_content),
            'excerpt' => $Tool->_str_cut($p->post_content, 0, $excerpt_length, false),
            'introduce' => $Tool->_str_cut($p->post_content, 0, $excerpt_length, false),
            'link' => get_page_link(),
            'comments' => $p->comment_count,
            'category' => get_cat_name($cat_id),
            'category_link' => get_category_link($cat_id),
            'post_type' => 'post',
            'content' => $p->post_content,
            'tags' => get_the_tag_list('', '|', ''),
            'like' => rand(10, 100),
            'is_ad' => 0,
        ];
    }
    echo $Tool->_json($_posts);
    unset($Tool);
    unset($query);
    die();
}



//测试-打印函数
function hb($data) {
    file_put_contents('E:\wamp\www\1.txt', print_r($data , true));
}

?>