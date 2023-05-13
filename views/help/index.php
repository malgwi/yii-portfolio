<?php

use yii\helpers\Html;

$this->title = 'Help Center';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="help-index">

    <h1><?= Html::encode($this->title); ?></h1>

    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed feugiat ipsum sed augue fringilla varius nec vitae dolor. Duis a dolor finibus nulla ornare fringilla nec id leo. Vestibulum commodo eleifend feugiat. Aliquam viverra dictum congue. Pellentesque at consectetur purus. Duis nisl elit, imperdiet vel sem id, ullamcorper porttitor nulla. Sed dignissim nibh vel ullamcorper lobortis. Suspendisse vel metus cursus, feugiat augue et, gravida massa. Aliquam ultricies nisl felis, non aliquam ante condimentum id. Maecenas pellentesque ut eros eget eleifend.
    </p>

    <div>
        <?= Html::a('Account Settings', ['help/account-settings']) ?>
    </div>

    <div>
        <?= Html::a('Login And Security', ['help/login-and-security']) ?>
    </div>

    <div>
        <?= Html::a('Privacy', ['help/privacy']) ?>
</div>

</div>