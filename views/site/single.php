<?php
/* @var $article */

use yii\helpers\Url;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="<?= Url::toRoute(['site/view', 'id' => $article->id ]) ?>"><img src="/public/images/<?= $article->getImage(); ?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6>
                                <a href="<?= Url::toRoute(['site/category', 'id' => $article->category->id ]) ?>">
                                    <?= $article->category->title ?>
                                </a>
                            </h6>
                            <h1 class="entry-title">
                                <a href="<?= Url::toRoute(['site/view', 'id' => $article->id ]) ?>">
                                    <?= $article->title?>
                                </a>
                            </h1>
                        </header>
                        <div class="entry-content">
                           <p>
                               <?= $article->content?>
                           </p>
                        </div>
                        <div class="decoration">
                            <a href="#" class="btn btn-default">Decoration</a>
                            <a href="#" class="btn btn-default">Decoration</a>
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize"><?= isset($article->author->name ) ? $article->author->name :  "Admin"   ?> on <?= $article->getDate()?></span>
                            <ul class="text-center pull-right">
                                <li><a class="s-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="s-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="s-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a class="s-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="s-instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </article>

                <?=
                    $this->render('partials/comment',[
                            'article' => $article,
                        'comments' => $comments,
                        'commentForm' => $commentForm

                    ])
                ?>

                <div class="top-comment"><!--top comment-->
                    <img src="/public/images/comment.jpg" class="pull-left img-circle" alt="">
                    <h4>Rubel Miah</h4>

                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy hello ro mod tempor
                        invidunt ut labore et dolore magna aliquyam erat.</p>
                </div><!--top comment end-->
                <div class="row"><!--blog next previous-->
                    <div class="col-md-6">
                        <div class="single-blog-box">
                            <a href="#">
                                <img src="/public/images/blog-next.jpg" alt="">

                                <div class="overlay">

                                    <div class="promo-text">
                                        <p><i class=" pull-left fa fa-angle-left"></i></p>
                                        <h5>Rubel is doing Cherry theme</h5>
                                    </div>
                                </div>


                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-blog-box">
                            <a href="#">
                                <img src="/public/images/blog-next.jpg" alt="">

                                <div class="overlay">
                                    <div class="promo-text">
                                        <p><i class=" pull-right fa fa-angle-right"></i></p>
                                        <h5>Rubel is doing Cherry theme</h5>

                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!--blog next previous end-->
                <div class="related-post-carousel"><!--related post carousel-->
                    <div class="related-heading">
                        <h4>You might also like</h4>
                    </div>
                    <div class="items">
                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-1.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>


                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-2.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>


                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-3.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>


                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-1.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>

                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-2.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>


                        <div class="single-item">
                            <a href="#">
                                <img src="/public/images/related-post-3.jpg" alt="">

                                <p>Just Wondering at Beach</p>
                            </a>
                        </div>
                    </div>
                </div><!--related post carousel-->

                <?php if(!Yii::$app->user->isGuest): ?>
                <div class="leave-comment"><!--leave comment-->
                    <h4>Leave a reply</h4>
                    <?php if(Yii::$app->session->getFlash('comment')): ?>
                        <div class="alert alert-success" role="alert">
                            <?= Yii::$app->session->getFlash('comment') ?>
                        </div>
                    <?php endif; ?>
                    <?php $form = \yii\widgets\ActiveForm::begin([
                     'action' => ['site/comment', 'id' => $article->id],
                     'options' => ['class' => 'form-horizontal contact-form']
                        ])
                    ?>
                    <div class="form-group">
                        <div class="col-md-12">
                            <?= $form->field($commentForm, 'comment')->textarea(
                                    ['class' => 'form-control']
                            )->label(false);
                            ?>
                        </div>
                    </div>
                    <button type="submit" class="btn send-btn">
                        Send Comment
                    </button>

                    <?php \yii\widgets\ActiveForm::end()?>

                </div><!--end leave comment-->
                <?php endif; ?>
            </div>

            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">

                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>
                        <?php foreach ($popular as $article):?>
                            <div class="popular-post">
                                <a href="#" class="popular-img"><img src="public/images/<?= $article->getImage();?>" alt="">
                                    <div class="p-overlay"></div>
                                </a>

                                <div class="p-content">
                                    <a href="#" class="text-uppercase"><?= $article->title;?></a>
                                    <span class="p-date"><?= $article->getDate();?></span>
                                </div>
                            </div>
                        <?php endforeach;?>

                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>
                        <?php foreach ($recent as $article): ?>
                            <div class="thumb-latest-posts">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="#" class="popular-img"><img src="/public/images/<?= $article->getImage(); ?>" alt="">
                                            <div class="p-overlay"></div>
                                        </a>
                                    </div>
                                    <div class="p-content">
                                        <a href="#" class="text-uppercase"><?= $article->title; ?></a>
                                        <span class="p-date"><?= $article->getDate(); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </aside>
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Categories</h3>
                        <ul>
                            <?php foreach ($categories as $category):?>
                                <li>
                                    <a href="#"><?= $category->title; ?></a>
                                    <span class="post-count pull-right"><?= $category->getArticles()->count(); ?></span>
                                </li>
                            <?php endforeach;?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->