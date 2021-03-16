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
        <div class="form-group">
            <label for="tel">Telefone</label>
            <input type="tel" name="tel" class="form-control" id="tel" placeholder="Seu telefone" >
        </div>
        <button type="submit" value="enviar" class="btn btn-primary">Enviar</button>
        <button type="reset" value="limpar" class="btn btn-danger">Limpar</button>
    </form>

</div>