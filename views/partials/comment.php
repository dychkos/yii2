<?php if(!empty($comments)):?>
    <?php foreach ($comments as $comment): ?>
        <div class="bottom-comment"><!--bottom comment-->

            <div class="comment-img">
                <img class="img-circle" src="<?= $comment->user->image ?>" alt="">
            </div>

            <div class="comment-text">
                <a href="#" class="replay btn pull-right"> Replay</a>
                <h5><?= $comment->user->name ?></h5>

                <p class="comment-date">
                    <?= $comment->getDate() ?>
                </p>

                <p class="para">
                    <?= $comment->text ?>
                </p>
            </div>
        </div>
        <!-- end bottom comment-->
    <?php endforeach;?>
<?php endif; ?>