<?php if (! empty($contatos) && is_array($contatos)) : ?>

    <div class="sticky">
        <div class="container">
            <a role="button" type="button" href="/contatos/create" class="w-100">
                <div  class="w-100 btn btn-danger btn-lg text-white"> 
                    Novo Contato
                </div>
            </a>
        </div>
    </div>
    <div class="container">
        <?php
            $current = '';
            foreach ($contatos as $contato) {
                if (!$current || strtolower($contato['nome'][0]) != $current) {
                    if ($current) echo '</div>';
                    $current = strtolower($contato['nome'][0]);
                    echo '<div class="row mt-4 mb-2 border-bottom"><div class="col-12"><span class="fs-4">'.strtoupper($current).'</span></div></div>';
                    echo '<div class="row">';
                }
                echo '<div class="col-xl-3 col-md-4 col-sm-6">';
                echo '<div class="card text-dark bg-light mb-3">' ;
                echo '<a href="/contatos/'.$contato['id'].'" style="text-decoration: none;">';
                echo '<div class="card-body">'; 
                echo '<h5 class="card-title">'.$contato['nome'].' '.$contato['sobrenome'].'</h5>';
                if ($contato['ra']) echo '<p class="card-text">RA: '.$contato['ra'].'</p>';
                echo '</div>'; 
                echo '</a>';
                echo '</div>'; 
                echo '</div>'; 
            }
            

        ?>
    </div>

<?php else : ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>