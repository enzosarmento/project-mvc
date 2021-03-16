<div class="container">
    <div class="">
        <h3>Edição de Registros</h3>
    </div>

    <div>


        <form action="?router=Site/alterar/" method="post">
            <?php foreach($editarForm as $registro): ?>
                <input type="hidden" name="id" value="<?php echo $registro['id'] ?>">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" name="name" value="<?php echo $registro['name'] ?>" class="form-control" id="name" placeholder="Seu nome" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="<?php echo $registro['email'] ?>" class="form-control" id="email" placeholder="Seu email">
                </div>
                <input type="submit" value="Salvar Alterações" class="btn btn-primary">

            <?php endforeach ?>

        </form>        
    </div>

</div>    