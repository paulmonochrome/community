<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<section class="span6">
    <h2>Commmunity Online</h2>

    <h3>Активизм Проекта Венера</h3>
    <p>Хочешь помочь Проекту Венера?</p>
    <p><a class="btn btn-large btn-primary" href="<?php echo $this->createUrl('/society/accounts/register') ?>">Стать участником</a></p>

    <h3>Участникам</h3>
    <p>Уже есть аккаунт?</p>
    <p><a class="btn" href="<?php echo $this->createUrl('/society/accounts/login') ?>">Вход</a></p>

    <h3>Поддержка</h3>
    <p>Возникли вопросы или предложения?</p>
    <p>Связаться с автором <a href="mailto:aleksey@razbakov.com">aleksey@razbakov.com</a></p>
</section>
<aside class="span4">
    <script type="text/javascript" src="//vk.com/js/api/openapi.js?95"></script>

    <!-- VK Widget -->
    <div id="vk_groups"></div>
    <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode: 0, width: "220", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '5B7FA6'}, 30439448);
    </script>
</aside>