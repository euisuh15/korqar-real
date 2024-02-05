<?php
// 팝업 출력
$this->popup_fetch();
?>

<div class="vis">
    <div class="in">
        <!-- <i class="fa fa-paint-brush"></i> -->
        <h3>카타르 한인 커뮤니티에<br />오신 것을 진심으로 환영합니다.</h3>
        <p>
        KORQAR은 카타르에서의 다양한 경험을 공유하며 소통하는 공동체입니다.<br />
        저희는 회원분들이 자유롭게 소통할 수 있는 창구를 만드는 것을 목표로 합니다.
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