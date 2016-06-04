<h1>Новини</h1>
<? foreach($this->posts as $value){?>
    <article>
        <header><h3><?=$value['title']?></h3></header>
        <section>
            <p><?=$value['post']?></p><div class="data"><?=$value['ctime']?></div><hr>
        </section>
    </article>
<?}?>