<div class="container">
    <?= \Config\Services::validation()->listErrors('errors') ?>
    <form action="/contatos/<?= esc($contatos['id']) ?>" method="post" class="needs-validation">
        <?= csrf_field() ?>

        <div class="row g-3">
            <div class="col-sm-6">    
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="<?= esc($contatos['nome']) ?>">
            </div>

            <div class="col-sm-6">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="" value="<?= esc($contatos['sobrenome']) ?>">
            </div>
            
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="" value="<?= esc($contatos['email']) ?>">
            </div>
            
            <div class="col-sm-6">    
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="" value="<?= esc($contatos['telefone']) ?>">
            </div>

            <div class="col-sm-6">
                <label for="ra" class="form-label">RA</label>
                <input type="number" class="form-control" id="ra" name="ra" placeholder="" value="<?= esc($contatos['ra']) ?>">
            </div>
            
            <hr class="mt-4">
            <input type="submit" name="submit" class="w-100 btn btn-success btn-lg" value="Editar Contato" />
        </div>
    </form>
</div>