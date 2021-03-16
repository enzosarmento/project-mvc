<div class="container">
    <div class="">
        <h3>Cadastro</h3>
    </div>

    <form action="?router=Site/cadastro/" method="post">
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Seu nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Seu email">
        </div>
        <input type="submit" value="Enviar" class="btn btn-primary">
        <input type="reset" value="Limpar" class="btn btn-danger">
    </form>

</div>