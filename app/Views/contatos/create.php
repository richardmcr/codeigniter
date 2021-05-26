<div class="container">
    <?= \Config\Services::validation()->listErrors('errors') ?>
    <form action="/contatos/create" method="post" class="needs-validation">
        <?= csrf_field() ?>

        <div class="row g-3">
            <div class="col-sm-6">    
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="" value="">
            </div>

            <div class="col-sm-6">
                <label for="sobrenome" class="form-label">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" name="sobrenome" placeholder="" value="">
            </div>
            
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="" value="">
            </div>
            
            <div class="col-sm-6">    
                <label for="telefone" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="" value="">
            </div>

            <div class="col-sm-6">
                <label for="ra" class="form-label">RA</label>
                <input type="number" class="form-control" id="ra" name="ra" placeholder="" value="">
            </div>
            
            <hr class="mt-4">
            <input type="submit" name="submit" class="w-100 btn btn-primary btn-lg" value="Cadastrar Contato" />
        </div>
    </form>
</div>