<?php
// 팝업 출력
$this->popup_fetch();
?>

<div class="vis">
    <div class="in">
        <i class="fa fa-paint-brush"></i>
        <h3>카타르 한인 커뮤니티에<br />오신 것을 진심으로 환영합니다.</h3>
        <p>
            카타르 고인물 디자이너가 열심히 배너 디자인을 고민 중 입니다.<br />
            디자인이 완성될 때까지 조금만 기다려주세요.
        </p>
    </div>
</div>

<div class="lat-wrap">

    <div class="lat">
        <a href="<?php echo PH_DIR; ?>/sub/board/free" class="more"><i class="fa fa-plus"></i><p>더보기</p></a>
        <?php
        // 최근게시물 출력
        $this->latest_fetch();
        ?>
    </div>

    <div class="lat">
        <a href="<?php echo PH_DIR; ?>/sub/board/daangn" class="more"><i class="fa fa-plus"></i><p>더보기</p></a>
        <?php
        // 최근게시물 출력
        $this->latest_fetch2();
        ?>
    </div>

</div>

<div class="mid-bn">
    <?php
    // 배너 출력
    // $this->banner_fetch();
    ?>
</div>