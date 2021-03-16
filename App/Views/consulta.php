<div class="container">
    <div class="">
        <h3>Consultas</h3>
    </div>

    <div>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $registro): ?>

                    <tr>
                        <td>
                            <?php echo $registro['name'] ?>
                        </td>
                        <td>
                            <?php echo $registro['email'] ?>
                        </td>
                        <td>
                            <a class="btn btn-outline-primary" href="?router=Site/editar/&id=<?php echo base64_encode($registro['id']); ?>">Editar</a> 
                            <a class="btn btn-danger" href="?router=Site/confirmaDelete/&id=<?php echo base64_encode($registro['id']); ?>">Deletar</a>
                        </td>
                    </tr>    

                <?php endforeach; ?>
            </tbody>
        </table>

        

    </div>
</div>