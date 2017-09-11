<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<h1>test fetch products list from DB</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <?= Html::encode("{$proudct->name} ({$country->id})") ?>:
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>