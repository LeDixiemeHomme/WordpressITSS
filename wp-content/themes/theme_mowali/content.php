<?php

$id = get_the_ID();

echo $id;

if($id)
{?>
      <div class="article<?=$id?>">
       <?php the_content(); ?> 
</div> <?php
}
else
{
    echo "erreur";
}