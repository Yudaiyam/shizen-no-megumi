<?php
    $title = get_the_title() .'｜'. get_bloginfo('name');
    $description = '自然の恵み農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行なっています。';
    $noindex = '';
    if(is_front_page()) {
        $title = '自然の恵み農園 | 自然の恵みを感じ、豊かな未来をつくる';
        $description = '自然の恵み農園は、農園運営・牧場運営・オンライン販売を通じ、自然の恵みを感じて、豊かな未来を想像して頂ける取り組みを行なっています。';
    }
    elseif(is_page('contact')) {
        $title = 'お問い合わせ | 自然の恵み農園';
        $description = '自然の恵み農園への、お仕事のご相談、農園体験、牧場の見学、その他ご質問など、お気軽にお問い合わせください。';
    }
    elseif(is_archive()){
        $title = 'お知らせ一覧 | 自然の恵み農園';
        $description = '季節の農作物のお知らせ、見学ツアーのご案内、オンライン販売セールのお知らせなど、自然の恵み農園の最新情報をお届けします。
';
    }elseif(is_page('contact-confirm')) {
        $noindex = '<meta name="robots" content="noindex">';
    }elseif(is_page('contact-thanks')) {
        $noindex = '<meta name="robots" content="noindex">';
    }elseif(is_page('404')) {
        $title = 'ページが見つかりませんでした | 自然の恵み農園';
        $noindex = '<meta name="robots" content="noindex">';
    }
?>
<title><?php echo $title; ?></title>
<meta name="description" content="<?php echo $description; ?>" />
<?php echo $noindex; ?>