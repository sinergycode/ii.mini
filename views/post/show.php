<?php use app\components\MyWidget; ?>

<?php $this->beginBlock('block1');?> 
<h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>

<h1>Show Action</h1>
<?php // echo MyWidget::widget(['name' => 'Вася']); ?>

<?php MyWidget::begin(); ?>
<h1>здарова мир</h1>
<?php MyWidget::end(); ?>

<?php MyWidget::begin(); ?>
<h1>здарова мир</h1>
<?php MyWidget::end(); ?>

<?php // debug($cats); ?>
<?php // echo count($cats[0]->products); ?>
<?php // debug($cats); ?>

<?php 
//foreach($cats as $cat) {
//    echo '<ul>';
//        echo '<li>' . $cat->title . '</li>';
//        $products = $cat->products; // используем ленивую загрузку
//        foreach ($products as $product) {
//            echo '<ul>';
//                echo '<li>' . $product->title . '</li>';
//            echo '</ul>';
//        }
//    echo '</ul>';
//}
?>

<?php // debug($cats); ?>

<?php // $this->registerJs("$('.container').append('<p>SHOW!!</p>');"); ?>

<?php // $this->registerCss('.container{background: #ccc}')?>

<button class="btn btn-success" id="btn"> Click me...</button>

<?php 
 $js = <<<JS
  $('#btn').on('click', function() {
      $.ajax({
        url: 'index.php?r=post/index',
        data: {test: '123'},
        type: 'POST',
        success: function(res) {
            console.log(res);
        },
        error: function(e) {
            console.log(e);
        }
      });
   });

JS;
 
$this->registerJs($js);



