<?php  
    //$this->title = 'Одна статья';
    //$this->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики....']);
    //$this->registerMetaTag(['name' => 'description', 'content' => 'описание страницы....']);
?>

<?php $this->beginBlock('block1'); ?>
    <h1>Заголовок страницы</h1>
<?php $this->endBlock(); ?>

<h1>Show Action</h1>

<?php// foreach($cats as $cat) {
//     echo $cat->title. '<br>';
// } 
?>


<?php //ЛЕНИВАЯ ЗАГРУЗКА ?>
<?php //debug($cats); ?>
<?php //echo count($cats->products); // обращение к связанной модели во время ленивой загрузки?>
<?php //debug($cats); ?>


<?php //ЖАДНАЯ ЗАГРУЗКА?>
<?php 
foreach($cats as $cat){
    echo '<ul>';
        echo '<li>' . $cat->title . '</li>';
        $products = $cat->products;
        foreach($products as $product){
            echo '<ul>';
                echo '<li>' . $product->title . '</li>';
            echo '</ul>';
        }
    echo '</ul>';
}
?>




<button class="btn btn-success" id="btn">Click me...</button>

<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']) ?>
<?php //$this->registerJs("$('.container').append('<p>SHOW!!!</p>');", \yii\web\View::POS_LOAD)  ?>

<?php //$this->registerCss('.container{background: #ccc;}') ?>

<?php 

$js = <<<JS
    $('#btn').on('click', function(){
        $.ajax({
            url: 'index.php?r=post/index',
            data: {test: '123'},
            type: 'POST',
            success: function(res){
                console.log(res);
            },
            error: function(){
                alert('Error!');
            }
        });
    });
JS;

$this->registerJs($js);

?>
